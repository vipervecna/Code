<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
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
            'lastname' => 'required|max:255',
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
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),

            'estadocivil' => $data['estadocivil'],
            'dia' => $data['dia'],
            'mes' => $data['mes'],
            'ano' => $data['ano'],
            'sexo' => $data['sexo'],
            'escolaridade' => $data['escolaridade'], //
            'ocupacao' => $data['ocupacao'],
            'cpf' => $data['cpf'],
            'cpf2' => $data['cpf2'],
            'rg' => $data['rg'],
            'email2' => $data['email2'],
            'telefoneddd' => $data['telefoneddd'],
            'telefone' => $data['telefone'],
            'celularddd' => $data['celularddd'],
            'celular' => $data['celular'],
            'rua' => $data['rua'],
            'numero_endereco' => $data['numero_endereco'],
            'cep' => $data['cep'],
            'cep2' => $data['cep2'],
            'bairro' => $data['bairro'],
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
            'complemento_endereco' => $data['complemento_endereco'],
        ]);  return redirect('/dados')->with('menssagem','store');
    }

}
