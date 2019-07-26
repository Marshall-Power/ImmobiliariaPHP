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
            'rent' => true,
            'buy' => false,
        ]);

        Contract::create([
            'rent' => false,
            'buy' => true,
        ]);

        Contract::create([
            'rent' => true,
            'buy' => true,
        ]);
    }
}
