
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
    ============================================ -->
    <title>Destino - Advanced & High Customizable eCommerce HTML5/CSS3 Theme</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.rtl.min.css">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/footer9.css" rel="stylesheet">
	<link href="css/header9.css" rel="stylesheet">
	<link id="color_scheme" href="css/home9.css" rel="stylesheet">

</head>

<body class="common-home res layout-home9">
	
	<div id="wrapper" class="wrapper-full banners-effect-7">

		<!-- Header Container  -->
		<header id="header" class=" variantleft  type_9">
			<!-- Header Top -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="header-top-left form-inline  col-sm-6 col-xs-6 compact-hidden">
							<div class="form-group currencies-block">
								<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
									<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
										<span class="icon icon-credit "></span> USD <span class="fa fa-caret-down"></span>
									</a>
									<ul class="dropdown-menu btn-xs">
										<li> <a href="#">(€)&nbsp;Euro</a></li>
										<li> <a href="#">(£)&nbsp;Pounds</a></li>
										<li> <a href="#">($)&nbsp;USD</a></li>
									</ul>
								</form>
							</div>
							<div class="form-group languages-block ">
								<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
									<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
										<img src="img/demo/flags/lb.png" alt="Arabic" title="Arabic">
										<span class="hidden-xs">Arabic</span>
										<span class="fa fa-caret-down"></span>
									</a>
									<ul class="dropdown-menu" >
										<li><a href="../home9.php"><img class="image_flag" src="img/demo/flags/gb.png" alt="English" title="English"> English </a></li>
										<li> <a href="#"> <img class="image_flag" src="img/demo/flags/lb.png" alt="Arabic" title="Arabic"> Arabic </a> </li>
									</ul>
								</form>
							</div>
						</div>
						<div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 hidden-xs">
							
							<div class="tabBlock" id="TabBlock-1">
								<ul class="top-link list-inline">
									<li class="my-accout "><a href="my-account.html" id="wishlist-total" class="top-link-wishlist" title="My Accout"><span>My Account</span></a></li>
									<li class="wishlist"><a href="wishlist.html" title="Wishlist"><span>Wishlist(0)</span></a></li>
									<li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><span>Checkout</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->

			<!-- Header center -->
			<div class="header-center">
				<div class="container">
					<div class="row">
						<!-- Logo -->
						<div class="navbar-logo col-lg-4 col-md-3 col-sm-12 col-xs-12">
							<a href="index.php"><img src="img/demo/logo/home-4/logo.png" title="Your Store" alt="Your Store"></a>
						</div>
						<!-- //end Logo -->

						<!-- Search -->
						<div id="sosearchpro" class="col-xs-12 col-sm-8 col-md-5 search-pro">
							
							<form method="GET" action="index.html">
								<div id="search0" class="search input-group">
									<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search product..." name="search">
									<button type="submit" class="button-search btn btn-primary" name="submit_search">Search</button>
								</div>
								
							</form>

						</div>
						<!-- //end Search -->

						<!-- Secondary menu -->
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 shopping_cart">
							<!--cart-->
							<div id="cart" class=" btn-group btn-shopping-cart">
								<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
									<div class="shopcart">
										<span class="handle pull-left"></span>
										<span class="number-shopping-cart">2</span>
									</div>
								</a>

								<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

									<li>
										<table class="table table-striped">
											<tbody>
												<tr>
													<td class="text-center" style="width:70px">
														<a href="product.html"> <img src="img/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
													</td>
													<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
													<td class="text-center"> x1 </td>
													<td class="text-center"> $1,202.00 </td>
													<td class="text-right">
														<a href="product.html" class="fa fa-edit"></a>
													</td>
													<td class="text-right">
														<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
													</td>
												</tr>
												<tr>
													<td class="text-center" style="width:70px">
														<a href="product.html"> <img src="img/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
													</td>
													<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
													<td class="text-center"> x1 </td>
													<td class="text-center"> $60.00 </td>
													<td class="text-right">
														<a href="product.html" class="fa fa-edit"></a>
													</td>
													<td class="text-right">
														<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
									<li>
										<div>
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td class="text-left"><strong>Sub-Total</strong>
														</td>
														<td class="text-right">$1,060.00</td>
													</tr>
													<tr>
														<td class="text-left"><strong>Eco Tax (-2.00)</strong>
														</td>
														<td class="text-right">$2.00</td>
													</tr>
													<tr>
														<td class="text-left"><strong>VAT (20%)</strong>
														</td>
														<td class="text-right">$200.00</td>
													</tr>
													<tr>
														<td class="text-left"><strong>Total</strong>
														</td>
														<td class="text-right">$1,262.00</td>
													</tr>
												</tbody>
											</table>
											<p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
										</div>
									</li>
								</ul>
							</div>
							<!--//cart-->
							<div class="sign-in pull-right">
								<span class="icon-sign-in"></span>
								<div class="link">
									<a href="login.html">Sign In</a>
									<span> / </span>
									<a href="register.html">Register</a>
									<br>
									<span class="welcome">Welcome Guest</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- //Header center -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">


						<!-- Main menu -->
						<div class="megamenu-hori header-bottom-left  col-md-9 col-sm-2 col-xs-2 ">
							<div class="responsive so-megamenu ">
								<nav class="navbar-default">
									<div class=" container-megamenu  horizontal">

										<div class="navbar-header">
											<button   id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<div class="megamenu-wrapper">
											<span id="remove-megamenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu " data-transition="slide" data-animationtime="250">
														<li class="home hover">
															<p class="close-menu"></p>
															<a href="#" class="menu1">Home
																<b class="caret"></b>
															</a>

															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-3">
																			<a href="index.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-1.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - (Default)</h3> 
																			</a> 

																		</div>
																		<div class="col-md-3">
																			<a href="home2.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-2.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 2</h3> 
																			</a> 

																		</div>
																		<div class="col-md-3">
																			<a href="home3.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-3.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 3</h3> 
																			</a> 

																		</div>
																		<div class="col-md-3">
																			<a href="home4.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-4.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 4</h3> 
																			</a> 
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="home5.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-5.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 5</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home6.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-6.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 6</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home7.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-7.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 7</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home8.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-8.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 8</h3> 
																			</a> 
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="home9.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-9.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 9</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home10.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-10.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 10</h3> 
																			</a> 
																		</div>
																		<div class="col-md-3">
																			<a href="home11.php" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="img/demo/feature/home-11.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 11</h3> 
																			</a> 
																		</div>
																		
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix menu1">
																<strong>Features</strong>
																<b class="caret"></b>
																<img class="label-hot" src="img/theme/icon/hot-icon.png" alt="icon items">
															</a>
															<div class="sub-menu" style="width: 100%; right: 0px; display: none;">
																<div class="content" style="height: 288px; display: none;">
																	<div class="row">
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Listing pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="category.html">Category Page 1 </a></li>
																						<li><a href="category-v2.html">Category Page 2</a></li>
																						<li><a href="category-v3.html">Category Page 3</a></li>
																					</ul>

																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Product pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="product.html">Image size - big</a></li>
																						<li><a href="product-v2.html">Image size - medium</a></li>
																						<li><a href="product-v3.html">Image size - small</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">Shopping pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="cart.html">Shopping Cart Page</a></li>
																						<li><a href="checkout.html">Checkout Page</a></li>
																						<li><a href="compare.html">Compare Page</a></li>
																						<li><a href="wishlist.html">Wishlist Page</a></li>

																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">My Account pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="login.html">Login Page</a></li>
																						<li><a href="register.html">Register Page</a></li>
																						<li><a href="my-account.html">My Account</a></li>
																						<li><a href="order-history.html">Order History</a></li>
																						<li><a href="order-information.html">Order Information</a></li>
																						<li><a href="return.html">Product Returns</a></li>
																						<li><a href="gift-voucher.html">Gift Voucher</a></li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix menu1">
																<strong>Pages</strong>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 40%; right: auto; display: none;">
																<div class="content" style="height: 160px; display: none;">
																	<div class="row">
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="faq.html">FAQ</a></li>

																				<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
																				<li><a class="subcategory_item" href="contact.html">Contact us</a></li>
																				<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																			</ul>
																		</div>
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																				<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																				<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																				<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix menu1">
																<strong>Categories</strong>
																<b class="caret"></b>
																<img class="label-hot" src="img/theme/icon/hot-icon.png" alt="icon items">

															</a>
															<div class="sub-menu" style="width: 100%; right: 0px; display: none;">
																<div class="content" style="height: 398px; display: none;">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-3 img img1">
																					<a href="#"><img src="img/demo/cms/img1.jpg" alt="banner1"></a>
																				</div>
																				<div class="col-md-3 img img2">
																					<a href="#"><img src="img/demo/cms/img2.jpg" alt="banner2"></a>
																				</div>
																				<div class="col-md-3 img img3">
																					<a href="#"><img src="img/demo/cms/img3.jpg" alt="banner3"></a>
																				</div>
																				<div class="col-md-3 img img4">
																					<a href="#"><img src="img/demo/cms/img4.jpg" alt="banner4"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Automotive</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Car Alarms and Security</a></li>
																							<li><a href="#" class="main-menu">Car Audio &amp; Speakers</a></li>
																							<li><a href="#" class="main-menu">Gadgets &amp; Auto Parts</a></li>
																							<li><a href="#" class="main-menu">More Car Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Electronics</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Battereries &amp; Chargers</a></li>
																							<li><a href="#" class="main-menu">Headphones, Headsets</a></li>
																							<li><a href="#" class="main-menu">Home Audio</a></li>
																							<li><a href="#" class="main-menu">Mp3 Players &amp; Accessories</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Earings</a></li>
																							<li><a href="#" class="main-menu">Wedding Rings</a></li>
																							<li><a href="#" class="main-menu">Men Watches</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
																			<div class="row">
																				<div class="col-md-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="#" class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																							<li><a href="#" class="main-menu">Gift for Man</a></li>
																							<li><a href="#" class="main-menu">Gift for Woman</a></li>
																							<li><a href="#" class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>

														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix menu1">
																<strong>Accessories</strong>
																<b class="caret"></b>


															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-8">
																			<div class="row">
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Automotive</a>
																								<ul>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#">Car Audio &amp; Speakers</a></li>
																									<li><a href="3#">Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#">Accessories for i Pad</a></li>
																									<li><a href="#">Apparel</a></li>
																									<li><a href="#">Accessories for iPhone</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-md-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																								<ul>
																									<li><a href="#">Camping &amp; Hiking</a></li>
																									<li><a href="#">Cameras &amp; Photo</a></li>
																									<li><a href="#">Cables &amp; Connectors</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Electronics</a>
																								<ul>
																									<li><a href="#">Battereries &amp; Chargers</a></li>
																									<li><a href="#">Bath &amp; Body</a></li>
																									<li><a href="#">Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<span class="title-submenu">Bestseller</span>
																			<div class="row">
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img src="img/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Filet Mign</a></h4>
																							<div class="rating-box">
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																							</div>
																							<p class="price">$1,202.00</p>
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img src="img/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Dail Lulpa</a></h4>
																							<div class="rating-box">
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class=""><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																							</div>
																							<p class="price">$78.00</p>
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img src="img/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Canon EOS 5D</a></h4>

																							<div class="rating-box">
																								<span class="gray"><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																								<span class="gray"><i class="fa fa-star "></i></span>
																							</div>
																							<p class="price">
																								<span class="price-new">$60.00</span>
																								<span class="price-old">$145.00</span>

																							</p>
																						</div>
																					</div>
																				</div>
																			</div>
																			

																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="">
															<p class="close-menu"></p>
															<a href="blog-page.html" class="clearfix menu1">
																<strong>Blog</strong>
																<span class="label"></span>
															</a>
														</li>

														
													</ul>

												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
						<!-- //end Main menu -->
						<div class="col-md-3 col-sm-10 col-xs-10 header-bottom-right ">
							
							<a href="#" class="black">Black Friday<img class="label-hot" src="img/theme/icon/hot-icon.png" alt="icon items"></a>
							<a href="#">Special Offer!</a>
						</div>
					</div>
				</div>

			</div>
		</header>
		<!-- //Header Container  -->
		<div class="content-main home-9">
			<section class="so-spotlight1 ">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="tab-top-deal">
								<ul>
									<li><a href="#">Top Deal</a></li>
									<li><a href="#">bestselling</a></li>
									<li><a href="#">Category</a></li>
									<li><a href="#">hightlight</a></li>
									<li><a href="#">Top Brand</a></li>
									<li><a href="#">promotions</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="so-spotlight2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="banners "  >
								<div class="main-content">
									<div class="banner-1 banner">
										<a href="#"><img src="img/demo/banner/home-9/banner-1.jpg" alt=""></a>
										<a href="#" class="banner-bot"><img src="img/demo/banner/home-9/banner-2.jpg" alt=""></a>
									</div>
									<div class="banner-2 banner">
										<a href="#"><img src="img/demo/banner/home-9/banner-3.jpg" alt=""></a>
									</div>
									<div class="banner-3 banner">
										<a href="#"><img src="img/demo/banner/home-9/banner-4.jpg" alt=""></a>
										<a href="#" class="banner-bot"><img src="img/demo/banner/home-9/banner-5.jpg" alt=""></a>
									</div>
								</div>
							</div>
						</div>
						
					</div>	
				</div>
			</section>
			<section class="so-spotlight3">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="hashtags">
								<div class="titleh3">
									<h3 class="h3module">Hashtags Trend</h3>
									<div class="see-all">
										<a href="#">See All  <i class="fa fa-caret-right" aria-hidden="true"></i></a>
									</div>
								</div>
								
								<div class="categoris">
									<div class="category">
										<div class="category-content">
											<a href="#">
												<div class="category-img">
													<img src="img/demo/collections/home-9/c1.jpg" alt="">
												</div>
												<div class="category-btn">
													<span>swinsuit</span>
												</div>
											</a>
										</div>
									</div>
									<div class="category">
										<div class="category-content">
											<a href="#">
												<div class="category-img">
													<img src="img/demo/collections/home-9/c2.jpg" alt="">
												</div>
												<div class="category-btn">
													<span>FURNICOM</span>
												</div>
											</a>
											
										</div>
										
									</div>
									<div class="category">
										<div class="category-content">
											<a href="#">
												<div class="category-img">
													<img src="img/demo/collections/home-9/c3.jpg" alt="">
												</div>
												<div class="category-btn">
													<span href="#">Hitech</span>
												</div>
											</a>
											
										</div>
										
									</div>
									<div class="category">
										<div class="category-content">
											<a href="#">
												<div class="category-img">
													<img src="img/demo/collections/home-9/c4.jpg" alt="">
												</div>
												<div class="category-btn">
													<span href="#">Shoes</span>
												</div>
											</a>
											
										</div>
										
									</div>
									<div class="category">
										<div class="category-content">
											<a href="#">
												<div class="category-img">
													<img src="img/demo/collections/home-9/c5.jpg" alt="">
												</div>
												<div class="category-btn">
													<span href="#">swinsuit</span>
												</div>
											</a>
											
										</div>
										
									</div>
									<div class="category">
										<div class="category-content">
											<a href="#">
												<div class="category-img">
													<img src="img/demo/collections/home-9/c6.jpg" alt="">
												</div>
												<div class="category-btn">
													<span href="#">Men's Fashion</span>
												</div>
											</a>
											
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="so-spotlight4">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="titleh3">
								<h3 class="h3module">FLASH SALER</h3>
								<div class="see-all">
									<a href="#">See All  <i class="fa fa-caret-right" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="row line-1">
								<div class="deal col-md-6 col-sm-6 col-xs-12">
									<div class="deal-banner banners">
										<div>
											<a href="#"><img src="img/demo/banner/home-9/banner-6.jpg" alt=""></a>
										</div>
									</div>
									<div class="deal-artcle">
										<div class="owl-carousel" data-nav="yes" data-loop="yes" data-margin="0" data-items_md="1" data-items_sm="1" data-items_xs="1"> 
											<div class="product-layout ">
												<div class="product-item-container">
													<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
														<div class="product-image-container  second_img ">
															<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-1.jpg" alt=""></a>
															<!--Sale Label-->
															<span class="sale">-20%</span>

															<div class="hover-1">
																<ul>
																	<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																	</li>
																	<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																	<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																	<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="time-offer-end">
															<div class="title">
																<button type="button" class="btn">Start Summer in Style</button>
															</div>
														</div>
														<div class="caption">
															<div class="ratings">
																<div class="rating-box">
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class="gray"><i class="fa fa-star "></i></span>
																</div>
															</div>
															<h4><a href="product.html">2017 spring and autumn casual</a></h4>	


															<div class="price">
																<span class="price-new">$45.00</span>
																<span class="price-old">$86.00</span>		   
															</div>
															<div class="time-box">

															</div>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="product-layout ">
												<div class="product-item-container">
													<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
														<div class="product-image-container  second_img ">
															<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-2.jpg" alt=""></a>
															<!--Sale Label-->
															<span class="sale">-25%</span>

															<div class="hover-1">
																<ul>
																	<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																	</li>
																	<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																	<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																	<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="time-offer-end">
															<div class="title">
																<button type="button" class="btn">Start Summer in Style</button>
															</div>
														</div>
														<div class="caption">
															<div class="ratings">
																<div class="rating-box">
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class="gray"><i class="fa fa-star "></i></span>
																</div>
															</div>
															<h4><a href="product.html">2017 spring and autumn casual</a></h4>	


															<div class="price">
																<span class="price-new">$77.00</span>
																<span class="price-old">$125.00</span>		   
															</div>
															<div class="time-box-2">

															</div>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<div class="deal col-md-6 col-sm-6 col-xs-12">
									<div class="deal-banner banners">
										<div>
											<a href="#"><img src="img/demo/banner/home-9/banner-7.jpg" alt=""></a>
										</div>
									</div>
									<div class="deal-artcle">
										<div class="owl-carousel" data-nav="yes" data-loop="yes" data-margin="0" data-items_md="1" data-items_sm="1" data-items_xs="1"> 
											<div class="product-layout ">
												<div class="product-item-container">
													<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
														<div class="product-image-container  second_img ">
															<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-3.jpg" alt=""></a>
															<!--Sale Label-->
															<span class="sale">-10%</span>

															<div class="hover-1">
																<ul>
																	<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																	</li>
																	<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																	<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																	<li class="icon-search"><a class="quickview iframe-link " href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="time-offer-end">
															<div class="title">
																<button type="button" class="btn">Start Summer in Style</button>
															</div>
														</div>
														<div class="caption">
															<div class="ratings">
																<div class="rating-box">
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class="gray"><i class="fa fa-star "></i></span>
																</div>
															</div>
															<h4><a href="product.html">2017 spring and autumn casual</a></h4>	


															<div class="price">
																<span class="price-new">$54.00</span>
																<span class="price-old">$87.00</span>		   
															</div>
															<div class="time-box-2">

															</div>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="product-layout ">
												<div class="product-item-container">
													<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
														<div class="product-image-container  second_img ">
															<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-4.jpg" alt=""></a>
															<!--Sale Label-->
															<span class="sale">-20%</span>

															<div class="hover-1">
																<ul>
																	<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																	</li>
																	<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																	<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																	<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="time-offer-end">
															<div class="title">
																<button type="button" class="btn">Start Summer in Style</button>
															</div>
														</div>
														<div class="caption">
															<div class="ratings">
																<div class="rating-box">
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class="gray"><i class="fa fa-star "></i></span>
																</div>
															</div>
															<h4><a href="product.html">2017 spring and autumn casual</a></h4>	


															<div class="price">
																<span class="price-new">$45.00</span>
																<span class="price-old">$69.00</span>		   
															</div>
															<div class="time-box">

															</div>
														</div>
													</div><!-- right block -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="deal col-md-6 col-sm-6 col-xs-12 ">
									<div class="deal-banner banners">
										<div>
											<a href="#"><img src="img/demo/banner/home-9/banner-8.jpg" alt=""></a>
										</div>
									</div>
									<div class="deal-artcle">
										<div class="owl-carousel" data-nav="yes" data-loop="yes" data-margin="0" data-items_md="1" data-items_sm="1" data-items_xs="1"> 
											<div class="product-layout ">
												<div class="product-item-container">
													<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
														<div class="product-image-container  second_img ">
															<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-4.jpg" alt=""></a>
															<!--Sale Label-->
															<span class="sale">-20%</span>

															<div class="hover-1">
																<ul>
																	<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																	</li>
																	<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																	<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																	<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="time-offer-end">
															<div class="title">
																<button type="button" class="btn">Start Summer in Style</button>
															</div>
														</div>
														<div class="caption">
															<div class="ratings">
																<div class="rating-box">
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class="gray"><i class="fa fa-star "></i></span>
																</div>
															</div>
															<h4><a href="product.html">2017 spring and autumn casual</a></h4>	


															<div class="price">
																<span class="price-new">$87.00</span>
																<span class="price-old">$135.00</span>		   
															</div>
															<div class="time-box">

															</div>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="product-layout ">
												<div class="product-item-container">
													<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
														<div class="product-image-container  second_img ">
															<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-3.jpg" alt=""></a>
															<!--Sale Label-->
															<span class="sale">-20%</span>

															<div class="hover-1">
																<ul>
																	<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																	</li>
																	<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																	<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																	<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="time-offer-end">
															<div class="title">
																<button type="button" class="btn">Start Summer in Style</button>
															</div>
														</div>
														<div class="caption">
															<div class="ratings">
																<div class="rating-box">
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class="gray"><i class="fa fa-star "></i></span>
																</div>
															</div>
															<h4><a href="product.html">2017 spring and autumn casual</a></h4>	


															<div class="price">
																<span class="price-new">$85.00</span>
																<span class="price-old">$178.00</span>		   
															</div>
															<div class="time-box">

															</div>
														</div>
													</div><!-- right block -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="deal col-md-6 col-sm-6 col-xs-12">
									<div class="deal-banner banners">
										<div>
											<a href="#"><img src="img/demo/banner/home-9/banner-9.jpg" alt=""></a>
										</div>
									</div>
									<div class="deal-artcle">
										<div class="owl-carousel" data-nav="yes" data-loop="yes" data-margin="0" data-items_md="1" data-items_sm="1" data-items_xs="1"> 
											<div class="product-layout ">
												<div class="product-item-container">
													<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
														<div class="product-image-container  second_img ">
															<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-5.jpg" alt=""></a>
															<!--Sale Label-->
															<span class="sale">-20%</span>

															<div class="hover-1">
																<ul>
																	<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																	</li>
																	<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																	<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																	<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="time-offer-end">
															<div class="title">
																<button type="button" class="btn">Start Summer in Style</button>
															</div>
														</div>
														<div class="caption">
															<div class="ratings">
																<div class="rating-box">
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class="gray"><i class="fa fa-star "></i></span>
																</div>
															</div>
															<h4><a href="product.html">2017 spring and autumn casual</a></h4>	


															<div class="price">
																<span class="price-new">$87.00</span>
																<span class="price-old">$145.00</span>		   
															</div>
															<div class="time-box">

															</div>
														</div>
													</div><!-- right block -->
												</div>
											</div>
											<div class="product-layout ">
												<div class="product-item-container">
													<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
														<div class="product-image-container  second_img ">
															<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-6.jpg" alt=""></a>
															<!--Sale Label-->
															<span class="sale">-20%</span>

															<div class="hover-1">
																<ul>
																	<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																	</li>
																	<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																	<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																	<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="time-offer-end">
															<div class="title">
																<button type="button" class="btn">Start Summer in Style</button>
															</div>
														</div>
														<div class="caption">
															<div class="ratings">
																<div class="rating-box">
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class=""><i class="fa fa-star "></i></span>
																	<span class="gray"><i class="fa fa-star "></i></span>
																</div>
															</div>
															<h4><a href="product.html">2017 spring and autumn casual</a></h4>	


															<div class="price">
																<span class="price-new">$95.00</span>
																<span class="price-old">$142.00</span>		   
															</div>
															<div class="time-box">

															</div>
														</div>
													</div><!-- right block -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="so-spotlight5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="categories">
								<div class="category category-1">
									<div class="sub-cate">
										<div class="sub-1">
											<h3>Fashion & Beauty</h3>
										</div>
										<div class="sub-2">
											<div class="see-all">
												<a href="#">See All  <i class="fa fa-caret-right" aria-hidden="true"></i></a>
											</div>
											<div class="sub-line">
												<ul>
													<li><a href="#">Electronics</a></li>
													<li><a href="#">Television</a></li>
													<li><a href="#">Air Conditional</a></li>
													<li><a href="#">Laptops & Accessories</a></li>
													<li><a href="#">Smartphone & Tablets</a></li>
												</ul>
											</div>
										</div>
										
									</div>
									<div class="product-cate">
										<div class="row">
											<div class="col-md-12">
												<div class="banner">
													<div>
														<a href="#"><img src="img/demo/banner/home-9/banner-10.jpg" alt=""></a>
														
													</div>
												</div>
												<div class="products">
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$78.00</span>   
																		
																	</div>
																	<span class="new">new</span>
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-1.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$45.00</span>   
																		<span class="price-old">$103.00</span>  
																	</div>
																	<span class="sale">-20%</span>
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-7.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$36.00</span>   
																		
																	</div>
																	
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-2.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$78.00</span>   
																		
																	</div>
																	
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-8.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="category category-2">
									<div class="sub-cate">
										<div class="sub-1">
											<h3>Fashion & Beauty</h3>
										</div>
										<div class="sub-2">
											<div class="see-all">
												<a href="#">See All  <i class="fa fa-caret-right" aria-hidden="true"></i></a>
											</div>
											<div class="sub-line">
												<ul>
													<li><a href="#">Electronics</a></li>
													<li><a href="#">Television</a></li>
													<li><a href="#">Air Conditional</a></li>
													<li><a href="#">Laptops & Accessories</a></li>
													<li><a href="#">Smartphone & Tablets</a></li>
												</ul>
											</div>
										</div>
										
									</div>
									<div class="product-cate">
										<div class="row">
											<div class="col-md-12">
												<div class="banner">
													<div>
														<a href="#"><img src="img/demo/banner/home-9/banner-11.jpg" alt=""></a>
														
													</div>
												</div>
												<div class="products">
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$85.00</span>   

																	</div>
																	
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-9.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$71.00</span>   
																		
																	</div>
																	<span class="new">new</span>
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-10.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$83.00</span>   
																		<span class="price-old">$103.00</span>  
																	</div>
																	<span class="sale">-15%</span>
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-11.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$68.00</span>   
																		
																	</div>
																	
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-12.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="category category-3">
									<div class="sub-cate">
										<div class="sub-1">
											<h3>Fashion & Beauty</h3>
										</div>
										<div class="sub-2">
											<div class="see-all">
												<a href="#">See All  <i class="fa fa-caret-right" aria-hidden="true"></i></a>
											</div>
											<div class="sub-line">
												<ul>
													<li><a href="#">Electronics</a></li>
													<li><a href="#">Television</a></li>
													<li><a href="#">Air Conditional</a></li>
													<li><a href="#">Laptops & Accessories</a></li>
													<li><a href="#">Smartphone & Tablets</a></li>
												</ul>
											</div>
										</div>
										
									</div>
									<div class="product-cate">
										<div class="row">
											<div class="col-md-12">
												<div class="banner">
													<div>
														<a href="#"><img src="img/demo/banner/home-9/banner-12.jpg" alt=""></a>
														
													</div>
												</div>
												<div class="products">
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$94.00</span>   
																		<span class="price-old">$103.00</span>  
																	</div>
																	<span class="sale">-15%</span>
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-13.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$69.00</span>   
																		
																	</div>
																	
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-14.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$96.00</span>   
																		
																	</div>
																	
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-15.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
													<div class="product ">
														<div class="product-item-container">
															<div class="top-block ">

																<div class="caption">
																	<div class="ratings">
																		<div class="rating-box">
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class=""><i class="fa fa-star "></i></span>
																			<span class="gray"><i class="fa fa-star "></i></span>
																		</div>
																	</div>
																	<h4><a href="product.html">New Style Blender</a></h4>	


																	<div class="price">
																		<span class="price-new">$34.00</span>   
																		
																	</div>
																	
																</div>
															</div>
															<div class=" bot-block ">
																<div class="product-image-container  second_img ">
																	<a href="product.html" class="product-img"><img src="img/demo/shop/product/home-9/product-16.jpg" alt=""></a>
																	<!--Sale Label-->
																	

																	<div class="hover-1">
																		<ul>
																			<li class="icon-cart"><a class="addToCart btn-button"   data-toggle="tooltip" title="" onclick="cart.add('140');" data-original-title="Add To Cart"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
																			</li>
																			<li class="icon-heart"><a class="wishlist btn-button"   data-toggle="tooltip" title="" onclick="wishlist.add('140');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
																			<li class="icon-exchange"><a class="compare btn-button"   data-toggle="tooltip" title="" onclick="compare.add('140');" data-original-title="Compare this Product"><i class="fa fa-refresh"></i></a></li>
																			<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
																		</ul>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="so-spotlight6">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="brand">
								<div class="owl-carousel owl-brand" data-margin="15" data-nav="yes" data-dots="no" data-loop="yes" data-items_xs="2" data-items_sm="4" data-items_md="5">
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-1.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-2.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-3.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-4.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-5.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-1.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-3.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-2.jpg" alt=""></a>
									</div>
									<div class="item-brand">
										<a href="#"><img src="img/demo/brands/home-9/brand-1.jpg" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- Footer Container -->
		<footer class="footer-container  type_footer10">

			<!-- /Footer Top Container -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h3>Technology</h3>
							<div>
								<ul>
									<li><a href="#">Mobiles</a></li>
									<li><a href="#">Tablets</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Power Banks</a></li>
									<li><a href="#">Phone Cases</a></li>
									<li><a href="#">Tablet Accessories</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h3>WOMEN'S FASHION</h3>
							<div>
								<ul>
									<li><a href="#">Dresses</a></li>
									<li><a href="#">Tops</a></li>
									<li><a href="#">Cheongsam</a></li>
									<li><a href="#">Back to Black</a></li>
									<li><a href="#">5 Stars Rating!</a></li>
									<li><a href="#">Fabulous Floral Up to 70%</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h3>Home & Living</h3>
							<div>
								<ul>
									<li><a href="#">Air Conditioners</a></li>
									<li><a href="#">Air Purifiers</a></li>
									<li><a href="#">Fans</a></li>
									<li><a href="#">Freezers</a></li>
									<li><a href="#">Microwave & Ovens</a></li>
									<li><a href="#">Refrigerators</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h3>Health & Beauty</h3>
							<div>
								<ul>
									<li><a href="#">Treatments & Serum</a></li>
									<li><a href="#">Moisturisers & Cream</a></li>
									<li><a href="#">Toners</a></li>
									<li><a href="#">Face Cleansers</a></li>
									<li><a href="#">Face Masks</a></li>
									<li><a href="#">Gifts & Value Sets</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h3>BABY & TODDLER</h3>
							<div>
								<ul>
									<li><a href="#">Diapering & Potty</a></li>
									<li><a href="#">Disposable Diapers</a></li>
									<li><a href="#">Diaper Bags</a></li>
									<li><a href="#">Power Banks</a></li>
									<li><a href="#">Cloth Diapers</a></li>
									<li><a href="#">Baby Gear</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<h3>SPORTS & OUTDOORS</h3>
							<div>
								<ul>
									<li><a href="#">Exercise & Fitness</a></li>
									<li><a href="#">Cardio Equipment</a></li>
									<li><a href="#">Strength Equipment</a></li>
									<li><a href="#">Fitness Accessories</a></li>
									<li><a href="#">Weight</a></li>
									<li><a href="#">Yoga</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-mid">
				<div class="container">
					<div class="row">
						<div class="col-md-12 footer-mid-img">
							<img src="img/demo/payment/home-9/payment.jpg" alt="">
						</div>
						<div class="col-md-12 footer-mid-link">
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Customer Service</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Site Map</a></li>
								<li><a href="#">Ordersand Returns</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-12 footer-mid-text">
							<p>**$50 off orders $350+ with the code BOO50. $75 off orders $500+ with the code BOO75. $150 off orders $1000+ with the code BOO150. Valid from October 28, 2016 to October 31, 2016. Offer may not be combined with any other offers or promotions, is non-exchangeable and non-refundable. Offer valid within the US only.</p>
						</div>
						<div class="col-md-12 payment">
							<img src="img/demo/payment/home-9/payment.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bot">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Destino - Premium Multipurpose HTML5/CSS3 Theme - Designed by SmartAddons.Com</p>
						</div>
						<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
					</div>
				</div>
			</div>
		</footer>
	</div>


	
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
		<i class="fa fa-cog"></i>
	</div>		

	<div id="sp-cpanel" class="sp-delay">
		<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
		<div id="sp-cpanel_settings">
			<form action="" method="post" class="myform" >

				<div class="panel-group">
					<label>Color Scheme</label>

					<div class="group-schemes">
						<input name="cplthemesColors" class="minicolors minicolors-input form-control" type="text" value="#ff5722" size="7">

					</div>
				</div>


				<div class="panel-group ">
					<label>Layout Box</label>
					<div class="group-boxed">
						<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
							<option value="full">Wide</option>
							<option value="boxed">Boxed</option>
							<option value="iframed">Iframed</option>
							<option value="rounded">Rounded</option>
						</select>
					</div>
				</div>

				<div class="panel-group">
					<label>Body Image</label>

					<div class="group-pattern">
						<div data-pattern="28"  class="img-pattern"><img src="img/theme/patterns/28.png" alt="pattern 28"></div>
						<div data-pattern="29"  class="img-pattern"><img src="img/theme/patterns/29.png" alt="pattern 29"></div>
						<div data-pattern="30"  class="img-pattern"><img src="img/theme/patterns/30.png" alt="pattern 30"></div>
						<div data-pattern="31"  class="img-pattern"><img src="img/theme/patterns/31.png" alt="pattern 31"></div>
						<div data-pattern="32"  class="img-pattern"><img src="img/theme/patterns/32.png" alt="pattern 32"></div>
						<div data-pattern="33"  class="img-pattern"><img src="img/theme/patterns/33.png" alt="pattern 33"></div>
						<div data-pattern="34"  class="img-pattern"><img src="img/theme/patterns/34.png" alt="pattern 34"></div>
						<div data-pattern="35"  class="img-pattern"><img src="img/theme/patterns/35.png" alt="pattern 35"></div>
						<div data-pattern="36"  class="img-pattern"><img src="img/theme/patterns/36.png" alt="pattern 36"></div>
						<div data-pattern="37"  class="img-pattern"><img src="img/theme/patterns/37.png" alt="pattern 37"></div>
						<div data-pattern="38"  class="img-pattern"><img src="img/theme/patterns/38.png" alt="pattern 38"></div>
						<div data-pattern="39"  class="img-pattern"><img src="img/theme/patterns/39.png" alt="pattern 39"></div>
						<div data-pattern="40"  class="img-pattern"><img src="img/theme/patterns/40.png" alt="pattern 40"></div>
						<div data-pattern="41"  class="img-pattern"><img src="img/theme/patterns/41.png" alt="pattern 41"></div>
						<div data-pattern="42"  class="img-pattern"><img src="img/theme/patterns/42.png" alt="pattern 42"></div>
						<div data-pattern="43"  class="img-pattern"><img src="img/theme/patterns/43.png" alt="pattern 43"></div>
						<div data-pattern="44"  class="img-pattern"><img src="img/theme/patterns/44.png" alt="pattern 44"></div>
						<div data-pattern="45"  class="img-pattern"><img src="img/theme/patterns/45.png" alt="pattern 45"></div>
					</div>
					<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
					<button type="button" style="width:100%" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-file-text"></i> Get Skin CSS</button>

				</div>

				<div class="reset-group">
					<input type="submit" name="submit-reset" class="btn btn-success " value="Reset" onClick="ResetAll();">
					<input type="submit" name="submitbtn" class="btn" value="Apply">
				</div>
			</form>
		</div>

	</div>

