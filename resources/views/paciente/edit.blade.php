@extends('adminlte::page')

@section('title', 'Lista Vacunacion')

@section('content_header')
    <h1>Editar paciente</h1>
@stop

@section('content')



<form action="{{url ('/paciente/'.$response[0]['id']) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('paciente.form')


</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
