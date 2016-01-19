<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Gerenciador\Http\Controllers\Controller;

use Gerenciador\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Auth;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $usuarios = \Gerenciador\Inscricao\Usuario::paginate(5);
            
            $page_title = "SGS";
            $page_description = "Cadastro de Usuários";
            $nav = "Lista";

            return view('inscricao.index',['nav' => $nav,'usuarios' => $usuarios, 'page_title'=>$page_title, 'page_description'=>$page_description]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "SGS";
        $page_description = "Cadastro de Usuários";
        $nav = "Cadastro";

        return view('inscricao/create',['nav' => $nav,'page_title'=>$page_title, 'page_description'=>$page_description]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario = $request;

        //dd($request);

        $usuario->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = Usuario::find($id_usuario);

        return view('inscricao.show')->with(compact('usuarios'));
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
    public function destroy($id_usuario)
    {
        Usuario::destroy($id_usuario);

        return redirect()->back();
    }
}
