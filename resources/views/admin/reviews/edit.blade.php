<form id="EnquiryForm" action="{{ route('review.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="row">

                {{-- Name --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control"
                           value="{{ $review->name }}" placeholder="Enter name">
                </div>

                {{-- Category --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control"
                           value="{{ $review->category }}" placeholder="Enter category">
                </div>

                {{-- Rating --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Rating</label>
                    <select name="rating" class="form-select">
                        <option value="">Select Rating</option>
                        <option value="1" @selected($review->rating == 1)>1</option>
                        <option value="2" @selected($review->rating == 2)>2</option>
                        <option value="3" @selected($review->rating == 3)>3</option>
                        <option value="4" @selected($review->rating == 4)>4</option>
                        <option value="5" @selected($review->rating == 5)>5</option>
                    </select>
                </div>

                {{-- Sector --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Sector</label>
                    <input type="text" name="sector" class="form-control"
                           value="{{ $review->sector }}" placeholder="Enter sector">
                </div>

                {{-- Message --}}
                <div class="col-md-12 mb-3">
                    <label class="form-label">Message</label>
                    <textarea name="message" rows="4" class="form-control"
                              placeholder="Enter review message">{{ $review->message }}</textarea>
                </div>

                {{-- Status --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="1" @selected($review->status == 1)>Active</option>
                        <option value="0" @selected($review->status == 0)>Inactive</option>
                    </select>
                </div>

                {{-- Buttons --}}
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-success">
                        Save Review
                    </button>
                    <a href="{{ route('review.index') }}" class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {

        $('#EnquiryForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                category: {
                    required: true,
                    minlength: 3
                },
                sector: {
                    required: true,
                    minlength: 3
                },
                rating: {
                    required: true
                },
                message: {
                    required: true,
                    minlength: 3,
                    maxlength: 700
                },
                status: {
                    required: true
                }
            },

            messages: {
                status: {
                    required: "Please select enquiry status"
                }
            },

            errorElement: 'span',
            errorClass: 'text-danger small',

            highlight: function (element) {
                $(element).addClass('is-invalid');
            },

            unhighlight: function (element) {
                $(element).removeClass('is-invalid');
            }
        });

    });
</script>