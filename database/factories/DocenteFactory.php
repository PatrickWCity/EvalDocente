<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Docente;
use App\User;
use Faker\Generator as Faker;

$factory->define(Docente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'appat' => $faker->lastName,
        'apmat' => $faker->optional()->lastName,
        'user_id' => User::all()->random()->id,
    ];
});
