@extends('plantilla.plantilla')

@section('titulo','Mostrar registro')

@section('contenido')

<div class="container">
    <br>
    <nav class="navbar navbar-light">
        <a class="navbar-brand"><img id="icono" class="img-responsive"src="https://imge.apk.tools/300/d/3/1/com.widesoft.guiatelefonica.png"></a>

        <ul class="nav flex-column text-center">
            <li class="nav-item">
                <span class="nav-link active">Bienvenido Jhonatan</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cerrar sesión</a>
            </li>
        </ul>

    </nav>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
</div>

<form action="{{ route('agenda.update',$agenda->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="container register">

        <div class="row">
            <div class="col-md-3 register-left">
                <img src="{{ asset('img/proteccion-de-datos-personales.png') }}" alt="" />
                <h3>Bienvenid@</h3>
                <p>Por favor llena los datos correctamente en el sistema!</p>

            </div>
            <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <h3 class="register-heading">Mostrar Registro</h3>

                        <div class="row register-form">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" readonly name="nombres" value="{{ $agenda->nombres }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $agenda->apellidos }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input class="form-control" type="number" name="telefono" value="{{ $agenda->telefono }}" readonly id="telefono">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt text-info"></i></div>
                                        </div>
                                        <input class="form-control" type="number" name="celular" value="{{ $agenda->celular }}" readonly id="Celular">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user-tie text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="sexo" name="sexo" value="{{ $agenda->sexo }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-at text-info"></i></div>
                                        </div>
                                        <input type="email" name="email" id="email" class="form-control" readonly value="{{ $agenda->email }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                        </div>
                                        <input type="text" name="posicion" id="posicion" class="form-control" readonly value="{{ $agenda->posicion }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
                                        </div>
                                        <input type="text" name="departamento" id="departamento" class="form-control" readonly value="{{ $agenda->departamento }}" />
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa  fa-dollar-sign text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control" name="salario" id="salario" readonly value="{{ $agenda->salario }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Fecha de nacimiento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
                                        </div>

                                        <input type="date" name="fechadenacimiento" value="{{ $agenda->fechadenacimiento }}" id="fechadenacimiento" readonly class="form-control">
                                    </div>
                                </div>

                                <a href="{{ route('agenda.edit',$agenda->id)}}" class="redondo btn btn-info"><i class="fas fa-save"></i> Editar</a>
                                <a href="{{ route('agenda.index')}}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Atras</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</form>
@include('plantilla.footer',['container' => 'container'])
@endsection
