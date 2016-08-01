<?php

namespace Gerenciador\Http\Controllers;

use Gerenciador\User;
use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Inscricao\Estado;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Deficiencia;
use Gerenciador\Inscricao\Escolaridade;
use Gerenciador\Inscricao\Inscricao;
use Gerenciador\Inscricao\VinculoInstitucional;
use Gerenciador\Inscricao\Funcao;
use Gerenciador\Inscricao\Departamento;
use Gerenciador\Inscricao\Orgao;
use Gerenciador\Inscricao\Cargo;
use Gerenciador\Inscricao\Usuario;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Auth;


class HomeController extends Controller
{

    private $usuario;
    private $estado;
    private $cidade;
    private $escolaridade;
    private $estado_rg;
    private $vinculo;
    private $orgao;
    private $departamento;
    private $cargo;
    private $funcao;

    public function __construct(Funcao $funcao, Cargo $cargo, Departamento $departamento, Orgao $orgao, VinculoInstitucional $vinculo, User $usuario, Estado $estado_rg, Estado $estado, Cidade $cidade, Escolaridade $escolaridade, Curso $curso, Inscricao $inscricao)
    {
        $this->usuario = $usuario;
        $this->estado = $estado;
        $this->estado_rg = $estado_rg;
        $this->cidade = $cidade;
        $this->inscricao = $inscricao;
        $this->escolaridade = $escolaridade;
        $this->vinculo = $vinculo;
        $this->orgao = $orgao;
        $this->departamento = $departamento;
        $this->cargo = $cargo;
        $this->funcao = $funcao;
        $this->curso = $curso;
        
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        if(Auth::check()){

            $usuario = Auth::user();          

            if($usuario->dados_atualizados == 0){
                
                $nav = "Editar";

                $usuarios = $usuario;
                $estados = $this->estado->all();
                $cidades = $this->cidade->all();
                $estado_rgs = $this->estado_rg->all();
                $escolaridades = $this->escolaridade->all(); 
                $vinculos = $this->vinculo->all();
                $orgaos = $this->orgao->all();
                $departamentos = $this->departamento->all();
                $cargos = $this->cargo->all();
                $funcoes = $this->funcao->all();

               
                return view('user.editar',
                [
                    'nav' => $nav,
                    'escolaridades' => $escolaridades, 
                    'estados' => $estados, 
                    'cidades' => $cidades,
                    'vinculos' => $vinculos,
                    'usuarios' => $usuarios,
                    'orgaos' => $orgaos,
                    'departamentos' => $departamentos,
                    'cargos' => $cargos,
                    'funcoes' => $funcoes,
                    'estado_rgs' => $estado_rgs
                ]);

            }else{

                $page_title = "SGI";
                $page_description = "Sistema de Gerenciamento de Inscrições";
                $lotacao = "Secretaria do Trabalho e Assistência Social";

                $cursos = $this->curso->all();
                for($i=0; $i < count($cursos); $i++){
                    $cont_curso = $i+1;
                }


                $users = $this->usuario->all();
                for($i=0; $i < count($users); $i++){
                    $cont_user = $i+1;
                }

                $inscricoes = $this->inscricao->all();
                for($i=0; $i < count($inscricoes); $i++){
                    $cont_ins = $i+1;
                }

                return view('home', 
                    [
                        'page_description' => $page_description,
                        'page_title' => $page_title, 
                        'lotacao' => $lotacao, 
                        'cont_curso' => $cont_curso,
                        'cont_user' => $cont_user,
                        'cont_ins' => $cont_ins,
                        'usuarios' => $usuario, 
                        'cursos' => $cursos
                    ]);

            }
        
        }else{

            return view('auth/login');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}