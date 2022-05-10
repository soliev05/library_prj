<?php

namespace App\Models;
use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Books extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable= ['name','author','genre','year_publish','description'];
}
