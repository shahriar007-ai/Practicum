<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookReview;
use DB;

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
        $sum_rating = DB::table('book_reviews')->where('user_rating','!=',0)->where('book_id',$book_id)->sum('user_rating');
        $rate_count =  DB::table('book_reviews')->where('book_id',$book_id)->where('user_rating','!=',0)->count('user_rating');
        if($rate_count==0){
            $avg_rating = number_format($sum_rating/1,2);
        }else{
            $avg_rating = number_format($sum_rating/$rate_count,2);
        }
        $review_count =  DB::table('book_reviews')->where('book_id',$book_id)->where('user_review','!=',null)->count('user_review');
        return response()->json([
            'success'=>'Rating Saved Successfully',
            'rating'=>$book_rating->user_rating,
            'book_id'=>$book_id,
            'user_id'=>$user_id,
            'user_review'=>$book_rating->user_review,
            'rate_count'=>$rate_count,
            'review_count'=>$review_count,
            'avg_rating'=>$avg_rating
        ]);
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
        return response()->json([
            'success'=>'Review Saved Successfully',
            'book_id'=>$book_id,
            'user_id'=>$user_id,
            'user_review'=>$book_review->user_review,
        ]);
    }
}
