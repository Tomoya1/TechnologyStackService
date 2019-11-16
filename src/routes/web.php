<?php

/**/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Userの処理
Route::get('users', 'UsersController@index');
Route::get('users/{id}', 'UsersController@show');
Route::get('users/{id}/edit', 'UsersController@edit');
Route::put('users/{id}', 'UsersController@update');
Route::delete('users/{id}', 'UsersController@destroy');
