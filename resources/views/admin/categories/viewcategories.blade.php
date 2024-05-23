@extends('admin.layout.master')
@section('title')
    Categories
@endsection
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title page-title">All Categories</h4>
                </div>
                <div class="nk-block-head-content">
                    <a data-bs-toggle="modal" data-bs-target="#add_plan" class="btn btn-primary" href="">
                        <em class="icon ni ni-plus"></em>
                        <span>Add Categories</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="table card-bordered" id="categories" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="col">Category Id</th>
                                <th class="col">Name</th>
                                <th class="col">Image</th>
                                <th class="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>

                        </tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @foreach ($categories as $category)
        <div class="modal fade" id="deletePlan{{ $category->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Plan</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this category ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <a href="" type="button" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade" id="add_plan" tabindex="-1">
        <div class="modal-dialog modal-dialog-top modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Categories</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <form action="{{ route('admin.addCategories') }}" method="POST" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body ">
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Name" name='name' required />
                            </div>
                        </div>
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">Image</label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" placeholder="Browse image" name='image'
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var datatable = $('#categories').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                responsive: true,
                // select: true,
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
                ajax: '{{ route('admin.getAllCategories') }}',
                columns: [

                    {
                        data: 'id'
                    },
                    {
                        data: 'name',
                        sortable: false
                    },
                    {
                        data: 'image',
                        sortable: false
                    },
                    {
                        data: 'action',
                        sortable: false
                    },
                ],

            });
            var search = document.querySelector('.search');
            html = search.innerHTML
            search.innerHTML = '<span class="fw-3 px-2">Show</span>' + html +
                '<span class="fw-3 px-2">Entries</span>'
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection
