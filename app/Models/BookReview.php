<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class BookReview extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'user_id','user_rating','user_review','status'];

    public function getBook(){
        return $this->belongsTo(Book::class, 'book_id');
    }
    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
