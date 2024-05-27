@extends('admin.layout.master')
@section('title')
    FAQ's
@endsection
@section('content')
    <form action="{{ route('admin.saveFAQ') }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Question</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="" placeholder="Question here...!" name='question' required />
            </div>
        </div>
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">Answer</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="" placeholder="Answer here....!" name='answer' required />
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="radio" name="status" value="1">Active
            <input type="radio" name="status" value="0">Inactive
        </div> --}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
@endsection
