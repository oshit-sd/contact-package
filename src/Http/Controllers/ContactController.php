<?php

namespace Oshitsd\Contact\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Oshitsd\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Validator;
use Oshitsd\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view("contact::contact");
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return  redirect(route('contact'));
    }
}
