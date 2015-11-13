<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post,get,put,delete
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('home', 'HomeController@index');

Route::get('test', 'TestController@index');

Route::get('form', 'FormController@index');

Route::get('tabela', 'TabelaController@index');

Route::get('contrato', 'ContratoController@index');

Route::get('/contrato/store', 'ContratoController@store');

Route::get('/contrato/create', 'ContratoController@create');

Route::get('/contrato/delete/{id}', 'ContratoController@destroy');

Route::get('/contrato/edit/{id}', 'ContratoController@edit');

/*Route::controller([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

/* 
Route::get('','');
Route::get('',function(){
	return this;
});
*/