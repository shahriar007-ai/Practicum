<?php

function getCatIds($catIds){
    if(!empty($catIds)){
        $book_catIDs = explode(',', $catIds);
        return $book_catIDs;
    }
}
function getBookIds($bookIds){
    $book_relatedIDs=array();
    if(!empty($bookIds)){
        $book_relatedIDs = explode(',', $bookIds);
        return $book_relatedIDs;
    }else{
        return $book_relatedIDs;
    }
}

function getCategories(){
    $categories = array();
    $count_cat_book =DB::raw("(SELECT COUNT('*') FROM books WHERE FIND_IN_SET(categories.id, books.category_id) > 0 ) as Count");
    $categories['book_count'] =DB::table("categories")
    ->select('title',$count_cat_book,'id','parent_id','slug')->get()->toArray();
    return $categories;
}
function getTags(){
    $tags = DB::table("tags")->where('status',1)->get()->toArray();
    return $tags;
}

function getBookByCat($category_id){
    $books =DB::table('books')
    ->join('categories',\DB::raw("FIND_IN_SET(categories.id, books.category_id)"),">", \DB::raw("'0'"))->where('categories.id',$category_id)->get(['books.title','books.id','books.slug','books.featured_img','books.regular_price','books.sale_price','flash_title']);
    return $books;
}
?>