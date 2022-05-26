<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class PopularCintroller extends Controller
{
   public function popular(){

        return view('books.popular', ['books_list'=>Books::paginate(10)]);
     }
}
