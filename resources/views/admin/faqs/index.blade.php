@extends('admin.layouts.app')
@section('title', 'FAQS | ' . config('app.name'))
@section('content')
<style>
    #pages-table {
        font-size: 13.5px;
    }

    #pages-table th {
        padding: 10px 12px;
    }

    #pages-table td {
        padding: 8px 12px;
    }

    dialog {
        border: none;
        padding: 0;
        width: 350px;
        border-radius: .5rem;
        opacity: 0;
        transform: scale(0.8);
        transition: all .25s ease;
    }

    dialog[open] {
        opacity: 1;
        transform: scale(1);
    }

    dialog::backdrop {
        background: rgba(0,0,0,.35);
        animation: fadeIn .25s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>

<div class="main">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQS List</li>
        </ol>
    </nav>

    <!-- Card for Table -->
    <div class="card-custom">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>FAQS List</h4>
            <a href="javascript:void(0);" data-title="Add/Edit Faq" data-size="modal-lg"
                data-route="{{ route('faq.edit') }}"class="btn btn-success common_model">Add/Edit Faqs</a>
        </div>

        <div class="table-responsive" style="overflow-x: auto;">
            <table class="table table-bordered table-striped no-wrap" id="faq" style="min-width: 1000px;">
                <thead class="text-nowrap">
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        $(function() {
            // Initialize DataTable
            var table = $('#faq').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('faq.index') }}',
                columns: [
                    { data: 'question', name: 'question' },
                    { data: 'answer', name: 'answer' },
                    { data: 'status', name: 'status', orderable: false, searchable: false },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });
        });
    </script>
@endsection
