<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Funcao;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;

class FuncaoController extends Controller
{
    private $funcao;

    public function __construct(Funcao $funcao)
    {
        $this->funcao = $funcao;

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page_title = "SGI";
        $page_description = "(Lista de Funções)";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $nav = "Função";

        $funcoes = $this->funcao->paginate(25);
        $usuarios = Auth::user();

        return view('funcao.index',
        [
            'nav' => $nav, 
            'page_title'=>$page_title,  
            'page_description'=>$page_description,
            'lotacao'=>$lotacao,
            'funcoes' => $funcoes,
            'usuarios'=>$usuarios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "SGS";
        $page_description = "Cadastro de Função";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $nav = "Função";

        $usuarios = Auth::user();

        return view('funcao.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title, 
            'page_description' => $page_description,
            'lotacao' => $lotacao,
            'usuarios' => $usuarios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->funcao->create($request->all());

        return redirect()->route('f.index');
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
        $nav = "Editar";
        $page_description = "Editar Função";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $funcoes = $this->funcao->find($id);
        $usuarios = Auth::user();
        
        return view('funcao.edit',
        [
            'nav' => $nav,
            'funcoes' => $funcoes, 
            'page_description' => $page_description,
            'lotacao' => $lotacao,
            'usuarios' => $usuarios
        ]);
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
        $funcoes = $this->funcao->find($id);
        $funcoes->update($request->all());

        return redirect()->route('f.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->funcao->destroy($id);

        return redirect()->back();
    }
}
