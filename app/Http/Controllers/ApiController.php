<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use App\Event;

class ApiController extends Controller
{
    public function houses(){
      $houses = House::get();
      return $houses;
    }

    public function events(Request $request, $id) {
        $events = Event::where(function ($query) use ($request) {
            $query->where('start_date', '>', $request->start_date);
            $query->where('end_date', '<', $request->start_date);
        })->get();
        return $events;
    }
}
