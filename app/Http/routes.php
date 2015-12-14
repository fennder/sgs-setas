<?php

Route::get('', function(){

	return redirect()->route('a.getLogin');

});

Route::group(['as' => 'a.', 'prefix' => 'auth'], function()
{
	Route::get('login', 		['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('login', 		['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);
	Route::get('logout', 		['as' => 'getLogout', 'uses' => 'Auth\AuthController@getLogout']);
	Route::get('register', 		['as' => 'getRegister', 'uses' => 'Auth\AuthController@getRegister']);
	Route::post('register',		['as' => 'postRegister', 'uses' => 'Auth\AuthController@postRegister']); 	
});

Route::group(['as' => 'h.', 'prefix' => 'home'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'HomeController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'HomeController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'HomeController@store']);
	Route::get('editar/{id}', 		['as' => 'edit', 	'uses' => 'HomeController@edit']);
	Route::post('atualizar/{id}', 	['as' => 'update', 	'uses' => 'HomeController@update']);
	Route::get('remover/{id}', 		['as' => 'destroy', 'uses' => 'HomeController@destroy']);
});

Route::group(['as' => 'u.', 'prefix' => 'users'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'UsersController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'UsersController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'UsersController@store']);
	Route::get('editar/{id}', 		['as' => 'edit', 	'uses' => 'UsersController@edit']);
	Route::post('atualizar/{id}', 	['as' => 'update', 	'uses' => 'UsersController@update']);
	Route::get('remover/{id}', 		['as' => 'destroy', 'uses' => 'UsersController@destroy']);
});

Route::group(['as' => 'i.', 'prefix' => 'usuario'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\UsuarioController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\UsuarioController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\UsuarioController@store']);
	Route::get('editar/{id}', 		['as' => 'edit', 	'uses' => 'Inscricao\UsuarioController@edit']);
	Route::post('atualizar/{id}', 	['as' => 'update', 	'uses' => 'Inscricao\UsuarioController@update']);
	Route::get('remover/{id}', 		['as' => 'destroy', 'uses' => 'Inscricao\UsuarioController@destroy']);
});