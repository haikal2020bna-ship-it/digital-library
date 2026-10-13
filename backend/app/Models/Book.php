<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'category', 
        'isbn', 
        'publication_year', 
        'stock', 
        'author_id', 
        'publisher_id'
    ];
}