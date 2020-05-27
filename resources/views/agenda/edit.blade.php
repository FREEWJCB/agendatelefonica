@extends('plantilla.plantilla')

@section('titulo','Editar registro')

@section('contenido')

<div class="container">
    <br>
    @include('plantilla.navuser')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('agenda.index') }}">Inicio</a></li>
            <li class="breadcrumb-item">Editar registro</li>
            <li class="breadcrumb-item active" aria-current="page">{{$agenda->id}}</li>
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

                        <h3 class="register-heading">Editar Registro</h3>

                        <div class="row register-form">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $agenda->nombres }}" placeholder="Nombres" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $agenda->apellidos }}" placeholder="Apellidos" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input class="form-control" type="number" name="telefono" value="{{ $agenda->telefono }}" placeholder="Telefono: 18491115555" id="telefono">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt text-info"></i></div>
                                        </div>
                                        <input class="form-control" type="number" name="celular" value="{{ $agenda->celular }}" placeholder="Celular: 18491115555" id="Celular">
                                    </div>
                                </div>

                                @if ($agenda->sexo == 'Masculino' || $agenda->sexo == '')

                                    @php($hombre = 'checked')
                                    @php($mujer = '')

                                @else

                                    @php($hombre = '')
                                    @php($mujer = 'checked')

                                @endif
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="sexo" value="Masculino" {{ $hombre }}>
                                            <span> Masculino </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="sexo" value="Femenino" {{ $mujer }}>
                                            <span> Femenino </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                        </div>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $agenda->email }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                        </div>
                                        <input type="text" name="posicion" class="form-control" placeholder="Posición" value="{{ $agenda->posicion }}" />
                                    </div>
                                </div>


                                @php($departamentos=['Gerencia de TI','Auditoria TI','Contabilidad'])
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i>
                                            </div>
                                        </div>
                                        <select name="departamento" class="form-control" required>

                                            <option class="hidden" disabled>Departamento</option>
                                            @foreach ($departamentos as $dep)
                                                <option
                                                @if ($agenda->departamento == $dep)
                                                    selected
                                                @endif >{{ $dep }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa  fa-dollar-sign text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control" name="salario" placeholder="salario *" value="{{ $agenda->salario }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Fecha de nacimiento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
                                        </div>

                                        <input type="date" name="fechadenacimiento" value="{{ $agenda->fechadenacimiento }}" id="fechadenacimiento" min="1000-01-01" max="3000-12-31" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Editar</button>
                                <a href="{{ route('cancelar')}}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
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
