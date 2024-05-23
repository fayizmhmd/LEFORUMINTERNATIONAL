<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function ContactUs()
    {
        return view('frontend.contactus');
    }

    public function viewcontactform()
    {
        $contactForms = ContactForm::latest()->paginate(6);
        return view('frontend.contactform', compact('contactForms'));
    }

    public function contactmail(Request $request)
{
    $data = new ContactForm();

    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;

    $data->save();

    Mail::to('fayizklr192@gmail.com')->send(new ContactFormMail($request->all()));

    $data = ContactForm::all();

    return redirect()->back()->with('success', 'Your message has been sent successfully!');
}

}
