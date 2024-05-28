@extends('admin.layout.master')
@section('title')
    CollegeReviews
@endsection
@section('content')
    <form action="{{ route('admin.updateCollegeReview',$collegereview->id) }}" method="POST" id="myForm"
        enctype="multipart/form-data">

        @csrf
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Name</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $collegereview->name }}" placeholder="Name"
                    name='name' required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Image</label>
            <div class="col-lg-9">
                <input type="file" class="form-control" placeholder="Browse image" name='image' required /><br>
            </div>
            <div class="row">
                @if ($collegereview->image)
                    <div class="col-md-8 offset-md-4 mb-2">
                        <img src="{{ asset($collegereview->image) }}" class="img-thumbnail" alt="College Review Image" style="max-width: 100%; height: 100px; display: block; margin-left: auto; margin-right: auto;">
                    </div>
                @endif
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">College/Position</label>
            <div class="col-lg-9">
                <select class="form-select" name="college_id" required>
                    <option value="">Select College</option>
                    @foreach($colleges as $id => $name)
                        <option value="{{ $id }}" {{ $id == $collegereview->college_id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Review</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $collegereview->review }}"
                    placeholder="review here...!" name='review' required />
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
