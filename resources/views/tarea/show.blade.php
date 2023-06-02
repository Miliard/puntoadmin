@extends('tema.app')

@section('title', "Tarea")

@section('contenido')

<h3>
   {{$tarea->nombre}}
</h3>
<lu>
    <li>Finalizada: <strong>{{$tarea->estaFinalizada()}}</strong></li>
    <li> Urgencia: <strong>{{$tarea->urgencia()}}</strong></li>
    <li>Fecha límite: <strong>{{ \Carbon\Carbon::parse($tarea->fecha_limite)->format('h:i A d/m/Y') }}</strong></li>


</lu>

<p>
    {{$tarea->descripcion}}
</p>
<hr>
 <div class="row">
    <div class="col-sm-12 mb-2">
        <form action="{{route('tarea.destroy', $tarea)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-sm" type="submit">
                Borrar
            </button>
        </form>
    </div>
 </div>


@endsection

