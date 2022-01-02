<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookReview;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function reviews()
    {
        return $this->hasMany(BookReview::class, 'book_id');
    }
}
