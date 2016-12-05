<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Gerenciador\Inscricao\VinculoInstitucional;
use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class VinculoInstitucionalController extends Controller
{
    private $vinculo;

    public function __construct(VinculoInstitucional $vinculo)
    {
        $this->vinculo = $vinculo;
        
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
        $page_description = "Lista de Vínculos Institucionais";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Vínculos Institucionais";

        $vinculos = $this->vinculo->paginate(4);
        $usuarios = Auth::user();

        return view('vinculo.index',
        [
            'nav' => $nav,
            'vinculos' => $vinculos,
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

        $page_title = "SGI";
        $page_description = "(Cadastro de Vínculo Institucional)";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        $nav = "Vínculo Institucional";

        return view('vinculo.create',
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
        $this->vinculo->create($request->all());

        return redirect()->route('vi.index');
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
        $page_description = "Editar Vinculo Institucional";
        $lotacao = "Secretaria do Trabalho e Assistência Social";
        
        $vinculos = $this->vinculo->find($id);
        
        return view('vinculo.edit',
        [
            'nav' => $nav,
            'vinculos' => $vinculos, 
            'lotacao' => $lotacao, 
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
        $vinculos = $this->vinculo->find($id);
        $vinculos->update($request->all());

        return redirect()->route('vi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->vinculo->destroy($id);

        return redirect()->back();
    }
}
