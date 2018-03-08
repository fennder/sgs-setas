<?php

namespace Gerenciador\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Gerenciador\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gerenciador\User;
use Validator;
use Session;
use Auth;

class AuthController extends Controller
{
    
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/home';
    protected $loginPath = 'auth/login';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

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
            'cpf' => 'required|unique:users|max:14',
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
            'cpf' => $data['cpf'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * 
     * @return array
     */
    /*public function messages()
    {
        return User::create([
            'name.required' => 'O seu nome é obrigatório',
            'email.required' => 'O seu email é obrigatório',
            'password.required' => 'Sua senha é obrigatória',
        ]);
    }*/

}
