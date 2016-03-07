<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| kernel and includes session state, CSRF protection, and more.
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
|
*/

Route::get('menssagens', function (){
    return view('menssagens');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function (){
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');


    Route::group(['prefix' => 'dados', 'middleware' => 'security'], function()
    {
      Route::get('editar/{id}',       ['as' => 'dados.edit',    'uses'=> 'Auth\DadosPessoaisController@show']);
      Route::post('atualizar/{id}',   ['as' => 'dados.update',  'uses'=> 'Auth\DadosPessoaisController@update']);
    });
});



/*
Route::get('profile', ['middleware' => 'auth', function() {
    // Only authenticated users may enter...
}]);

Route::resource('/dados', 'Auth\DadosPessoaisController');

Route::group(['middleware' => 'security'], function(){  });
Route::group(['prefix' => 'usuarios'], function()
  {
  Route::get('',                  ['as' => 'users.index',   'uses'=> 'UsersController@index']);
  Route::get('novo',              ['as' => 'users.create',  'uses'=> 'UsersController@create']);
  Route::post('inserir',          ['as' => 'users.store',   'uses'=> 'UsersController@store']);
  Route::get('editar/{id}',       ['as' => 'users.edit',    'uses'=> 'UsersController@show']);
  Route::post('atualizar/{id}',   ['as' => 'users.update',  'uses'=> 'UsersController@update']);
  Route::get('excluir',           ['as' => 'users.remove',  'uses'=> 'UsersController@remove']);
});
*/
