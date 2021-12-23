<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Tag;
use Str;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {   
        $books = Book::paginate(10);
        return view('admin.books.index',compact('books'));
    }
    public function addBook(){
        $category = Category::where('parent_id',0)->with('children')->get();
        $books  = Book::where('status', 1)->get();
        $tags = Tag::where('status',1)->get();
        return view('admin.books.add',compact('category','books','tags'));
    }
    public function storeBook(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100|unique:books,title',
            'sku' => 'required|string|max:100|unique:books,sku',
            'short_desc' => 'nullable|string|max:1000',
            'description' => 'nullable|string|max:4000',
            'featured_img' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            'category.*'=>'required',
            'tags.*'=>'nullable',
            'related_product.*' => 'nullable',
            'sale_price'=>'required|numeric',
            'regular_price'=>'required|numeric',
            'flash_title' => 'nullable|string|max:100',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $category = '';
        $related_product_id = '';
        $tags='';
        $book = new Book;
        $book->title =  $request->title;
        $book->slug =  Str::slug($request->title,'-');
        $book->sku =  $request->sku;
        $book->regular_price =  $request->regular_price;
        $book->sale_price =  $request->sale_price;
        $book->short_desc =  $request->short_desc;
        $book->description =  $request->description;
        $book->flash_title =  $request->flash_title;
        $image = $request->file('featured_img'); 
        if($image != '') {
            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $f_n = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME),'-');
            $imagename = $f_n.'-'.time() . '.' .$ext;
            $image->move('uploads/books/images', $imagename);
            $book->featured_img = $imagename;
        }
        if(!empty($request->category)){
            $category  = implode(",",$request->category);
            $book->category_id = $category;
        }
        if(!empty($request->related_product)){
            $related_product_id  = implode(",",$request->related_product);
            $book->related_product_id = $related_product_id;
        }
        if(!empty($request->tags)){
            $tags  = implode(",",$request->tags);
            $book->tags = $tags;
        }
        $book->save();
        return redirect()->route('book.list')->with('success','Book Added Successfully.');
    }
    public function editBook($id){
        $book = Book::findOrFail($id);
        $all_books = Book::where('status',1)->where('id','!=',$id)->get();
        $category = Category::where('status',1)->where('parent_id',0)->get();
        $cat_id = $book->category_id;
        $selected_cat_id =explode(',',$cat_id );  
        $tags = Tag::where('status',1)->get();
        $selected_tag_id  = explode(',',$book->tags);
        $related_book = explode(',',$book->related_product_id);
        return view('admin.books.edit',compact('book','category','all_books','selected_cat_id','tags','selected_tag_id','related_book'));
    }
    public function updateBook(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100|unique:books,title,'.$id,
            'sku' => 'required|string|max:100|unique:books,sku,'.$id,
            'short_desc' => 'nullable|string|max:1000',
            'description' => 'nullable|string|max:4000',
            'featured_img' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            'category.*'=>'required',
            'tags.*'=>'nullable',
            'sale_price'=>'required|numeric',
            'regular_price'=>'required|numeric',
            'related_product.*' => 'nullable',
            'flash_title' => 'nullable|string|max:100',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $category = '';
        $related_product_id = '';
        $tags='';
        $book = Book::findOrFail($id);
        $book->title =  $request->title;
        $book->slug =  Str::slug($request->title,'-');
        $book->sku =  $request->sku;
        $book->regular_price =  $request->regular_price;
        $book->sale_price =  $request->sale_price;
        $book->short_desc =  $request->short_desc;
        $book->description =  $request->description;
        $book->flash_title =  $request->flash_title;
        
        $image_name = $request->hidden_image;
        $image = $request->file('featured_img'); 
        if($image != '') {
            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $f_n = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME),'-');
            $imagename = $f_n.'-'.time() . '.' .$ext;
            $image->move('uploads/books/images', $imagename);
            $book->featured_img = $imagename;
        }else{            
            $book->featured_img = $image_name;
        }
        
        if(!empty($request->category)){
            $category  = implode(",",$request->category);
            $book->category_id = $category;
        }
        if(!empty($request->related_product)){
            $related_product_id  = implode(",",$request->related_product);
            $book->related_product_id = $related_product_id;
        }else{
            $book->related_product_id = '';
        }
        if(!empty($request->tags)){
            $tags = implode(",",$request->tags);
            $book->tags = $tags;
        }else{
            $book->tags = '';
        }
        $book->update();
        return redirect()->route('book.list')->with('success','Book Updated Successfully.');
    }
    public function deleteBook($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('book.list')->with('success','Book Deleted Successfully.');
    }
}
