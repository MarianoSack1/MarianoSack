<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AutoSeeder::class);
        $this->call(MotoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(PedidosSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(WoodSeeder::class);
    }
}
