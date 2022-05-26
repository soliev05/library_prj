<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class NovinkiCintroller extends Controller
{
    public function new(){

        return view('books.new', ['books_list'=>Books::paginate(6)]);
    }
}
