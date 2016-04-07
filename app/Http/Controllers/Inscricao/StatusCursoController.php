<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\StatusCurso;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;

class StatusCursoController extends Controller
{
    private $scurso;

    public function __construct(StatusCurso $scurso)
    {
        $this->scurso = $scurso;

        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $scursos = $this->scurso->paginate(4);
        $usuarios = Auth::user();
    
        $page_title = "SGS";
        $page_description = "Listas de Status de Curso";
        $nav = "Status Curso";

        return view('status_curso.index',
        [
            'nav' => $nav,
            'scursos' => $scursos, 
            'page_title'=>$page_title, 
            'usuarios'=>$usuarios, 
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
        $page_description = "Cadastro de Status do Curso";
        $nav = "Status Curso";

        return view('status_curso.create',
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
        $this->scurso->create($request->all());

        return redirect()->route('sc.index');

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
        $page_description = "Editar Status de Curso";
        $scursos = $this->scurso->find($id);
        
        return view('status_curso.edit',
        [
            'nav' => $nav,
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
        $scursos = $this->scurso->find($id);
        $scursos->update($request->all());

        return redirect()->route('sc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->scurso->destroy($id);

        return redirect()->back();
    }
}
