@extends('admin.layout.master')
@section('title')
    Locations
@endsection
@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title page-title">Locations</h4>
            </div>
            <div class="nk-block-head-content">
                <a class="btn btn-primary" href="{{ route('admin.addLocations') }}">
                    <em class="icon ni ni-plus"></em>
                    <span>Add Locations</span>
                </a>
            </div>
        </div>
    </div>
    <div class="nk-block">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="locations" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th>Location</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
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

@foreach ($locations as $location)
        <div class="modal fade" id="deleteLocations{{ $location->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete location</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this location?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <a href="{{ route('admin.deleteLocations', ['id' => $location->id]) }}" type="button" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        var datatable = $('#locations').DataTable({
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
            ajax: '{{ route('admin.getAllLocations') }}',
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'status' },
                { data: 'action' },
            ],
        });
    });
</script>

@endsection
