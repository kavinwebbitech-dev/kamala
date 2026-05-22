<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Portfolio::with('category')->latest();

            return DataTables::of($data)

                ->addIndexColumn()

                ->editColumn('image', function ($row) {

                    return '
                        <img src="'.asset($row->image).'"
                        width="60"
                        height="60"
                        style="border-radius:10px;object-fit:cover;">
                    ';
                })

                ->addColumn('category', function ($row) {

                    return $row->category->name ?? '';
                })

                ->editColumn('status', function ($row) {

                    return $row->status
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })

                ->editColumn('created_at', function ($row) {

                    return $row->created_at->format('Y-m-d');
                })

                ->addColumn('action', function ($row) {

                    return '
                        <div class="d-flex gap-1">

                            <a href="'.route('portfolio.edit',$row->id).'"
                            class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>

                            <button
                            data-id="'.$row->id.'"
                            data-route="'.route('portfolio.destroy',$row->id).'"
                            class="btn btn-danger btn-sm delete">
                                <i class="fa fa-trash"></i>
                            </button>

                        </div>
                    ';
                })

                ->rawColumns(['image','status','action'])
                ->make(true);
        }

        return view('admin.portfolio.index');
    }

    public function create()
    {
        $categories = PortfolioCategory::where('status',1)->get();

        return view('admin.portfolio.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'portfolio_category_id' => 'required',

            'title' => 'required',

            'description' => 'required',

            'image' => 'required|image',

            'priority' => 'required',

            'status' => 'required',
        ]);

        $image = '';

        if($request->hasFile('image')){

            $file = $request->file('image');

            $name = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('uploads/portfolio'),$name);

            $image = 'uploads/portfolio/'.$name;
        }

        Portfolio::create([

            'portfolio_category_id' => $request->portfolio_category_id,

            'title' => $request->title,

            'description' => $request->description,

            'image' => $image,

            'priority' => $request->priority,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('portfolio.index')
            ->with('success','Portfolio Created');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $categories = PortfolioCategory::where('status',1)->get();

        return view('admin.portfolio.edit',compact('portfolio','categories'));
    }

    public function update(Request $request,$id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([

            'portfolio_category_id' => 'required',

            'title' => 'required',

            'description' => 'required',

            'priority' => 'required',

            'status' => 'required',
        ]);

        $image = $portfolio->image;

        if($request->hasFile('image')){

            if(File::exists(public_path($portfolio->image))){
                File::delete(public_path($portfolio->image));
            }

            $file = $request->file('image');

            $name = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('uploads/portfolio'),$name);

            $image = 'uploads/portfolio/'.$name;
        }

        $portfolio->update([

            'portfolio_category_id' => $request->portfolio_category_id,

            'title' => $request->title,

            'description' => $request->description,

            'image' => $image,

            'priority' => $request->priority,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('portfolio.index')
            ->with('success','Portfolio Updated');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        if(File::exists(public_path($portfolio->image))){
            File::delete(public_path($portfolio->image));
        }

        $portfolio->delete();

        return response()->json([
            'status' => true
        ]);
    }
}