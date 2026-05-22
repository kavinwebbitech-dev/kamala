@extends('admin.layouts.app')
@section('title', 'Reviews | ' . config('app.name'))
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
            <li class="breadcrumb-item active" aria-current="page">Reviews List</li>
        </ol>
    </nav>

    <!-- Card for Table -->
    <div class="card-custom">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Reviews List</h4>
            <a href="javascript:void(0);" data-title="Add Reviews" data-size="modal-lg"
                data-route="{{ route('review.create') }}"class="btn btn-success common_model">Add Review</a>
        </div>

        <div class="table-responsive" style="overflow-x: auto;">
            <table class="table table-bordered table-striped no-wrap" id="review" style="min-width: 1000px;">
                <thead class="text-nowrap">
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Rating</th>
                        <th>Message</th>
                        <th>Category</th>
                        <th>Sector</th>
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
    var table = $('#review').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('review.index') }}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'category', name: 'category' },
            { data: 'rating', name: 'rating' },
            { data: 'message', name: 'message' },
            { data: 'sector', name: 'sector' },
            { data: 'status', name: 'status', orderable: false, searchable: false },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
});
</script>
@endsection
