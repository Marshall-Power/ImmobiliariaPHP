<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class AdminController extends Controller
{
    public function index() {
        $houses = House::all();
  
        return view('admin.index',compact('houses'));
    }
   
}
