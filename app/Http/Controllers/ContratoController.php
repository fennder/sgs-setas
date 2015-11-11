<?php

namespace Gerenciador\Http\Controllers;

use Illuminate\Http\Request;

use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contrato = new \Gerenciador\Contrato();
        $contratos = $contrato->all();

        //$contratos = \Gerenciador\Contrato::paginate(5);
        return view('contrato.contrato', ['contratos' => $contratos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('contrato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $dado = $request->all();
        $contrato = new \Gerenciador\Contrato;
        $contrato->save($dado);
        
        return redirect('contrato.contrato');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $contrato = new \Gerenciador\Contrato;
        $contrato->find($id_cc);

        return view('contrato.edit', ['contrato' => $contrato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_cc
     * @return Response
     */
    public function destroy($id_cc)
    {
        $contrato = new \Gerenciador\Contrato;
        $contrato->find($contrato->$id_cc)->delete();
        return redirect('contrato');
    }
}
