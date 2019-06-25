@extends('welcome')

@section('title')
    Película
@endsection
@section('class')
  movie
@endsection

@section('contenido')
    <h1>Película</h1>
    <ul>
      <h3>Sintaxis Blade</h3>
      @php
        //$peliculas = [];
      @endphp

<p style="color:blue">{{$movie->title}}</p>
<p>{{$movie->rating}}</p>

<form class="" action="/borrarPelicula" method="get">

  <input type="hidden" name="id" value="{{$movie->id}}">
  <input type="submit" name="" value="Borrar Pelicula">
  @csrf

</form>


@endsection
