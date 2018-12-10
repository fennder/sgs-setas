<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Estado;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;

class EstadoController extends Controller
{
    private $estado;

    public function __construct(Estado $estado)
    {
        $this->estado = $estado;
        
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
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";

        $nav = "Estado";

        $estados = $this->estado->paginate(30);
        $usuarios = Auth::user();

        return view('estado.index',
        [
            'nav' => $nav,
            'estados' => $estados, 
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
        $page_title = "SGI";
        $page_description = "Sistema de Gerenciamento de Inscrições";
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";

        $nav = "Estado";

        $usuarios = Auth::user();

        return view('estado.create',
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
        $this->estado->create($request->all());

        return redirect()->route('est.index');
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
        $lotacao = "Secretaria do Trabalho e Desenvolvimento Social";
        
        $estados = $this->estado->find($id);
        $usuarios = Auth::user();
        
        return view('estado.edit',
        [
            'nav' => $nav,
            'estados' => $estados, 
            'estados' => $estados, 
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
        $estados = $this->estado->find($id);
        $estados->update($request->all());

        return redirect()->route('est.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->estado->destroy($id);

        return redirect()->back();
    }
}
