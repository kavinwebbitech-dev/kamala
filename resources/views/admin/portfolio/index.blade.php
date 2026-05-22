{{-- =========================================
resources/views/admin/portfolio/index.blade.php
========================================= --}}

@extends('admin.layouts.app')

@section('title', 'Portfolio | ' . config('app.name'))

@section('content')

<style>
    #portfolio-table {
        font-size: 13.5px;
    }

    #portfolio-table th {
        padding: 10px 12px;
    }

    #portfolio-table td {
        padding: 8px 12px;
    }

    .portfolio-img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 10px;
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
                Portfolio
            </li>

        </ol>

    </nav>

    <!-- Card -->

    <div class="card-custom">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h4>Portfolio List</h4>

            <a href="{{ route('portfolio.create') }}"
                class="btn btn-success">

                Add Portfolio

            </a>

        </div>

        <div class="table-responsive">

            <table class="table table-bordered table-striped"
                id="portfolio-table">

                <thead>

                    <tr>

                        <th>Image</th>

                        <th>Title</th>

                        <th>Category</th>

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

    $('#portfolio-table').DataTable({

        processing: true,

        serverSide: true,

        ajax: '{{ route('portfolio.index') }}',

        columns: [

            {
                data: 'image',
                name: 'image',
                orderable: false,
                searchable: false
            },

            {
                data: 'title',
                name: 'title'
            },

            {
                data: 'category',
                name: 'category.name'
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