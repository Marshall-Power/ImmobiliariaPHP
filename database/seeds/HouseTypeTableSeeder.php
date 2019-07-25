<?php

use Illuminate\Database\Seeder;

class HouseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('housetypes')->insert([
        'name' => 'Pis',
      ]);
      DB::table('housetypes')->insert([
          'name' => 'Casa',
      ]);
      DB::table('housetypes')->insert([
        'name' => 'Mansió',
      ]);
      DB::table('housetypes')->insert([
        'name' => 'Àtic',
      ]);
      DB::table('housetypes')->insert([
        'name' => 'Dúplex',
      ]);
    }
}
