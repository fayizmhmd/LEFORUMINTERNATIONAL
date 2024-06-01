@extends('admin.layout.master')
@section('title')
    Colleges
@endsection
@section('content')
    <form action="{{ route('admin.updateColleges', $colleges->id) }}" method="POST" id="myForm"
        enctype="multipart/form-data">
        @csrf
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Name</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $colleges->name }}" placeholder="Name" name='name'
                    required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Rating</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $colleges->rating }}" placeholder="Rating"
                    name='rating' required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Category</label>
            <div class="col-lg-9">
                <select class="form-select" name="category_id" required>
                    <option value="" disabled>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $colleges->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Location</label>
            <div class="col-lg-9">
                <select name="location_id[]" class="form-control" multiple>

                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}"  @if (in_array($location->id, $colleges->locations->pluck('id')->toArray())) selected @endif>{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}
        {{-- <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Courses</label>
            <div class="col-lg-9">
                <select name="course_id[]" class="form-control" multiple>

                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}"  @if (in_array($course->id, $colleges->courses->pluck('id')->toArray())) selected @endif>{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Description</label>
            <div class="col-lg-9">
                <textarea class="form-control" value="{{ $colleges->description }}" name="summernote" id="summernote" cols="30"
                    rows="10">
                    {{ $colleges->description }}
                </textarea>
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Image</label>
            <div class="col-lg-9">
                <input type="file" class="form-control" placeholder="Browse image" name='images[]' multiple  />
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-9 mt-2">
                <div class="row">
                    @if ($colleges->image)
                        @foreach (json_decode($colleges->image) as $image)
                            <div class="col-md-4 mb-2">
                                <img src="{{ asset($image) }}" class="img-thumbnail" alt=""
                                    style="max-width: 100%; height: 100px; display: block; margin-left: auto; margin-right: auto;">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="radio" {{ $colleges->status == 1 ? 'checked' : '' }} name="status" value="1">Active
            <input type="radio" {{ $colleges->status == 1 ? 'checked' : '' }} name="status" value="0">Inactive
        </div> --}}
        <div class='form-group row mb-4 align-middle'>
            <label class="col-lg-3 required form-label">Type</label>
            <div class="col-lg-9">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="university" value="2"
                        {{ $colleges->type == 2 ? 'checked' : '' }}>
                    <label class="form-check-label" for="university">University</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="college" value="1"
                        {{ $colleges->type == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="college">College</label>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
