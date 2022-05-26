<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\Books;
use App\Models\Popular;
use Illuminate\Support\Facades\Session;


class BasketController extends Controller
{
    
    public function index()
    {
        $booksListFromBasket = Basket::select('book_id')
                      ->where('user_id',Session::get('CurrentUser')
                      ->first()->id)
                      ->pluck('book_id')
                      ->toArray();

        $booksList = Books::whereIn('id',$booksListFromBasket )->get()->toArray();
  
        $length = count($booksList);
        return view('books.basket', ['book_list'=>$booksList,'length'=>$length]);
    }

    public function store(Request $request)
    {
        $basket = Basket::where('user_id',Session::get('CurrentUser')->first()->id)
        ->where('book_id', $request->request->get('book_id'))->first();
        // dd($basket);
        
        if (!$basket){
            $basket = Basket::where('user_id',Session::get('CurrentUser')
                ->first()
                ->id)
                ->where('book_id', $request->request->get('book_id'))
                ->first();

            if (!$basket) {
                $basket = new Basket();
                $addBookToPopular = new Popular();
            }
            $basket->user_id = Session::get('CurrentUser')->first()->id;
            $basket->book_id = $request->request->get('book_id');
        
            $basket->save();

        }elseif ($basket){

            $basket->delete();

        } 
        return redirect($request->request->get('redirect'));
    }
}
