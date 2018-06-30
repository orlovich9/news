<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>INews</title>
		<meta charset="utf-8">
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- All Stylesheets -->
		<link href="{{ asset('public/css/all-stylesheets.css') }}" rel="stylesheet">

		<link rel="shortcut icon" href="{{ asset('public/images/icons/favicon/favicon.png') }}">
		<link rel="apple-touch-icon" href="{{ asset('public/images/icons/favicon/apple-touch-icon.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/images/icons/favicon/apple-touch-icon-72x72.png') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/images/icons/favicon/apple-touch-icon-114x114.png') }}">
	</head>
	<body>
		<!-- HEADER STARTS
			========================================================================= -->
		<header>
			<!-- TOP ROW STARTS -->
			<div class="top-nav hidden-sm hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div id="date"></div>
						</div>
						<div class="col-lg-6 col-md-6">
							<ul class="small-nav">
								@if (Route::has('login'))
									@auth
										<li><a href="{{ route('profile') }}">orlovich</a></li>
										<li><a href="{{ route('logout') }}">Выйти</a></li>
									@else
										<li><a href="{{ route('login') }}">Войти</a></li>
										<li><a href="{{ route('register') }}">Зарегистрироваться</a></li>
									@endauth
								@endif
								<li><a href="">ADVERTISEMENT</a></li>
								<li><a href="site-map.html">Карта сайта</a></li>
								<li><a href="contact-us.html">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- TOP ROW ENDS -->
			<!-- LOGO & ADS STARTS -->
			<div class="container logo-header">
				<div class="row">
					<div class="col-lg-12 col-md-12 logo"><a href="index.html"><img src="{{asset('public/images/logo2.png')}}" alt=""></a></div>
				</div>
			</div>
			<!-- LOGO & ADS ENDS -->
		</header>
		<!-- /. HEADER ENDS
			========================================================================= -->
		<!-- MOBILE MENU BUTTON STARTS
			========================================================================= -->
		<div id="mobile-header">
			<a id="responsive-menu-button" href="#sidr-main"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></a>
		</div>
		<!-- /. MOBILE MENU BUTTON ENDS
			========================================================================= -->
		<!-- NAVIGATION STARTS
			========================================================================= -->
		<nav id="navigation">
			<div class="navbar yamm navbar-inverse" role="navigation">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" > <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							</div>
							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav">
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="">HOME</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Tech Mega Menu Starts -->
										<ul class="dropdown-menu">
											<li>
												<div class="yamm-content">
													<div class="row">
														<!-- COLUMN STARTS -->
														<div class="col-lg-3 col-md-3">
															<ul class="mega-links">
																<li><a href="index.html">Home Page 1</a></li>
																<li><a href="index-001-a.html">Home Page 2</a></li>
																<li><a href="index-001-b.html">Home Page 3</a></li>
																<li><a href="index-001-c.html">Home Page 4</a></li>
																<li><a href="index-001-d.html">Home Page 5</a></li>
															</ul>
														</div>
														<!-- COLUMN ENDS -->
														<!-- COLUMN STARTS -->
														<div class="col-lg-3 col-md-3">
															<ul class="mega-links">
																<li><a href="index-001-e.html">Home Page 6</a></li>
																<li><a href="index-001-f.html">Home Page 7</a></li>
																<li><a href="index-001-g.html">Home Page 8</a></li>
																<li><a href="index-001-h.html">Home Page 9</a></li>
																<li><a href="index-002.html">Home Page 10</a></li>
															</ul>
														</div>
														<!-- COLUMN ENDS -->
														<!-- COLUMN STARTS -->
														<div class="col-lg-3 col-md-3">
															<ul class="mega-links">
																<li><a href="index-002.html">Home Page 11</a></li>
																<li><a href="index-002-a.html">Home Page 12</a></li>
																<li><a href="index-002-b.html">Home Page 13</a></li>
																<li><a href="index-002-c.html">Home Page 14</a></li>
																<li><a href="index-002-d.html">Home Page 15</a></li>
															</ul>
														</div>
														<!-- COLUMN ENDS -->
														<!-- COLUMN STARTS -->
														<div class="col-lg-3 col-md-3">
															<ul class="mega-links">
																<li><a href="index-002-e.html">Home Page 16</a></li>
																<li><a href="index-002-f.html">Home Page 17</a></li>
																<li><a href="index-002-g.html">Home Page 18</a></li>
																<li><a href="index-002-h.html">Home Page 19</a></li>
																<li><a href="index-002.html">Home Page 20</a></li>
															</ul>
														</div>
														<!-- COLUMN ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Tech Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="">FEATURES</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Tech Mega Menu Starts -->
										<ul class="dropdown-menu">
											<li>
												<div class="yamm-content">
													<div class="row">
														<!-- COLUMN STARTS -->
														<div class="col-lg-3 col-md-3">
															<h3>Category Pages</h3>
															<ul class="mega-links">
																<li><a href="category-fashion.html">2 Columns with Right Sidebar</a></li>
																<li><a href="category-sports.html">2 Columns with Left Sidebar</a></li>
																<li><a href="category-movies.html">4 Columns No Sidebar</a></li>
																<li><a href="category-tech.html">3 Columns No Sidebar</a></li>
																<li><a href="category-photography.html">2 Columns No Sidebar</a></li>
																<li><a href="category-lifestyle.html">1 Column with Right Sidebar</a></li>
																<li><a href="category-food.html">1 Column with Left Sidebar</a></li>
																<li><a href="category-movies-with-slider.html">4 Columns with Slider</a></li>
																<li><a href="category-tech-with-slider.html">3 Columns with Slider</a></li>
																<li><a href="category-lifestyle-with-slider.html">1 Column with Slider</a></li>
															</ul>
														</div>
														<!-- COLUMN ENDS -->
														<!-- COLUMN STARTS -->
														<div class="col-lg-3 col-md-3">
															<h3>Post Formats</h3>
															<ul class="mega-links">
																<li><a href="standard-post.html">Standard Post</a></li>
																<li><a href="gallery-post.html">Gallary Post</a></li>
																<li><a href="video-post.html">Video Post</a></li>
																<li><a href="audio-post.html">Audio Post</a></li>
																<li><a href="post-with-right-sidebar.html">With Right Sidebar</a></li>
																<li><a href="post-with-left-sidebar.html">With Left Sidebar</a></li>
																<li><a href="post-no-sidebars.html">No Sidebar</a></li>
															</ul>
														</div>
														<!-- COLUMN ENDS -->
														<!-- COLUMN STARTS -->
														<div class="col-lg-3 col-md-3">
															<h3>Pages</h3>
															<ul class="mega-links">
																<li><a href="category-fashion.html">Page with Right Sidebar</a></li>
																<li><a href="category-sports.html">Page with Left Sidebar</a></li>
																<li><a href="category-movies.html">Page having No Sidebar</a></li>
																<li><a href="authors.html">Author List Page</a></li>
																<li><a href="author-page.html">Author Detail Page</a></li>
																<li><a href="search-results.html">Search Results</a></li>
																<li><a href="login.html">Login</a></li>
																<li><a href="register.html">Register</a></li>
																<li><a href="404-page.html">404 Page</a></li>
																<li><a href="columns.html">Columns</a></li>
																<li><a href="contact-us.html">Contact Us</a></li>
															</ul>
														</div>
														<!-- COLUMN ENDS -->
                                                        <!-- SHORTCODES STARTS -->
														<div class="col-lg-3 col-md-3">
															<h3>Shortcodes</h3>
															<ul class="mega-links">
																<li><a href="shortcodes-columns.html">Columns</a></li>
                                                                <li><a href="shortcodes-tables.html">Tables</a></li>
																<li><a href="shortcodes-tabs.html">Tabs</a></li>
																<li><a href="shortcodes-buttons.html">Buttons</a></li>
																<li><a href="shortcodes-form.html">Form Elements</a></li>
                                                                <li><a href="shortcodes-alerts.html">Alerts</a></li>
															</ul>
														</div>
														<!-- SHORTCODES ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Tech Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="category-fashion.html">FASHION</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<ul class="visible-xs">
											<li><a href="category-fashion.html">Clothing</a></li>
											<li><a href="category-fashion.html">Shoes</a></li>
											<li><a href="category-fashion.html">Catwalk 2014</a></li>
										</ul>
										<!-- Fashion Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">FASHION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-fashion.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">FASHION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-fashion.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">FASHION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-fashion.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">FASHION</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-fashion.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Fashion Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="category-sports.html">SPORTS</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Sports Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-2">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">SPORTS</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-sports.html">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">SPORTS</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-sports.html">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">SPORTS</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-sports.html">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">SPORTS</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-sports.html">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">SPORTS</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-sports.html">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-2 col-md-2">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">SPORTS</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-sports.html">Pellentesque habitant morbi senectus et netus et</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Sports Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="category-photography.html">PHOTOGRAPHY</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Tech Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">PHOTOGRAPHY</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-photography.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">PHOTOGRAPHY</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-photography.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">PHOTOGRAPHY</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-photography.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">PHOTOGRAPHY</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-photography.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Tech Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="category-tech.html">TECH</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Tech Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-4 col-md-4">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">TECH</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-tech.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-4 col-md-4">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">TECH</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-tech.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-4 col-md-4">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">TECH</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-tech.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Tech Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="category-movies.html">MOVIES</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Movies Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm video">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">FASHION</h2>
																	<div class="play-icon"><img src="{{asset('public/images/icons/video-icon.png')}}" width="40" height="40" alt="" ></div>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-movies.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">FOOD</h2>
																	<div class="play-icon"><img src="{{asset('public/images/icons/video-icon.png')}}" width="40" height="40" alt="" ></div>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-movies.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">SPORTS</h2>
																	<div class="play-icon"><img src="{{asset('public/images/icons/video-icon.png')}}" width="40" height="40" alt="" ></div>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-movies.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">PHOTOGRAPHY</h2>
																	<div class="play-icon"><img src="{{asset('public/images/icons/video-icon.png')}}" width="40" height="40" alt="" ></div>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-movies.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Movies Mega Menu Ends -->
									</li>
									<li class="dropdown yamm-fw">
										<a class="dropdown-link" href="category-lifestyle.html">LIFE STYLE</a>
										<a class="dropdown-caret dropdown-toggle" data-hover="dropdown" ><b class="caret hidden-xs"></b></a>
										<!-- Life Style Mega Menu Starts -->
										<ul class="dropdown-menu hidden-xs hidden-sm">
											<li>
												<div class="yamm-content">
													<div class="row no-gutter-3">
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">LIFE STYLE</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-lifestyle.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">LIFE STYLE</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-lifestyle.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">LIFE STYLE</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-lifestyle.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
														<!-- ARTICLE STARTS -->
														<article class="col-lg-3 col-md-3">
															<div class="picture">
																<div class="category-image">
																	<img src="http://placehold.it/800x550" class="img-responsive" alt="" >
																	<h2 class="overlay-category">LIFE STYLE</h2>
																</div>
															</div>
															<div class="detail">
																<div class="caption"><a href="category-lifestyle.html">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</a></div>
															</div>
														</article>
														<!-- ARTICLE ENDS -->
													</div>
												</div>
											</li>
										</ul>
										<!-- Life Style Mega Menu Ends -->
									</li>
									@if (Route::has('login'))
										@auth
											<li class="visible-xs"><a href="{{ route('profile') }}">orlovich</a></li>
										@else
											<li class="visible-xs"><a href="{{ route('login') }}">LOGIN</a></li>
											<li class="visible-xs"><a href="{{ route('register') }}">JOIN</a></li>
										@endauth
									@endif
									<li class="visible-xs"><a href="">ADVERTISEMENT</a></li>
									<li class="visible-xs"><a href="contact-us.html">CONTACT</a></li>
								</ul>
								<!-- Search Starts -->
								<div class="nav-icon pull-right">
									<input type="search" value="" name="" class="s" placeholder="Search...">
								</div>
								<!-- Search Ends -->
							</div>
							<!--/.nav-collapse -->
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
		@yield('content')
		<!-- FOOTER STARTS
			========================================================================= -->
		<section class="footer">
			<!-- 1ST ROW STARTS -->
			<div class="row1">
				<div class="container">
					<div class="row">
						<!-- FEATURED POSTS STARTS -->
						<div class="col-lg-4">
							<h3>Featured Posts</h3>
							<ul class="footer-posts">
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Aenean ultricies mi vitae est. Mauris placerat eleifend leosit amet est.</a></div>
								</li>
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Quisque sit amet est et sapien ullamcorper pharetra.</a></div>
								</li>
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Quisque sit amet est et sapien ullamcorper pharetra.</a></div>
								</li>
							</ul>
						</div>
						<!-- FEATURED POSTS ENDS -->
						<!-- RESCENT POSTS STARTS -->
						<div class="col-lg-4">
							<h3>Recent Posts</h3>
							<ul class="footer-posts">
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Aenean ultricies mi vitae est. Mauris placerat eleifend leosit amet est.</a></div>
								</li>
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Quisque sit amet est et sapien ullamcorper pharetra.</a></div>
								</li>
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Quisque sit amet est et sapien ullamcorper pharetra.</a></div>
								</li>
							</ul>
						</div>
						<!-- RESCENT POSTS ENDS -->
						<!-- POPULAR POSTS STARTS -->
						<div class="col-lg-4">
							<h3>Popular Posts</h3>
							<ul class="footer-posts">
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Aenean ultricies mi vitae est. Mauris placerat eleifend leosit amet est.</a></div>
								</li>
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Quisque sit amet est et sapien ullamcorper pharetra.</a></div>
								</li>
								<li>
									<div class="pic"><img src="http://placehold.it/75x75" class="img-circle" alt="" ></div>
									<div class="info">
										<span class="date"><i class="fa fa-calendar-o"></i> 01/01/2015</span>
										<span class="comments pull-right"><i class="fa fa-comment-o"></i> 750</span>
										<span class="likes pull-right"><i class="fa fa-heart-o"></i> 500</span>
									</div>
									<div class="caption"><a href="#">Quisque sit amet est et sapien ullamcorper pharetra.</a></div>
								</li>
							</ul>
						</div>
						<!-- POPULAR POSTS ENDS -->
					</div>
				</div>
			</div>
			<!-- 1ST ROW ENDS -->
			<!-- 2ND ROW STARTS -->
			<div class="row2">
				<div class="container">
					<div class="row">
						<!-- ABOUT MAG STARTS -->
						<div class="col-lg-4">
							<div class="about">
								<h3>About the Magazine</h3>
								<div class="footer-logo"><img src="{{asset('public/images/logo2.png')}}" alt="" ></div>
								<div class="introduction">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.<br><br>Aenean ultricies mi vitae est. Mauris placerat eleifend leosit amet est.</div>
							</div>
						</div>
						<!-- ABOUT MAG ENDS -->
						<!-- LIVE TWEETS STARTS -->
						<div class="col-lg-4">
							<div class="tweets">
								<h3>Live Tweets</h3>
								<ul>
									<li>The Transformative Effects of Reading + Elon Musk's Reading List <a href="#">buff.ly/1BD52XY</a> <a href="#">pic.twitter.com/NpGbketQqV</a></li>
									<li>Envato, The Australian Company Behind ThemeForest, Has Paid Out $224 Million To Its Users <a href="#">businessinsider.com.au/envato-the-aus…</a> by @<a href="#">alexandraheber</a></li>
									<li>The Transformative Effects of Reading + Elon Musk's Reading List <a href="#">buff.ly/1BD52XY</a> <a href="#">pic.twitter.com/NpGbketQqV</a></li>
								</ul>
							</div>
						</div>
						<!-- LIVE TWEETS ENDS -->
						<!-- CONTACT US STARTS -->
						<div class="col-lg-4">
							<h3>Contact Us</h3>
							<ul class="contactus">
								<li><i class="fa fa-building-o"></i> PO Box 16122 Collins Street West<br>Victoria 8007 Australia</li>
								<li><i class="fa fa-phone"></i> +61 3 8376 6284</li>
								<li><i class="fa fa-envelope-o"></i> <a href="#">info@umag.com</a></li>
							</ul>
							<!-- SOCIAL ICONS STARTS -->
							<h3>Follow Us</h3>
							<ul class="social-icons">
								<li>
									<div class="icon facebook"><i class="fa fa-facebook"></i></div>
								</li>
								<li>
									<div class="icon twitter"><i class="fa fa-twitter"></i></div>
								</li>
								<li>
									<div class="icon linkedin"><i class="fa fa-linkedin"></i></div>
								</li>
								<li>
									<div class="icon dribbble"><i class="fa fa-dribbble"></i></div>
								</li>
								<li>
									<div class="icon youtube"><i class="fa fa-youtube"></i></div>
								</li>
								<li>
									<div class="icon behance"><i class="fa fa-behance"></i></div>
								</li>
							</ul>
							<!-- SOCIAL ICONS ENDS -->
						</div>
						<!-- CONTACT US ENDS -->
					</div>
				</div>
			</div>
			<!-- 2ND ROW ENDS -->
			<!-- 3RD ROW STARTS -->
			<div class="row3">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 copyright">© Copyright 2018 - INews</div>
					</div>
				</div>
			</div>
			<!-- 3RD ROW ENDS -->
		</section>
		<!-- /. FOOTER ENDS
			========================================================================= -->
		<!-- TO TOP STARTS
			========================================================================= -->
		<a href="#" class="scrollup">Scroll</a>
		<!-- /. TO TOP ENDS
			========================================================================= -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{asset('public/js/jquery-1.11.1/jquery.min.js')}}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="{{asset('public/js/bootstrap/bootstrap.min.js')}}"></script>
		<!-- Hover Dropdown Menu -->
		<script src="{{asset('public/js/bootstrap-hover/twitter-bootstrap-hover-dropdown.min.js')}}"></script>
		<!-- Sidr JS Menu -->
		<script src="{{asset('public/js/sidr/jquery.sidr.min.js')}}"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="{{asset('public/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
		<!-- Sticky -->
		<script type="text/javascript" src="{{asset('public/js/sticky/jquery.sticky.js')}}"></script>
		<!-- AJAX Contact Form -->
		<script type="text/javascript" src="{{asset('public/js/contact/contact-form.js')}}"></script>
		<!-- Retina -->
		<script type="text/javascript" src="{{asset('public/js/retina/retina.js')}}"></script>
		<!-- FitVids -->
		<script type="text/javascript" src="{{asset('public/js/fitvids/jquery.fitvids.js')}}"></script>
		<!-- Custom -->
		<script type="text/javascript" src="{{asset('public/js/custom/custom.js')}}"></script>
	</body>
</html>