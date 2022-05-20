<?php

namespace App\Models;
use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Nicolaslopezj\Searchable\SearchableTrait;


class Books extends Model
{
    use HasFactory;
    use AsSource;
    use SearchableTrait;
    
    
    use Attachable;

    protected $fillable= ['name','author','genre','year_publish','description','urlImage','urlFileBook'];

    protected $searchable = [
        
                'columns' => [
        
                    'books.name' => 10,
        
                ],
        
            ];
        



}
