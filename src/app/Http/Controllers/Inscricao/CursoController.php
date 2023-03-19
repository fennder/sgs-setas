<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Inscricao\StatusCurso;
use Gerenciador\Inscricao\Inscricao;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Regiao;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Http\Requests;
use Illuminate\Http\Request;
use Gerenciador\User;
use Auth;
use DB;

class CursoController extends Controller
{
    private $inscricao;
    private $usuario;
    private $scurso;
    private $regiao;
    private $cidade;
    private $curso;

    public function __construct(Inscricao $inscricao, Cidade $cidade, Regiao $regiao, User $usuario, Curso $curso, StatusCurso $scurso)
    {
        $this->inscricao = $inscricao;
        $this->usuario = $usuario;
        $this->scurso = $scurso;
        $this->regiao = $regiao;
        $this->cidade = $cidade;
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
        if(Auth::check()){

            $page_title = "Lista de Cursos";
            $page_description = "Sistema de Gerenciamento de Inscrições";
            $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
            $nav = "Curso";

            $cursos = $this->curso->orderBy('id_status_curso', 'asc')->orderBy('data_inicio', 'desc')->orderBy('id_curso', 'asc')->paginate(10);
            $usuarios = Auth::user();

            return view('curso.index',
            [
                'nav' => $nav,
                'cursos' => $cursos,
                'page_title'=>$page_title,
                'usuarios'=>$usuarios,
                'page_description' => $page_description,
                'lotacao' => $lotacao
            ]);        

        }else{

            return view('auth/login');

        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){

        $page_title = "Criar Curso";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
        $nav = "Curso";

        $scursos = $this->scurso->all();
        $usuarios = Auth::user();

        return view('curso.create',
        [
            'page_description' => $page_description,
            'lotacao' => $lotacao,
            'page_title' => $page_title,
            'usuarios' => $usuarios,
            'scursos' => $scursos,
            'scursos'=>$scursos,
            'nav' => $nav
        ]);

        }else{

            return view('auth/login');

        }

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

        if(Auth::check()){

        $page_title = "Lista de Presença - SGI";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
        $nav = "Mostrar";

        $i = 0;
        $curso = $this->curso->find($id);
        $usuarios = Auth::user();
        $inscritos = $curso->usuarios->all();
        $inscricoes = $this->inscricao->all();

        return view('curso.show',
        [
            'page_description' => $page_description,
            'page_title'  => $page_title,
            'inscricoes' => $inscricoes,
            'inscritos' => $inscritos,
            'usuarios' => $usuarios,
            'lotacao' => $lotacao,
            'curso' => $curso,
            'nav' => $nav,
            'i' => $i
       
        ]);   

        }else{

            return view('auth/login');

        }
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
        $page_title = "Editar Curso";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";

        $cursos = $this->curso->find($id);
        $scursos = $this->scurso->all();
        $usuarios = Auth::user();
        
        return view('curso.edit',
        [
            'page_description' => $page_description,
            'page_title' => $page_title,
            'lotacao' => $lotacao,
            'usuarios' => $usuarios,
            'scursos' => $scursos,
            'cursos' => $cursos,
            'nav' => $nav
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