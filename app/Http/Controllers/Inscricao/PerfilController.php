<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Perfil;
use Auth;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class PerfilController extends Controller
{
    private $perfil;

    public function __construct(Perfil $perfil)
    {
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
        $perfis = $this->perfil->paginate(10);
    
        $page_title = "SGI";
        $page_description = "Lista de Perfis";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $nav = "Perfil";

        return view('perfil.index',
        [
            'nav' => $nav,
            'perfis' => $perfis,
            'page_title'=>$page_title, 
            'page_description'=>$page_description,
            'lotacao'=>$lotacao,
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
        $page_description = "Cadastro de Perfil";
        $lotacao = "Secretaria do Trabalho e Assistência Social";

        $nav = "Perfil";

        return view('perfil.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title,  
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
        $this->perfil->create($request->all());

        return redirect()->route('pf.index');
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
        $page_description = "Editar Perfil";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        
        $perfis = $this->perfil->find($id);
        
        return view('perfil.edit',
        [
            'nav' => $nav,
            'perfis' => $perfis, 
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
        $perfis = $this->perfil->find($id);
        $perfis->update($request->all());

        return redirect()->route('pf.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->perfil->destroy($id);
        
        return redirect()->back();
    }
}
