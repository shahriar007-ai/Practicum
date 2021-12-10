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
						<li class="drop"><a href="{{route('books')}}">Books</a>
							<div class="megamenu mega03">
								<ul class="item item03">
									<li class="title">Categories</li>
									<li><a href="{{route('books')}}">Biography </a></li>
									<li><a href="{{route('books')}}">Business </a></li>
									<li><a href="{{route('books')}}">Cookbooks </a></li>
									<li><a href="{{route('books')}}">Health & Fitness </a></li>
									<li><a href="{{route('books')}}">History </a></li>
								</ul>
								<ul class="item item03">
									<li class="title">Customer Favourite</li>
									<li><a href="{{route('books')}}">Mystery</a></li>
									<li><a href="{{route('books')}}">Religion & Inspiration</a></li>
									<li><a href="{{route('books')}}">Romance</a></li>
									<li><a href="{{route('books')}}">Fiction/Fantasy</a></li>
									<li><a href="{{route('books')}}">Sleeveless</a></li>
								</ul>
								<ul class="item item03">
									<li class="title">Collections</li>
									<li><a href="{{route('books')}}">Science </a></li>
									<li><a href="{{route('books')}}">Fiction/Fantasy</a></li>
									<li><a href="{{route('books')}}">Self-Improvemen</a></li>
									<li><a href="{{route('books')}}">Home & Garden</a></li>
									<li><a href="{{route('books')}}">Humor Books</a></li>
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
										<span>Currency</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<span class="currency-trigger">USD - US Dollar</span>
											<ul class="switcher-dropdown">
												<li>GBP - British Pound Sterling</li>
												<li>EUR - Euro</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="switcher-currency">
									<strong class="label switcher-label">
										<span>Language</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<span class="currency-trigger">English01</span>
											<ul class="switcher-dropdown">
												<li>English02</li>
												<li>English03</li>
												<li>English04</li>
												<li>English05</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="switcher-currency">
									<strong class="label switcher-label">
										<span>Select Store</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<span class="currency-trigger">Fashion Store</span>
											<ul class="switcher-dropdown">
												<li>Furniture</li>
												<li>Shoes</li>
												<li>Speaker Store</li>
												<li>Furniture</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="switcher-currency">
									<strong class="label switcher-label">
										<span>My Account</span>
									</strong>
									<div class="switcher-options">
										<div class="switcher-currency-trigger">
											<div class="setting__menu">
												<span><a href="#">Compare Product</a></span>
												<span><a href="#">My Account</a></span>
												<span><a href="#">My Wishlist</a></span>
												<span><a href="#">Sign In</a></span>
												<span><a href="#">Create An Account</a></span>
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
						<li><a href="{{route('books')}}">Books</a>
							<ul>
								<li><a href="{{route('books')}}">Shop Grid</a></li>
								<li><a href="single-product.html">Single Product</a></li>
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