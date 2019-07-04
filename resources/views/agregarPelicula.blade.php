<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Agregar Película</h1>
      <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
      </ul>

      <form class="" action="/addMovie" method="post" enctype="multipart/form-data">
         @csrf {{-- ES OBLIGATORIO PARA FORMS METHOD POST --}}
        {{-- {{csrf_field()}} --}}
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
          <label>Genero</label>
          <input type="text" name="genre" value="{{old("awards")}}">
        </div>
        <div class="">
        <label for="release_date">Fecha de estreno:</label>
        <input id="release_date" type="date" name="release_date" value="">
        </div>
        <div class="">
        <label>Poster</label>
        <input type="file" name="poster" value="">
        </div>
        <div class="">
          <input type="submit" name="" value="Agregar Película">
        </div>
      </form>

  </body>
</html>
