<aside class="wedget__categories poroduct--cat">
    <h3 class="wedget__title">Book Categories</h3>
    @foreach(getCategories()['book_count'] as $category)
        <ul>
            @if($category->parent_id == 0)
                <li title="{{$category->title}}"><a href="{{route('books',[$category->id,$category->slug])}}">{{\Illuminate\Support\Str::limit($category->title,30,$end='...')}}<span>({{$category->Count}})</span></a></li>   
            @endif
        </ul>
    @endforeach
</aside>