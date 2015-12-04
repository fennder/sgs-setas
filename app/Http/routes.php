<?php

Route::get('/', 'Auth\AuthController@getLogin'); //Retorna login

//Login
Route::get('auth/login', 'Auth\AuthController@getLogin'); //Retorna formulário de login
Route::post('auth/login', 'Auth\AuthController@postLogin'); //Envia requisição de login
Route::get('auth/logout', 'Auth\AuthController@getLogout'); //

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Página inicial do SGS
Route::get('home', 'HomeController@index');

//Listar, Deletar e Alterar Usuários
Route::get('user/lista', 'UserController@index');
Route::get('user/delete/{id}', 'UserController@destroy');
Route::get('user/editar', function(){
	return view('user/editar');
});
Route::get('perfil', function(){
	return view('user/perfil');
});
