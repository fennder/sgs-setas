<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Regiao;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Auth;

class RegiaoController extends Controller
{
    private $regiao;

    public function __construct(Regiao $regiao)
    {
        $this->regiao = $regiao;
        
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regioes = $this->regiao->paginate(25);
        $usuarios = Auth::user();
    
        $page_title = "SGI";
        $page_description = "Lista de Regiões";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $nav = "Regiões";

        return view('regiao.index',
        [
            'nav' => $nav,
            'regioes' => $regioes, 
            'page_title'=>$page_title, 
            'lotacao'=>$lotacao, 
            'usuarios'=>$usuarios, 
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
        $usuarios = Auth::user();

        $page_title = "SGS";
        $page_description = "Cadastro de Região";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $nav = "Região";

        return view('regiao.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title, 
            'lotacao' => $lotacao, 
            'usuarios' => $usuarios, 
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
        $this->regiao->create($request->all());

        return redirect()->route('r.index');
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
        $usuarios = Auth::user();

        $nav = "Editar";
        $page_description = "Editar Região";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        
        $regioes = $this->regiao->find($id);
        
        return view('regiao.edit',
        [
            'nav' => $nav,
            'regioes' => $regioes, 
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
        $regioes = $this->regiao->find($id);
        $regioes->update($request->all());

        return redirect()->route('r.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->regiao->destroy($id);

        return redirect()->back();
    }
}
