{{-- =========================================
resources/views/admin/portfolio-category/index.blade.php
========================================= --}}

@extends('admin.layouts.app')

@section('title', 'Portfolio Categories | ' . config('app.name'))

@section('content')

<style>
    #category-table {
        font-size: 13.5px;
    }

    #category-table th {
        padding: 10px 12px;
    }

    #category-table td {
        padding: 8px 12px;
    }
</style>

<div class="main">

    <!-- Breadcrumb -->

    <nav aria-label="breadcrumb" class="mb-4">

        <ol class="breadcrumb">

            <li class="breadcrumb-item">
                <a href="{{ route('admin.index') }}">
                    Dashboard
                </a>
            </li>

            <li class="breadcrumb-item active">
                Portfolio Categories
            </li>

        </ol>

    </nav>

    <!-- Card -->

    <div class="card-custom">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h4>Portfolio Categories</h4>

            <a href="{{ route('portfolio-category.create') }}"
                class="btn btn-success">

                Add Category

            </a>

        </div>

        <div class="table-responsive">

            <table class="table table-bordered table-striped"
                id="category-table">

                <thead>

                    <tr>
                        <th>S.No</th>      

                        <th>Name</th>

                        <th>Slug</th>

                        <th>Priority</th>

                        <th>Status</th>

                        <th>Created At</th>

                        <th>Action</th>

                    </tr>

                </thead>

            </table>

        </div>

    </div>

</div>

@endsection

@section('scripts')

<script>

$(function () {

    $('#category-table').DataTable({

        processing: true,

        serverSide: true,

        ajax: '{{ route('portfolio-category.index') }}',

        columns: [

            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'name',
                name: 'name'
            },

            {
                data: 'slug',
                name: 'slug'
            },

            {
                data: 'priority',
                name: 'priority'
            },

            {
                data: 'status',
                name: 'status',
                orderable: false,
                searchable: false
            },

            {
                data: 'created_at',
                name: 'created_at'
            },

            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

});

</script>

@endsection