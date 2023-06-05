<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('/')}}">Meldanex</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/acerca')}}">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cursos')}}">Inscribirse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/alumnos')}}">Alumnos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/inscripciones')}}">Inscripciones</a>
            </li>
          </ul>
        </div>
      </nav>

    
    

    @yield('contenido')
    

    <footer class="footer bg-dark text-white mt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">&copy; 2023 Meldanex. Todos los derechos reservados.</p>
          </div>
          <div class="col-md-6 text-md-right">
            <p class="mb-0">Contacto: <a href="mailto:cervantes.romo.oscar@gmail.com">cervantes.romo.oscar@gmail.com</a></p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script></body>
</html>