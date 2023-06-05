@extends('layout/plantilla')

@section('title', 'Meldanex')

@section('contenido')

<main>

            <div class="container mt-4">
              <h2>Lista de Alumnos Inscritos</h2>

              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido Paterno</th>
                      <th scope="col">Apellido materno</th>
                      <th scope="col">Edad</th>
                      <th scope="col">Curso</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($alumnos as $alumno)
                    <tr>
                      <th scope="row">{{$alumno->id_alumno}}</th>
                      <td>{{$alumno->nombre_alumno}}</td>
                      <td>{{$alumno->apellido_paterno}}</td>
                      <td>{{$alumno->apellido_materno}}</td>
                      <td>{{$alumno->edad}}</td>
                      <td>{{$alumno->curso->nombre_curso}}</td>
                      <th><a href="{{ url('alumnos/'.$alumno->id_alumno.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></th>
                      <th>
                        <form action="{{ url('alumnos/'.$alumno->id_alumno)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>

          

      </body>

@endsection
    
