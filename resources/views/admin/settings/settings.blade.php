@extends('admin.layout.master')
@section('title')
    Settings
@endsection
@section('content')
    <form action="{{ route('admin.updatesettings') }}" method="POST" id="myForm" enctype="multipart/form-data">
        @csrf
        @foreach ($settings as $setting)
        <div class='form-group row mb-4 align-middle'>
            <label class=" col-lg-3 required form-label">{{ $setting -> key }}</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" value="{{ $setting -> value }}"  name="{{ $setting -> key }}" required />
            </div>
        </div>
        @endforeach
        <div class="modal-footer">
            {{-- <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button> --}}
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
