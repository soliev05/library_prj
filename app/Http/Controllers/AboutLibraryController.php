<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutLibraryController extends Controller
{
        public function library()
        {
            return view ('books.portfolio');
        }
}
