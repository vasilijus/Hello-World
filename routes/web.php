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

Auth::routes();

Route::get('/p/create', 'PostsController@create');

// Route::get('/home', 'ProfilesController@index')->name('home');
Route::get('/profile', 'ProfilesController@index')->name('profile.index');
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');
