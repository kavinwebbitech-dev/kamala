<form id="ReviewForm" action="{{ route('faq.update')}}" method="POST">
    @csrf
    @method('PUT')

    <div class="card shadow-sm border-0">
        <div class="card-body">

            {{-- Header --}}
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Questions & Answers</h5>

                <button type="button" id="addRow" class="btn btn-outline-primary">
                    + Add More
                </button>
            </div>

            <table class="table table-bordered align-middle" id="qaTable">
                <thead class="table-light">
                    <tr>
                        <th width="25%">Question</th>
                        <th width="45%">Answer</th>
                        <th width="15%">Status</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>

                <tbody class="qaTable">

                    @foreach($faqs as $q)
                        <input type="hidden" name="questions[{{ $loop->iteration }}][id]" value="{{ $q->id }}">
                        <tr>
                            <td>
                                <input type="text"
                                       name="questions[{{ $loop->iteration }}][question]"
                                       class="form-control"
                                       value="{{ $q->question }}"
                                       required>
                            </td>

                            <td>
                                <textarea name="questions[{{ $loop->iteration }}][answer]"
                                          class="form-control"
                                          rows="2"
                                          required>{{ $q->answer }}</textarea>
                            </td>

                            <td>
                                <select name="questions[{{ $loop->iteration }}][status]" class="form-select" required>
                                    <option value="0" {{ !$q->status ? 'selected' : '' }}>Inactive</option>
                                    <option value="1" {{ $q->status ? 'selected' : '' }}>Active</option>
                                </select>
                            </td>

                            <td class="text-center">
                                <button type="button" data-route="{{ route('faq.destory', $q->id) }}" data-table-id="qaTable"
                                        class="btn btn-danger btn-sm deleteRow"
                                        {{ $loop->count == 1 ? 'disabled' : '' }}>
                                    ×
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            {{-- Footer --}}
            <div class="text-end">
                <button type="submit" class="btn btn-success">
                    Update
                </button>
                <a href="{{ route('faq.index') }}" class="btn btn-secondary">
                    Cancel
                </a>
            </div>

        </div>
    </div>
</form>
<script>
$(document).ready(function () {

    let rowIndex = $('#qaTable tbody tr').length + 1;

    $('#addRow').on('click', function () {
        let row = `
        <tr>
            <td>
                <input type="text" name="questions[${rowIndex}][question]"
                       class="form-control" required>
            </td>
            <td>
                <textarea name="questions[${rowIndex}][answer]"
                          class="form-control" rows="2" required></textarea>
            </td>
            <td>
                <select name="questions[${rowIndex}][status]"
                        class="form-select" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </td>
            <td class="text-center">
                <button type="button"
                        class="btn btn-danger btn-sm removeRow">×</button>
            </td>
        </tr>`;

        $('#qaTable tbody').append(row);
        rowIndex++;
        toggleRemoveButtons();
    });

    $(document).on('click', '.removeRow', function () {
        $(this).closest('tr').remove();
        toggleRemoveButtons();
    });
    

    $(document).on('click', '.deleteRow', function () {
        let button = $(this);
        var deleteRoute = $(this).data('route');
        var tableId = $(this).data('table-id');

        $.ajax({
            url: deleteRoute,
            type: 'post',
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function (response) {

                if (response.status) {
                    toastr.success(response.message ?? 'Data deleted successfully');
                    button.closest('tr').remove();
                } else {
                    toastr.error('Delete failed');
                }
            },
            error: function () {
                toastr.error('Data Delete failed');
            }
        });
    });
 
    function toggleRemoveButtons() {
        let rows = $('#qaTable tbody tr');
        rows.find('.removeRow').prop('disabled', rows.length === 1);
    }
});
</script>
