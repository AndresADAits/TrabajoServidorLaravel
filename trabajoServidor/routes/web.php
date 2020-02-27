<?php

Route::get('/', function () {
   //return 'Home';
   return view('auth.login');
});

Route::get('/usuarios', 'UserController@index')
    ->name('users.index');

Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios', 'UserController@store');

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('movil', 'MovilController');

Route::get('/movil', 'MovilController@index')
    ->name('movil.index');

Route::resource('portatil', 'PortatilesController');

Route::get('/portatil', 'PortatilesController@index')
    ->name('portatil.index');