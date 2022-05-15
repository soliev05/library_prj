<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function saveComment(Request $request)
    {
        // dd($request);
        $comment = new Comment();

        $comment->user_id = $request->request->get('user_id');
        $comment->book_id = $request->request->get('book_id');
        $comment->user_name = $request->request->get('user_name');
        $comment->comment = $request->request->get('message');
        
        $comment->save();
        return redirect($request->request->get('redirect'));
    }
}
