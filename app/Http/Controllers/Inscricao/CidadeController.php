<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Estado;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Regiao;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class CidadeController extends Controller
{
    private $estado;
    private $cidade;
    private $regiao;

    public function __construct(Estado $estado, Cidade $cidade, Regiao $regiao)
    {
    
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->regiao = $regiao;

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = $this->cidade->paginate(4);
        $estados = $this->estado->all();
        $regioes = $this->regiao->all();
    
        $page_title = "SGS";
        $page_description = "Lista de Cidades";
        $nav = "Cidades";

        return view('cidade.index',
        [
            'nav' => $nav,
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'cidades' => $cidades,
            'estados' => $estados,
            'regioes' => $regioes
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
        $page_description = "Cadastro de Cidades";
        $nav = "Cidade";

        $estados = $this->estado->all();
        $regioes = $this->regiao->all();

        return view('cidade.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title, 
            'page_description' => $page_description,
            'estados' => $estados,
            'regioes' => $regioes
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
        $this->cidade->create($request->all());

        return redirect()->route('cid.index');

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
        $page_description = "Editar Cidade";

        $cidades = $this->cidade->find($id);
        $estados = $this->estado->all();
        $regioes = $this->regiao->all();
        
        return view('cidade.edit',
        [
            'nav' => $nav,
            'cidades' => $cidades, 
            'page_description' => $page_description,
            'estados' => $estados,
            'regioes' => $regioes
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
        $cidades = $this->cidade->find($id);
        $cidades->update($request->all());

        return redirect()->route('cid.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cidade->destroy($id);

        return redirect()->back();

    }
}