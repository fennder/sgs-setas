<?php

namespace Gerenciador\Http\Controllers\Auth;

use Gerenciador\User;
use Illuminate\Http\Request;
use Validator;
use Gerenciador\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Session;

class AuthController extends Controller
{
    
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /*public function getLogin(){

        return view('auth/login');
        
    }*/

    /*public function postLogin(Request $request){


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            Session::set('email', $request->email);

            Session::set('id', Auth::id());

            return redirect()->action('HomeController@index');
        }
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * 
     * @return array
     */
    public function messages()
    {
        return[
            'name.required' => 'O seu nome é obrigatório',
            'email.required' => 'O seu email é obrigatório',
            'password.required' => 'Sua senha é obrigatória',
        ];
    }

}
