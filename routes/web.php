<?php

use Illuminate\Support\Facades\Route;

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

Route::get('', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');


Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('business', function () {
    return view('business');
})->name('business');


Route::get('profile', function () {
    return view('profile');
})->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
