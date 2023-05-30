@extends('tema.app')

@section('title', 'listados de Tareas')

@section('contenido')

    <h3>
        listados de Tareas
    </h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Finalizada
                </th>
                <th>
                    Fecha limite
                </th>
                <th>
                    Urgencia
                </th>
                <th>
                    Descripcion
                </th>
                <th>
                    opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->nombre }}</td>
                    <td>{{ $tarea->estaFinalizada() }}</td>
                    <td>{{ \Carbon\Carbon::parse($tarea->fecha_limite)->format('h:i A d / m / Y') }}</td>

                    <td>{{ $tarea->urgencia() }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
