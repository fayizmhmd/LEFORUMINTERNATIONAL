@extends('admin.layout.master')
@section('title')
    Colleges
@endsection
@section('content')
<form action="{{ route('admin.saveColleges') }}" method="POST" id="myForm" enctype="multipart/form-data">
    @csrf
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Name</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="" placeholder="Name" name='name'
                    required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Rating</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="" placeholder="Rating" name='rating'
                    required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Location</label>
            <div class="col-lg-9">
                <select name="location_id[]" class="form-control" multiple>
                    {{-- <option value="">Select a location</option> --}}
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Courses</label>
            <div class="col-lg-9">
                <select name="course_id[]" class="form-control" multiple>
                    {{-- <option value="">Select courses...!</option> --}}
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Description</label>
            <div class="col-lg-9">
                <textarea class="form-control" name="summernote" id="summernote" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Image</label>
            <div class="col-lg-9">
                <input type="file" class="form-control" placeholder="Browse image" name='images[]' multiple
                    required />
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="radio" name="status" value="1">Active
            <input type="radio" name="status" value="0">Inactive
        </div> --}}
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Type</label>
            <div class="col-lg-9">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="university" value="2">
                    <label class="form-check-label" for="university">University</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="college" value="1">
                    <label class="form-check-label" for="college">College</label>
                </div>
            </div>
        </div>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>
@endsection
