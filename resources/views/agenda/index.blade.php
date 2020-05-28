@extends('plantilla.plantilla')

@section('titulo','Agenda')

@section('contenido')

    <div class="container-fluid registerinicio">
        <div class="row">
            <div class="col-md-6 register-left register-left1">
                <img src="{{ asset('img/proteccion-de-datos-personales.png') }}" alt="" />
            </div>
            <div class="col-md-6 register-left">

                <h3>Bienvenid@</h3>
                <p>Por favor llena los datos correctamente en el sistema!</p>

            </div>
        </div>
    </div>

    <div class="container-fluid ">
        @if (session('datos'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('datos') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        @endif

        @if (session('cancelar'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('cancelar') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        @endif

        <br>

        @include('plantilla.navuser')

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('agenda.index') }}">Inicio</a></li>
            </ol>
        </nav>

        <nav class="navbar navbar-light float-right">
            <form class="form-inline">
                <input name='bs-nombres' id='bs-nombres' class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" arialabel="Search">
                <input name='bs-apellidos' id='bs-apellidos' class="form-control mr-sm-2" type="search" placeholder="Buscar por apellido" arialabel="Search">
                <input name='bs-telefono' id='bs-telefono' class="form-control mr-sm-2" type="search" placeholder="Buscar por telefono" arialabel="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="buscar">Search</button>
            </form>
        </nav>

        <br>
        <h1 class="text-center">Datos personales</h1>

        <br>
        <div class="row float-right">
            <a href="{{ route('agenda.create')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
        </div>
        <br>

        <table class="table-responsive table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres y apellidos</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Posición</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
                @php($i=0)

                @foreach ($agenda as $agen)
                    @php($i++)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td><a href="{{ route('agenda.show',$agen->id) }}">{{ $agen->nombres }} {{ $agen->apellidos }}</a></td>
                        <td>{{ $agen->telefono }}</td>
                        <td>{{ $agen->celular }}</td>
                        <td>{{ $agen->sexo }}</td>
                        <td>{{ $agen->email }}</td>
                        <td>{{ $agen->posicion }}</td>
                        <td>{{ $agen->departamento }}</td>
                        <td>{{ $agen->salario }}</td>
                        <td>{{ $agen->fechadenacimiento }}</td>

                        <td>
                            <a href="{{ route('agenda.show',$agen->id)}}" class="btn btn-info btncolorblanco"><i class="fa fa-list-alt"></i> Mostrar</a>
                            <a href="{{ route('agenda.edit',$agen->id)}}" class="btn btn-success btncolorblanco"><i class="fa fa-edit"></i> Editar</a>
                            <a href="{{ route('agenda.confirm',$agen->id)}}" class="btn btn-danger btncolorblanco"><i class="fa fa-trash-alt"></i> Eliminar</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{--  //
        /* soluciones cuando el appends no está en el controlador
        {{$agenda->appends(Request::only(['nombres','apellidos','telefono']))}}
        {!! $agenda->appends(Request::only(['nombres','apellidos','telefono'])) !!}
        {{$agenda->appends(Request::except(['page']))}}
        {!! $agenda->appends(Request::except(['page'])) !!}
        {{ $agenda->appends($_GET) }}
        */  --}}

        {{--  // solución cuando el appends está en el controlador  --}}
        {{$agenda}}

    </div>

    @include('plantilla.footer',['container' => 'container-fluid'])
@endsection
