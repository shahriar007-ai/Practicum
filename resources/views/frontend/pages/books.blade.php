@extends('frontend.layouts.master')
@section('content')
<div class="ht__bradcaump__area bg-image--6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title"></h2>
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
<div class="page-shop-sidebar left--sidebar bg--white mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
				<div class="shop__sidebar">
					@if($category->parent_id==0)
						<aside class="wedget__categories poroduct--cat">
						<h3 class="wedget__title">{{$category->title}}</h3>
						<ul>
							@foreach(getCategories()['book_count'] as $sub_category)
								@if($category->id == $sub_category->parent_id)
									<li title="{{$sub_category->title}}"><a href="{{route('books',[$sub_category->id,$sub_category->slug])}}">{{\Illuminate\Support\Str::limit($sub_category->title,30,$end='...')}}<span>({{$sub_category->Count}})</span></a></li>
								@endif
							@endforeach
						</ul>
					</aside>
					@else

					@endif
					<aside class="wedget__categories poroduct--tag">
						<h3 class="wedget__title">Book Tags</h3>
						<ul>
							<li><a href="#">Biography</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Cookbooks</a></li>
							<li><a href="#">Health & Fitness</a></li>
							<li><a href="#">History</a></li>
							<li><a href="#">Mystery</a></li>
							<li><a href="#">Inspiration</a></li>
							<li><a href="#">Religion</a></li>
							<li><a href="#">Fiction</a></li>
							<li><a href="#">Fantasy</a></li>
							<li><a href="#">Music</a></li>
							<li><a href="#">Toys</a></li>
							<li><a href="#">Hoodies</a></li>
						</ul>
					</aside>
					<aside class="wedget__categories sidebar--banner">
						<img src="{{asset('assets/images/others/banner_left.jpg')}}" alt="banner images">
						<div class="text">
							<h2>new products</h2>
							<h6>save up to <br> <strong>40%</strong>off</h6>
						</div>
					</aside>
				</div>
			</div>
			<div class="col-lg-9 col-12 order-1 order-lg-2">
				<div class="row">
					<div class="col-lg-12">
						<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
							<p>Showing 1–12 of 40 results</p>
						</div>
					</div>
				</div>
				<div class="tab__container">
					<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
						<div class="row">
							@foreach(getBookByCat($category->id) as $book)
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-3 col-md-3 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book.details',$book->slug)}}"><img src="{{asset('uploads/books/images/'.$book->featured_img)}}" alt="{{$book->title}}"></a>
									@if(!empty($book->flash_title))
										<div class="hot__box">
											<span class="hot-label">{{$book->flash_title}}</span>
										</div>
									@endif
								</div>
								<div class="product__content content--center">
									<h4><a href="{{route('book.details',$book->slug)}}">{{$book->title}}</a></h4>
									<ul class="prize d-flex">
										<li>৳{{$book->sale_price}}</li>
										<li class="old_prize">৳{{$book->regular_price}}</li>
									</ul>
								</div>
							</div>
							@endforeach
						</div>
						<ul class="wn__pagination">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
						</ul>
					</div>
					<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
						<div class="list__view__wrapper">
							<!-- Start Single Product -->
							<div class="list__view">
								<div class="thumb">
									<a class="first__img" href=""><img src="{{asset('assets/images/product/1.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href=""><img src="{{asset('assets/images/product/2.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="">Ali Smith</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href=""><img src="{{asset('assets/images/product/2.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href=""><img src="{{asset('assets/images/product/4.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="">Blood In Water</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href=""><img src="{{asset('assets/images/product/3.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href=""><img src="{{asset('assets/images/product/6.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="">Madeness Overated</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href=""><img src="{{asset('assets/images/product/4.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href=""><img src="{{asset('assets/images/product/6.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="">Watching You</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>

								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href=""><img src="{{asset('assets/images/product/5.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href=""><img src="{{asset('assets/images/product/9.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="">Court Wings Run</a></h2>
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
									<ul class="prize__box">
										<li>$111.00</li>
										<li class="old__prize">$220.00</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="cart.html">Add to cart</a></li>
										<li class="wishlist"><a href="cart.html"></a></li>
										<li class="compare"><a href="cart.html"></a></li>
									</ul>
								</div>
							</div>
							<!-- End Single Product -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		
@endsection