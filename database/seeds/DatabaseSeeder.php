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

        $this->call(ProvinceTableSeeder::class);
        $this->call(ZoneTableSeeder::class);

        $this->call(HouseTypeTableSeeder::class);
        $this->call(ClimateTableSeeder::class);
    }
}
