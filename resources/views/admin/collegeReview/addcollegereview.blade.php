@extends('admin.layout.master')
@section('title')
    CollegeReviews
@endsection
@section('content')
    <form action="{{ route('admin.saveCollegeReviews') }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Name</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="" placeholder="Name" name='name' required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Image</label>
            <div class="col-lg-9">
                <input type="file" class="form-control" placeholder="Browse image" name='image' required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">College/University</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="" placeholder="College/University" name='position'
                    required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Review</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="" placeholder="review here...!" name='review'
                    required />
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
@endsection