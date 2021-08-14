
@extends('adminlte::page')

@section('title', 'Vacunacion')

@section('content_header')
    <h1>Lista de Pacientes</h1>
@stop

@section('content')
<a class="btn btn-success" href="{{ url('paciente/create') }}"> Registrar paciente </a>

<table class="table table-responsive">
    <thead class="thead-light">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <tr>
        <th scope="col">#</th>
        <th scope="col">DPI</th>
        <th scope="col">Primer Nombre</th>
        <th scope="col">Segundo Nombre</th>
        <th scope="col">Tercer Nombre</th>
        <th scope="col">Primer Apellido</th>
        <th scope="col">Segundo Apellido</th>
        <th scope="col">Apellido de Casada</th>
        <th scope="col">Sexo</th>
        <th scope="col">Estado Civil</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Tuvo Covid</th>
        <th scope="col">Fecha de contagio</th>
        <th scope="col">Tipo de vacuna</th>
        <th scope="col">Fecha primera Dosis</th>
        <th scope="col">Fecha segunda Dosis</th>
        <th scope="col">Lugar de vacunacion</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($usuariosArray as $usuario )
        <tr>
        <th>{{ $usuario['id']}}</th>
        <th>{{ $usuario['dpi']}}</th>
        <th>{{ $usuario['primerNombre']}}</th>
        <th>{{ $usuario['segundoNombre']}}</th>
        <th>{{ $usuario['tercerNombre']}}</th>
        <th>{{ $usuario['primerApellido']}}</th>
        <th>{{ $usuario['segundoApellido']}}</th>
        <th>{{ $usuario['apellidoCasada']}}</th>
        <th>{{ $usuario['sexo']}}</th>
        <th>{{ $usuario['estadoCivil']}}</th>
        <th>{{ $usuario['direccion']}}</th>
        <th>{{ $usuario['telefono']}}</th>
        <th>{{ $usuario['fechaNacimiento']}}</th>
        <th>{{ $usuario['COVID19Positivo']}}</th>
        <th>{{ $usuario['fechaContagio']}}</th>
        <th>{{ $usuario['tipoVacuna']}}</th>
        <th>{{ $usuario['fechaDosis1']}}</th>
        <th>{{ $usuario['fechaDosis2']}}</th>
        <th>{{ $usuario['lugarDeAplicacion']}}</th>
        <th>
            <a href="{{ url('paciente/'.$usuario['id'].'/edit') }}" class="btn btn-primary">Editar</a>

            <form action="{{ url('paciente/'.$usuario['id']) }}"  method="post">
                @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick ="return confirm('¿Estas seguro de que quieres borrar?')"value="Borrar">
        </form>
        </th>


        {{--}}
        {{--<a href="{{ url('paciente/'.$usuario->id.'/edit') }}">
            Editar
        </a>
        |

        <form action="{{ url('paciente/'.$usuario->id) }}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick ="return confirm('¿Estas seguro de que quieres borrar?')"value="Borrar">

        </form>--}}


        </th>


        </tr>

        @endforeach



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
