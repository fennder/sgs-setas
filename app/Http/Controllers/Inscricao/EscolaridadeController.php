<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Escolaridade;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;

class EscolaridadeController extends Controller
{
    private $escolaridade;

    public function __construct(Escolaridade $escolaridade)
    {
        $this->escolaridade = $escolaridade;
        
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
        $page_description = "Lista de Escolaridades";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Escolaridade";

        $escolaridades = $this->escolaridade->paginate(25);
        $usuarios = Auth::user();

        return view('escolaridade.index',
        [
            'nav' => $nav,
            'escolaridades' => $escolaridades, 
            'usuarios' => $usuarios, 
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'lotacao'=>$lotacao
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
        $page_description = "Cadastro de Escolaridade";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Escolaridade";

        $usuarios = Auth::user();

        return view('escolaridade.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title, 
            'usuarios' => $usuarios, 
            'page_description' => $page_description,
            'lotacao' => $lotacao
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
        $this->escolaridade->create($request->all());

        return redirect()->route('e.index');

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
        $page_description = "Editar Escolaridade";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        
        $escolaridades = $this->escolaridade->find($id);

        $usuarios = Auth::user();
        
        return view('escolaridade.edit',
        [
            'nav' => $nav,
            'escolaridades' => $escolaridades, 
            'usuarios' => $usuarios, 
            'page_description' => $page_description,
            'lotacao' => $lotacao
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
        $escolaridades = $this->escolaridade->find($id);
        $escolaridades->update($request->all());

        return redirect()->route('e.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->escolaridade->destroy($id);

        return redirect()->back();
    }
}
