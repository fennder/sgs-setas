<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Modulo;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class ModuloController extends Controller
{
    private $modulo;
    private $curso;

    public function __construct(Modulo $modulo, Curso $curso)
    {
    
        $this->modulo = $modulo;
        $this->curso = $curso;

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = $this->modulo->paginate(4);
    
        $page_title = "SGS";
        $page_description = "Lista de Modulos";
        $nav = "Modulos";

        return view('modulo.index',
        [
            'nav' => $nav,
            'modulos' => $modulos, 
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
        $page_description = "Cadastro de Modulos";
        $nav = "Modulos";

        $cursos = $this->curso->all();

        return view('modulo.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title, 
            'page_description' => $page_description,
            'cursos' => $cursos
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
        $this->modulo->create($request->all());

        return redirect()->route('m.index');
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
        $page_description = "Editar Módulo";
        
        //dd($this->modulo->find($id));
        $modulos = $this->modulo->find($id);
        $cursos = $this->curso->all();
        
        return view('modulo.edit',
        [
            'nav' => $nav,
            'cursos' => $cursos,
            'modulos' => $modulos, 
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
        $modulos = $this->modulo->find($id);
        $modulos->update($request->all());

        return redirect()->route('m.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->modulo->destroy($id);

        return redirect()->back();
    }
}
