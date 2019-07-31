<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
  public function index()
  {
      $comments = Comment::all();

      return view('admin.comments.index', compact('comments'));
  }

  public function storeComment(Request $request)
  {

      $data = [
          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'message' => $request->message,
      ];

      $comment = Comment::create($data);

      $request->session()->flash('message', trans('messages.message_saved'));

      return redirect()->route('contact');
  }
  public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
