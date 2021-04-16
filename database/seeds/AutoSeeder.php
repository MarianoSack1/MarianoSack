<?php

use Illuminate\Database\Seeder;
use App\Auto;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auto::create ([
            'marca' =>'Ford',
            'modelo' => 1923,
        ]);
    }
}
