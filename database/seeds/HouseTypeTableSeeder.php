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
      DB::table('house_types')->insert([
        'name' => 'Pis',
      ]);
      DB::table('house_types')->insert([
          'name' => 'Casa',
      ]);
      DB::table('house_types')->insert([
        'name' => 'Mansió',
      ]);
      DB::table('house_types')->insert([
        'name' => 'Àtic',
      ]);
      DB::table('house_types')->insert([
        'name' => 'Dúplex',
      ]);
    }
}
