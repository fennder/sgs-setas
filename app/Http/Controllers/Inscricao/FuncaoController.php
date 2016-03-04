<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Funcao;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class FuncaoController extends Controller
{
    private $funcao;

    public function __construct(Funcao $funcao)
    {
        $this->funcao = $funcao;

        //$this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcoes = $this->funcao->paginate(4);
    
        $page_title = "SGS";
        $page_description = "Lista de Funções";
        $nav = "Função";

        return view('funcao.index',
        [
            'nav' => $nav,
            'funcoes' => $funcoes, 
            'page_title'=>$page_title, 
            'page_description'=>$page_description
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
        $nav = "Função";

        return view('funcao.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title, 
            'page_description' => $page_description
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
        $funcoes = $this->funcao->find($id);
        
        return view('funcao.edit',
        [
            'nav' => $nav,
            'funcoes' => $funcoes, 
            'page_description' => $page_description
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
