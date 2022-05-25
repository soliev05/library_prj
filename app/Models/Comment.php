<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    public function getComment($id)
    {
        return Comment::where('book_id','=',$id)->paginate(10);
       
    }
}
