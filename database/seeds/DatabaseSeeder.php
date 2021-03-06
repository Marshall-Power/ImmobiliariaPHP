<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTypeSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HouseTypeTableSeeder::class);
        $this->call(ClimateTableSeeder::class);
        $this->call(ContractTableSeeder::class);
    }
}
