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

/*Route::get('', function () {
    return view('welcome');
});*/


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


Route::get('categories/create', function () {
    return view('categories.create');
})->name('categories.create');


Route::get('categories/edit', function () {
    return view('categories.edit');
})->name('categories.edit');



Route::get('categories/index', function () {
    return view('categories.index');
})->name('categories.index');


Route::get('posts/create', function () {
    return view('posts.create');
})->name('posts.create');

Route::delete('profile/delete','UserController@destroyAccount')->name('profile.destroy');




/*Route::middleware('auth')->group(function (){

});*/

Route::post('profile','UserController@updateProfile')->name('profile.update');

Route::post('password','UserController@updatePassword')->name('update.password');


Route::get('content', function () {
    return view('content');
})->name('content');



Route::get('categories', function () {
    return view('categories');
})->name('categories');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
