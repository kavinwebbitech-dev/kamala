{{-- =========================================
resources/views/admin/portfolio/create.blade.php
========================================= --}}

@extends('admin.layouts.app')

@section('title', 'Create Portfolio')

@section('content')

    <div class="main">

        <nav aria-label="breadcrumb" class="mb-4">

            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}">
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="{{ route('portfolio.index') }}">
                        Portfolio
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    Create
                </li>

            </ol>

        </nav>

        <div class="card-custom">

            <h4 class="mb-4">Create Portfolio</h4>

            <form id="PortfolioForm" action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Category
                        </label>

                        <select name="portfolio_category_id" class="form-control">

                            <option value="">
                                Select Category
                            </option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">

                                    {{ $category->name }}

                                </option>
                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Title
                        </label>

                        <input type="text" name="title" class="form-control">

                    </div>

                    <div class="col-md-12 mb-3">

                        <label class="form-label">
                            Description
                        </label>

                        <textarea name="description" rows="5" class="form-control"></textarea>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Image
                        </label>

                        <input type="file" name="image" class="form-control">

                    </div>

                    <div class="col-md-3 mb-3">

                        <label class="form-label">
                            Priority
                        </label>

                        <input type="number" name="priority" value="1" class="form-control">

                    </div>

                    <div class="col-md-3 mb-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select name="status" class="form-control">

                            <option value="">
                                Select Status
                            </option>

                            <option value="1">
                                Active
                            </option>

                            <option value="0">
                                Inactive
                            </option>

                        </select>

                    </div>

                </div>

                <button type="submit" class="btn btn-primary">

                    create

                </button>

            </form>

        </div>

    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {

            // ================= FILE SIZE VALIDATION =================

            $.validator.addMethod(

                "filesize",

                function(value, element, param) {

                    if (element.files.length == 0) {
                        return true;
                    }

                    return element.files[0].size <= param;

                },

                "File size must be less than 2 MB"

            );

            // ================= FORM VALIDATION =================

            $('#PortfolioForm').validate({

                ignore: [],

                rules: {

                    portfolio_category_id: {
                        required: true
                    },

                    title: {
                        required: true,
                        minlength: 3
                    },

                    description: {
                        required: true,
                        minlength: 10
                    },

                    image: {
                        required: true,
                        extension: "jpg|jpeg|png|webp",
                        filesize: 2097152 // 2MB
                    },

                    priority: {
                        required: true,
                        digits: true,
                        min: 1
                    },

                    status: {
                        required: true
                    }
                },

                messages: {

                    portfolio_category_id: {
                        required: "Please select category"
                    },

                    title: {
                        required: "Portfolio title is required",
                        minlength: "Minimum 3 characters required"
                    },

                    description: {
                        required: "Description is required",
                        minlength: "Minimum 10 characters required"
                    },

                    image: {
                        required: "Portfolio image is required",
                        extension: "Only JPG, JPEG, PNG, WEBP allowed",
                        filesize: "Image size must be less than 2 MB"
                    },

                    priority: {
                        required: "Priority is required",
                        digits: "Only numbers allowed",
                        min: "Priority must be greater than 0"
                    },

                    status: {
                        required: "Please select portfolio status"
                    }
                },

                errorElement: 'span',

                errorClass: 'text-danger small',

                highlight: function(element) {

                    $(element).addClass('is-invalid');

                },

                unhighlight: function(element) {

                    $(element).removeClass('is-invalid');

                },

                submitHandler: function(form) {

                    form.submit();

                }
            });

        });
    </script>

@endsection
