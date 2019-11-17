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

// Postsの処理
Route::get('posts', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');
Route::get('posts/{id}', 'PostsController@show');
Route::get('posts/{id}/edit', 'PostsController@edit');
Route::post('posts', 'PostsController@store');
Route::put('posts/{id}', 'PostsController@update');
Route::delete('posts/{id}', 'PostsController@destroy');
