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
  {{-- @dd($movie->genre->name) --}}
<p>Genero: {{$movie->genre->name}}</p>
<p>Actores</p>
<ul>

@forelse ($movie->actor as $actor)
  <li>{{$actor->getNombreCompleto()}}</li>
@empty

@endforelse
</ul>
<img src="/storage/poster/{{$movie->image}}" alt="">

<form class="" action="/deleteMovie/{{$movie->id}}" method="get">

  {{-- <input type="hidden" name="id" value="{{$movie->id}}"> --}}
  <input type="submit" name="" value="Borrar Pelicula">
  @csrf

</form>


@endsection
