<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pages = Blog::latest();

            return DataTables::of($pages)
                ->addIndexColumn()
                ->filter(function ($query) {
                    if (request()->has('search') && $search = request('search')['value']) {
                        $query->where(function ($q) use ($search) {
                            $q->Where('title', 'like', "%{$search}%")
                            ->orWhere('description', 'like', "%{$search}%")
                            ->orWhere('meta_keyword', 'like', "%{$search}%")
                            ->orWhere('meta_title', 'like', "%{$search}%")
                            ->orWhere('meta_description', 'like', "%{$search}%")
                            ->orWhere('created_at', 'like', "%{$search}%");
                        });
                    }
                })
                ->editColumn('status', function ($row) {
                    return $row->status
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d H:i:s');
                })
                ->editColumn('image', function ($row) {
                    if (!$row->image) {
                        return '-';
                    }

                    $url = asset($row->image);

                    return '<img src="'.$url.'" 
                        style="width:50px;height:50px;object-fit:cover;border-radius:50%;border:1px solid #ddd;">';
                })

                ->editColumn('description', function ($row) {
                    $original = $row->description ?? '';
                    $limit = 30;
                    $short = \Illuminate\Support\Str::limit($original, $limit);
                    if (strlen($original) <= $limit) {
                        return '<span>'.e($original).'</span>';
                    }
                    return '
                        <span>'.e($short).'</span>
                        <a href="javascript:void(0)"
                        class="text-primary viewMessage ms-1"
                        data-message="'.e($original).'">
                            <i class="fa fa-eye"></i>
                        </a>';
                })
                ->addColumn('action', function ($row) {
                    return '
                        <div class="d-flex gap-1">
                            <a href="'.route('blog.edit', $row->id).'" class="btn btn-sm btn-primary" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button data-id="'.$row->id.'"
                                data-table-id="blog-table"
                                data-route="'.route('blog.destory', $row->id).'" 
                                class="btn btn-sm btn-danger delete" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    ';
                })
                ->rawColumns(['status','action','created_at','description','image'])
                ->make(true);
        }
        return view('admin.blogs.index');
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'meta_title'    => 'required|string|max:255',
            'meta_description' => 'required|string|max:1000',
            'meta_keywords' => 'required|string|max:255',
            'description'   => 'required|string',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'        => 'required|boolean',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $filename = time().'_'.$image->getClientOriginalName();
            $destination = public_path('backend/uploads/blogs');

            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }

            $image->move($destination, $filename);
            $imagePath = 'backend/uploads/blogs/' . $filename;
        }

        Blog::create([
            'title'        => $request->title,
            'slug'         => $request->slug,
            'description'    => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keywords,
            'image'        => $imagePath,
            'status'       => $request->status,
        ]);
        storeNotification(
            'New Blog Created',
            'You have received a new Blog create',
            'blog',
            1
        );
        return redirect()
            ->route('blog.index')
            ->with('success', 'Blog created successfully');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $request->validate([
            'title'         => 'required|string|max:255',
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('blogs', 'slug')->ignore($blog->id),
            ],
            'meta_title'    => 'required|string|max:255',
            'meta_description' => 'required|string|max:1000',
            'meta_keywords' => 'required|string|max:255',
            'description'   => 'required|string',
            // 'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'        => 'required|boolean',
        ]);
        
        $imagePath = null;
        if ($request->hasFile('image')) {

            if ($blog->image) {
                $imagePath = public_path($blog->image);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $image = $request->file('image');
            $filename = time().'_'.$image->getClientOriginalName();
            $destination = public_path('backend/uploads/blogs');

            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }

            $image->move($destination, $filename);
            $imagePath = 'backend/uploads/blogs/' . $filename;
            $blog->image = $imagePath;
        }

        $blog->update([
            'title'        => $request->title,
            'slug'         => $request->slug,
            'description'    => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keywords,
            // 'image'        => $imagePath,
            'status'       => $request->status,
        ]);
        storeNotification(
            'New Blog Updated',
            'You have received a new Blog Updated',
            'blog',
            1
        );
        return redirect()
            ->route('blog.index')
            ->with('success', 'Blog updated successfully');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image) {
            $imagePath = public_path($blog->image);

            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $blog->delete();
        storeNotification(
            'Some Blog Deleted '.$blog->title,
            'You have received a new Blog Delete update',
            'blog',
            1
        );
        return response()->json([
            'status' => true,
            'message' => 'Blog deleted successfully',
        ]);
    }
}
