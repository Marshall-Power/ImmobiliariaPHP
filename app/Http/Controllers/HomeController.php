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
        $houses = House::select('*');

        if ($request->has('rooms')) {
            $houses = $houses->where('rooms', '>=', $request->rooms);
        }

        if ($request->has('bathrooms')) {
            $houses = $houses->where('bathrooms', '>=', $request->bathrooms);
        }

        if ($request->has('price') && $request->price !== null) {
            $houses = $houses->where('price', '<', $request->price);
        }

        if ($request->has('size_min') && $request->has('size_max')) {
            $houses = $houses->whereBetween('size', [$request->size_min, $request->size_max]);
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

        $houses = $houses->paginate(4)->appends([
            'rooms' => $request->rooms,
            'bathrooms' => $request->bathrooms,
            'price' => $request->price,
            'size_min' => $request->size_min,
            'size_max' => $request->size_max,
            'size_min' => $request->size_min,
            'furnished' => $request->furnished,
            'air_conditioner' => $request->elevator,
            'parking' => $request->parking,
            'zone' => $request->zone,
            'housetype' => $request->housetype,
            'contract' => $request->contract,
            'available' => $request->available
        ]);

        return view('welcome', compact('houses', 'request'));
    }

    public function show($id)
    {

        $house = House::findOrFail($id);
        $zones = House::where('zone_id', $house->zone->id)->paginate(3);


        return view('show', compact('house','zones'));
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
