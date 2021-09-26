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
Route::resource('usuarios', UserController::class)->names("usuario");
/*
Route::get('/usuarios','UserController@index')->name('usuario.index');

Route::get('/usuarios/nuevo/', 'UserController@create')->name('usuario.create');

Route::post('/usuarios', 'UserController@store')->name('usuario.store');

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+')->name('usuario.show');

Route::get('/saludo/{nombre}/{apodo?}','WelcomeUserController@index')->name('saludo');

*/