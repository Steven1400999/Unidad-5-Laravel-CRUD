@extends('layout/plantilla')

@section('title', 'Skill Office')

@section('contenido')

    <main>
        <div class="container mt-4">


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
                    <td>{{$alumno->apellido_paterno}}</td>
                    <td>{{$alumno->apellido_materno}}</td>
                    <td>{{$alumno->edad}}</td>
                    <td>{{$alumno->curso->nombre_curso}}</td>
                    <th></th>
                    <th></th>
                  </tr>
                  @endforeach
                </tbody>
              </table>



        </div>
    </main>