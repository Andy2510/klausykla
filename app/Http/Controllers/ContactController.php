<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\KlausyklaMail;
use App\Http\Requests\ContactFormRequest;


class ContactController extends Controller
{
  public function create()
  {
      return view('pages.contactStore');
  }

  public function store(ContactFormRequest $request)
  {
    $contact = [];

    $contact['name'] = $request->get('name');
    $contact['email'] = $request->get('email');
    $contact['message'] = $request->get('message');


    Mail::to(config('mail.support.email'))->send(new KlausyklaMail($contact));

    flash('Your message has been sent!')->success();

    return redirect()->route('contact_create');

  }
}
