<aside class="wedget__categories poroduct--tag">
    <h3 class="wedget__title">Book Tags</h3>
        <ul>
            @foreach(getTags() as $tag)
            <li><a href="">{{$tag->title}}</a></li> 
            @endforeach  
        </ul>
   
</aside>
