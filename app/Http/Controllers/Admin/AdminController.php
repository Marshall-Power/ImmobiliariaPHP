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

        $user = $request->user();

        if ($user->usertype_id == 1) {
            $houses = House::all();
            $users = User::all();
            $photos = count(Photo::all());
        } else {
            $users  = [];
            $houses = $user->houses;
            $photos = 0;

            foreach ($houses as $house) {
                $photos += count($house->photos);
            }
        }

        $comments = Comment::all();
        $provinces = Province::all();
        $zones = Zone::all();

        if ($request->user()->usertype_id == 1) {
            $events = Event::all();
        } else {
            $events = Event::where('employee_id', $request->user()->id);
        }

        return view('admin.index',compact('houses', 'users', 'zones', 'provinces', 'photos','comments', 'events'));
    }
}
