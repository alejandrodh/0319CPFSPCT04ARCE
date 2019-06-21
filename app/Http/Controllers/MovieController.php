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
}
