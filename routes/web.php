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
Route::get('/usuarios','UserController@index')->name('usuario');

Route::get('/usuarios/nuevo', 'UserController@create')->name('usuario.create');

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+')->name('usuario.show');

Route::get('/saludo/{nombre}/{apodo?}','WelcomeUserController@index')->name('saludo');