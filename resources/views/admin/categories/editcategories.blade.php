@extends('admin.layout.master')
@section('title')
    Edit category
@endsection
@section('content')

            <form action="{{ route('admin.updateCategories') }}" method="POST" id="myForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="category_id" value="{{ $category->id }}">
                <div class="modal-body ">
                    <div class='form-group row mb-4 align-middle'>
                        <label class=" col-lg-3 required form-label">Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{ $category->name }}" placeholder="Name" name='name'
                                required />
                        </div>
                    </div>
                    <div class='form-group row mb-4 align-middle'>
                        <label class=" col-lg-3 required form-label">Image</label>
                        <div class="col-lg-9">
                            <input type="file" class="form-control" placeholder="Browse image" name='image'
                                required />
                        </div>
                        <img src="{{ asset('images'.$category->image) }}" width="100" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
@endsection
