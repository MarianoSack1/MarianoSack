<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pedidos;
use App\Clientes;
use Faker\Generator as Faker;

$factory->define(Pedidos::class, function (Faker $faker) {
   // $Clientes = App\Clientes::pluck('id')->toArray();
    return [
            'detalle'=> $faker->text,
            'cliente_id' =>function () {
                return factory(App\Clientes::class)->create()->id;
            },
        ];
});
