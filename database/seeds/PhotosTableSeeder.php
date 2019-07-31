<?php

use Illuminate\Database\Seeder;
use App\Photo;
use Faker\Generator as Faker;
class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '1'
        ]);
         Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '1'
        ]);
         Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '1'
        ]);
         Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '2'
        ]);
         Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '2'
        ]);
         Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '2'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '3'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '3'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '3'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '4'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '4'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '4'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '5'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '5'
        ]);
        Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '5'
        ]);
         Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '6'
        ]);
         Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '6'
        ]);
         Photo::create([
            'path' => "images/" . $faker->image(public_path('storage/images'), 640, 480, "abstract", false, true, 'house'),
            'house_id' => '6'
        ]);
    }
}
