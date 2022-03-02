@extends('frontend.layouts.master')
@push('css')
<style>
    
</style>
@endpush
@section('content')
<div class="ht__bradcaump__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href=""></a>
                        <span class="brd-separetor"></span>
                        <span class="breadcrumb_item active"></span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="maincontent bg--white pb--55">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="wn__single__product">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="wn__fotorama__wrapper">
                                <div class="fotorama wn__fotorama__action">
                                    <a href=""><img src="{{asset('uploads/books/images/'.$book->featured_img)}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="product__info__main">
                                <h1>{{$book->title}}</h1>
                                <div class="">
                                    <span class="text-success h6">৳{{$book->sale_price}} </span>&nbsp;&nbsp;&nbsp;
                                    <del class="del-color h6">৳{{$book->regular_price}}</del> <small>(You can save ৳{{$book->regular_price - $book->sale_price}})</small>
                                    <div class="">
                                        <i class="zmdi zmdi-star rating-color mr-1"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1"></i>
                                        <i class="zmdi zmdi-star-half rating-color mr-1"></i>
                                        <small>Ratings: 8/ Reviews: 5</small> &nbsp;
                                    </div>
                                </div>
                                <div class="product__overview">
                                    <p class="text-justify">{{Illuminate\Support\Str::limit($book->short_desc,300,$end="...")}}</p>
                                </div>
                                <div class="box-tocart d-flex">
                                    <span>Qty</span>
                                    <input id="qty" class="input-text qty rounded" name="qty" min="1" value="1" title="Qty" type="number">
                                    <div class="addtocart__actions">
                                        <button class="tocart rounded" type="submit" title="Add to Cart">Add to Cart</button>
                                    </div>
                                    <div class="product-addto-links clearfix">
                                        <a class="wishlist" href="#"></a>
                                    </div>
                                </div>
                                <div class="product_meta">
                                    <span class="posted_in "><span class="product-share">Categories:</span>
                                        @foreach($category as $cat)
                                            @if(in_array($cat->id, getCatIds($book->category_id)))<a class="cat-bg p-1 rounded" href="{{route('books',[$cat->id,$cat->slug])}}">{{$cat->title}}</a>&nbsp;@endif                                    
                                        @endforeach
                                    </span>
                                </div>
                                <div class="product-share">
                                    <ul>
                                        <li class="categories-title">Share :</li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-twitter icons"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-tumblr icons"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-facebook icons"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__info__detailed">
                    <div class="pro_details_nav nav justify-content-start" role="tablist">
                        @if(!empty($book->description))
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
                        @endif
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews</a>
                    </div>
                    <div class="tab__container">
                        <!-- Start Single Tab Content -->
                        <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                            <div class="description__attribute text-justify addReadMore showlesscontent">
                                {!!$book->description!!}
                            </div>
                        </div>
                        <!-- End Single Tab Content -->
                    </div>
                </div>
                <div class="wn__related__product pt--30 pb--20">
                    @if(!empty($book->related_product_id))
                        <div class="">
                            <h3 class="title__be--2">Related Books</h3>
                        </div>
                    @endif
                    <div class="row mt--30">                                            
                        <div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                            @foreach($all_books as $all_bk)
                                @if(in_array($all_bk->id, getBookIds($book->related_product_id))) 
                                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product__thumb">
                                            <a class="first__img" href="{{route('book.details',$all_bk->slug)}}"><img src="{{asset('uploads/books/images/'.$all_bk->featured_img)}}" title="{{$all_bk->title}}" alt="{{$all_bk->title}}"></a>
                                            @if(!empty($all_bk->flash_title))
                                                <div class="hot__box">
                                                    <span class="hot-label">{{$all_bk->flash_title}}</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="{{route('book.details',$all_bk->slug)}}">{{$all_bk->title}}</a></h4>
                                            <ul class="prize d-flex">
                                                <li>৳{{$all_bk->sale_price}}</li>
                                                <li class="old_prize">৳{{$all_bk->regular_price}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <section class="mt-4">
                    <div class="details-ratings-review">
                        <div id="success-message"></div>
                        <div id="error-message"></div>
                        <div class="details-ratings-review__header">
                            <div class="row">
                                <div class="col mb-2">
                                    <div class="d-flex">
                                    <h3 class="title__be--2">Reviews and Ratings</h3>
                                    </div>
                                    <!-- <p class="text-muted mt-2 h6 mb-0"><span class="ion-speakerphone text-success"></span> Submit Review-Rating and Earn 30 points (minimum 40 words)</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="details-ratings-review__content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="media ratings-review__content--rating">
                                    <h5 class="pt-1 rating-color mt-2"><span class="avg_rating">@if($total_rating!=0){{$avg_rating}}@endif</span></h5>
                                    <div class="media-body ml-4 ">
                                            @if($total_rating!=0 || $total_review!=0)
                                                <p class="text-secondary">
                                                    <span class="t_rating"> 
                                                        @if($total_rating!=0)
                                                            {{$total_rating}}
                                                            @if($total_rating==1)
                                                                Rating 
                                                            @else
                                                                Ratings
                                                            @endif
                                                        @else 
                                                            No Rating
                                                        @endif  
                                                    </span>  
                                                    <span class="t_review">
                                                        @if($total_review!=0) , 
                                                            {{$total_review}}
                                                            @if($total_review==1)
                                                                Review
                                                            @else 
                                                                Reviews 
                                                            @endif 
                                                        @else 
                                                            , No Review
                                                        @endif
                                                    </span>
                                                </p>
                                            @else
                                                <p class="text-secondary">
                                                    <span class="t_rating"></span>  
                                                    <span class="t_review"></span>
                                                    <span class="no-rating-review">No Raitng and Review Found.</span>
                                                </p>
                                            @endif
                                        <span id="js--rating">
                                            @if($total_rating==0)
                                                <h6 class="">
                                                    <span class="whole"></span>
                                                    <span class="fraction"></span>
                                                </h6>
                                            @else
                                                <h6 class="">
                                                    <span class="whole">
                                                        @for($i=1;$i<=$whole;$i++)
                                                            <i class="zmdi zmdi-star rating-color mr-1"></i>
                                                        @endfor
                                                    </span>
                                                    <span class="fraction">
                                                        @if($fraction !=0)
                                                            <i class="zmdi zmdi-star-half rating-color mr-1"></i>
                                                        @endif
                                                    </span>
                                                </h6>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <p>
                                    @auth
                                        <a class="btn btn-sm write-review" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Write a Review
                                        </a>
                                    @else
                                        <a class="btn btn-sm write-review" href="{{route('login')}}">
                                            Please login to write a review
                                        </a>
                                    @endauth
                                </p>
                            </div>
                            @auth
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <div class="ratings-review__content--form">
                                            <form class="js--review-form">
                                                <div class="form-group">
                                                    <textarea class="form-control review_data" id="js--review-writing" rows="3" placeholder="Please write your honest opinion">@if(!empty($auth_user_review)){{$auth_user_review->user_review}}@endif</textarea>
                                                    <div class="d-flex align-items-center mt-4 ml-2 h4">
                                                        @for($i=1;$i<=5;$i++)
                                                            <i class="zmdi zmdi-star @if($i<=getReviewData(Auth::user()->id,$book->id)) text-warning @else star-light @endif submit_star mr-1" id="submit_star_{{$i}}" data-rating="{{$i}}"></i>
                                                        @endfor
                                                        <button class="btn tocart rounded ml-4 save_review">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                    <br>
                    @auth
                    <div id="review">
                        @foreach($reviews as $review)
                            <div class="review mb-3" data-userid="{{$review->user_id}}">
                                <div class="user-info d-flex align-items-center">
                                    <img class="user-img rounded-circle ml-1" src="{{asset($review->getUser->photo)}}" alt="user-img" width="40">
                                    <div class="info">
                                        <div class="name-date ml-3">
                                            <small class="d-inline-block name">By <span>{{$review->getUser->name}}</span>, </small>
                                            <small class="date d-inline-block"> {{readableDate($review->created_at)}}</small>
                                            <div class="top">
                                                <div class="user-rating">
                                                    @for($i=1;$i<=$review->user_rating;$i++)
                                                        <i class="zmdi zmdi-star rating-color" id="submit_star_1" data-rating="1"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-content">
                                    <p class="review-text js--review-short mt-1">{{$review->user_review}}<br></p>
                                    <p class="js--review-read-more d-none">Read More</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endauth
                </section>
            </div>
            <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                <div class="shop__sidebar">
                    @include('frontend.include.sidebar-categories')
                    @include('frontend.include.sidebar-tags')
                    <aside class="wedget__categories sidebar--banner">
                        <img src="{{asset('assets/images/others/banner_left.jpg')}}" alt="banner images">
                        <div class="text">
                            <h2>new products</h2>
                            <h6>save up to <br> <strong>40%</strong>off</h6>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-search-content search_active block-bg close__top">
    <form id="search_mini_form--2" class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Search entire store here...">
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).on('click', '.submit_star', function(){
        rating_data = $(this).data('rating');
        $.ajax({
            url:"{{route('rating.store-update')}}",
            method:"POST",
            data:{rating_data:rating_data,user_id:"{{CheckUser()}}",book_id:"{{$book->id}}",_token:"{{csrf_token()}}"},
            success:function(data)
            {   
                $('html, body').animate(
                    {
                        scrollTop: $('#success-message').offset().top - 70
                    },
                    'slow',
                    'swing'
                );
                var rateshow = '';
                var showStar='';
                var whole='';
                var fraction='';
                var avgStar='';
                var fractionStar='';

                whole = data.whole;
                console.log(whole);
                fraction  = data.fraction;
                if(whole > 0){
                    for(var i=1;i<=whole;i++){
                        console.log('in')
                        avgStar+='<i class="zmdi zmdi-star rating-color mr-1"></i>';
                    }
                    $('.whole').html(avgStar);
                }

                if(fraction > 0){
                    fractionStar ='<i class="zmdi zmdi-star-half rating-color mr-1"></i>'
                    $('.fraction').html(fractionStar);
                }else{
                    $('.fraction').html('');
                }

                if(data.rate_count > 1){
                    $('.t_rating').html(data.rate_count+' Ratings');
                    $('.no-rating-review').html('');
                }else if(data.rate_count == 1){
                    console.log('da')
                    $('.t_rating').html(data.rate_count+' Rating');
                    $('.no-rating-review').html('');
                }
                
                if(data.review_count == 0){
                    $('.t_review').html(', No Review');
                    $('.no-rating-review').html('');
                }else{
                    if(data.review_count > 1){
                        $('.t_review').html(data.review_count+' Reviews');
                        $('.no-rating-review').html('');
                    }else if(data.review_count == 1){
                        $('.t_review').html(data.review_count+' Review');
                        $('.no-rating-review').html('');
                    }
                }

                $('.avg_rating').html(data.avg_rating);
                $('.review_data').html(data.user_review);
                for(var i=1;i<=data.rating;i++){
                    showStar += '<i class="zmdi zmdi-star rating-color mr-1" id="submit_star_1" data-rating="1"></i>'
                }
                
                if(data.rating && !data.user_review){
                    rateshow = '';
                    $('#success-message').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your rating.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    $('#error-message').html('');
                }else if(data.rating && data.user_review){
                    if($('#review .review[data-userid='+data.user_id+']').length <= 0){
                        console.log('i am here')
                        rateshow +=` 
                        <div class="review mb-3">
                            <div class="user-info d-flex align-items-center">
                                <img class="user-img rounded-circle ml-1" src="{{asset('`+data.user_photo+`')}}" alt="user-img" width="40">
                                <div class="info">
                                    <div class="name-date ml-3">
                                        <small class="d-inline-block name">By <span>`+data.user_name+`</span>, </small>
                                        <small class="date d-inline-block">`+data.review_date+`</small>
                                        <div class="top">
                                            <div class="user-rating">`+
                                            showStar
                                            +`</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p class="review-text js--review-short mt-1">`+data.user_review+`<br></p>
                                <p class="js--review-read-more d-none">Read More</p>
                            </div>
                        </div>`;
                        $('#review').prepend(rateshow);
                        $('#success-message').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your rating.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        $('#error-message').html('');
                    }else{
                        var newReview = data.user_review;
                        var newDate = data.review_date;
                        $('#review .review[data-userid='+data.user_id+'] .user-info .info .name-date .top .user-rating').html(showStar)
                        $('#review .review[data-userid='+data.user_id+'] .user-info .info .name-date .date').html(newDate)
                        $('#review .review[data-userid='+data.user_id+'] .review-content .review-text').html(newReview)
                        $('#success-message').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your rating.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        $('#error-message').html('');
                    }
 
                }else if(!data.rating && data.user_review){
                    if($('#review .review[data-userid='+data.user_id+']').length <= 0){
                        rateshow +=` 
                        <div class="review mb-3">
                            <div class="user-info d-flex align-items-center">
                                <img class="user-img rounded-circle ml-1" src="/`+data.user_photo+`" alt="user-img" width="40">
                                <div class="info">
                                    <div class="name-date ml-3">
                                        <small class="d-inline-block name">By <span>`+data.user_name+`</span>, </small>
                                        <small class="date d-inline-block">`+data.review_date+`</small>
                                        <div class="top">
                                            <div class="user-rating">`+
                                            showStar
                                            +`</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content3">
                                <p class="review-text js--review-short mt-1">`+data.user_review+`<br></p>
                                <p class="js--review-read-more d-none">Read More</p>
                            </div>
                        </div>`;
                        $('#review').prepend(rateshow);
                        $('#success-message').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your rating.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        $('#error-message').html('');
                    }else{
                        var newReview = data.user_review;
                        var newDate = data.review_date;
                        $('#review .review[data-userid='+data.user_id+'] .user-info .info .name-date .top .user-rating').html(showStar)
                        $('#review .review[data-userid='+data.user_id+'] .user-info .info .name-date .date').html(newDate)
                        $('#review .review[data-userid='+data.user_id+'] .review-content .review-text').html(newReview)
                        $('#success-message').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your rating.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        $('#error-message').html('');
                    }
                }
            }
        })
    });
    $(document).on('click', '.save_review', function(e){
        e.preventDefault();
        var review_data = $('.review_data').val();
        if(review_data == ''){
            $('html, body').animate(
            {
                scrollTop: $('#error-message').offset().top - 70
            },
                'slow',
                'swing'
            );
            $('#error-message').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Please write your review.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            $('#success-message').html('');
        }else{
            $.ajax({
                url:"{{route('review.store-update')}}",
                method:"POST",
                data:{review_data:review_data,user_id:"{{CheckUser()}}",book_id:"{{$book->id}}",_token:"{{csrf_token()}}"},
                success:function(data)
                {   
                    console.log(data);
                    $('html, body').animate(
                    {
                        scrollTop: $('#success-message').offset().top - 70
                    },
                        'slow',
                        'swing'
                    );
                    var reviewShow = '';
                    var showStar='';
                    for(var i=1;i<=data.rating;i++){
                        showStar += '<i class="zmdi zmdi-star rating-color mr-1" id="submit_star_1" data-rating="1"></i>'
                    }

                    console.log(data.rate_count)
                    if(data.rate_count == 0){
                        $('.t_rating').html('No Rating');
                        $('.no-rating-review').html('');
                    }else if(data.rate_count == 1 ){
                        console.log('dad')
                        $('.t_rating').html(data.rate_count+' Rating');
                        $('.no-rating-review').html('');
                    }else if(data.rate_count > 1){
                        $('.t_rating').html(data.rate_count+' Ratings');
                        $('.no-rating-review').html('');
                    }
                    console.log('review count'+data.review_count)
                    if(data.review_count == 0){
                        $('.t_review').html(', No Review');
                        $('.no-rating-review').html('');
                    }else{
                        if(data.review_count > 1){
                            $('.t_review').html(data.review_count+' Reviews');
                            $('.no-rating-review').html('');
                        }else if(data.review_count == 1){
                            $('.t_review').html(data.review_count+' Review');
                            $('.no-rating-review').html('');
                        }
                    }

                    $('.avg_rating').html(data.avg_rating);
                    if(data.user_review){
                        var t =$('#review .review[data-userid='+data.user_id+']').length;
                        console.log(t);
                        console.log(data.user_id);
                        if($('#review .review[data-userid='+data.user_id+']').length <= 0){
                            reviewShow +=` 
                            <div class="review" data-userid="`+data.user_id+`" mb-3">
                                <div class="user-info d-flex align-items-center">
                                    <img class="user-img rounded-circle ml-1" src="/`+data.user_photo+`" alt="user-img" width="40">
                                    <div class="info">
                                        <div class="name-date ml-3">
                                            <small class="d-inline-block name">By <span>`+data.user_name+`</span>, </small>
                                            <small class="date d-inline-block">`+data.review_date+`</small>
                                            <div class="top">
                                                <div class="user-rating">`+
                                                showStar
                                                +`</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-content">
                                    <p class="review-text js--review-short mt-1">`+data.user_review+`<br></p>
                                    <p class="js--review-read-more d-none">Read More</p>
                                </div>
                            </div>`;
                            $('#review').prepend(reviewShow);
                            $('#success-message').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your rating.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            $('#error-message').html('');
                        }else{
                            var newReview = data.user_review;
                            console.log(newReview);
                            var newDate = data.review_date;
                            $('#review .review[data-userid='+data.user_id+'] .user-info .info .name-date .date').html(newDate)
                            $('#review .review[data-userid='+data.user_id+'] .review-content .review-text').html(newReview)
                            $('#success-message').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your rating.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            $('#error-message').html('');
                        }
                    }
                }
            });
        }
    });
</script>
<script>
		var rating_data = 0;
        rating_data = "{{getReviewData(CheckUser(),$book->id)}}";
		$(document).on('mouseenter', '.submit_star', function(){
			var rating = $(this).data('rating');
			reset_background();
			for(var count = 1; count <= rating; count++)
			{
				$('#submit_star_'+count).addClass('text-warning');
			}
		});
		function reset_background()
		{
			for(var count = 1; count <= 5; count++)
			{
				$('#submit_star_'+count).addClass('star-light');
				$('#submit_star_'+count).removeClass('text-warning');
			}
		}
		$(document).on('mouseleave', '.submit_star', function(){
			reset_background();
			for(var count = 1; count <= rating_data; count++)
			{
				$('#submit_star_'+count).removeClass('star-light');
				$('#submit_star_'+count).addClass('text-warning');
			}
		});
</script>
@endsection