<?php

namespace Gerenciador\Http\Controllers\Contrato;

use Gerenciador\Http\Controllers\Controller;
use Gerenciador\Http\Requests;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $contrato = new \Gerenciador\sgc\Contrato();
        $contratos = $contrato->all();

        //$contratos = \Gerenciador\sgc\Contrato::paginate(5);
        return view('sgc.contrato', ['contratos' => $contratos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('sgc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $dado = $request->all();
        $contrato = new \Gerenciador\sgc\Contrato;
        $contrato->save($dado);
        
        return redirect('sgc.contrato');

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
        $contrato = new \Gerenciador\sgc\Contrato;
        $contratos->find($id_cc);

        return view('sgc.edit', ['contratos' => $contratos]);
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
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $contrato = new \Gerenciador\sgc\Contrato;
        $contrato->find($id)->delete();
        return redirect('contrato');
    }
}