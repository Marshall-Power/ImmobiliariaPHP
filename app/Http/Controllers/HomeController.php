<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $houses = House::all();

        if ($request->has('rooms_min') && $request->has('rooms_max')) {
            $houses = $houses->whereBetween('rooms', [$request->rooms_min, $request->rooms_max]);
        }

        if ($request->has('price_min') && $request->has('price_max')) {
            $houses = $houses->whereBetween('rooms', [$request->price_min, $request->price_max]);
        }

        if ($request->has('size_min') && $request->has('size_max')) {
            $houses = $houses->whereBetween('rooms', [$request->size_min, $request->size_max]);
        }

        if ($request->has('bathrooms_min') && $request->has('bathrooms_max')) {
            $houses = $houses->whereBetween('rooms', [$request->bathrooms_min, $request->bathrooms_max]);
        }

        if($request->has('contract'))
        {
            $houses = $houses->where('contract_id', $request->contract);
        }

        if($request->has('housetype'))
        {
            $houses = $houses->where('housetype_id', $request->housetype);
        }

        if($request->has('zone'))
        {
            $houses = $houses->where('zone_id', $request->zone);
        }

        if($request->has('elevator'))
        {
            $houses = $houses->where('elevator', $request->elevator);
        }

        if($request->has('parking'))
        {
            $houses = $houses->where('parking', $request->parking);
        }

        if($request->has('available'))
        {
            $houses = $houses->where('available', $request->available);
        }

        if($request->has('air'))
        {
            $houses = $houses->where('air_conditioner', $request->air);
        }

        return view('welcome', compact('houses'));
    }


    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function saveContact()
    { }
}
