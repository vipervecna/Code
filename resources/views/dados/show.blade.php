@extends('layouts.app')
@section('content')
{!! Form::model($user, ['route' => ['dados.update', $user->id]]) !!}

<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.lateral')


<div class="row">
  <div class="col-sm-1">
    <div class="bordered-container">

@include('dados.forms.dadosEditaveis')
<!-- Registrar -->


    </div>
  </div>
</div>



{!!Form::close()!!}
@include('layouts.footer')
@endsection
