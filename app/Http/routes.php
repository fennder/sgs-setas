<?php
Route::get('', function()
{
	return redirect()->route('h.index');
});

Route::group(['as' => 'h.', 'prefix' => 'home'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'HomeController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'HomeController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'HomeController@store']);
	Route::get('editar/{id}', 		['as' => 'edit', 	'uses' => 'HomeController@edit']);
	Route::post('atualizar/{id}', 	['as' => 'update', 	'uses' => 'HomeController@update']);
	Route::delete('remover/{id}', 	['as' => 'destroy', 'uses' => 'HomeController@destroy']);
});

Route::group(['as' => 'a.', 'prefix' => 'auth'], function()
{
	Route::get('login', 	['as' => 'getLogin', 		'uses' => 'Auth\AuthController@getLogin']); //login formulário
	Route::post('login', 	['as' => 'postLogin', 		'uses' => 'Auth\AuthController@postLogin']); //envio login formulário
	Route::get('logout', 	['as' => 'getLogout', 		'uses' => 'Auth\AuthController@getLogout']); //saída logout
	Route::get('register', 	['as' => 'getRegister', 	'uses' => 'Auth\AuthController@getRegister']); //register formulário
	Route::post('register',	['as' => 'postRegister', 	'uses' => 'Auth\AuthController@postRegister']); //envio register formulário
});

Route::group(['as' => 'p.', 'prefix' => 'password'], function()
{
	Route::get('email', 		['as' => 'getEmail', 	'uses' => 'Auth\PasswordController@getEmail']);
	Route::post('email', 		['as' => 'postEmail', 	'uses' => 'Auth\PasswordController@postEmail']);
	Route::get('reset/{token}', ['as' => 'getReset', 	'uses' => 'Auth\PasswordController@getReset']);
	Route::post('reset', 		['as' => 'postReset', 	'uses' => 'Auth\PasswordController@postReset']);
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

Route::group(['as' => 'c.', 'prefix' => 'cargo'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\CargoController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\CargoController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\CargoController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\CargoController@edit']);
	Route::post('atualizar/{id}',	['as' => 'update', 	'uses' => 'Inscricao\CargoController@update']);
	Route::get('remover/{id}',		['as' => 'destroy', 'uses' => 'Inscricao\CargoController@destroy']);
});

Route::group(['as' => 'o.', 'prefix' => 'orgao'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\OrgaoController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\OrgaoController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\OrgaoController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\OrgaoController@edit']);
	Route::post('atualizar/{id}',	['as' => 'update', 	'uses' => 'Inscricao\OrgaoController@update']);
	Route::get('remover/{id}',		['as' => 'destroy', 'uses' => 'Inscricao\OrgaoController@destroy']);
});

Route::group(['as' => 'r.', 'prefix' => 'regiao'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\RegiaoController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\RegiaoController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\RegiaoController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\RegiaoController@edit']);
	Route::post('atualizar/{id}',	['as' => 'update', 	'uses' => 'Inscricao\RegiaoController@update']);
	Route::get('remover/{id}',		['as' => 'destroy', 'uses' => 'Inscricao\RegiaoController@destroy']);
});

Route::group(['as' => 'est.', 'prefix' => 'estado'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\EstadoController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\EstadoController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\EstadoController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\EstadoController@edit']);
	Route::post('atualizar/{id}',	['as' => 'update', 	'uses' => 'Inscricao\EstadoController@update']);
	Route::get('remover/{id}',		['as' => 'destroy', 'uses' => 'Inscricao\EstadoController@destroy']);
});

Route::group(['as' => 'cid.', 'prefix' => 'cidade'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\CidadeController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\CidadeController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\CidadeController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\CidadeController@edit']);
	Route::post('atualizar/{id}',	['as' => 'update', 	'uses' => 'Inscricao\CidadeController@update']);
	Route::get('remover/{id}',		['as' => 'destroy', 'uses' => 'Inscricao\CidadeController@destroy']);
});

Route::group(['as' => 'm.', 'prefix' => 'modulo'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\ModuloController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\ModuloController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\ModuloController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\ModuloController@edit']);
	Route::post('atualizar/{id}',	['as' => 'update', 	'uses' => 'Inscricao\ModuloController@update']);
	Route::get('remover/{id}',		['as' => 'destroy', 'uses' => 'Inscricao\ModuloController@destroy']);
});

Route::group(['as' => 'f.', 'prefix' => 'funcao'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\FuncaoController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\FuncaoController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\FuncaoController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\FuncaoController@edit']);
	Route::post('atualizar/{id}',	['as' => 'update', 	'uses' => 'Inscricao\FuncaoController@update']);
	Route::get('remover/{id}',		['as' => 'destroy', 'uses' => 'Inscricao\FuncaoController@destroy']);
});

Route::group(['as' => 'sc.', 'prefix' => 'status_curso'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\StatusCursoController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\StatusCursoController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\StatusCursoController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\StatusCursoController@edit']);
	Route::post('atualizar/{id}',	['as' => 'update', 	'uses' => 'Inscricao\StatusCursoController@update']);
	Route::get('remover/{id}',		['as' => 'destroy', 'uses' => 'Inscricao\StatusCursoController@destroy']);
});

Route::group(['as' => 'i.', 'prefix' => 'inscritos'], function()
{
	Route::get('', 					['as' => 'index', 	'uses' => 'Inscricao\UsuarioController@index']);
	Route::get('novo', 				['as' => 'create', 	'uses' => 'Inscricao\UsuarioController@create']);
	Route::post('inserir', 			['as' => 'store', 	'uses' => 'Inscricao\UsuarioController@store']);
	Route::get('editar/{id}',		['as' => 'edit', 	'uses' => 'Inscricao\UsuarioController@edit']);
	Route::post('atualizar/{id}', 	['as' => 'update', 	'uses' => 'Inscricao\UsuarioController@update']);
	Route::get('remover/{id}', 		['as' => 'destroy', 'uses' => 'Inscricao\UsuarioController@destroy']);
});