<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(){
        $new_books = Book::orderBy('id','desc')->take(10)->get();
        // $best_sellers = Book::orderBy('sold','desc')->take(4)->get();
        return view('frontend.pages.home',compact('new_books'));
    }
}


