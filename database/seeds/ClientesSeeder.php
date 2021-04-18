<?php

use Illuminate\Database\Seeder;
use App\Clientes;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Clientes::class, 10)->create();
    }
}
