<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
  public function index()
  {
    return view('pages/index');
  }

  public function suggestIndex()
  {
    return view('pages/suggest');
  }

}
