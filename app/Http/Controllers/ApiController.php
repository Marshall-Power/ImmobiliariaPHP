<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class ApiController extends Controller
{
    public function houses(){
      $houses = House::get();
      return $houses;
    }

    public function events($id) {
        $events = Event::where('employee_id', $id)->get();
    }
}
