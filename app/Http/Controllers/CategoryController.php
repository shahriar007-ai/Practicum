<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // return view();
    }
    public function addCategory()
    {
        return view('admin.category.add');
    }
}
