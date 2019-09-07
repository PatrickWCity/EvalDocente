<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evaluacion;
use Faker\Generator as Faker;

$factory->define(Evaluacion::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'docente_id' => Docente::all()->random()->id,
    ];
});
