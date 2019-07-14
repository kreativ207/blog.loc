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


Route::get('admin/user/{id}', 'Admin\TestController@user');

Route::get('admin/user/{main}/second/{second}', 'Admin\TestController@many');

Route::get('names', 'NamesController@index');

Route::view('form', 'form');

Route::post('form', 'NamesController@sendForm');