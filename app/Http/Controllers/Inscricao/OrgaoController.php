<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Orgao;
use Auth;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class OrgaoController extends Controller
{
    private $orgao;

    public function __construct(Orgao $orgao)
    {
        $this->orgao = $orgao;
        
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgaos = $this->orgao->paginate(4);
        $usuarios = Auth::user();
    
        $page_title = "SGS";
        $page_description = "Lista de Órgaos";
        $nav = "Órgao";

        return view('orgao.index',
        [
            'nav' => $nav,
            'orgaos' => $orgaos,
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
        $usuarios = Auth::user();

        $page_title = "SGS";
        $page_description = "Cadastro de Órgão";
        $nav = "Órgão";

        return view('orgao.create',
        [
            'nav' => $nav, 
            'page_title' => $page_title, 
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
        $this->orgao->create($request->all());

        return redirect()->route('o.index');
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
        $page_description = "Editar Órgão";
        $orgaos = $this->orgao->find($id);
        
        return view('orgao.edit',
        [
            'nav' => $nav,
            'orgaos' => $orgaos, 
            'usuarios' => $usuarios, 
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
        $orgaos = $this->orgao->find($id);
        $orgaos->update($request->all());

        return redirect()->route('o.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->orgao->destroy($id);
        
        return redirect()->back();
        
    }
}
