<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Inscricao;
use Gerenciador\Inscricao\Curso;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\User;
use DB;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;
Use Session;


class InscricaoController extends Controller
{
    private $inscricao;
    private $curso;
    private $usuario;

    public function __construct(Cidade $cidade, Inscricao $inscricao, Curso $curso, User $usuario)
    {
        $this->inscricao = $inscricao;
        $this->curso = $curso;
        $this->usuario = $usuario;
        $this->cidade = $cidade;
        
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
        $page_description = "(Lista de Inscrições)";
        $nav = "Inscrição";

        $inscricoes = $this->inscricao->paginate(25);
        $usuarios = Auth::user();
        $cidades = $this->cidade->all();

        return view('inscricao.index',
        [
            'nav' => $nav, 
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'inscricoes' => $inscricoes,
            'usuarios' => $usuarios,
            'cidades' => $cidades
            
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
        $page_description = "(Cadastro de Inscrições)";
        $nav = "Inscrição";

        $cursos = $this->curso->all();
        $usuarios = Auth::user();


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

        return redirect()->route('ins.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $usuarios = Auth::user();
    
        $cursos = $usuarios->cursos;
        $page_title = "SGS";
        $page_description = "Meus Cursos";
        $nav = "Meus Cursos";

        return view('inscricao.show',
        [
            'nav' => $nav,
            'page_title'=> $page_title,
            'page_description'=> $page_description,
            'usuarios'=> $usuarios,
            'cursos' => $cursos
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
        $page_description = "Editar Inscrição";
        $inscricoes = $this->inscricao->find($id);
        $usuarios = Auth::user();
        $cursos = $this->curso->all();
        
        return view('inscricao.edit',
        [
            'nav' => $nav,
            'inscricoes' => $inscricoes, 
            'usuarios' => $usuarios, 
            'cursos' => $cursos, 
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
