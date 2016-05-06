<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Inscricao\Estado;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Deficiencia;
use Gerenciador\Inscricao\Escolaridade;
use Gerenciador\Inscricao\VinculoInstitucional;
use Gerenciador\Inscricao\Funcao;
use Gerenciador\Inscricao\Departamento;
use Gerenciador\Inscricao\Orgao;
use Gerenciador\Inscricao\Cargo;
use Gerenciador\User;
use Gerenciador\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Auth;

class UsuarioController extends Controller
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

    public function __construct(Funcao $funcao, Cargo $cargo, Departamento $departamento, Orgao $orgao, VinculoInstitucional $vinculo, User $usuario, Estado $estado_rg, Estado $estado, Cidade $cidade, Escolaridade $escolaridade)
    {
        $this->usuario = $usuario;
        $this->estado = $estado;
        $this->estado_rg = $estado_rg;
        $this->cidade = $cidade;
        $this->escolaridade = $escolaridade;
        $this->vinculo = $vinculo;
        $this->orgao = $orgao;
        $this->departamento = $departamento;
        $this->cargo = $cargo;
        $this->funcao = $funcao;

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
        $page_description = "(Cadastro de Usuários)";
        $nav = "Lista de usuários";

        $usuarios = $this->usuario->paginate(15);
        $estado_rgs = $this->estado_rg->all();
        $vinculos =$this->vinculo->all();

        return view('inscrito.index',
        [
            'nav' => $nav,
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'usuarios' => $usuarios, 
            'estado_rgs' => $estado_rgs,
            'vinculos' => $vinculos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = $this->estado->all();
        $usuarios = $this->usuario->all();
        $cidades = $this->cidade->all();
        $estado_rgs = $this->estado_rg->all();
        $escolaridades = $this->escolaridade->all(); 
        $vinculos =$this->vinculo->all();
        $orgaos =$this->orgao->all();
        $departamentos =$this->departamento->all();
        $cargos =$this->cargo->all();
        $funcoes =$this->funcao->all();
        
        $page_title = "SGI";
        $page_description = "(Cadastro de Usuários)";
        $nav = "Cadastro de usuários";

        return view('inscrito.create',
        [
            'nav' => $nav,
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'escolaridades' => $escolaridades, 
            'estados' => $estados, 
            'cidades' => $cidades,
            'usuarios' => $usuarios,
            'vinculos' => $vinculos,
            'orgaos' => $orgaos,
            'departamentos' => $departamentos,
            'cargos' => $cargos,
            'funcoes' => $funcoes,
            'estado_rgs' => $estado_rgs
            
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
        
        $usuarios = $this->usuario->create($request->all());

        return redirect()->route('i.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$usuarios = Auth::user();

        $estados = $this->estado->all();
        $cidades = $this->cidade->all();
        $estado_rgs = $this->estado_rg->all();
        $escolaridades = $this->escolaridade->all(); 
        $vinculos =$this->vinculo->all();
        $orgaos =$this->orgao->all();
        $departamentos =$this->departamento->all();
        $cargos =$this->cargo->all();
        $funcoes =$this->funcao->all();

        return view('inscrito.show',
        [
            'escolaridades' => $escolaridades, 
            'estados' => $estados, 
            'cidades' => $cidades,
            'usuarios' => $usuarios,
            'vinculos' => $vinculos,
            'orgaos' => $orgaos,
            'departamentos' => $departamentos,
            'cargos' => $cargos,
            'funcoes' => $funcoes,
            'estado_rgs' => $estado_rgs
        ]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nav = "Editar usuário";

        $usuarios = $this->usuario->find($id);
        $estados = $this->estado->all();
        $cidades = $this->cidade->all();
        $estado_rgs = $this->estado_rg->all();
        $escolaridades = $this->escolaridade->all(); 
        $vinculos = $this->vinculo->all();
        $orgaos = $this->orgao->all();
        $departamentos = $this->departamento->all();
        $cargos = $this->cargo->all();
        $funcoes = $this->funcao->all();
        $perfis = $this->perfil->all();
        
        return view('inscrito.edit',
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
            'estado_rgs' => $estado_rgs,
            'perfis' => $perfis
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
        /*dd($request->all());*/
        $usuarios = $this->usuario->find($id);
        $usuarios->update($request->all());

        return redirect()->route('i.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->usuario->destroy($id);

        return redirect()->back();
    }
}