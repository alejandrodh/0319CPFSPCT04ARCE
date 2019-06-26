<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //public $table
    //public $primaryKey
    //public $timestamps
    public $guarded = [];

    public function genre(){
      return $this->belongsTo('App\Genre', 'genre_id');
    }
    public function actor(){
      return $this->belongsToMany('App\Actor','actor_movie','movie_id','actor_id');
    }
}
