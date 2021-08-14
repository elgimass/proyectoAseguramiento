@extends('adminlte::page')

@section('title', 'Lista de Vacunación')

@section('content_header')
<H1 align="center"> Agregar Paciente </H1>
<br>
@stop

@section('content')
<form action="{{url ('/paciente') }}" method="post" enctype="multipart/form-data">

@include('paciente.form')


</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
