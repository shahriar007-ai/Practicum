<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BookReview;
use DB;
use Auth;

class FrontendController extends Controller
{
    public function cart(){
        return view('frontend.pages.cart');
    }
    public function checkout(){
        return view('frontend.pages.checkout');
    }
    public function bookDetails(Book $book){
        $auth_user_review='';
        $whole='';
        $fraction='';
        $category=Category::where('status',1)->get();
        $book_id=$book->id;
        $total_rating=BookReview::where('book_id',$book->id)->where('user_rating','!=',0)->count('user_rating');
        $sum_rating = DB::table('book_reviews')->where('user_rating','!=',0)->where('book_id',$book_id)->sum('user_rating');
       
        if($total_rating==0){
            $avg_rating = number_format($sum_rating/1,2);
        }else{
            $avg_rating = number_format($sum_rating/$total_rating,2);
            $real_avg   = floatval($avg_rating);
            $whole   = intval($avg_rating);
            $fraction =  $real_avg - $whole;
        }
       
        $total_review=BookReview::where('book_id',$book->id)->count('user_review');
        $reviews = $book->reviews()->with('getUser')->where('user_rating','!=',null)->where('user_review','!=',null)->where('status',1)->orderBy('updated_at','desc')->get();   
        $all_books=Book::where('status',1)->where('id','!=',$book->id)->get();
        if(Auth::check()){
            $auth_user_review = BookReview::where('book_id',$book->id)->where('user_id',Auth::user()->id)->first();
        }
        return view('frontend.pages.book-details', compact('book','whole','fraction','category','all_books','reviews','total_rating','total_review','avg_rating','auth_user_review'));
    }
    public function books($category_id){
        $category=Category::where('id',$category_id)->with('children')->first();
        if(!empty($category)){
            return view('frontend.pages.books',compact('category'));
        }else {
            abort(404);
        }
    }
}
