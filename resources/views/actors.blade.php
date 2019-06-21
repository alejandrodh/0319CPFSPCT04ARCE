@extends('welcome')

@section('title', 'Actores')

@section('class', 'actors')


@section('contenido')
<h1>Lista de actores</h1>
<ul>
@foreach ($actores as $actor)
  <li>{{$actor->getNombreCompleto()}}</li>
@endforeach
</ul>
@endsection

@section('links')
  @parent
  <a href="#">Solo actores</a>
@endsection
