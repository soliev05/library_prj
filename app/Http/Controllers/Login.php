<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Login extends Controller
{
   public function login(){

       return view('login.index2');
    }

       public function getLogin(Request $request){

        $user = User::where ('email',$request->request->get('email'))
        ->where('password',User::hashPassword($request->request->get('password')))
        ->get();
           dd($user);
       
   }

   
}
