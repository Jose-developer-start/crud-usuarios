<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

//Route user
Route::get('/usuarios','UserController@index')->name('users');

Route::get('/usuarios/nuevo', 'UserController@create')->name('create');

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+')->name('show');

Route::get('/saludo/{nombre}/{apodo?}','WelcomeUserController@index')->name('saludo');