<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function cart(){
        return view('frontend.pages.cart');
    }
    public function checkout(){
        return view('frontend.pages.checkout');
    }
    public function productDetails(){
        return view('frontend.pages.product');
    }
    public function shop(){
        return view('frontend.pages.books');
    }
}
