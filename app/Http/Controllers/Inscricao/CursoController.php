<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Inscricao\StatusCurso;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class CursoController extends Controller
{
    private $curso;
    private $scurso;

    public function __construct(Curso $curso, StatusCurso $scurso)
    {
        $this->curso = $curso;
        $this->scurso = $scurso;

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cursos = $this->curso->paginate(4);
    
        $page_title = "SGS";
        $page_description = "Lista de Cursos";
        $nav = "Curso";

        return view('curso.index',
        [
            'nav' => $nav,
            'cursos' => $cursos,  
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
        $page_description = "Cadastro de Cursos";
        $nav = "Curso";

        $scursos = $this->scurso->all();

        return view('curso.create',
        [
            'nav' => $nav,
            'scursos'=>$scursos,
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
        
        $this->curso->create($request->all());
        
        return redirect()->route('cs.index');
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
        $page_description = "Editar Curso";

        $cursos = $this->curso->find($id);
        $scursos = $this->scurso->all();
        
        return view('curso.edit',
        [
            'nav' => $nav,
            'cursos' => $cursos, 
            'scursos' => $scursos, 
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
        $cursos = $this->curso->find($id);
        $cursos->update($request->all());

        return redirect()->route('cs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->curso->destroy($id);
        
        return redirect()->back();
        
    }
}