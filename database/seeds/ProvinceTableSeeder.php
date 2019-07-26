<?php

use Illuminate\Database\Seeder;
use App\Province;
class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            'name' => 'Girona'
        ]);

        Province::create([
            'name' => 'Barcelona'
        ]);

        Province::create([
            'name' => 'Tarragona'
        ]);


        Province::create([
            'name' => 'Lleida'
        ]);
    }
}
