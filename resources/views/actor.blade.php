@extends('welcome')

@section('title', 'Actor')

@section('class', 'actor')


@section('contenido')
<h1>Actor seleccionado</h1>

@if ($actor)

  <h3 style="color:blue">{{$actor->getNombreCompleto()}}</h3>
  <h3 style="color:blue">Rating: {{$actor->rating}}</h3>


@else

    <h3 style="color:blue">El actor no existe.</h3>

@endif

@endsection

@section('links')
  @parent
  <a href="#">Solo actores</a>
@endsection
