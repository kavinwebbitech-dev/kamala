{{-- =========================================
resources/views/admin/portfolio-category/create.blade.php
========================================= --}}

@extends('admin.layouts.app')

@section('title', 'Create Portfolio Category')

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
                Create
            </li>

        </ol>

    </nav>

    <div class="card-custom">

        <h4 class="mb-4">Create Portfolio Category</h4>

        <form id="PortfolioCategoryForm"
            action="{{ route('portfolio-category.store') }}"
            method="POST">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Name
                    </label>

                    <input type="text"
                        name="name"
                        class="form-control">

                </div>

                <div class="col-md-3 mb-3">

                    <label class="form-label">
                        Priority
                    </label>

                    <input type="number"
                        name="priority"
                        value="1"
                        class="form-control">

                </div>

                <div class="col-md-3 mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <select name="status"
                        class="form-control">

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

            <button type="submit"
                class="btn btn-primary">

                Submit

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