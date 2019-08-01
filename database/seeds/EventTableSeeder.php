<?php

use Illuminate\Database\Seeder;
use App\Event;
use Illuminate\Support\Carbon;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Event::create([
            'house_id' => 1,
            'employee_id' => 2,
            'client_id' => 3,
            'start_date' => Carbon::today()->setHour(14),
            'end_date' => Carbon::today()->setHour(15),
        ]);

        Event::create([
            'house_id' => 2,
            'employee_id' => 2,
            'client_id' => 3,
            'start_date' => today()->setHour(17),
            'end_date' => Carbon::today()->setHour(18)
        ]);


        Event::create([
            'house_id' => 2,
            'employee_id' => 2,
            'client_id' => 3,
            'start_date' => today()->addDay()->setHour(17),
            'end_date' => Carbon::today()->addDay()->setHour(18)
        ]);

        Event::create([
            'house_id' => 2,
            'employee_id' => 2,
            'client_id' => 3,
            'start_date' => today()->setHour(12),
            'end_date' => Carbon::today()->setHour(13)
        ]);

        Event::create([
            'house_id' => 2,
            'employee_id' => 2,
            'client_id' => 3,
            'start_date' => today()->addDays(2)->setHour(17),
            'end_date' => Carbon::today()->addDays(2)->setHour(18)
        ]);
        Event::create([
            'house_id' => 3,
            'employee_id' => 2,
            'client_id' => 3,
            'start_date' => today()->addDays(3)->setHour(14),
            'end_date' => Carbon::today()->setHour(15),
        ]);
    }
}
