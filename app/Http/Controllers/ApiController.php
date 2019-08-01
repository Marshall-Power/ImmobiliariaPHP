<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use App\Event;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function houses(){
      $houses = House::get();
      return $houses;
    }

    public function events(Request $request, $id) {
        $date = Carbon::createMidnightDate($request->start_date);
        $events = Event::where('employee_id', $id)
                        ->whereBetween('start_date', [$date->format('y-m-d'), $date->endOfDay()])
                        ->get();
        return $events;
    }
}
