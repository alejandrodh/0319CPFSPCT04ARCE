@extends('welcome')

@section('title', 'Actores')

@section('class', 'actors')


@section('contenido')

<form class="" action="/actors/search" method="get">
  <input type="text" name="name" value="">
  <input type="submit" name="" value="Buscar Actor">
</form>

<h1>Lista de actores</h1>
<ul>
@foreach ($actors as $actor)
  <li>
    <a href="/actor/{{$actor->id}}">
    {{-- {{$actor->first_name}}, {{$actor->last_name}} --}}
    {{$actor->getNombreCompleto()}}
    </a>
  </li>
@endforeach
</ul>
@endsection

@section('links')
  @parent
  <a href="#">Solo actores</a>
@endsection
