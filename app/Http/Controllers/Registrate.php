<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Registrate as RegistrateRequest;
use App\Models\Customer;

class Registrate extends Controller
{
     public function index(){

        return view('login.registrate');
     }
 
        public function registrate(RegistrateRequest $request){
            
            $customer = new Customer();
            $customer->email = $request->request->get('email');
            $customer->password = Customer::hashPassword( $request->request->get('password'));
            $customer->name = $request->request->get('name');

            $customer->save();

            return redirect('/login');
        // dd ($user);        
    }
}
