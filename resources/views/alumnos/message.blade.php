@extends('layout/plantilla')

@section('title', 'Meldanex')

@section('contenido')
<main>
  <div class="container py-4">
<h1>{{$msg}}</h1>

<a href="{{ url('alumnos')}}" class="btn btn-secondary">Lista de alumnos inscritos</a>
</main>
@endsection