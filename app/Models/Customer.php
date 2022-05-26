<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Customer extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable= [
        'name',
        'email',
        'created_at'
        
    ];

    public static function hashPassword(string $password): string
    {
        return hash('sha256', $password);
    }
}
