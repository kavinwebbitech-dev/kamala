<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pages = Review::latest();

            return DataTables::of($pages)
                ->addIndexColumn()
                ->filter(function ($query) {
                    if (request()->has('search') && $search = request('search')['value']) {
                        $query->where(function ($q) use ($search) {
                            $q->Where('category', 'like', "%{$search}%")
                            ->orWhere('name', 'like', "%{$search}%")
                            ->orWhere('rating', 'like', "%{$search}%")
                            ->orWhere('message', 'like', "%{$search}%")
                            ->orWhere('sector', 'like', "%{$search}%")
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
                ->editColumn('message', function ($row) {
                    $original = $row->message ?? '';
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
                            <a href="javascript:void(0);" data-title="Edit Review" data-size="modal-lg"
                            data-route="'. route('review.edit',$row->id) .'" class="btn btn-sm btn-primary common_model" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button data-id="'.$row->id.'"
                                data-table-id="review"
                                data-route="'.route('review.destory', $row->id).'" 
                                class="btn btn-sm btn-danger delete" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    ';
                })
                ->rawColumns(['status','action','created_at','message'])
                ->make(true);
        }
        return view('admin.reviews.index');
    }

    public function create()
    {
        $html = view('admin.reviews.create')->render();

        return response()->json([
            'html' => $html
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'rating'   => 'required|integer|min:1|max:5',
            'sector'   => 'required|string|max:255',
            'message'  => [
                'required',
                'min:3',
                'max:700',
                'not_regex:/<[^>]*>/'
            ],
            'status'   => 'required|boolean',
        ]);

        Review::create($validated);

        storeNotification(
            'New Review Added',
            'A new review has been created',
            'review',
            1
        );

        return redirect()
            ->route('review.index')
            ->with('success', 'Review added successfully!');
    }

    public function edit($id)
    {
        $review = Review::find($id);

        if (!$review) {
            return response()->json([
                'success' => false,
                'error'   => 'Review not found'
            ]);
        }

        $html = view('admin.reviews.edit', compact('review'))->render();

        return response()->json([
            'success' => true,
            'html'    => $html
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'rating'   => 'required|integer|min:1|max:5',
            'sector'   => 'required|string|max:255',
            'message'  => [
                'required',
                'min:3',
                'max:700',
                'not_regex:/<[^>]*>/'
            ],
            'status'   => 'required|boolean',
        ]);

        $review = Review::findOrFail($id);
        $review->update($validated);

        return redirect()
            ->route('review.index')
            ->with('success', 'Review updated successfully!');
    }

    public function destroy($id)
    {
        $service = Review::findOrFail($id);

        if ($service->image) {
            $imagePath = public_path($service->image);

            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $service->delete();
        storeNotification(
            'Some Review Deleted '.$service->name,
            'You have received a new Review Deleted',
            'service',
            1
        );
        return response()->json([
            'status' => true,
            'message' => 'Review deleted successfully',
        ]);
    }
}
