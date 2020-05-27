@extends('plantilla.plantilla')

@section('titulo','Confirme la eliminación')

@section('contenido')

    <div class="container py-5">
        <h1>¿Desea eliminar el registro de {{ $agenda->nombres }} {{ $agenda->apellidos }}?</h1>

        <form action="{{ route('agenda.destroy',$agenda->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="redondo btn btn-danger">
                <i class="fas fa-trash-alt"></i> Eliminar
            </button>
            <a href="{{ route('cancelar') }}" class="redondo btn btn-secondary"><i class="fas fa-ban"></i> Cancelar</a>
        </form>
    </div>
@include('plantilla.footer',['container' => 'container'])
@endsection

