@extends('admin.layout.master')
@section('title')
    Courses
@endsection
@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title page-title">FAQ's</h4>
            </div>
            <div class="nk-block-head-content">
                <a class="btn btn-primary" href="{{ route('admin.addFAQ') }}">
                    <em class="icon ni ni-plus"></em>
                    <span>Add FAQ's</span>
                </a>
            </div>
        </div>
    </div>
    <div class="nk-block">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="faqs" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th >Question</th>
                                <th>Answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <div class="card-footer clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($faqs as $faq)
        <div class="modal fade" id="deletefaqs{{ $faq->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete faq</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this faq?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <a href="{{ route('admin.deleteFAQ', ['id' => $faq->id]) }}" type="button" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

<script>
    $(document).ready(function() {
    var datatable = $('#faqs').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        responsive: true,
        filter: true,
        dom: "<'row'" +
            "<'col-6 d-flex align-items-center justify-content-start'f>" +
            "<'col-6 d-flex align-items-center justify-content-end'l>" +
            ">" +
            "<'table-responsive my-2'tr>" +
            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">",
        order: [
            [0, "desc"]
        ],
        ajax: '{{ route('admin.getAllFaqs') }}',
        columns: [
            { data: 'id' },
            { data: 'question', sortable: false },
            { data: 'answer', sortable: false }, // Ensure 'answer' matches your data source
            { data: 'action', sortable: false },
        ],
    });
    var search = document.querySelector('.search');
    html = search.innerHTML
    search.innerHTML = '<span class="fw-3 px-2">Show</span>' + html +
        '<span class="fw-3 px-2">Entries</span>'
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection
