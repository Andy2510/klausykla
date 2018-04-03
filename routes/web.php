<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// BASIC ROUTES
Route::get('/', 'EntriesController@index')->name('index');
Route::get('/index', 'EntriesController@index')->name('index');
Route::get('/suggest', 'RouteController@suggestIndex')->name('suggest');
Route::get('/entry', 'RouteController@showEntry')->name('entry');

// AUTH ROUTES
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// CRUD ROUTES
Route::get('/createEntry', 'EntriesController@create')->name('entry_create');
Route::post('/storeEntry', 'EntriesController@store')->name('entry_store');
Route::get('/entry/{id}', 'EntriesController@show')->name('entry_show');
Route::get('/editEntry/{id}', 'EntriesController@edit')->name('entry_edit');
Route::post('/updateEntry/{id}', 'EntriesController@update')->name('entry_update');
Route::get('/deleteEntry/{id}', 'EntriesController@destroy')->name('entry_destroy');

// CONTACT FORM ROUTES
Route::get('/contactStore', 'ContactController@create')->name('contact_create');
Route::post('/contactStore', 'ContactController@store')->name('contact_store');
