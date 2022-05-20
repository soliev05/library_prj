<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Nicolaslopezj\Searchable\SearchableTrait;


class HomeController extends Controller
{
    public function home(){
        return view('section.home', ['books_list'=> Books::paginate(15)]);
    }

    public function search(Request $request)
    {
        $search_text =$request->request->get('search');
        $books_list = Books::search($search_text)->paginate(15);
       
        return view('section.home', ['books_list'=>$books_list]);
    }
}
