<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookReview;

class BookReviewController extends Controller
{
    public function ratingStoreUpdate(Request $request){
        // return $request->all();
        $book_id = intval($request->book_id);
        $user_id = intval($request->user_id);
        $user_rating = intval($request->rating_data);
        $book_rating = BookReview::updateOrCreate(
            ['book_id' => $book_id, 'user_id' => $user_id],
            ['user_rating' => $user_rating]
        );
        return response()->json(['success'=>'Rating Saved Successfully']);
    }
    public function reviewStoreUpdate(Request $request){
        // return $request->all();
        $book_id = intval($request->book_id);
        $user_id = intval($request->user_id);
        $user_review = $request->review_data;
        $book_review = BookReview::updateOrCreate(
            ['book_id' => $book_id, 'user_id' => $user_id],
            ['user_review' => $user_review]
        );
        return response()->json(['success'=>'Review Saved Successfully']);
    }
}
