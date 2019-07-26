<?php

use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('houses')->insert([
        'name' => 'Mansió 1',
        'address' => 'c/ 11 de Setembre, nº4',
        'latitude' => 41.9963105,
        'longitude' => 2.8268954,
        'zone_id' => 1,
        'price' => 675000,
        'size' => 421,
        'rooms' => 5,
        'bathrooms' => 3,
        'air_conditioner' => 1,
        'climate_id' => 3,
        'elevator' => 0,
        'employee_id' => 2,
        'housetype_id' => 3,
        'contract_id' => 2, 
        'date_published' => now(),
        'avaiable' => 1,
        'parking' => 1,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Pis 1',
        'address' => 'c/ Santa Clara, nº22, A',
        'latitude' => 41.9840907,
        'longitude' => 2.8232524,
        'zone_id' => 1,
        'price' => 575,
        'size' => 40,
        'rooms' => 1,
        'bathrooms' => 1,
        'air_conditioner' => 1,
        'climate_id' => 3,
        'elevator' => 1,
        'employee_id' => 2,
        'housetype_id' => 1,
        'contract_id' => 1, 
        'date_published' => now(),
        'avaiable' => 1,
        'parking' => 0,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Mansió 2',
        'address' => 'c/ Torres de Palau, nº2',
        'latitude' => 41.951369,
        'longitude' => 2.8174914,
        'zone_id' => 1,
        'price' => 3500,
        'size' => 380,
        'rooms' => 6,
        'bathrooms' => 4,
        'air_conditioner' => 1,
        'climate_id' => 3,
        'elevator' => 0,
        'employee_id' => 2,
        'housetype_id' => 3,
        'contract_id' => 1, 
        'date_published' => now(),
        'avaiable' => 1,
        'parking' => 1,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Atic 1',
        'address' => 'c/ de la Cruz, nº4',
        'latitude' => 41.9755799,
        'longitude' => 2.8201955,
        'zone_id' => 1,
        'price' => 1200,
        'size' => 421,
        'rooms' => 4,
        'bathrooms' => 2,
        'air_conditioner' => 1,
        'climate_id' => 3,
        'elevator' => 1,
        'employee_id' => 2,
        'housetype_id' => 4,
        'contract_id' => 1, 
        'date_published' => now(),
        'avaiable' => 1,
        'parking' => 1,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Dúplex 1',
        'address' => 'Plaça Catalunya, nº21',
        'latitude' => 41.9819056,
        'longitude' => 2.8214265,
        'zone_id' => 1,
        'price' => 250000,
        'size' => 440,
        'rooms' => 5,
        'bathrooms' => 2,
        'air_conditioner' => 1,
        'climate_id' => 3,
        'elevator' => 1,
        'employee_id' => 2,
        'housetype_id' => 5,
        'contract_id' => 2, 
        'date_published' => now(),
        'avaiable' => 1,
        'parking' => 1,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Casa 1',
        'address' => 'c/ Can Llobet, nº10',
        'latitude' => 42.3735542,
        'longitude' => 2.9183898,
        'zone_id' => 1,
        'price' => 620000,
        'size' => 275,
        'rooms' => 5,
        'bathrooms' => 3,
        'air_conditioner' => 1,
        'climate_id' => 3,
        'elevator' => 0,
        'employee_id' => 2,
        'housetype_id' => 2,
        'contract_id' => 2, 
        'date_published' => now(),
        'avaiable' => 1,
        'parking' => 1,
        'created_at' => now(),
      ]);
    }
}