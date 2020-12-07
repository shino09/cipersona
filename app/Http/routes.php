<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario2/{id}/edit', ['uses' => 'Usuario2Controller@edit', 'as' => 'usuario2.edit']);


Route::put('/usuario2/update/{id}', ['uses' => 'Usuario2Controller@update', 'as' => 'usuario2.update']);

/* MODULO USUARIO*/
Route::resource('/usuario', 'UsuarioController');
//Route::resource('/usuario2', 'Usuario2Controller');
//Route::put('/usuario2/update/{id}', ['uses' => 'Usuario2Controller@update', 'as' => 'usuario2.update']);
//Route::get('/usuario2/update/{id}', ['uses' => 'Usuario2Controller@update', 'as' => 'usuario2.update']);
Route::get('/usuario2/destroy/{id}', ['uses' => 'Usuario2Controller@destroy', 'as' => 'usuario2.destroy']);


//Route::controller('usuario', 'UsuarioController');
//Route::put('usuario2.update/{id}', 'Usuario2Controller@update');


