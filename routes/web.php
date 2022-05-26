<?php

use Illuminate\Support\Facades\Route;
use App\Models\Books;
use App\Http\Controllers\Login;
use App\Http\Controllers\Registrate;
use App\Http\Controllers\AboutBook;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileExitController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\NovinkiCintroller;
use App\Http\Controllers\PopularCintroller;
use App\Http\Controllers\AboutLibraryController;


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

Route::get('/',[HomeController::class, 'home']);
Route::get('/search',[HomeController::class, 'search']);


Route::get('/popular',[PopularCintroller::class, 'popular']);

Route::get('/novinki',[NovinkiCintroller::class, 'new']);

Route::get('/contact', function () {
   return view('books.contact');
});

// ==============  genre ===========
// Route::get('/genre/roditelyam', [GenreController::class,'roditelyam']);


Route::get('/genre/', [GenreController::class,'getBookByGenre']);
// ================///=======================


Route::post('/registrate', [Registrate::class,'registrate']);

Route::get('/registrate', [Registrate::class,'index']);

Route::post('/login', [Login::class,'getLogin']);

Route::get('/login', [Login::class,'login']);


Route::get('/library', [AboutLibraryController::class,'library']);

// Route::get('/b',function (){
//     return view ('books.portfolio');
// });

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


////////////   Profile  ////////////
Route::get('/profile',[ProfileController::class, 'profile']);

//----------------------------------

//////////// ProfileExit   ////////////
Route::get('/exit',[ProfileExitController::class, 'exit']);

//----------------------------------

// ////////////   корзина   //////////////
Route::get('/basket',[BasketController::class,'index']);
Route::post('/basket',[BasketController::class,'store']);

// ----------------------------------

//////////////////   AboutBook   /////////
Route::get('/book/{id}',[AboutBook::class,'getBook']);

//----------------------------

////////////   Comment   ////////////
Route::post('/book/{id}/comment',[CommentController::class, 'addComment']);

//----------------------------------
////////////   download + popular   ////////////
// Route::post('/book/{id}/download',[DownloadController::class, 'down']);

//----------------------------------




////////////Download////////////
Route::get('/book/{id}/download',[DownloadController::class, 'download']);

//----------------------------------

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


