<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->firstNameMale,
        'original_title' => $faker->firstNameFemale,
        'nationality' => $faker->stateAbbr,
        'date' => $faker->date,
        'vote' => $faker->numberBetween(1, 13),
        
    ];
});
