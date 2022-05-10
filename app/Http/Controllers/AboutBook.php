<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetBook;
use App\Models\Basket;
use Illuminate\Support\Facades\Session;


class AboutBook extends Controller
{
    public function getBook(Request $request, $id){

    $basket = Basket::where('user_id',Session::get('CurrentUser')->first()->id)
    ->where('book_id', $id)->first();
         return view('books.AboutBook', ['books_id'=>GetBook::book($id),'basket'=>$basket]);
    }
}
