<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {


    return [
        'username'=> $faker->username,
        'biography'=> $faker->text,
        'user_id' => $faker->unique()->numberBetween(1, App\User::count()),
    ];
});
