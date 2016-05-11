<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Inscricao\StatusCurso;
use Gerenciador\Inscricao\Regiao;
use Gerenciador\Inscricao\Inscricao;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Gerenciador\User;
use DB;
use Auth;

class CursoController extends Controller
{
    private $curso;
    private $scurso;
    private $usuario;

    public function __construct(Inscricao $inscricao, Cidade $cidade, Regiao $regiao, User $usuario, Curso $curso, StatusCurso $scurso)
    {
        $this->curso = $curso;
        $this->scurso = $scurso;
        $this->usuario = $usuario;
        $this->regiao = $regiao;
        $this->cidade = $cidade;
        $this->inscricao = $inscricao;

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
        $page_description = "(Lista de Cursos)";
        $nav = "Curso";

        $cursos = $this->curso->orderBy('id_status_curso', 'asc')->paginate(25);
        $usuarios = Auth::user();

        return view('curso.index',
        [
            'nav' => $nav,
            'cursos' => $cursos,  
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

        $page_title = "SGI";
        $page_description = "(Cadastro de Cursos)";
        $nav = "Curso";

        $scursos = $this->scurso->all();
        $usuarios = Auth::user();

        return view('curso.create',
        [
            'nav' => $nav,
            'scursos'=>$scursos,
            'page_title' => $page_title, 
            'usuarios' => $usuarios, 
            'scursos' => $scursos, 
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
        $page_title = "SGI";
        $page_description = "Turma do Curso";
        $nav = "Mostrar";

        $i = 0;
        $curso = $this->curso->find($id);
        $usuarios = Auth::user();
        $inscricoes = $this->inscricao->where('status','=','Deferido')->get();
        $inscritos = $curso->usuarios->all();
        
        return view('curso.show',
        [
            'page_title'  => $page_title,
            'page_description' => $page_description,
            'nav' => $nav,
            'i' => $i, 
            'inscritos' => $inscritos,
            'usuarios' => $usuarios,
            'curso' => $curso,
            'inscricoes' => $inscricoes
       
        ]);
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
        $usuarios = Auth::user();
        
        return view('curso.edit',
        [
            'nav' => $nav,
            'page_description' => $page_description,
            'cursos' => $cursos, 
            'scursos' => $scursos, 
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