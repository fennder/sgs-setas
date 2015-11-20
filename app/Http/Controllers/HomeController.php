<?php

namespace Gerenciador\Http\Controllers;

use Illuminate\Http\Request;

use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        /*$user = new \Gerenciador\User();
        $users = $users->all();

        $nome = $user->'user';*/

        $page_title = "SGS";
        $page_description = "Sistema de Gerenciamento de Sistemas da SETAS";

        $nome = "Guest";
        $lotacao = "Secretaria do Trabalho e da Assistência Social";

        return view('home',['nome'=>$nome, 'lotacao'=>$lotacao, 'page_title'=>$page_title, 'page_description'=>$page_description]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
