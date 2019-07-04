<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'name'=>$faker->word(3),
        'description'=>$faker->sentence(6),
        'price'=>$faker->randomFloat(2, 300, 4000),
    ];
});
