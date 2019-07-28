<?php

use Illuminate\Database\Seeder;
use App\Contract;

class ContractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contract::create([
            'name' => 'Alquiler',
            'rent' => true,
            'buy' => false,
        ]);

        Contract::create([
            'name' => 'Compra',
            'rent' => false,
            'buy' => true,
        ]);

        Contract::create([
            'name' => 'Compra & Alquiler',
            'rent' => true,
            'buy' => true,
        ]);
    }
}
