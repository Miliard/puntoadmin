<div>
    <div class="table-responsive">
         <div class="row">
        <div class="col-sm-4">
            <input type="text" name="" id="" placeholder="buscar" class="form-control" wire:model="busqueda">
        </div>
         <div class="col-sm-3">
            <select name="" id="" class="form-select" wire:model="paginacion">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
         </div>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>

                <th>
                    recibido
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
                    <td>{{ $tarea->recibido }}</td>
                    <td>{{ $tarea->estaFinalizada() }}</td>
                    <td>{{ \Carbon\Carbon::parse($tarea->fecha_limite)->format('h:iA d/m/Y') }}</td>

                    <td>{{ $tarea->urgencia() }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>
                        <a href="{{ route('tarea.edit', $tarea) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{ route('tarea.show', $tarea) }}" class="btn btn-secondary btn-sm">Ver</a>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

    {{$tareas->links()}}
</div>
    </div>

