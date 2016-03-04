<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Departamento;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class DepartamentoController extends Controller
{

    private $departamento;

    public function __construct(Departamento $departamento)
    {
        $this->departamento = $departamento;
        
        //$this->middleware('guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = $this->departamento->paginate(4);
    
        $page_title = "SGS";
        $page_description = "Lista de Departamentos";
        $nav = "Departamento";

        return view('departamento.index',
        [
            'nav' => $nav,
            'departamentos' => $departamentos, 
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
        $page_description = "Cadastro de Departamento";
        $nav = "Departamento";

        return view('departamento.create',
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
        $this->departamento->create($request->all());

        return redirect()->route('dep.index');
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
        $page_description = "Editar Departamento";
        $departamentos = $this->departamento->find($id);
        
        return view('departamento.edit',
        [
            'nav' => $nav,
            'departamentos' => $departamentos, 
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
        $departamentos = $this->departamento->find($id);
        $departamentos->update($request->all());

        return redirect()->route('dep.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->departamento->destroy($id);

        return redirect()->back();
    }
}
