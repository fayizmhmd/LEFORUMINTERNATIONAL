@extends('admin.layout.master')
@section('title')
    Contact Form
@endsection
@section('content')
<div>
    <h2>Contact Mails</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactForms as $contactForm)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $contactForm->name }}</td>
                <td>{{ $contactForm->email }}</td>
                <td>{{ $contactForm->subject }}</td>
                <td>{{ $contactForm->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p></p>
    <div>
        {{ $contactForms->links() }}
    </div>
</div>
</div>
@endsection
