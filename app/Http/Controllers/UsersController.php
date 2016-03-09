<?php

namespace Gerenciador\Http\Controllers;

use Illuminate\Http\Request;

use Gerenciador\Http\Requests;
use Gerenciador\Http\Controllers\Controller;
use Gerenciador\User;
use Session;
use Auth;

class UsersController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){

            $users = $this->user->paginate(10);

            $page_title = "SGS";
            $page_description = "Sistema de Gerenciamento de Sistemas da SETAS";
            $nav = "Lista";

            return view('user.lista',['nav' => $nav, 'users' => $users, 'page_title'=>$page_title, 'page_description'=>$page_description]);

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
        $users = $this->user->find($id);
        //dd($users);
        return view('user.editar', ['users' => $users]);    
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
        $users = User::findOrFail($id);
        $users->fill($request->all());

        $users->save();

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
        
        User::destroy($id);

        return redirect()->back();
    }    
}
