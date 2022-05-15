<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetBook;
use App\Models\Basket;
use Illuminate\Support\Facades\Session;
use App\Models\Comment;
 
class AboutBook extends Controller
{
    // $comment =  Comment::where('user_id',Session::get('CurrentUser')->first()->id)
    // ->where('book_id', $id)->first();
    
    public function getBook(Request $request, $id){

        if (Session::has('CurrentUser')) {       
            $basket = Basket::where('user_id',Session::get('CurrentUser')->first()->id)
            ->where('book_id', $id)->first();

                return view('books.AboutBook', ['books_id'=>GetBook::book($id),'basket'=>$basket,
                'comment'=>Comment::getComment($id)]);
        }else 

                return view('books.AboutBook', 
                ['books_id'=>GetBook::book($id),'comment'=>Comment::getComment($id)]);
    }
}
