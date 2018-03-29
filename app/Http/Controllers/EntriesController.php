<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntriesController extends Controller
{

    public function __construct() {
         $this->middleware('isAdmin')->except('index');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $entries = Entry::get();

       return view('index', [
           'entries' => $entries
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createEntry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validator($request);
      $path = $request->file('imageUrl')->storePublicly('public/photos');

      $post = [
      'title' => $request->get('title'),
      'date' => $request->get('price'),
      'description' => $request->get('description'),
      'imageUrl' => $path
      ];

      Entry::create($post);

      return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      if(Auth::user()->isAdmin()){
       $orders = Entry::get();
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validator($data)
    {
        return $data->validate([
            'title' => 'required|string|max:200',
            'date' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'imageUrl' => 'required|mimes:jpeg,bmp,png|max:6000'
          ]);
    }
}
