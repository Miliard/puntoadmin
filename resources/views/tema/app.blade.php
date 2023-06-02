<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        @livewireStyles

  </head>
  <body class="bg-ligth">

<div class="container shadow bg-white">
  <div class="row">
    <div class="col-sm-12">
      <h1>
        Punto Admin
      </h1>
      <div class="col-sm-12">
        <a href="{{ route('tarea.create') }}" class="btn btn-link">Crear nueva tarea</a>
        <a href="{{ route('tarea.index') }}" class="btn btn-link">Listar tareas</a>
      </div>
      <div class="col-ms-12">
        @yield('contenido')
      </div>
    </div>
  </div>
</div>
@livewireScripts
  </body>
</html>
