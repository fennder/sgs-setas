<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Deficiencia;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;

class DeficienciaController extends Controller
{
    private $deficiencia;

    public function __construct(Deficiencia $deficiencia)
    {
        $this->deficiencia = $deficiencia;

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $deficiencias = $this->deficiencia->paginate(25);
        $usuarios = Auth::user();
    
        $page_title = "SGI";
        $page_description = "(Lista de Deficiências)";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Deficiência";

        return view('deficiencia.index',
        [
            'nav' => $nav,
            'deficiencias' => $deficiencias, 
            'page_title'=>$page_title, 
            'usuarios'=>$usuarios, 
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
        $usuarios = Auth::user();

        $page_title = "SGI";
        $page_description = "(Cadastro de Deficiência)";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Deficiência";

        return view('deficiencia.create',
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
        $this->deficiencia->create($request->all());

        return redirect()->route('d.index');
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
        $page_description = "Editar Deficência";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        
        $deficiencias = $this->deficiencia->find($id);

        $usuarios = Auth::user();
        
        return view('deficiencia.edit',
        [
            'nav' => $nav,
            'deficiencias' => $deficiencias, 
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
        $deficiencias = $this->deficiencia->find($id);
        $deficiencias->update($request->all());

        return redirect()->route('d.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->deficiencia->destroy($id);

        return redirect()->back();
    }
}
