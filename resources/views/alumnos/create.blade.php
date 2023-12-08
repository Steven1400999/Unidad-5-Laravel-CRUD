@extends('layout/plantilla')

@section('title', 'Skill Office')

@section('contenido')
<main>
  <div class="container py-4">
<h1>Registrarse</h1>
  @if ($errors->any())
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

 
  <form action="{{ url('/alumnos') }}" method="post">
    @csrf
    

    <div class="input-group mb-3">
        <span for="nombre_alumno" class="input-group-text" id="inputGroup-sizing-default">Nombre Completo</span>
        <input type="text" class="form-control" name="nombre_alumno" id="nombre_alumno" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{old('nombre_alumno')}}" required>
      </div>
      <div class="input-group mb-3">
        <span for="apellido_paterno" class="input-group-text" id="inputGroup-sizing-default">Apellido Paterno</span>
        <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{old('apellido_paterno')}}" required>
      </div>
      <div class="input-group mb-3">
        <span for="apellido_materno" class="input-group-text" id="inputGroup-sizing-default">Apellido Materno</span>
        <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{old('apellido_materno')}}" required>
      </div>
      <div class="input-group mb-3">
        <span for="edad" class="input-group-text" id="inputGroup-sizing-default">Edad</span>
        <input type="text" class="form-control" name="edad" id="edad"aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{old('edad')}}" required>
      </div>
      <div class="input-group mb-3">
        <span for="id_curso" class="input-group-text" id="inputGroup-sizing-default">Curso</span>
        <select name="curso" id="curso" class="form-select" aria-label="Default select example">
          <option selected>Selecciona el curso</option>

          @foreach($cursos as $curso)
          <option value="{{ $curso->id_curso}}">{{ $curso->nombre_curso}}</option>
          @endforeach
        </select>
      </div>
      
<a href="{{url('/')}}" class="btn btn-secondary">Regresar</a>
      <button type="submit" class="btn btn-success">Inscribirse</button>
  </form>
</div>
</main>
@endsection