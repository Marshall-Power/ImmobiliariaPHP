<?php

use Illuminate\Database\Seeder;
use App\Climate;

class ClimateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Climate::create([
            'name' => 'Caldera Diesel'
        ]);

        Climate::create([
            'name' => 'Caldera Bio'
        ]);

        Climate::create([
            'name' => 'Chimenea'
        ]);
    }
}
