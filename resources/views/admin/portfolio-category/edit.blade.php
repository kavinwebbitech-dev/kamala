{{-- =========================================
resources/views/admin/portfolio-category/edit.blade.php
========================================= --}}

@extends('admin.layouts.app')

@section('title', 'Edit Portfolio Category')

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
                <a href="{{ route('portfolio-category.index') }}">
                    Portfolio Categories
                </a>
            </li>

            <li class="breadcrumb-item active">
                Edit
            </li>

        </ol>

    </nav>

    <div class="card-custom">

        <h4 class="mb-4">Edit Portfolio Category</h4>

        <form id="PortfolioCategoryForm"
            action="{{ route('portfolio-category.update',$category->id) }}"
            method="POST">

            @csrf

            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Name
                    </label>

                    <input type="text"
                        name="name"
                        value="{{ $category->name }}"
                        class="form-control">

                </div>

                <div class="col-md-3 mb-3">

                    <label class="form-label">
                        Priority
                    </label>

                    <input type="number"
                        name="priority"
                        value="{{ $category->priority }}"
                        class="form-control">

                </div>

                <div class="col-md-3 mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <select name="status"
                        class="form-control">

                        <option value="1"
                            {{ $category->status == 1 ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="0"
                            {{ $category->status == 0 ? 'selected' : '' }}>
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

    $('#PortfolioCategoryForm').validate({

        rules: {

            name: {
                required: true,
                minlength: 3
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

            name: {
                required: "Category name is required",
                minlength: "Minimum 3 characters required"
            },

            priority: {
                required: "Priority is required",
                digits: "Only numbers allowed",
                min: "Priority must be greater than 0"
            },

            status: {
                required: "Please select category status"
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