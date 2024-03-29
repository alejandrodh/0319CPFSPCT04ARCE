<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //Mi codigo.
    public function list() {

        $peliculas = Movie::all();


        // $peliculas2 = [
        //   "Toy Story",
        //   "Avengers - Age of Ultron",
        //   "Avengers - End Game",
        //   "The mule",
        //   "How to train your Dragon."
        // ];

        // return view('welcome', ['hola' => $saludo]);
        //$vac = compact('saludo');
        //return view('welcome', compact('saludo'));
        return view('peliculas')->with('peliculas', $peliculas);
    }

    public function create(){
      return view('agregarPelicula');
    }

    public function show($id){
      $movie = Movie::find($id);
      return view('/pelicula',compact('movie'));
    }


    public function destroy($id){
      $peliculaBorrar = Movie::find($id);
      $peliculaBorrar->delete();

      return redirect('/peliculas');
    }

    public function store(Request $req){

            // //Primero valido los datos. //
            $reglas = [
              "title" => "required|string|min:2",
              // "name"=>"required|string|min:2",
              "genre"=> "required|string",
              "rating" => "required|integer|min:0|max:10",
              "poster" =>"image"
            ];

            $mensajes = [
              "string" => "El campo :attribute  debe ser de texto.",
              // "name.string" => "El campo Nombre debe ser de texto.",
              "required" => "El campo :attribute debe completarse",
              "integer" => "El campo :attribute debe ser un numero entero.",
              "min" => "El campo debe :attribute tener como minimo :value caracteres",
              "max" => "El campo debe :attribute tener como maximo :value caracteres"
            ];

            $this->validate($req, $reglas, $mensajes);
            //Crear un nuevo objeto movie.
            $nuevaPelicula = new Movie();

            $path = $req->file('poster')->store('/public/poster');
            $file = basename($path);
            //dd($path, $file);

          //  Le voy a cargar los datos que vienen por post (request)
            $nuevaPelicula->title = $req["title"];
            $nuevaPelicula->rating = $req["rating"];
            $nuevaPelicula->awards = $req["awards"];
            $nuevaPelicula->release_date = $req["release_date"];
            $nuevaPelicula->image = $file;
            // dd($req, $nuevaPelicula);
          //  Guardo el objeto en la base de datos.

            $nuevaPelicula->save();

            return redirect('peliculas');
    }
}
