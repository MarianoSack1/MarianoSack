<?php

use Illuminate\Database\Seeder;
use App\Wood;

class WoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Wood::class, 10)->create();
    }
}
