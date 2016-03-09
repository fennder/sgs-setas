<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Inscricao\Usuario;
use Gerenciador\Inscricao\Estado;
use Gerenciador\Inscricao\Cidade;
use Gerenciador\Inscricao\Escolaridade;
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

    public function __construct(Usuario $usuario, Estado $estado_rg, Estado $estado, Cidade $cidade, Escolaridade $escolaridade)
    {
        $this->usuario = $usuario;
        $this->estado = $estado;
        $this->estado_rg = $estado_rg;
        $this->cidade = $cidade;
        $this->escolaridade = $escolaridade;

        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = $this->usuario->paginate(3);
    
        $page_title = "SGS";
        $page_description = "Cadastro de Usuários";
        $nav = "Lista";

        return view('inscrito.index',
        [
            'nav' => $nav,
            'usuarios' => $usuarios, 
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
        $estados = $this->estado->lists('nome', 'id_estado');
        $cidades = $this->cidade->lists('nome', 'id_cidade');
        $estado_rgs = $this->estado_rg->lists('uf', 'id_estado');
        $escolaridades = $this->escolaridade->lists('descricao', 'id_escolaridade'); 
        
        $page_title = "SGS";
        $page_description = "Cadastro de Usuários";
        $nav = "Cadastro";

        return view('inscrito.create',
        [
            'nav' => $nav, 
            'escolaridades' => $escolaridades, 
            'estados' => $estados, 
            'cidades' => $cidades,
            'estado_rgs' => $estado_rgs,
            'page_title'=>$page_title, 
            'page_description'=>$page_description
        ]);    
    }

    /*public function getCidades($id_estado)
    {
        $estado = $this->estado->find($id_estado);
        $cidades = $estado->cidades()->getQuery->get(['id', 'cidade']);
        return Response::json($cidades);
    }*/

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
        $usuarios = $this->usuario->find($id);

        return view('inscrito.show',
        [
            'usuarios' => $usuarios
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

        $estados = $this->estado->lists('nome', 'id_estado');
        $cidades = $this->cidade->lists('nome', 'id_cidade');
        $estado_rgs = $this->estado_rg->lists('uf', 'id_estado');
        $escolaridades = $this->escolaridade->lists('descricao', 'id_escolaridade');

        $usuarios = $this->usuario->find($id);
        
        return view('inscrito.edit',
        [
            'nav' => $nav,
            'usuarios' => $usuarios,
            'escolaridades' => $escolaridades, 
            'estados' => $estados, 
            'cidades' => $cidades,
            'estado_rgs' => $estado_rgs
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