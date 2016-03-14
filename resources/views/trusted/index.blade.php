@extends('layouts.app')

@if(Session::has('menssagem'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
  {{Session::get('menssagem')}}
</div>
@endif

@section('content')

<table class="table">
  {!!link_to_route('trusted.create', $title = 'Criar')!!}
</table>


<table class="table">
  <div>
    <thead>
        <th>TrustedOne</th>
        <th>Sobrenome</th>
        <th>Email</th>
        <th>Status</th>
        <th>Editar</th>
    </thead>
  </div>
    @foreach($trustedones as $trustedone)
    <tbody>
      <td>{{$trustedone->trusted_name}}</td>
      <td>{{$trustedone->trusted_lastname}}</td>
      <td>{{$trustedone->trusted_email}}</td>
      <td>{{$trustedone->trusted_status}}</td>
      <td>{!!link_to_route('trusted.edit', $title = 'Editar', $parameters =$trustedone->id,
          $attributes = ['class'=>'btn btn-primary'])!!}</td>
    </tbody>
    @endforeach
</table>

@stop
