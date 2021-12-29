@extends('frontend.layouts.master')
@section('content')
	<div class="brown--color box-search-content search_active block-bg close__top">
		<form id="search_mini_form" class="minisearch" action="#">
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
	<!-- End Search Popup -->
	<!-- Start Slider area -->
	<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
		<!-- Start Single Slide -->
		<div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="slider__content">
							<div class="contentbox">
								<h2>Buy <span>your </span></h2>
								<h2>favourite <span>Book </span></h2>
								<h2>from <span>Here </span></h2>
								<!-- <a class="shopbtn" href="">buy now</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Slide -->
		<!-- Start Single Slide -->
		<div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="slider__content">
							<div class="contentbox">
								<h2>Buy <span>your </span></h2>
								<h2>favourite <span>Book </span></h2>
								<h2>from <span>Here </span></h2>
								<a class="shopbtn" href="">buy now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Slide -->
	</div>
	<!-- End Slider area -->
	<!-- Start BEst Seller Area -->
	<section class="wn__product__area brown--color pt--80  pb--30" id="new-books">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__title text-center">
						<h2 class="title__be--2">New <span class="color--theme">Books</span></h2>
						<p>Fresh and new books are available here.</p>
					</div>
				</div>
			</div>
			<!-- Start Single Tab Content -->
			<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
				<!-- Start Single Product -->
				@foreach($new_books as $nwbook)
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="{{route('book.details',$nwbook->slug)}}"><img src="{{asset('uploads/books/images/'.$nwbook->featured_img)}}" alt="{{$nwbook->title}}"></a>
							@if(!empty($nwbook->flash_title))
								<div class="hot__box">
									<span class="hot-label">{{$nwbook->flash_title}}</span>
								</div>
							@endif
						</div>
						<div class="product__content content--center">
							<h4><a href="{{route('book.details',$nwbook->slug)}}">{{$nwbook->title}}</a></h4>
							<ul class="prize d-flex">
								<li>৳{{$nwbook->sale_price}}</li>
								<li class="old_prize">৳{{$nwbook->regular_price}}</li>
							</ul>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<!-- End Single Tab Content -->
		</div>
	</section>
	<section class="best-seel-area pt--80 pb--60" id="best-seller">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__title text-center pb--50">
						<h2 class="title__be--2">Best <span class="color--theme">Seller </span></h2>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
					</div>
				</div>
			</div>
		</div>
		<div class="slider center">
			<!-- Single product start -->
			<div class="product product__style--3">
				<div class="product__thumb">
					<a class="first__img" href=""><img src="{{asset('assets/images/best-sell-product/1.jpg')}}" alt="product image"></a>
				</div>
			</div>
			<!-- Single product end -->
			<!-- Single product start -->
			<div class="product product__style--3">
				<div class="product__thumb">
					<a class="first__img" href=""><img src="{{asset('assets/images/best-sell-product/2.jpg')}}" alt="product image"></a>
				</div>
			</div>
			<!-- Single product end -->
			<!-- Single product start -->
			<div class="product product__style--3">
				<div class="product__thumb">
					<a class="first__img" href=""><img src="{{asset('assets/images/best-sell-product/3.jpg')}}" alt="product image"></a>
				</div>
			</div>
			<!-- Single product end -->
			<!-- Single product start -->
			<div class="product product__style--3">
				<div class="product__thumb">
					<a class="first__img" href=""><img src="{{asset('assets/images/best-sell-product/4.jpg')}}" alt="product image"></a>
				</div>
			</div>
			<!-- Single product end -->
			<!-- Single product start -->
			<div class="product product__style--3">
				<div class="product__thumb">
					<a class="first__img" href=""><img src="{{asset('assets/images/best-sell-product/5.jpg')}}" alt="product image"></a>
				</div>
			</div>
			<!-- Single product end -->
			<!-- Single product start -->
			<div class="product product__style--3">
				<div class="product__thumb">
					<a class="first__img" href=""><img src="{{asset('assets/images/best-sell-product/6.jpg')}}" alt="product image"></a>
				</div>
			</div>
			<!-- Single product end -->
			<!-- Single product start -->
			<div class="product product__style--3">
				<div class="product__thumb">
					<a class="first__img" href=""><img src="{{asset('assets/images/best-sell-product/7.jpg')}}" alt="product image"></a>
				</div>
			</div>
			<!-- Single product end -->
			<!-- Single product start -->
			<div class="product product__style--3">
				<div class="product__thumb">
					<a class="first__img" href=""><img src="{{asset('assets/images/best-sell-product/8.jpg')}}" alt="product image"></a>
				</div>
			</div>
			<!-- Single product end -->
		</div>
	</section>	
@endsection