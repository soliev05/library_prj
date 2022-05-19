<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetBook extends Model
{
    use HasFactory;

   public function book($id)
   {
     
       $selectBook = Books::where('id','=',$id)->get()->first();
       
    return $selectBook;

   }


}
