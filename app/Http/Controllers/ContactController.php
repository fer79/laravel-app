<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# Models
use App\Models\contact;

# Mails
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\InternalContactMail;

class ContactController extends Controller
{
  public function contact() {

    return view('contact');
  }

  public function contactStore(Request $request) {

    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255'],
      'phone' => ['required', 'string', 'max:255'],
      'company' => ['max:255'],
      'messege' => ['required', 'string', 'max:2000'],
      'g-recaptcha-response' => 'required|captcha',
    ]);

    $contact = contact::create($request->all());

    # To send emails you must configure the .env file with your mail server credentials
    // Mail::to($request->email)->queue(new ContactMail());
    // Mail::to('admin.laravel-app@laravel.com')->queue(new InternalContactMail());

    return redirect('/msjMailContact');
  }

  public function msjMailContact() {

    return view('base.msjMailContact');
  }
}
