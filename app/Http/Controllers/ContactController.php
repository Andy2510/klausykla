<?php

namespace App\Http\Controllers;

// use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;


class ContactController extends Controller
{
  public function create()
  {
      return view('pages.contactStore');
  }

  public function store(Request $request)
  {
    $contact = [];


    $contact['name'] = $request->get('name');
    $contact['email'] = $request->get('email');
    $contact['message'] = $request->get('message');


    // Mail delivery logic goes here

    flash('Your message has been sent!')->success();

    return redirect()->route('contact_create');

  }
}
