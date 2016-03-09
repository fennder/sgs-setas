<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Inscricao;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Inscricao\Usuario;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class InscricaoController extends Controller
{
    private $inscricao;
    private $curso;
    private $usuario;

    public function __construct(Inscricao $inscricao, Curso $curso, Usuario $usuario)
    {
        $this->inscricao = $inscricao;
        $this->curso = $curso;
        $this->usuario = $usuario;
        
        
        //$this->middleware('guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscricoes = $this->inscricao->paginate(4);
    
        $page_title = "SGS";
        $page_description = "Lista de Inscrição";
        $nav = "Inscrição";

        return view('inscricao.index',
        [
            'nav' => $nav,
            'inscricoes' => $inscricoes, 
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
        $page_description = "Cadastro de Inscrições";
        $nav = "Inscrição";

        $cursos = $this->curso->lists('id_curso', 'descricao');
        $usuarios = $this->usuario->lists('id_usuario', 'nome');

        return view('inscricao.create',
        [
            'nav' => $nav,
            'cursos' => $cursos,
            'usuarios' => $usuarios,
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
        $this->inscricao->create($request->all());

        return redirect()->route('ins.index');
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
        $page_description = "Editar Inscrição";
        $inscricoes = $this->inscricao->find($id);
        
        return view('inscricao.edit',
        [
            'nav' => $nav,
            'inscricoes' => $inscricoes, 
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
        $inscricoes = $this->inscricao->find($id);
        $inscricoes->update($request->all());

        return redirect()->route('ins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->inscricao->destroy($id);

        return redirect()->back();
    }
}
