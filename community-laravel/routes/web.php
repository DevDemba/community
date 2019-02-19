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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/allconferencies', 'ConferenciesController@all')->name('allconferencies');

Route::post('/allconferencies', 'ConferenciesController@vote')->name('votes');


Route::get('/allconferencies/{id}', 'ConferenciesController@show')->name('viewDetails');

Route::get('/forbidden', function () {
    return view('forbidden');
});


Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::resource('conferencies', 'ConferenciesController')
    ->middleware('is_admin');


Route::get('/users', 'UserController@index')
    ->middleware('is_admin');


Route::resource('user', 'UserController')
    ->middleware('is_admin');
