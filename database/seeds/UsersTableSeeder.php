<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'usertype_id' => 1,
            'phone' => rand ( 600000000 , 699999999 ), 
        ]);

        DB::table('users')->insert([
            'name' => 'Agent',
            'email' => 'agent@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'usertype_id' => 2,
            'phone' => rand ( 600000000 , 699999999 ),
        ]);

        DB::table('users')->insert([
            'name' => 'Client',
            'email' => 'client@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'usertype_id' => 3,
            'phone' => rand ( 600000000 , 699999999 ),
        ]);
    }
}
