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

Route::get('/', function () {
    return view('welcome');
});
# Instagram login
Route::get('/instagram/', 'InstagramController@instagramLogin');

# Instagram callback
Route::get('/instagram/callback/', 'InstagramController@instagramCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
