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
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="js--message-review" style="display: none;">
                            <strong><i class="ion-information-circled"></i></strong>
                            <p id="js--review-message-text">Thank you for rating!</p>
                            <button type="button" class="js--message-close close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

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
                                    <h5 class="pt-1 rating-color mt-2">4.88</h5>
                                    <div class="media-body ml-4 ">
                                        <p class="text-secondary">8 Ratings  and 5  Reviews</p>
                                        <span id="js--rating">
                                            <h6 class="">
                                                <i class="zmdi zmdi-star rating-color mr-1"></i>
                                                <i class="zmdi zmdi-star rating-color mr-1"></i>
                                                <i class="zmdi zmdi-star rating-color mr-1"></i>
                                                <i class="zmdi zmdi-star rating-color mr-1"></i>
                                                <i class="zmdi zmdi-star-half rating-color mr-1"></i>
                                            </h6>
                                        </span>
                                    </div>
                                </div>
                                <p>
                                    <a class="btn btn-sm write-review" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Write a Review
                                    </a>
                                </p>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <div class="ratings-review__content--form">
                                        <form class="js--review-form">
                                            <div class="form-group">
                                                <textarea class="form-control" id="js--review-writing" rows="3" placeholder="Please write your honest opinion"></textarea>
                                                <div class="d-flex align-items-center mt-4 ml-2 h4">
                                                    <i class="zmdi zmdi-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                                                    <i class="zmdi zmdi-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                                                    <i class="zmdi zmdi-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                                                    <i class="zmdi zmdi-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                                                    <i class="zmdi zmdi-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                                                    <button class="btn tocart rounded ml-4">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <br>
                  <div class="review mb-3">
                        <div class="user-info d-flex align-items-center">
                            <img class="user-img rounded-circle ml-1" src="https://lh3.googleusercontent.com/a-/AOh14GgJOcR_5UjbowPU_85l4c1aFnRikoocg7kO6UEBgCE=s96-c" alt="user-img" width="40">
                            <div class="info">
                                <div class="name-date ml-3">
                                    <small class="d-inline-block name">By <span>Mehrab Hossain Sifat</span>, </small>
                                    <small class="date d-inline-block"> 01 May 2021</small>
                                    <div class="user-rating">
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_1" data-rating="1"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_2" data-rating="2"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_3" data-rating="3"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_4" data-rating="4"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_5" data-rating="5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            <p class="review-text js--review-short mt-1">মোশতাক আহমেদ এর শিশিলিন সিরিজের একটি অন্য তম বই জমিদারের গুপ্তধন। পেপারে একটি চিঠি দেখে শংকর রায়ের গুপ্তধন সম্পর্কে জানতে পারে লেলিন। সে জানায় তার ভাইকে। তার যায় গুপ্তধন খুঁজে বের করতে। কিন্তু তারা জানতে পারে যার সঙ্গে দেখা করার জন্য যায় সে আর বেচে নেই। আসলে কি তিনি মারা গেছেন না তাকে খুন করা হয়েছে। তারা কি পায় গুপ্তধন। জানতে পারে কে মারে তাকে।<br> </p>
                            <p class="js--review-read-more d-none">Read More</p>
                        </div>
                    </div>

                    <div class="review">
                        <div class="user-info d-flex align-items-center">
                            <img class="user-img rounded-circle ml-1" src="https://lh3.googleusercontent.com/a-/AOh14GgJOcR_5UjbowPU_85l4c1aFnRikoocg7kO6UEBgCE=s96-c" alt="user-img" width="40">
                            <div class="info">
                                <div class="name-date ml-3">
                                    <small class="d-inline-block name">By <span>Mehrab Hossain Sifat</span>, </small>
                                    <small class="date d-inline-block"> 01 May 2021</small>
                                    <div class="user-rating">
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_1" data-rating="1"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_2" data-rating="2"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_3" data-rating="3"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_4" data-rating="4"></i>
                                        <i class="zmdi zmdi-star rating-color mr-1" id="submit_star_5" data-rating="5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-content">
                            <p class="review-text js--review-short mt-1">Good Commentator is here.<br> </p>
                            <p class="js--review-read-more d-none">Read More</p>
                        </div>
                    </div>

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