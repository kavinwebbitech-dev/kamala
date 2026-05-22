@extends('admin.layouts.app')

@section('content')
    <style>
        .banner-editor .ck-editor__editable {
            min-height: 400px;
        }

        .page-editor .ck-editor__editable {
            min-height: 400px;
        }
    </style>

    <div class="main">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blogs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
            </ol>
        </nav>

        <div class="card-custom">
            <h4 class="mb-4">Create New Blog</h4>

            <form method="POST" id="blogForm" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                @csrf


                <div class="row mb-3">
                    <div class="col-md-12">
                        <label class="form-label">Blog Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Slug <span class="text-danger">*</span></label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
                            value="{{ old('slug') }}">
                        @error('slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Blog Image <span class="text-danger">*</span></label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12 banner-editor">
                        <label class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                            rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Meta Title <span class="text-danger">*</span></label>
                        <input type="text" name="meta_title"
                            class="form-control @error('meta_title') is-invalid @enderror" value="{{ old('meta_title') }}">
                        @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Meta Description <span class="text-danger">*</span></label>
                        <input type="text" name="meta_description"
                            class="form-control @error('meta_description') is-invalid @enderror"
                            value="{{ old('meta_description') }}">
                        @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Meta Keywords <span class="text-danger">*</span></label>
                        <input type="text" name="meta_keywords"
                            class="form-control @error('meta_keywords') is-invalid @enderror"
                            value="{{ old('meta_keywords') }}">
                        @error('meta_keywords')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" class="form-select @error('status') is-invalid @enderror">
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Create Blog</button>

            </form>
        </div>

    </div>
@endsection

<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/48.1.0/ckeditor5.css">

@section('scripts')
    <script>
        function MyUploadAdapter(loader) {
            this.loader = loader;
        }

        MyUploadAdapter.prototype.upload = function() {
            return this.loader.file.then(file => {
                return new Promise((resolve, reject) => {

                    const reader = new FileReader();

                    reader.onload = () => {
                        resolve({
                            default: reader.result
                        });
                    };

                    reader.onerror = error => reject(error);
                    reader.readAsDataURL(file);
                });
            });
        };

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }
        let descriptionEditor;

        ClassicEditor
            .create(document.querySelector('#description'), {

                extraPlugins: [MyCustomUploadAdapterPlugin],

                toolbar: {
                    items: [
                        'heading', '|',

                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        'subscript',
                        'superscript',
                        '|',

                        'fontSize',
                        'fontFamily',
                        'fontColor',
                        'fontBackgroundColor',
                        '|',

                        'alignment',
                        '|',

                        'bulletedList',
                        'numberedList',
                        'todoList',
                        '|',

                        'outdent',
                        'indent',
                        '|',

                        'link',
                        'insertTable',
                        'blockQuote',
                        'imageUpload',
                        'mediaEmbed',
                        'codeBlock',
                        'horizontalLine',
                        '|',

                        'undo',
                        'redo'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                }
            })
            .then(editor => {
                descriptionEditor = editor;

                editor.ui.view.editable.element.style.minHeight = '400px';
                editor.ui.view.editable.element.style.overflowY = 'auto';
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(document).ready(function() {

            // Auto slug generate
            $('input[name="title"]').on('keyup change', function() {

                let title = $(this).val();

                let slug = title
                    .toLowerCase()
                    .trim()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/--+/g, '-');

                $('input[name="slug"]').val(slug);
            });

            // File size validator
            $.validator.addMethod('filesize', function(value, element, param) {
                if (element.files.length === 0) {
                    return true;
                }
                return element.files[0].size <= param;
            }, 'File size must be less than 1 MB');

            // Form validation
            $('#blogForm').validate({
                ignore: [],

                rules: {
                    title: {
                        required: true,
                        maxlength: 255
                    },

                    slug: {
                        required: true,
                        maxlength: 255
                    },

                    image: {
                        required: true,
                        filesize: 1048576
                    },

                    meta_title: {
                        required: true,
                        maxlength: 255
                    },

                    meta_description: {
                        required: true,
                        maxlength: 255
                    },

                    meta_keywords: {
                        required: true,
                        maxlength: 255
                    },

                    description: {
                        required: true
                    },

                    status: {
                        required: true
                    }
                },

                messages: {
                    image: {
                        required: "Please upload an image",
                        filesize: "Image must be less than 1 MB"
                    },

                    description: {
                        required: "Please enter description"
                    }
                },

                errorClass: 'text-danger',
                errorElement: 'div',

                errorPlacement: function(error, element) {
                    if (element.attr("id") === "description") {
                        error.insertAfter($('.ck-editor'));
                    } else {
                        error.insertAfter(element);
                    }
                },

                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },

                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },

                submitHandler: function(form) {

                    // Set CKEditor data to textarea
                    $('#description').val(descriptionEditor.getData());

                    // Empty validation
                    if (!descriptionEditor.getData().trim()) {
                        alert('Description is required');
                        return false;
                    }

                    form.submit();
                }
            });
        });
    </script>
@endsection
