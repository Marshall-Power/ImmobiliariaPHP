<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users=User::get();
      $usertypes=UserType::get();
      return view('users',compact('users','usertypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data=[
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=> Hash::make($request->password),
        'usertype_id'=>$request->usertype,
        'email_verified_at' => Carbon::now(),
        'remember_token' => Str::random(10),
      ];
      $user = User::create($data);
      return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user=User::find($id);
      return view('admin.users',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user=User::find($id);
      $usertypes=UserType::get();
      return view('admin.users.edit',compact('user','usertypes'));
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
      $data=[
        'name'=>$request->name,
        'email'=>$request->email,
        'usertype_id'=>$request->usertype,
      ];
      $user=User::find($id);
      $user->update($data);
      return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user=User::find($id);
      $user->delete();
      return redirect('users');
    }
}
