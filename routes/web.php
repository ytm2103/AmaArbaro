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
Route::get('AbooutUs', 'ContactController@index')->name('contact');
Route::post('/contact/thanks', 'ContactController@thanks');
Route::post('/contact/thanks', 'ContactController@store')->name('contact.thanks'); // 保存処理


// Route::get('/', 'AboutUs@index')->name('diary.index');
Route::get('/', function () {
     return view('AboutUs');
 });
