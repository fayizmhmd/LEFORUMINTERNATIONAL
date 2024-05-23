@extends('admin.layout.master')
@section('title')
    Plans
@endsection
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title page-title">All Plans</h4>
                </div>
                <div class="nk-block-head-content">
                    <a data-bs-toggle="modal" data-bs-target="#add_plan" class="btn btn-primary">
                        <em class="icon ni ni-plus"></em>
                        <span>Add Plan</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="table card-bordered" id="plans" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="col">Plan Id</th>
                                <th class="col">Name</th>
                                <th class="col">Description</th>
                                <th class="col">Duration (Days)</th>
                                <th class="col">Plan Type</th>
                                <th class="col">Status</th>
                                <th class="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach ($plans as $plan)
        <div class="modal fade" id="deletePlan{{ $plan->id }}" tabindex="-1">
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
                        <p>Do you really want to delete this plan ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <a href="{{ route('admin.deletePlan', $plan->id) }}" type="button"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="add_plan" tabindex="-1">
        <div class="modal-dialog modal-dialog-top modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Plan</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <form action="{{ route('admin.addPlan') }}" method="POST" id="myForm">
                    @csrf
                    <div class="modal-body ">
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Name" name='name'
                                    required />
                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3 required form-label">Description</label>
                            <div class="col-lg-9">
                                <textarea name="description" cols="10" rows="10" class="form-control" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">Duration (Days)</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" placeholder="Duration Days" name='duration'
                                    required />
                            </div>
                        </div>
                        <div class='form-group row mb-4 align-middle'>
                            <label class="col-lg-3 required form-label">Plan Type</label>
                            <div class="col-lg-9">
                                <select name="type" class="form-select" data-control="">
                                   <option value="INSURANCE">INSURANCE PLAN</option>
                                   <option value="HEALTH CARE">HEALTH CARE PLAN</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group row mb-4 align-middle'>
                            <label class="col-lg-3 required form-label">Benefits</label>
                            <div class="col-lg-7" id="benefits-container">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="New Benefit" name='benefit[]' required />
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <a href="#" class="btn btn-primary add-benefit">+</a>
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
            var datatable = $('#plans').DataTable({
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
                ajax: '{{ route('admin.getAllPlans') }}',
                columns: [

                    {
                        data: 'id'
                    },
                    {
                        data: 'name',
                        sortable: false
                    },
                    {
                        data: 'description',
                        sortable: false
                    },
                    {
                        data: 'duration',
                        sortable: false
                    },
                    {
                        data: 'plan_type',
                        sortable: false
                    },
                    {
                        data: 'status',
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
    <script>
        $(document).ready(function() {
            // Add new benefit input field
            $(".add-benefit").click(function(e) {
                e.preventDefault();
                var newInput = '<div class="input-group mb-3">' +
                    '<input type="text" class="form-control" placeholder="New Benefit" name="benefit[]" required />' +
                    '<button class="btn btn-danger remove-benefit" type="button">-</button>' +
                    '</div>';
                $("#benefits-container").append(newInput);
            });

            // Remove the clicked benefit input field
            $("#benefits-container").on("click", ".remove-benefit", function() {
                $(this).parent().remove();
            });
        });
        </script>
@endsection
