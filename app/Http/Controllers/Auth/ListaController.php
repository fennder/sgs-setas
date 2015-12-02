<?php

namespace Gerenciador\Http\Controllers\Auth;

use Illuminate\Http\Request;

use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Session;
use Auth;
use Gerenciador\User;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $id = Session::get('id');
            $user = New User();

            //$users = $user->all();
            $users = $user->find($id);

            $users = User::paginate(5);

            $page_title = "SGS";
            $page_description = "Sistema de Gerenciamento de Sistemas da SETAS";
            $nav = "Lista";

            return view('auth/lista',['nav' => $nav, 'users' => $users,'page_title'=>$page_title, 'page_description'=>$page_description]);
        }else{
            return view('auth/login');
        }    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = new User();
        $users->find($id)->delete();
        return redirect('contrato');
    }
}
