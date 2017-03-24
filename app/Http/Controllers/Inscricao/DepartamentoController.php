<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Departamento;
use Gerenciador\Inscricao\Orgao;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;

class DepartamentoController extends Controller
{

    private $departamento;
    private $orgao;

    public function __construct(Departamento $departamento, Orgao $orgao)
    {
        $this->departamento = $departamento;
        $this->orgao = $orgao;
        
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page_title = "Lista de Departamentos";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Departamento";

        $departamentos = $this->departamento->paginate(25);
        $orgaos = $this->orgao->all();
        $usuarios = Auth::user();

        return view('departamento.index',
        [
            'nav' => $nav, 
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'lotacao'=>$lotacao,
            'departamentos' => $departamentos,
            'usuarios' => $usuarios,
            'orgaos' => $orgaos
        ]);
    }

    public function getDepartamento($id_orgao)
    {

        $orgao = $this->orgao->find($id_orgao);

        $departamentos = $orgao->departamento()->getQuery()->get(['id_departamento', 'descricao']);

        return response()->json($departamentos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Criar Departamentos";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Departamento";

        $orgaos = $this->orgao->all();
        $usuarios = Auth::user();

        return view('departamento.create',
        [
            'nav' => $nav,
            'page_title' => $page_title, 
            'page_description' => $page_description,
            'lotacao' => $lotacao,
            'usuarios' => $usuarios,
            'orgaos' => $orgaos

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

        $this->departamento->create($request->all());

        return redirect()->route('dep.index');
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
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $departamentos = $this->departamento->find($id);
        $orgaos = $this->orgao->all();
        $usuarios = Auth::user();
        
        return view('departamento.edit',
        [
            'nav' => $nav, 
            'page_description' => $page_description,
            'lotacao' => $lotacao,
            'departamentos' => $departamentos,
            'usuarios' => $usuarios,
            'orgaos' => $orgaos
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
        
        $departamentos = $this->departamento->find($id);
        $departamentos->update($request->all());

        return redirect()->route('dep.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->departamento->destroy($id);

        return redirect()->back();
    }
}