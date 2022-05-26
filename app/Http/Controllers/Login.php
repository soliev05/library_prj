<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Customer;

class Login extends Controller
{

      public function login(Request $request){

         if (Session::has('CurrentUser')){
            return redirect ('/');
        }else 
            $book_id = $request->request;
            $comment = $request->request;
            
            if ($comment->get('message')){
               return view('login.login', [
                  'comment'=>$comment, 
                  'read'=>false,
                  'download'=>false,
                  'book_id'=>false
               ]); 

            }elseif ($book_id->get('book_id')){
                  return view('login.login', [

                     'book_id'=>$book_id,
                     'read'=>false,
                     'download'=>false,
                     'comment'=>false 
                  ]);
            }
            elseif ($book_id->get('read')){
               // dd($book_id);
               return view('login.login', [
                  'read'=>$book_id,
                  'comment'=>false, 
                  'book_id'=>false ,
                  'download'=>false,
               ]);
         }
            elseif ($book_id->get('download')){

               return view('login.login', [
                  'download'=>$book_id,
                  'comment'=>false,
                  'read'=>false,
                  'book_id'=>false 

               ]);
         }
            else

            return view('login.login', [
            'comment'=>false, 
            'book_id'=>false,
            'download'=>false,
            'read'=>false
         ]);
      }

      public function getLogin(Request $request){
         // dd($request->request);
        $user = Customer::where ('email',$request->request->get('email'))
        ->where('password',Customer::hashPassword($request->request->get('password')))
        ->get();

         $book_id = $request->request->get('book_id');
         $comment = $request->request->get('message');
         
            if ($user->count()==1 && $comment){
                  Session::put('CurrentUser', $user);
                  return app()->call('App\Http\Controllers\CommentController@addComment', [$request]);
               
               }
               elseif ($user->count()==1 && $book_id) {
                  Session::put('CurrentUser', $user);
                  return app()->call('App\Http\Controllers\BasketController@store', [$request]);
               }
               elseif ($user->count()==1) {
                  Session::put('CurrentUser', $user);
                  return redirect ('/');
               } 
               elseif ($user->count()==1) {
                  Session::put('CurrentUser', $user);
                  return redirect ('/');
               }
               else

               {
                  Session::flash('error','Ползователь не найден');
               return redirect ('/login')->withErrors(['Пользователь не найден']);
               }
       
      }

}
