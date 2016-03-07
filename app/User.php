<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'lastname', 'email', 'password',

      //dados complementares
            'estadocivil', 'dia', 'mes', 'ano', 'sexo',
              'escolaridade', 'ocupacao', 'cpf', 'cpf2', 'rg', 'email2',
               'telefoneddd', 'telefone', 'celularddd',
                'celular','rua', 'numero_endereco', 'cep', 'cep2', 'bairro',
                 'cidade', 'estado', 'complemento_endereco',

               ];

               /**
                * The attributes excluded from the model's JSON form.
                *
                * @var array
                */
    protected $hidden = [
      'password', 'remember_token',
      ];

    public function profile() {
       return $this->hasOne('User', 'id');
    }

    protected $table = 'users';
}
