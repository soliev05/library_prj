<?php

use Illuminate\Support\Facades\Route;
use App\Models\Books;
use  App\Http\Controllers\Login;
use  App\Http\Controllers\Registrate;
use App\Http\Controllers\AboutBook;
use App\Http\Controllers\BasketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('section.home', ['books_list'=> Books::all()]);
});


//Route::get('/{id}', function ($id) {
//    return view('books.AboutBook', ['books_id' =>new AboutBook()]);
//});

// Route::get('/', function () {
//     return view('welcome');
// });


Route::post('/registrate', [Registrate::class,'registrate']);

Route::get('/registrate', [Registrate::class,'index']);

Route::post('/login', [Login::class,'getLogin']);

Route::get('/login', [Login::class,'login']);




Route::get('/books',function (){
    return view ('books.template', ['books_list'=> Books::all()]);
});

Route::get('/biznes-knigi',function (){
    return view ('books.biznes');
});

Route::get('/sport-zdorove-krasota',function (){
    return view ('books.index1');
});

Route::get('/Detskie-knigi',function (){
    return view ('books.index1');
});

Route::get('/hobbi-dosug',function (){
    return view ('books.index1');
});

Route::get('/roditelyam',function (){
    return view ('books.index1');
});

Route::get('/istoriya',function (){
    return view ('books.index1');
});

Route::get('/detskie-knigi',function (){
    return view ('books.index1');
});
// Route::get('/',function (){
//     return view ('books.index1');
// });
Route::get('/uchebnaya-i-nauchnaya-literatura',function (){
    return view ('books.index1');
});

Route::get('/biografiya-memuari',function (){
    return view ('books.index1');
});






Route::get('/basket',[BasketController::class,'index']);

Route::post('/basket',[BasketController::class,'store']);



Route::get('/book/{id}',[AboutBook::class,'getBook']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';





// Route::get('/login',function (){
//     return view ('login.index2');
// });


// Route::get('/login',function (){
//     return view (getLogin());
// });

// Route::get('/login', [Login::class,'login']);


// Route::post('/login', [Login::class,'getLogin']);


// Route::post('/registrate', [Registrate::class,'registrate']);

// Route::get('/registrate', [Registrate::class,'index']);


