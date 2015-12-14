<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;

use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;
use Session;
use Gerenciador\Inscricao\Usuario;

class UsuarioController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){

            $id_usuario = Session::get('id_usuario');
            $usuario = New Usuario();

            $inscritos = $inscrito->all();
            $inscritos = $inscrito->find($id_usuario);

            $inscritos = Usuario::paginate(10);

            $page_description = "Sistema de Gerenciamento de Sistemas da SETAS";
            $nav = "Inscritos";

            return view('inscricao/lista',['nav' => $nav, 'inscritos' => $inscritos, 'page_description'=>$page_description]);

        }else{

            return view('auth/login');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
