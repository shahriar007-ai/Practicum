<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;

class FrontendController extends Controller
{
    public function cart(){
        return view('frontend.pages.cart');
    }
    public function checkout(){
        return view('frontend.pages.checkout');
    }
    public function bookDetails(Book $book){
        $category=Category::where('status',1)->get();
        $reviews = $book->reviews()->with('getUser')->where('status',1)->orderBy('updated_at','desc')->get();   
        $all_books=Book::where('status',1)->where('id','!=',$book->id)->get();
        return view('frontend.pages.book-details', compact('book','category','all_books','reviews'));
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
