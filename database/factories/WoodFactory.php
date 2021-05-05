<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Wood;
use Faker\Generator as Faker;

$factory->define(Wood::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'largo_cm'=>$faker->randomDigit,
        'ancho_cm'=>$faker->randomDigit,
        'espesor_mm'=>$faker->randomDigit,
        'cantidad'=>$faker->randomDigit,
    ];
});
