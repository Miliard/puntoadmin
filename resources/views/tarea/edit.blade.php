@extends('tema.app')

@section('title', "Editar Nombre y Numero")

@section('contenido')

<h3>
    Editar Tarea de: <i>{{$tarea->nombre}}</i>
</h3>
<form action="{{ route('tarea.update', $tarea ) }}" method="POST">
    @method('put')
    <x-tarea-form-body :tarea="$tarea"/>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection

