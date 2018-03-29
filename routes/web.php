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
Route::get('/', 'RouteController@index')->name('index');
Route::get('/index', 'RouteController@index')->name('index');
Route::get('/suggest', 'RouteController@suggestIndex')->name('suggest');
Route::get('/entry', 'RouteController@showEntry')->name('entry');

// AUTH ROUTES
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// CRUD ROUTES
Route::get('/createEntry', 'EntriesController@create')->name('entry_create');
Route::post('/storeEntry', 'EntriesController@store')->name('entry_store');

// Route::get('/editEntry/{id}', 'EntriesController@edit')->name('entry_edit');
// Route::post('/storeEntry', 'EntriesController@store')->name('entry_store');
// Route::get('/deleteEntry/{id}', 'EntriesController@destroy')->name('destroy');
// Route::post('/updateEntry/{id}', 'EntriesController@update')->name('entry_update');
