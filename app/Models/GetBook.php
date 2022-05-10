<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetBook extends Model
{
    use HasFactory;

   public function book($id)
   {
//  ,    $db = pg_connect("host=db port=5432 dbname=app user=postgres password=root");
//       $result = pg_query($db,"SELECT * FROM books WHERE id= '" . $id . "'; ");
//       $row = pg_fetch_array($result);


       $selectBook = Books::where('id','=',$id)->get();
       return $selectBook[0];
//    dd( $r);
   }


}
