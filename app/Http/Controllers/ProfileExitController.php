<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProfileExitController extends Controller
{
    public function exit()
    {
        if (Session::has('CurrentUser')){
            Session::pull('CurrentUser');
            return redirect('/');
        }
    }
}
