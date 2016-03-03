<?php

namespace Gerenciador\Http\Controllers\Inscricao;

use Illuminate\Http\Request;
use Gerenciador\Inscricao\Cargo;
use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class CargoController extends Controller
{
    private $cargo;

    public function __construct(Cargo $cargo)
    {
        $this->cargo = $cargo;
        
        //$this->middleware('guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = $this->cargo->paginate(4);
    
        $page_title = "SGS";
        $page_description = "Lista de Cargos";
        $nav = "Cargo";

        return view('cargo.index',
        [
            'nav' => $nav,
            'cargos' => $cargos, 
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
        $page_description = "Cadastro de Cargo";
        $nav = "Cargo";

        return view('cargo.create',
        [
            'nav' => $nav, 
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
        $this->cargo->create($request->all());

        return redirect()->route('c.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargos = $this->cargos->find($id);

        return view('cargo.show',
        [
            'cargos' => $cargos,
            'nav' => $nav, 
            'page_title' => $page_title, 
            'page_description' => $page_description
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
        $page_description = "Editar Cargo";
        $cargos = $this->cargo->find($id);
        
        return view('cargo.edit',
        [
            'nav' => $nav,
            'cargos' => $cargos, 
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
        $cargos = $this->cargo->find($id);
        $cargos->update($request->all());

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->cargo->destroy($id);

        return redirect()->back();
    }
}