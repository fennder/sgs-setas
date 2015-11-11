<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|post,get,put,delete
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('layout-backend.admin_template');
});

Route::get('/home', 'HomeController@index');

Route::get('/contrato', 'ContratoController@index');

Route::get('/contrato/store', 'ContratoController@store');

Route::get('/contrato/create', 'ContratoController@create');

Route::get('/contrato/delete/{$contrato->id_cc}', 'ContratoController@destroy');

Route::get('/contrato/edit/{$contrato->id_cc}', 'ContratoController@edit');

/* 
Route::get('','');
Route::get('',function(){
	return this;
});
*/