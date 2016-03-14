<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\TrustedOne;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Session;
use View;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class TrustedOneController extends Controller
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

    public function index()
    {
      $trustedones = TrustedOne::All();
      return view('trusted.index',compact('trustedones'));
    }

    public function create()
    { //CRUD -> C = create
      return view('trusted.create');
    }

    public function store(Request $request)
    {
      TrustedOne::create([
        'trusted_name' => $request['trusted_name'],
        'trusted_lastname' => $request['trusted_lastname'],
        'trusted_status' => $request['trusted_status'],
        'trusted_email' => $request['trusted_email'],
        ]);
        return redirect('/trustedones')->with('menssagem','store');
    }

    public function edit($id)
    {
      $usuario = TrustedOne::find($id);
      return view('trusted.edit',['trustedone'=>$trustedone]);
    }

    public function update($id, Request $request)
    { //CRUD -> U = update
      $usuario = Trustedone::find($id);
      $usuario->fill($request->all());
      $usuario->save();

      Session::flash('menssagem','TrustedOne Editado Corretamente');
      return Redirect::to('/trustedones');
    }

    public function destroy($id)
    { //CRUD -> D = delete
      TrustedOne::destroy($id);
      Session::flash('menssagem','TrustedOne Eliminado Corretamente');
      return Redirect::to('/trustedones');
    }

    protected $table = 'trustedones';
}
