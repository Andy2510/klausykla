<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Helpers\PhotoHelper;

class EntriesController extends Controller
{
    private $photoHelper;

    public function __construct(PhotoHelper $photoHelper) {
         $this->middleware('isAdmin')->except('index');
         $this->photoHelper = $photoHelper;
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $entries = Entry::get();

       return view('pages.index', [
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
      'date' => $request->get('date'),
      'description' => $request->get('description'),
      'trackUrl' => $request->get('trackUrl'),
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
      $entries = Entry::findOrFail($id);
      return view('pages.entry', [
        'entry' => $entries
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $entry = Entry::findOrFail($id);
      return view('pages.editEntry', [
        'entry' => $entry
      ]);
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
      // $this->validator($request);

      $path = $request->file('imageUrl')->storePublicly('public/photos');

      $post = [
        'title' => $request->get('title'),
        'description' => $request->get('description'),
        'date' => $request->get('date'),
        'trackUrl' => $request->get('trackUrl'),
        'imageUrl' => $path
      ];

      $entry = Entry::findOrFail($id);
      $this->photoHelper->deletePhotoFromFileSystem($entry);
      $entry->update($post);
      return redirect()->to('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $entry = Entry::findOrFail($id);
      $this->photoHelper->deletePhotoFromFileSystem($entry);
      $entry->delete();
      return redirect()->route('index');
    }

    public function deletePhotoFromFileSystem($entry) {
      $path = storage_path('app/' . $entry->imageUrl);

      if (file_exists($path)){
          unlink($path);
      }
    }

    // protected function validator($data)
    // {
    //     return $data->validate([
    //         'title' => 'required|string|max:200',
    //         'date' => 'required|date',
    //         'description' => 'required|string|max:2000',
    //         'trackUrl' => 'required|string',
    //         'imageUrl' => 'required|image|mimes:jpeg,jpg,bmp,png|max:5128'
    //       ]);
    // }
}
