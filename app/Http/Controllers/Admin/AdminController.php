<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\House;
use App\User;
use App\Zone;
use App\Province;
use App\Photo;
use App\Comment;
use App\Event;

class AdminController extends Controller
{
    public function index(Request $request) {
        $houses = House::all();
        $users = User::all();
        $zones = Zone::all();
        $provinces = Province::all();
        $photos = Photo::all();
        $comments = Comment::all();

        // if ($request->user()->usertype_id == 1) {
        //     $events = Event::all();
        // } else {
        //     $events = Event::where('employee_id', $request->user()->id);
        // }

        return view('admin.index',compact('houses', 'users', 'zones', 'provinces', 'photos','comments'));
    }

    public function calendar() {
        return view('admin.events.calendar');
    }

}
