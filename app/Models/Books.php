<?php

namespace App\Models;
use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;

class Books extends Model
{
    use HasFactory;
    use AsSource;

    use Attachable;

    protected $fillable= ['name','author','genre','year_publish','description','urlImage','urlFileBook'];
}
