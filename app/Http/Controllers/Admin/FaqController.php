<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pages = Faq::latest();

            return DataTables::of($pages)
                ->addIndexColumn()
                ->filter(function ($query) {
                    if (request()->has('search') && $search = request('search')['value']) {
                        $query->where(function ($q) use ($search) {
                            $q->Where('question', 'like', "%{$search}%")
                            ->orWhere('answer', 'like', "%{$search}%")
                            ->orWhere('status', 'like', "%{$search}%")
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
                ->editColumn('question', function ($row) {
                    $original = $row->question ?? '';
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
                ->editColumn('answer', function ($row) {
                    $original = $row->answer ?? '';
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
                            <a href="javascript:void(0);" data-title="Add/Edit Faq" data-size="modal-lg"
                            data-route="'. route('faq.edit',$row->id) .'" class="btn btn-sm btn-primary common_model" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                        </div>
                    ';
                })
                ->rawColumns(['status','action','created_at','answer','question'])
                ->make(true);
        }
        return view('admin.faqs.index');
    }

    // public function create()
    // {
    //     $html = view('admin.faqs.edit')->render();

    //     return response()->json([
    //         'html' => $html
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'questions'                => 'required|array|min:1',
    //         'questions.*.question'     => 'required|string|max:255',
    //         'questions.*.answer'       => 'required|string',
    //         'questions.*.status'       => 'required|in:0,1',
    //     ]);

    //     DB::beginTransaction();

    //     try {

    //         foreach ($validated['questions'] as $row) {
    //             if (empty($row['question']) || empty($row['answer'])) {
    //                 continue;
    //             }

    //             Faq::create([
    //                 'question' => $row['question'],
    //                 'answer'   => $row['answer'],
    //                 'status'   => $row['status'],
    //             ]);
    //         }

    //         DB::commit();

    //         return redirect()
    //             ->route('faq.index')
    //             ->with('success', 'FAQ questions added successfully');

    //     } catch (\Exception $e) {

    //         DB::rollBack();

    //         return back()
    //             ->withInput()
    //             ->with('error', 'Something went wrong. Please try again.');
    //     }
    // }

    public function edit()
    {
        $faqs = Faq::get();

        if (!$faqs) {
            return response()->json([
                'success' => false,
                'message' => 'FAQ not found'
            ]);
        }

        $html = view('admin.faqs.edit', compact('faqs'))->render();

        return response()->json([
            'success' => true,
            'html'    => $html
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'questions'                 => 'required|array|min:1',
            'questions.*.question'      => 'required|string|max:255',
            'questions.*.answer'        => 'required|string',
            'questions.*.status'        => 'required|in:0,1',
            'questions.*.id'            => 'nullable|exists:faqs,id',
        ]);

        DB::beginTransaction();

        try {

            $existingIds = Faq::pluck('id')->toArray();
            $submittedIds = [];

            foreach ($request->questions as $q) {

                if (!empty($q['id'])) {
                    $faq = Faq::find($q['id']);

                    $faq->update([
                        'question' => $q['question'],
                        'answer'   => $q['answer'],
                        'status'   => $q['status'],
                    ]);

                    $submittedIds[] = $q['id'];

                } 
               
                else {
                    $newFaq = Faq::create([
                        'question' => $q['question'],
                        'answer'   => $q['answer'],
                        'status'   => $q['status'],
                    ]);

                    $submittedIds[] = $newFaq->id;
                }
            }

            $toDelete = array_diff($existingIds, $submittedIds);
            if (!empty($toDelete)) {
                Faq::whereIn('id', $toDelete)->delete();
            }

            DB::commit();

            return redirect()
                ->route('faq.index')
                ->with('success', 'FAQ updated successfully');

        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            Faq::findOrFail($id)->delete();

            DB::commit();

            return response()->json([
                'status'  => true,
                'message' => 'FAQ deleted successfully'
            ]);

        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json([
                'status'  => false,
                'message' => 'Delete failed'
            ], 500);
        }
    }
}
