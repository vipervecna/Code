@extends('layouts.app')

@section('content')

{!! Form::model($trusted, ['route' => ['trusted.update', $trusted->id]]) !!}

@include('trusted.forms.trustedEditavel')
<!-- Registrar -->
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
<!-- Deletar -->

@endsection
