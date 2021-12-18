<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    public function index()
    {
        // return view();
    }
    public function addCategory()
    {
        $all_category=Category::where('status',1)->get();
        return view('admin.category.add',compact('all_category'));
    }
    public function  storeCategory(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'short_desc' => 'nullable|string|max:1000',
            'cat_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $category = new Category();
        $category->title = $request->title;
        $category->slug = Str::slug($request->title,'-');
        $category->short_desc = $request->short_desc;
        $image = $request->file('cat_img'); 
        if($image != '') {
            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $f_n = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME),'-');
            $imagename = $f_n.'-'.time() . '.' .$ext;
            $image->move('uploads/category/images', $imagename);
            $category->img = $imagename;
        }
        $category->save();
        return redirect()->route('category.add')->with('success','Category Added Successfully');
    }
}
