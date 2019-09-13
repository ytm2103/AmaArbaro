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

Auth::routes();

Route::post('donation/store', 'DonationController@store')->name('donation.store'); // 保存処理


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', function() {
    return view('news');
});

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