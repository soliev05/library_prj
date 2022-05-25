<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DownloadController extends Controller
{
    public function download(Request $request)
    {

      return redirect($request->request->get('redirect'));
    }
}
