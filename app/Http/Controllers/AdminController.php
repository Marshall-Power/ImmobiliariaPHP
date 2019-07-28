<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use App\User;
use App\Zone;
use App\Province;
use App\Photo;

class AdminController extends Controller
{
    public function index() {
        $houses = House::all();
        $users = User::all();
        $zones = Zone::all();
        $provinces = Province::all();
        $photos = Photo::all();

        return view('admin.index',compact('houses', 'users', 'zones', 'provinces', 'photos'));
    }

}
