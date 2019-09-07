<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modulo;
use Faker\Generator as Faker;

$factory->define(Modulo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->text($maxNbChars = 20),
        'descripcion' => $faker->paragraph,
        'user_id' => User::all()->random()->id,
    ];
});
