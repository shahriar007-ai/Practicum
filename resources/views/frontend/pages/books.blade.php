@extends('frontend.layouts.master')
@section('content')
<div class="ht__bradcaump__area bg-image--6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">Shop Grid</h2>
					<nav class="bradcaump-content">
						<a class="breadcrumb_item" href="{{route('home')}}">Home</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active">Shop Grid</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
				<div class="shop__sidebar">
					<aside class="wedget__categories poroduct--cat">
						<h3 class="wedget__title">Product Categories</h3>
						<ul>
							<li><a href="#">Biography <span>(3)</span></a></li>
							<li><a href="#">Business <span>(4)</span></a></li>
							<li><a href="#">Cookbooks <span>(6)</span></a></li>
							<li><a href="#">Health & Fitness <span>(7)</span></a></li>
							<li><a href="#">History <span>(8)</span></a></li>
							<li><a href="#">Mystery <span>(9)</span></a></li>
							<li><a href="#">Inspiration <span>(13)</span></a></li>
							<li><a href="#">Romance <span>(20)</span></a></li>
							<li><a href="#">Fiction/Fantasy <span>(22)</span></a></li>
							<li><a href="#">Self-Improvement <span>(13)</span></a></li>
							<li><a href="#">Humor Books <span>(17)</span></a></li>
							<li><a href="#">Harry Potter <span>(20)</span></a></li>
							<li><a href="#">Land of Stories <span>(34)</span></a></li>
							<li><a href="#">Kids' Music <span>(60)</span></a></li>
							<li><a href="#">Toys & Games <span>(3)</span></a></li>
							<li><a href="#">hoodies <span>(3)</span></a></li>
						</ul>
					</aside>
					<aside class="wedget__categories poroduct--tag">
						<h3 class="wedget__title">Product Tags</h3>
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
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/1.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/2.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALLER</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="{{route('book_details')}}">robin parrish</a></h4>
									<ul class="prize d-flex">
										<li>$35.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/3.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/4.jpg')}}" alt="product image"></a>
									<div class="hot__box color--2">
										<span class="hot-label">HOT</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="{{route('book_details')}}">The Remainng</a></h4>
									<ul class="prize d-flex">
										<li>$35.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/7.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/8.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">HOT</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="{{route('book_details')}}">Lando</a></h4>
									<ul class="prize d-flex">
										<li>$35.00</li>
										<li class="old_prize">$50.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/9.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/10.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">HOT</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="{{route('book_details')}}">Doctor Wldo</a></h4>
									<ul class="prize d-flex">
										<li>$35.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/11.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/2.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="{{route('book_details')}}">Animals Life</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/1.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/6.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="{{route('book_details')}}">Olio Madu</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/3.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/8.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="{{route('book_details')}}">Soad Humber</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/10.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/2.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="{{route('book_details')}}">Animals Life</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/7.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/3.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="{{route('book_details')}}">Olio Madu</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/1.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/5.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="{{route('book_details')}}">War Of Dragon</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/9.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/4.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="{{route('book_details')}}">New World</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
								<div class="product__thumb">
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/5.jpg')}}" alt="product image"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/books/8.jpg')}}" alt="product image"></a>
									<div class="hot__box">
										<span class="hot-label">BEST SALER</span>
									</div>
								</div>
								<div class="product__content content--center content--center">
									<h4><a href="{{route('book_details')}}">Our World</a></h4>
									<ul class="prize d-flex">
										<li>$50.00</li>
										<li class="old_prize">$35.00</li>
									</ul>
									<div class="action">
										<div class="actions_inner">
											<ul class="add_to_links">
												<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
												<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
												<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
												<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product__hover--content">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Single Product -->
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
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/1.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/2.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="{{route('book_details')}}">Ali Smith</a></h2>
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
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/2.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/4.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="{{route('book_details')}}">Blood In Water</a></h2>
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
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/3.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/6.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="{{route('book_details')}}">Madeness Overated</a></h2>
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
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/4.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/6.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="{{route('book_details')}}">Watching You</a></h2>
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
									<a class="first__img" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/5.jpg')}}" alt="product images"></a>
									<a class="second__img animation1" href="{{route('book_details')}}"><img src="{{asset('assets/images/product/9.jpg')}}" alt="product images"></a>
								</div>
								<div class="content">
									<h2><a href="{{route('book_details')}}">Court Wings Run</a></h2>
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