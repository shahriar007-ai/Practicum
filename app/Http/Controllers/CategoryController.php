<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    
    public function addCategory()
    {
        $parent_category=Category::where('status',1)->where('parent_id',0)->get();
        return view('admin.category.add',compact('parent_category'));
    }
    public function  storeCategory(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:60|unique:categories,title',
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
    public function editCategory(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }
    public function updateCategory(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:60|unique:categories,title,'.$id,
            'short_desc' => 'nullable|string|max:1000',
            'cat_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $category = Category::findOrFail($id);
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
        }else{
            $category->img = $request->old_img;
        }
        $category->update();
        return redirect()->route('category.add')->with('success','Category Updated Successfully');
    }
    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.add')->with('success','Category Deleted Successfully');
    }
    public function addSubCategory()
    {   
        $sub_category=Category::where('status',1)->with('parent')->where('parent_id','!=',0)->get();
        $parent_category=Category::where('status',1)->where('parent_id',0)->get();
        return view('admin.subcategory.add',compact('parent_category','sub_category'));
    }
    public function  storeSubCategory(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:60|unique:categories,title',
            'parent_category' => 'required|integer',
            'short_desc' => 'nullable|string|max:1000',
            'cat_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $category = new Category();
        $category->title = $request->title;
        $category->slug = Str::slug($request->title,'-');
        $category->short_desc = $request->short_desc;
        $category->parent_id = $request->parent_category;
        $image = $request->file('cat_img'); 
        if($image != '') {
            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $f_n = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME),'-');
            $imagename = $f_n.'-'.time() . '.' .$ext;
            $image->move('uploads/subcategory/images', $imagename);
            $category->img = $imagename;
        }
        $category->save();
        return redirect()->route('subcategory.add')->with('success','SubCategory Added Successfully');
    }
    public function editSubCategory(Category $subcategory)
    {
        $parent_category = Category::where('status',1)->where('parent_id',0)->get();
        return view('admin.subcategory.edit',compact('subcategory','parent_category'));
    }
    public function updateSubCategory(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:60|unique:categories,title,'.$id,
            'short_desc' => 'nullable|string|max:1000',
            'parent_category' => 'required|integer',
            'cat_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title,'-');
        $category->short_desc = $request->short_desc;
        $category->parent_id = $request->parent_category;
        $image = $request->file('cat_img'); 
        if($image != '') {
            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $f_n = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME),'-');
            $imagename = $f_n.'-'.time() . '.' .$ext;
            $image->move('uploads/subcategory/images', $imagename);
            $category->img = $imagename;
        }else{
            $category->img = $request->old_img;
        }
        $category->update();
        return redirect()->route('subcategory.add')->with('success','SubCategory Updated Successfully');
    }
    public function deleteSubCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('subcategory.add')->with('success','SubCategory Deleted Successfully');
    }
}
