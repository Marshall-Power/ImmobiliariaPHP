<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\House;
use App\Zone;
use App\Climate;
use App\User;
use App\HouseType;
use App\Contract;
use App\Photo;
use Illuminate\Support\Facades\Validator;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();

        return view('admin.houses.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $zones = Zone::all();
        $climates = Climate::all();
        $employees = User::where('usertype_id', '2')->get();
        $housetypes = HouseType::all();
        $contracts = Contract::all();

        return view('admin.houses.create',
            compact('user', 'zones', 'climates', 'employees', 'housetypes', 'contracts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data) {
        return Validator::make($data, House::$rules);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $data = $request->all();
        $data["elevator"] = $request->filled('elevator');
        $data["parking"] = $request->filled('parking');
        $data["air_conditioner"] = $request->filled('air_conditioner');
        $data["available"] = $request->filled('available');
        $data["furnished"] = $request->filled('furnished');

        $house = House::create($data);

        if($request->hasFile('images')) {
            foreach($request->file('images') as $key => $image) {
                $path = $image->store('images', [
                    'disk' => 'public'
                ]);

                Photo::create([
                    'house_id' => $house->id,
                    'path' => $path
                ]);

                if ($key == 3) break;
            }
        }

        return redirect()->route('admin.houses.index')->with('flash', trans('messages.new_house_added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house = House::findOrFail($id);
        return view('admin.houses.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $house = House::findOrFail($id);
        $zones = Zone::get();
        $climates = Climate::get();
        $employees = User::where('usertype_id', '2')->get();
        $housetypes = HouseType::all();
        $contracts = Contract::all();

        return view('admin.houses.edit',
            compact('user', 'house', 'zones', 'climates', 'employees', 'housetypes', 'contracts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validate($request, House::$rules);
        $validator["elevator"] = $request->elevator ? true : false;
        $validator["parking"] = $request->parking ? true : false;
        $validator["air_conditioner"] = $request->air_conditioner ? true : false;
        $validator["available"] = $request->available ? true : false;
        $validator["furnished"] = $request->furnished ? true : false;
        $house = House::findOrFail($id);
        $house->update($validator);

        return redirect()->route('admin.houses.show', $id)->with('flash', trans('messages.changes_saved'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $house = House::findOrFail($id);
        $house->delete();
        return redirect()->route('admin.houses.index')->with('flash', 'House deleted.');
    }
}
