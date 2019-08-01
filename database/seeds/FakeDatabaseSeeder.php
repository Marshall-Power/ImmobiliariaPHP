<?php

use Illuminate\Database\Seeder;

class FakeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinceTableSeeder::class);
        $this->call(ZoneTableSeeder::class);

        $this->call(HousesTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(CommentsTableSeeder::class);

        $this->call(EventTableSeeder::class);
    }
}
