@extends('welcome')

@section('title')
    Películas
@endsection
@section('class')
  movies
@endsection

@section('contenido')
    <h1>Películas</h1>
    <ul>
      <h3>Sintaxis Blade</h3>
      @php
        //$peliculas = [];
      @endphp
      @forelse ($peliculas as $pelicula)
          @unless ($pelicula->title == "The mule")
            <a href="/pelicula/{{$pelicula->id}}">
              <li>{{$pelicula->title}}</li>
            </a>
            <li>{{$pelicula->rating}}</li>
            
          @endunless

      @empty

        <p>La búsqueda no trajo resultados.</p>

      @endforelse
    </ul>

    <ul>
      <h3>Sintaxis Php</h3>
    <? foreach($peliculas as $pelicula): ?>
      <li><?= $pelicula->title ?></li>
    <? endforeach ?>
    </ul>

@endsection
