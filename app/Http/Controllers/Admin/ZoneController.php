<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Zone;
use App\Province;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = Zone::get();
        $provinces = Province::get();

        return view('admin.zones.index', compact('zones','provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.zones.create');
        $provinces = Province::get();
        return view('admin.zones.create',compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'postal_code' => $request->postal_code,
            'province_id' => $request->province,
                ];
        $zone = Zone::create($data);
        return redirect()->route('admin.zones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('admin.zones.show');
        $zone = Zone::findOrFail($id);
        return view('admin.zones.show',compact('zone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('admin.zones.edit');
        $zone = Zone::findOrFail($id);
        $provinces = Province::get();
        return view('admin.zones.edit', compact('zone','provinces'));
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
       $data =[
            'name' => $request->name,
            'postal_code' => $request->postal_code,
            'province_id' => $request->province,
       ];
       $zone = Zone::findOrFail($id);
       $zone->update($data);
       return redirect()->route('admin.zones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $zone = Zone::findOrFail($id);
       $zone->delete();
       return redirect()->route('admin.zones.index');
    }
}
