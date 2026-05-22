<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class PortfolioCategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = PortfolioCategory::latest();

            return DataTables::of($data)

                ->addIndexColumn()

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

                            <a href="'.route('portfolio-category.edit',$row->id).'"
                            class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>

                            <button
                            data-id="'.$row->id.'"
                            data-route="'.route('portfolio-category.destroy',$row->id).'"
                            class="btn btn-danger btn-sm delete">
                                <i class="fa fa-trash"></i>
                            </button>

                        </div>
                    ';
                })

                ->rawColumns(['status','action'])
                ->make(true);
        }

        return view('admin.portfolio-category.index');
    }

    public function create()
    {
        return view('admin.portfolio-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'priority' => 'required',

            'status' => 'required',
        ]);

        PortfolioCategory::create([

            'name' => $request->name,

            'slug' => Str::slug($request->name),

            'priority' => $request->priority,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('portfolio-category.index')
            ->with('success','Category Created');
    }

    public function edit($id)
    {
        $category = PortfolioCategory::findOrFail($id);

        return view('admin.portfolio-category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category = PortfolioCategory::findOrFail($id);

        $request->validate([

            'name' => 'required',

            'priority' => 'required',

            'status' => 'required',
        ]);

        $category->update([

            'name' => $request->name,

            'slug' => Str::slug($request->name),

            'priority' => $request->priority,

            'status' => $request->status,
        ]);

        return redirect()
            ->route('portfolio-category.index')
            ->with('success','Category Updated');
    }

    public function destroy($id)
    {
        PortfolioCategory::findOrFail($id)->delete();

        return response()->json([
            'status' => true
        ]);
    }
}
