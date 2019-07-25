<?php

use Illuminate\Database\Seeder;
use App\Zone;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $girona = App\Province::where('name', 'Girona')->first();
        $barcelona = App\Province::where('name', 'Barcelona')->first();

        Zone::create([
            'name' => 'Girona',
            'postal_code' => '17001',
            'province_id' => $girona->id
        ]);

        Zone::create([
            'name' => 'Figueres',
            'postal_code' => '17666',
            'province_id' => $girona->id
        ]);

        Zone::create([
            'name' => 'Barcelona Sans',
            'postal_code' => '08001',
            'province_id' => $barcelona->id
        ]);
    }
}
