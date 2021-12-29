<header id="wn__header" class="header__area header__absolute sticky__header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-6 col-lg-2">
				<div class="logo">
					<a href="{{route('home')}}">
						<img src="{{asset('assets/images/logo/logo.png')}}" alt="logo images">
					</a>
				</div>
			</div>
			<div class="col-lg-8 d-none d-lg-block">
				<nav class="mainmenu__nav">
					<ul class="meninmenu d-flex justify-content-start">
						<li class="drop with--one--item"><a href="{{route('home')}}">Home</a></li>
						<li class="drop"><a href="#">Books</a>
							<div class="megamenu mega03">
								<ul class="item item03">
									<li class="title">Categories</li>
									<li><a href="">Biography </a></li>
									<li><a href="">Business </a></li>
									<li><a href="">Cookbooks </a></li>
									<li><a href="">Health & Fitness </a></li>
									<li><a href="">History </a></li>
								</ul>
								<ul class="item item03">
									<li class="title">Customer Favourite</li>
									<li><a href="">Mystery</a></li>
									<li><a href="">Religion & Inspiration</a></li>
									<li><a href="">Romance</a></li>
									<li><a href="">Fiction/Fantasy</a></li>
									<li><a href="">Sleeveless</a></li>
								</ul>
								<ul class="item item03">
									<li class="title">Collections</li>
									<li><a href="">Science </a></li>
									<li><a href="">Fiction/Fantasy</a></li>
									<li><a href="">Self-Improvemen</a></li>
									<li><a href="">Home & Garden</a></li>
									<li><a href="">Humor Books</a></li>
								</ul>
							</div>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-6 col-sm-6 col-6 col-lg-2">
				<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
					<li class="shop_search"><a class="search__active" href="#"></a></li>
					<li class="wishlist"><a href="#"></a></li>
					<li class="shopcart"><a class="" href="{{route('cart')}}"><span class="product_qun">3</span></a>
					</li>
					<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
						<div class="searchbar__content setting__block">
							<div class="content-inner">							
								<div class="switcher-currency">
									<strong class="label switcher-label">
										<span>@auth {{Auth::user()->name }} @else My Account @endauth</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<div class="setting__menu">
												@if(Auth::check())
													<span><a href="#">My Profile</a></span>
													<span><a href="#">Order History</a></span>
													<span><a href="#">My Wishlist</a></span>
													<span><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a></span>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
														@csrf
													</form>
												@else
													<span><a href="{{route('login')}}">Sign In</a></span>
													<span><a href="{{route('register')}}">Create Account</a></span>
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- Start Mobile Menu -->
		<div class="row d-none">
			<div class="col-lg-12 d-none">
				<nav class="mobilemenu__nav">
					<ul class="meninmenu">
						<li><a href="{{route('home')}}">Home</a></li>
						<li><a href="">Books</a>
							<ul>
								<li><a href="">Shop Grid</a></li>
								<li><a href="">Single Product</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- End Mobile Menu -->
		<div class="mobile-menu d-block d-lg-none">
		</div>
		<!-- Mobile Menu -->	
	</div>		
</header>