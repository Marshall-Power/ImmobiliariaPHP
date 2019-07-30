<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('comments')->insert([
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => rand(600000000, 699999999),
        'message' => $faker->text($maxNbChars = 500),
      ]);
      DB::table('comments')->insert([
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => rand(600000000, 699999999),
        'message' => $faker->text($maxNbChars = 500),
      ]);
      DB::table('comments')->insert([
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => rand(600000000, 699999999),
        'message' => $faker->text($maxNbChars = 500),
      ]);
      DB::table('comments')->insert([
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => rand(600000000, 699999999),
        'message' => $faker->text($maxNbChars = 500),
      ]);
      DB::table('comments')->insert([
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => rand(600000000, 699999999),
        'message' => $faker->text($maxNbChars = 500),
      ]);
    }
}
