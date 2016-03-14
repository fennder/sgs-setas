<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Deficiencia;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class DeficienciaController extends Controller
{
    private $deficiencia;

    public function __construct(Deficiencia $deficiencia)
    {
        $this->deficiencia = $deficiencia;

        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $deficiencias = $this->deficiencia->paginate(4);
    
        $page_title = "SGS";
        $page_description = "Lista de Deficiências";
        $nav = "Deficiência";

        return view('deficiencia.index',
        [
            'nav' => $nav,
            'deficiencias' => $deficiencias, 
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
        $page_description = "Cadastro de Deficiência";
        $nav = "Deficiência";

        return view('deficiencia.create',
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
        $this->deficiencia->create($request->all());

        return redirect()->route('d.index');
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
        $page_description = "Editar Deficência";
        $deficiencias = $this->deficiencia->find($id);
        
        return view('deficiencia.edit',
        [
            'nav' => $nav,
            'deficiencias' => $deficiencias, 
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
        $deficiencias = $this->deficiencia->find($id);
        $deficiencias->update($request->all());

        return redirect()->route('d.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->deficiencia->destroy($id);

        return redirect()->back();
    }
}
