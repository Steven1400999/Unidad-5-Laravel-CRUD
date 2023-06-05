@extends('layout/plantilla')

@section('title', 'Meldanex')

@section('contenido')

<main>

            <div class="container mt-4">
              <h2>Inscripciones</h2>

              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Matricula</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Fecha</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($inscripciones as $inscripcion)
                    <tr>
                      <th scope="row">{{$inscripcion->id_ins}}</th>
                      <td>{{$inscripcion->id_alumno}}</td>
                      <td>{{$inscripcion->alumno->nombre_alumno}} {{$inscripcion->alumno->apellido_paterno}} {{$inscripcion->alumno->apellido_materno}}</td>
                      <td>{{$inscripcion->fecha_ins}}</td>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>

          

      </body>

@endsection