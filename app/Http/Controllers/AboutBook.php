<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetBook;
class AboutBook extends Controller
{
    public function getBook(Request $request){
//        return view('books.AboutBook');
    $bookId = $request->path();

    return view('books.AboutBook', ['books_id'=>GetBook::book($bookId)]);
    }
}
