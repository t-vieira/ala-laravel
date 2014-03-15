<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'IndexController');

Route::controller('citacoes/todascitacoes', 'CitacoesController');

//Route::get('citacoes/registrarcitacao', 'CitacoesController@getRegistrarcitacao');
//
//Route::post('citacoes/registrarcitacao', 'CitacoesController@postRegistrarcitacao');

Route::controller('citacoes', 'CitacoesController');

