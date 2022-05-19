<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;


class CommentController extends Controller
{
    public function addComment(Request $request)
    {
       
        $comment = new Comment();

        $comment->user_id = Session::get('CurrentUser')->first()->id;
        $comment->book_id = $request->request->get('book_id');
        $comment->user_name = Session::get('CurrentUser')->first()->name;
        $comment->comment = $request->request->get('message');
        
        $comment->save();
        return redirect($request->request->get('redirect'));
    }
}
