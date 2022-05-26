<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class GenreController extends Controller
{
    public function roditelyam(Request $request)
    {
        dd($request);
    }


    public function getBookByGenre(Request $request)
    {

        $genre = $request->request->get('genre');
            // dd($genre);
        
        $genreRus = GenreController::getGenreInRus($genre );
        
        $selectBookByGenre = Books::where('genre','=',$genreRus)->paginate(15);
        // dd($selectGenre );
        return view('books.genre', ['books_list'=>$selectBookByGenre]);
    }

    public function getGenreInRus($genre)
    {
        $genreList = [
            'sport' => 'Cпорт',
            'hobbi' => 'Хобби',
            'roditelyam' => 'Родителям',
            'istoriya' => 'История',
            'detskie-knigi' => 'Детские книги',
            'biznes-knigi' => 'Бизнес книги',
            'bografiya' => 'Биографии',
            'nauchnaya-literatura' => 'Научная литература',
           
            
        ];
        return ($genreList[$genre]);
    }
}
