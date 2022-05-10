<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('competition', function () {
    return view('competition');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('login', function () {
    return view('auth.login');
});
Route::post('/login','AccountController@authenticate');

Route::get('register', function () {
    return view('auth.register');
});

Route::post('/register','RegisterController@store');

//Auth::routes();

// Route::group(['middleware' => 'auth'], function () {
//    Route::get('')
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
