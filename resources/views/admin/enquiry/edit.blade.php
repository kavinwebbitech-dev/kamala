<form id="EnquiryForm" action="{{ route('enquiry.update', $enquiry->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="row g-3">

                <!-- Name -->
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $enquiry->name }}">
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $enquiry->email }}">
                </div>

                <!-- Mobile -->
                <div class="col-md-6">
                    <label class="form-label">Mobile</label>
                    <input type="number" name="phone" class="form-control" value="{{ $enquiry->phone }}">
                </div>

                <!-- Status -->
                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="pending" @selected($enquiry->status == 'pending')>Pending</option>
                        <option value="enquired" @selected($enquiry->status == 'enquired')>Enquired</option>
                        <option value="processing" @selected($enquiry->status == 'processing')>Processing</option>
                        <option value="cancelled" @selected($enquiry->status == 'cancelled')>Cancelled</option>
                    </select>
                </div>

                <!-- Subject -->
                <div class="col-md-12">
                    <label class="form-label">Subject</label>
                    <select name="subject" class="form-select">
                        <option value="Search Engine Optimization" @selected($enquiry->subject == 'Search Engine Optimization')>Search Engine Optimization</option>
                        <option value="Social Media Marketing" @selected($enquiry->subject == 'Social Media Marketing')>Social Media Marketing</option>
                        <option value="Pay Per Click" @selected($enquiry->subject == 'Pay Per Click')>Pay Per Click</option>
                        <option value="Performance Advertising" @selected($enquiry->subject == 'Performance Advertising')>Performance Advertising</option>
                        <option value="Web Development" @selected($enquiry->subject == 'Web Development')>Web Development</option>
                        <option value="Other Inquiry" @selected($enquiry->subject == 'Other Inquiry')>Other Inquiry</option>
                    </select>
                </div>

                <!-- Message -->
                <div class="col-12">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control" rows="3">{{ $enquiry->message }}</textarea>
                </div>

            </div>
        </div>
        <input type="hidden" name="type" value="admin">
        <div class="card-footer d-flex justify-content-between">
            <button type="button" data-bs-dismiss="modal" class="btn btn-secondary closeModal">
                Close
            </button>

            <button type="submit" class="btn btn-primary">
                Update
            </button>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {

        $('#EnquiryForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                subject: {
                    required: true
                },
                message: {
                    required: true,
                    minlength: 5
                }
            },

            messages: {
                status: {
                    required: "Please select enquiry status"
                },
                subject: {
                    required: "Please select enquiry subject"
                } 
            },

            errorElement: 'span',
            errorClass: 'text-danger small',

            highlight: function(element) {
                $(element).addClass('is-invalid');
            },

            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
            }
        });

    });
</script>
