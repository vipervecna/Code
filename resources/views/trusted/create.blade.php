@extends('layouts.app')

@section('content')
{!!Form::open(['route'=>'trusted.store', 'method'=>'POST'])!!}

@include('trusted.forms.trustedEditavel')
<!-- Registrar -->
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@stop
