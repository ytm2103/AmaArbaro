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
})->name('welcome');

Route::get('/news', function() {
    return view('news');
});

Route::get('contact/form', function() {
    return view('contact.form');
});

Auth::routes();

Route::post('donation/store', 'DonationController@store')->name('donation.store'); // 保存処理


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout'
]);

Route::get('/terms', function() {
    return view('terms');
});

Route::get('/privacy', function() {
    return view('privacy');
});

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/confirm', 'ContactController@confirm')->name('confirm');
Route::post('contact/sent', 'ContactController@sent')->name('sent');