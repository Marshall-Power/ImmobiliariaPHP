<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
  public function index(){
    return view('contact');
}

public function create(){
    return view('contact');
}

public function storeComment(Request $request){

  $data = [
    'name' => $request->name,
    'email' => $request->email,
    'phone' => $request->phone,
    'message' => $request->message,
  ];
  $comment = Comment::create($data);
  return redirect()->route('contact');

    

}
}
