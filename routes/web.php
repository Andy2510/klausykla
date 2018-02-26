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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'RouteController@index')->name('index');
Route::get('/index', 'RouteController@index')->name('index');
Route::get('/suggest', 'RouteController@suggestIndex')->name('suggest');
