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

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $scursos = $this->scurso->paginate(25);
        $usuarios = Auth::user();
    
        $page_title = "Lista de status de cursos";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";

        $nav = "Status de Curso";

        return view('status_curso.index',
        [
            'nav' => $nav,
            'scursos' => $scursos, 
            'page_title'=>$page_title, 
            'lotacao'=>$lotacao, 
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
        $page_title = "Criar Status";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";

        $nav = "Status Curso";
        $usuarios = Auth::user();

        
        return view('status_curso.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title, 
            'lotacao' => $lotacao, 
            'page_description' => $page_description,
            'usuarios'=> $usuarios
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
        abort(404);
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
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
        
        $scursos = $this->scurso->findOrFail($id);
        $usuarios = Auth::user();

        
        return view('status_curso.edit',
        [
            'nav' => $nav,
            'scursos' => $scursos, 
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
        $scursos = $this->scurso->findOrFail($id);
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
