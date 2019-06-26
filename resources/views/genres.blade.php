<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Películas por género
    <ul>

      @forelse ($genres as $genre)
        <li>{{$genre->name}}</li>
        <ul>

        @forelse ($genre->movie as $movie)
            <li>{{$movie->title}}</li>
        @empty

        @endforelse
      </ul>
      @empty

      @endforelse
    </ul>

  </body>
</html>
