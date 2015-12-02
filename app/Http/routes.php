<?php

//Primeiro acesso redirecionamento para a tela de login
Route::get('/', 'Auth\AuthController@getLogin');

//
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Página inicial do SGS
Route::get('/home', 'HomeController@index');


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Listar, Deletar e Alterar Usuários
Route::get('auth/lista', 'Auth\ListaController@index');
Route::get('auth/user/delete/{id}', 'UserController@destroy');
Route::get('auth/editar', 'UserController@edit');