<!-- Begin Color Scheme
	============================================ -->
	<?php 
	require_once ('scssphp/scss.inc.php');
	use Leafo\ScssPhp\Compiler;
	use Leafo\ScssPhp\Server;
	$themeCssName='';	
	$ColorScheme = isset($_COOKIE['customColorScheme']) ? $_COOKIE['customColorScheme'] : '';
	
	if(!empty($ColorScheme)){

		$themeCssName = 'theme-'.str_replace("#","", $ColorScheme) . '.css';
		if(isset($_POST['submitbtn'])){
			$themeColor = strtolower($ColorScheme);
			$scss = new Compiler();
			$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
			$scss->addImportPath('sass');
			$scss->setVariables(array(
				'$linkColor' => $themeColor,
				'$dir' => 'ltr',
				));

			$string_css 	= $scss->compile('@import "home9.scss"');
			file_put_contents('css/'.$themeCssName, $string_css);
		}
	}

	if(isset($_POST['submit-reset'])){
		clear_css_cache('css');
		unset($_POST);
	}

	function clear_css_cache($type){
		$files = glob('css/theme-*.'.$type);
		if ($files) {
			foreach ($files as $file) {
				if (file_exists($file)) unlink($file);
			}
		}
	}
	?>
	<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
	<?php if(isset($ColorScheme)){?>
	<link rel='stylesheet' property='stylesheet'  href='css/<?php echo $themeCssName?>' type='text/css' media='all' />
	<?php }?>

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> <h4 class="modal-title" id="myLargeModalLabel">Skin CSS</h4> </div>
				<div class="modal-body"> 
					<textarea id="getCSSTextarea" class="get-css" readonly=""><?php $fileCssName = !empty($themeCssName) ?  $themeCssName : 'home9.css'; echo '/********************************************
						' ;
						echo '*	 Color Scheme: '.$fileCssName;
						echo '
						********************************************/
						' ;
						echo file_get_contents('css/'.$fileCssName);
						?>
					</textarea>
				</div> 


			</div>
		</div>
	</div>
<!-- End Color Scheme
	============================================ -->



<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>

<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/homepage.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>	
	<script type="text/javascript" src="js/themejs/pathLoader.js"></script>	
	<script type="text/javascript" src="js/themejs/cpanel.js"></script>
	<link href="js/minicolors/miniColors.css" rel="stylesheet">
	<script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
	
</body>
</html>