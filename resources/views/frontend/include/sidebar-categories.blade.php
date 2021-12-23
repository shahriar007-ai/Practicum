<aside class="wedget__categories poroduct--cat">
    <h3 class="wedget__title">Book Categories</h3>
    @foreach(getCategories()['book_count'] as $category)
        <ul>
            <li><a href="">{{$category->title}}<span>({{$category->Count}})</span></a></li>   
        </ul>
    @endforeach
</aside>