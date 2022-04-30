<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Customer;

class Login extends Controller
{
   public function login(){

       return view('login.login');
    }

       public function getLogin(Request $request){

        $user = Customer::where ('email',$request->request->get('email'))
        ->where('password',Customer::hashPassword($request->request->get('password')))
        ->get();
         
        if ($user->count()==1){

           Session::push('CurrentUser', $user);
   
         }else 
         {
            Session::flash('error','Ползователь не найден');
            redirect ('/login');
         }
       
   }


   
   
}
