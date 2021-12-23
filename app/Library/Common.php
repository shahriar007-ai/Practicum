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
    ->select('title',$count_cat_book)->get()->toArray();
    return $categories;
}
function getTags(){
    $tags = DB::table("tags")->where('status',1)->get()->toArray();
    return $tags;
}

?>