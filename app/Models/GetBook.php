<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetBook extends Model
{
    use HasFactory;

   public function book($id)
   {
     
      $db = pg_connect("host=db port=5432 dbname=app user=postgres password=root");
      $attachment_id  = pg_query($db,"SELECT attachment_id FROM attachmentable WHERE attachmentable_id= '" . $id . "'; ");
      $row1 = pg_fetch_array($attachment_id);
      
      $imgBook_id = pg_query($db,"SELECT * FROM attachments WHERE id= '" . $row1[0] . "'; ");
      $row = pg_fetch_array($imgBook_id);
    
      $path = $row['path'];
      $name = $row['name'];
      $extension = $row['extension'];
      $url = 'http://localhost:8033/storage/' . $path . '/' . $name . '.' . $extension;

       $selectBook = Books::where('id','=',$id)->get()->first();
        $book = [
            $selectBook,
            $url
        ];
        // dd($row);
    return $book;

  
   }


}
