<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sede;
use Faker\Generator as Faker;

$factory->define(Sede::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->text($maxNbChars = 20),
        'descripcion' => $faker->paragraph,
        'user_id' => User::all()->random()->id,
    ];
});
