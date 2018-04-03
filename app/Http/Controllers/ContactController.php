<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function create()
  {
      return view('index#form');
  }

  public function store()
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
}
