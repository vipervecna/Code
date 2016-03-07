<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Session;
use View;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class DadosPessoaisController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function show($id)
    {
      $user = User::find($id);
      return view('dados.show')->with(compact('user'));
    }

    public function update($id, Request $request)
    { //CRUD -> U = update
        $user = User::findorFail($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('menssagem','User Editado Corretamente');
        return Redirect::to('/home');
    }

    public function destroy($id)
    { //CRUD -> D = delete
      User::destroy($id);
      Session::flash('menssagem','User Eliminado Corretamente');
      return Redirect::to('/dados');
    }

    protected $table = 'users';
}
