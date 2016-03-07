<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use \Request as Request;
use \Response as Response;
use \Validator as Validator;

use Auth;
use App\User;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
/*
     public function index()
     {
       $user = User::with('id')->find($id);
       return view('/home')->with(compact('user'));
     }
     */
     public function index()
     {
       $id = Auth::user()->id;
       $user = User::find($id);
       return view('/home')->with(compact('user'));
     }

}
