<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Estado;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class CidadeController extends Controller
{
    private $estado;
    private $cidade;

    public function __construct(Estado $estado, Cidade $cidade)
    {
    
        $this->estado = $estado;
        $this->cidade = $cidade;

        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = $this->cidade->paginate(4);
    
        $page_title = "SGS";
        $page_description = "Lista de Cidades";
        $nav = "Cidades";

        return view('cidade.index',
        [
            'nav' => $nav,
            'cidades' => $cidades, 
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
        $page_description = "Cadastro de Cidades";
        $nav = "Cidade";

        return view('cidade.create',
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
        
        return view('cidade.edit',
        [
            'nav' => $nav,
            'cidades' => $cidades, 
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