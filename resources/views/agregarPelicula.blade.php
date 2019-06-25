@extends('welcome')

@section('title')
    Agregar Película
@endsection
@section('class')
  agregarPelicula
@endsection

@section('contenido')
    <h1>Agregar Película</h1>
    <ul>
      <h3>Agregar Película</h3>
      <ul>


      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
      </ul>

      <form class="" action="/agregarPelicula" method="post" enctype="multipart/form-data">
        @csrf
        <div class="">
          <label for="title">Titulo:</label>
          <input id="Titulo" type="text" name="title" value="{{old("title")}}">
          <small>{{$errors->first('title')}}</small>
        </div>
        <div class="">
          <label for="rating">Rating:</label>
          <input id="rating" type="text" name="rating" value="{{old("rating")}}">
        </div>
        <div class="">
          <label for="awards">Premios</label>
          <input id="awards" type="text" name="awards" value="{{old("awards")}}">
        </div>
        <div class="">
        <label for="release_date">Fecha de estreno:</label>
        <input id="release_date" type="date" name="release_date" value="">
        </div>
        <div class="">
          <input type="submit" name="" value="Agregar Película">
        </div>
      </form>

@endsection
