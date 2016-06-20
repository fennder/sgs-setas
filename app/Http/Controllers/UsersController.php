<?php

namespace Gerenciador\Http\Controllers;

use Gerenciador\Inscricao\VinculoInstitucional;
use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Inscricao\Escolaridade;
use Gerenciador\Inscricao\Departamento;
use Gerenciador\Inscricao\Estado;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Funcao;
use Gerenciador\Inscricao\Perfil;
use Gerenciador\Inscricao\Cargo;
use Gerenciador\Inscricao\Orgao;
use Gerenciador\Http\Requests;
use Illuminate\Http\Request;
use Gerenciador\User;
use Session;
use Auth;

class UsersController extends Controller
{
    private $estado_rg;
    private $user;
    private $cidade;
    private $estado;
    private $escolaridade;
    private $vinculo;
    private $orgao;
    private $departamento;
    private $cargo;
    private $funcao;
    private $perfil;

    public function __construct(Perfil $perfil, Funcao $funcao, Cargo $cargo, Departamento $departamento, Orgao $orgao, User $user, Estado $estado_rg, Cidade $cidade, Estado $estado, Escolaridade $escolaridade, Vinculoinstitucional $vinculo)
    {
        $this->user = $user;
        $this->estado_rg = $estado_rg;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->escolaridade = $escolaridade;
        $this->vinculo = $vinculo;
        $this->orgao = $orgao;
        $this->departamento = $departamento;
        $this->cargo = $cargo;
        $this->funcao = $funcao;
        $this->perfil = $perfil;

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

            $page_title = "SGI";
            $page_description = "Sistema de Gerenciamento de Inscrição";
            $nav = "Lista";
            
            $usuarios = Auth::user();
            $perfis = $this->perfil->all();
            if($usuarios->id_perfil == 2){
                $users = $this->user->where('id_perfil', '>=', 2)->orderBy('name', 'asc')->paginate(15);
            }else{
                $users = $this->user->orderBy('name', 'asc')->paginate(15);
            }

            return view('user.lista',
                [
                    'nav' => $nav,
                    'users' => $users,
                    'page_title'=>$page_title,
                    'usuarios'=>$usuarios,
                    'perfis'=>$perfis,
                    'page_description'=>$page_description
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
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*if($validator->fails()){
            $validator->messages()->first();
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $page_title = "SGI";
        $page_description = "Sistema de Gerenciamento de Inscrição";
        $nav = "Meus dados";

        $usuarios = Auth::user();

        $estados = $this->estado->all();
        $cidades = $this->cidade->all();
        $estado_rgs = $this->estado_rg->all();
        $escolaridades = $this->escolaridade->all(); 
        $vinculos =$this->vinculo->all();
        $orgaos =$this->orgao->all();
        $departamentos =$this->departamento->all();
        $cargos =$this->cargo->all();
        $funcoes =$this->funcao->all();

        return view('user.show',
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

        $verifica = Auth::user();

        if($verifica->id_perfil == 1){
            $usuarios = $this->user->find($id);
            $estado_rgs = $this->estado_rg->all();
            $cidades = $this->cidade->all();
            $estados = $this->estado->all();
            $escolaridades = $this->escolaridade->all();
            $vinculos = $this->vinculo->all();
            $orgaos = $this->orgao->all();
            $departamentos = $this->departamento->all();
            $cargos = $this->cargo->all();
            $funcoes = $this->funcao->all();
            $perfis = $this->perfil->all();
            
            return view('user.admin_editar', 
            [
                'usuarios' => $usuarios,
                'estado_rgs' => $estado_rgs,
                'cidades' => $cidades,
                'estados' => $estados,
                'escolaridades' => $escolaridades,
                'vinculos' => $vinculos,
                'departamentos' => $departamentos,
                'cargos' => $cargos,
                'funcoes' => $funcoes,
                'orgaos' => $orgaos,
                'perfis' => $perfis
            ]);
    
        }else{
            $usuarios = $this->user->find($id);
            $estado_rgs = $this->estado_rg->all();
            $cidades = $this->cidade->all();
            $estados = $this->estado->all();
            $escolaridades = $this->escolaridade->all();
            $vinculos = $this->vinculo->all();
            $orgaos = $this->orgao->all();
            $departamentos = $this->departamento->all();
            $cargos = $this->cargo->all();
            $funcoes = $this->funcao->all();
            $perfis = $this->perfil->all();

            return view('user.editar', 
            [
                'usuarios' => $usuarios,
                'estado_rgs' => $estado_rgs,
                'cidades' => $cidades,
                'estados' => $estados,
                'escolaridades' => $escolaridades,
                'vinculos' => $vinculos,
                'departamentos' => $departamentos,
                'cargos' => $cargos,
                'funcoes' => $funcoes,
                'orgaos' => $orgaos,
                'perfis' => $perfis,
                'verifica' => $verifica
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->fill($request->all());

        $users->save();

        return redirect()->route('h.index');


    }

    public function destroy($id)
    {
        
        User::destroy($id);

        return redirect()->back();
    }

    public function sendEmailReminder(Request $request, $id)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('setasgti@gmail.com', 'SGI - Sistema de Gerencimento de Inscrição');

            $m->to($user->email, $user->name)->subject('Teste!');
        });
    }

}