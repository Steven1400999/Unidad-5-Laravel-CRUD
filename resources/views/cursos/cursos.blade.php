@extends('layout/plantilla')

@section('title', 'Meldanex')

@section('contenido')

<main>

            <div class="container mt-4">
              <h2>Cursos Disponibles</h2>

              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Curso</th>
                      <th scope="col">Profesor</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($cursos as $curso)
                    <tr>
                      <th scope="row">{{$curso->id_curso}}</th>
                      <td>{{$curso->nombre_curso}}</td>
                      <td>{{$curso->maestro->nombre_maestro}} {{$curso->maestro->apellido}}</td>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="col-md-6">
          <a href="{{ url('alumnos/create')}}" class="btn btn-primary">Inscribirse</a>
        </div>
          </div>

          

      </body>

@endsection