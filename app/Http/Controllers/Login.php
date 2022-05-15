<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Customer;

class Login extends Controller
{

      public function login(Request $request){

            $book_id = $request->request;
            if ($book_id){
               // dd($book_id);
                 return view('login.login', ['book_id'=>$book_id]);
            }else
            return view('login.login');
      }

      public function getLogin(Request $request){

        $user = Customer::where ('email',$request->request->get('email'))
        ->where('password',Customer::hashPassword($request->request->get('password')))
        ->get();
         $book_id = $request->request->get('book_id');

            if ($user->count()==1 && $book_id){

               Session::put('CurrentUser', $user);
               return app()->call('App\Http\Controllers\BasketController@store', [$request]);
         
               }elseif ($user->count()==1) {
                  Session::put('CurrentUser', $user);
                  return redirect ('/');
               }else

               {
                  Session::flash('error','Ползователь не найден');
               return redirect ('/login')->withErrors(['Пользователь не найден']);
               }
       
      }

}
