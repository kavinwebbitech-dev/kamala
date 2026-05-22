{{-- =========================================
resources/views/admin/portfolio/edit.blade.php
========================================= --}}

@extends('admin.layouts.app')

@section('title', 'Edit Portfolio')

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
                Edit
            </li>

        </ol>

    </nav>

    <div class="card-custom">

        <h4 class="mb-4">Edit Portfolio</h4>

        <form id="PortfolioForm"
            action="{{ route('portfolio.update',$portfolio->id) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            @method('PUT')

            <input type="hidden"
                id="portfolio_id"
                value="{{ $portfolio->id }}">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Category
                    </label>

                    <select name="portfolio_category_id"
                        class="form-control">

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                {{ $portfolio->portfolio_category_id == $category->id ? 'selected' : '' }}>

                                {{ $category->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Title
                    </label>

                    <input type="text"
                        name="title"
                        value="{{ $portfolio->title }}"
                        class="form-control">

                </div>

                <div class="col-md-12 mb-3">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea name="description"
                        rows="5"
                        class="form-control">{{ $portfolio->description }}</textarea>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Image
                    </label>

                    <input type="file"
                        name="image"
                        class="form-control">

                    <img src="{{ asset($portfolio->image) }}"
                        class="mt-2 rounded"
                        width="100">
                </div>

                <div class="col-md-3 mb-3">

                    <label class="form-label">
                        Priority
                    </label>

                    <input type="number"
                        name="priority"
                        value="{{ $portfolio->priority }}"
                        class="form-control">

                </div>

                <div class="col-md-3 mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <select name="status"
                        class="form-control">

                        <option value="1"
                            {{ $portfolio->status == 1 ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="0"
                            {{ $portfolio->status == 0 ? 'selected' : '' }}>
                            Inactive
                        </option>

                    </select>

                </div>

            </div>

            <button type="submit"
                class="btn btn-primary">

                Update

            </button>

        </form>

    </div>

</div>

@endsection

@section('scripts')

<script>

$(document).ready(function () {

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
                extension: "jpg|jpeg|png|webp"
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
                extension: "Only JPG, JPEG, PNG, WEBP allowed"
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

        highlight: function (element) {

            $(element).addClass('is-invalid');

        },

        unhighlight: function (element) {

            $(element).removeClass('is-invalid');

        },

        submitHandler: function (form) {

            form.submit();

        }
    });

});

</script>

@endsection