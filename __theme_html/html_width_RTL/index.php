
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
	<link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
	<link href="css/themecss/just_purchased_notification.css" rel=stylesheet>

	<link href="css/footer1.css" rel="stylesheet">
	<link href="css/header1.css" rel="stylesheet">
	<link id="color_scheme" href="css/theme.css" rel="stylesheet">
	<!-- <link href="css/responsive.css" rel="stylesheet"> -->
	
</head>

<body class="common-home res layout-home1">



	<div id="wrapper" class="wrapper-full banners-effect-7">

		

		<!-- Header Container  -->
		<header id="header" class=" variantleft type_1">
			<!-- Header Top -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="header-top-left form-inline col-sm-6 col-xs-6 compact-hidden">
							<div class="form-group currencies-block">
								<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
									<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
										<span class="icon icon-credit "></span> USD <span class="fa fa-angle-down"></span>
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
										<span class="fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu" >
										<li><a href="../index.php"><img class="image_flag" src="img/demo/flags/gb.png" alt="English" title="English"> English </a></li>
										<li> <a href="#"> <img class="image_flag" src="img/demo/flags/lb.png" alt="Arabic" title="Arabic"> Arabic </a> </li>
									</ul>
								</form>
							</div>
						</div>
						<div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 compact-hidden">
							<div class="tabBlock1" id="TabBlock-1">
								<ul class="top-link list-inline">
									<li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Welcome Customer!"><span>Welcome Customer!</span></a></li>
									<li class="signin"><a href="login.html" class="top-link-checkout" title="Sign In"><span>Sign In</span></a></li>
									<li class="register"><a href="register.html" title="Register"><span>Register</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->

			<!-- Header center -->
			<div class="header-center left">
				<div class="container">
					<div class="row">
						<!-- Logo -->
						<div class="navbar-logo col-md-3 col-sm-12 col-xs-7">
							<a href="index.php"><img src="img/demo/logo/logo.png" title="Your Store" alt="Your Store"></a>
						</div>
						<!-- //end Logo -->

						<!-- Search -->
						<div id="sosearchpro" class="col-xs-12 col-sm-8 col-md-5 search-pro">
							
							<form method="GET" action="index.html">
								<div id="search0" class="search input-group">
									<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search product..." name="search">
									<span class="input-group-btn">
										<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
									</span>
								</div>
								
							</form>

						</div>
						<!-- //end Search -->

						<!-- Secondary menu -->
						<div class="col-md-4 col-sm-4 col-xs-5 shopping_cart pull-right">
							<div class="header-text hidden-xs">
								<p><i class="fa fa-phone" aria-hidden="true"></i>	   Call Us: (888) 123456789</p>
							</div>
							<!--cart-->
							<div id="cart" class=" btn-group btn-shopping-cart">
								<a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
									<div class="shopcart">
										<span class="handle pull-left"></span>
										<span class="number-shopping-cart">2</span>
										<span class="title">My Cart</span>
										<p class="text-shopping-cart cart-total-full"> $0.00 </p>
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
						</div>
					</div>

				</div>
			</div>
			<!-- //Header center -->

			<!-- Header Bottom -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">


						<!-- Main menu -->
						<div class="megamenu-hori header-bottom-right  col-md-12 col-sm-12 col-xs-12 ">
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
															<a href="#" class="menu1">Home  </a>
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
																<span class="label"></span>

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

					</div>
				</div>

			</div>

			<!-- Navbar switcher -->
			<!-- //end Navbar switcher -->

		</header>
		<!-- //Header Container  -->

		<!-- Block Spotlight1  -->
		<section class="so-spotlight1 ">
			<div class="container">
				<div class="row">
					<div class="sidebar-menu col-md-3 col-sm-12 hidden-xs ">
						<div class="responsive so-megamenu ">
							<div class="so-vertical-menu no-gutter compact-hidden">
								<nav class="navbar-default">
									<div class="container-megamenu vertical open">
										<div id="menuHeading-1">
											<div class="megamenuToogle-wrapper">
												<div class="megamenuToogle-pattern">
													<div class="container">
														<div>
															<span></span>
															<span></span>
															<span></span>
														</div>
														All Categories							
														
													</div>
												</div>
											</div>
										</div>
										<div class="navbar-header">
											<button   id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">

											</button>
											
										</div>
										<div class="vertical-wrapper " style="display: block;">
											<span id="remove-verticalmenu" class="fa fa-times"></span>
											<div class="megamenu-pattern">
												<div class="container">
													<ul class="megamenu">
														<li class="item-vertical style1 with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Automotive &amp; Motocrycle</span>

															</a>
															<div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-lg-4 col-sm-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Apparel</a>
																								<ul>
																									<li><a href="#">Accessories for Tablet PC</a></li>
																									<li><a href="#">Accessories for i Pad</a></li>
																									<li><a href="#">Accessories for iPhone</a></li>
																									<li><a href="#">Bags, Holiday Supplies</a></li>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#">Car Audio &amp; Speakers</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Cables &amp; Connectors</a>
																								<ul>
																									<li><a href="#">Cameras &amp; Photo</a></li>
																									<li><a href="#">Electronics</a></li>
																									<li><a href="#">Outdoor &amp; Traveling</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-lg-4 col-sm-6  static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Camping &amp; Hiking</a>
																								<ul>
																									<li><a href="#">Earings</a></li>
																									<li><a href="#">Shaving &amp; Hair Removal</a></li>
																									<li><a href="#">Salon &amp; Spa Equipment</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#">Sports &amp; Outdoors</a></li>
																									<li><a href="#">Bath &amp; Body</a></li>
																									<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-lg-4 col-sm-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Bags, Holiday Supplies</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '18_46';">Battereries &amp; Chargers</a></li>
																									<li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
																									<li><a href="#" onclick="window.location = '18_45';">Headphones, Headsets</a></li>
																									<li><a href="#" onclick="window.location = '18_30';">Home Audio</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="item-vertical">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Electronic</span>

															</a>
														</li>
														<li class="item-vertical with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Health &amp; Beauty</span>

															</a>
															<div class="sub-menu" data-subwidth="100" style="width: 900px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="row">
																				<div class="col-lg-4 col-sm-6 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Car Alarms and Security</a>
																								<ul>
																									<li><a href="#">Car Audio &amp; Speakers</a></li>
																									<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																									<li><a href="#">Gadgets &amp; Auto Parts</a></li>
																									<li><a href="#">Headphones, Headsets</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="24" onclick="window.location = '24';" class="main-menu">Health &amp; Beauty</a>
																								<ul>
																									<li>
																										<a href="#">Home Audio</a>
																									</li>
																									<li>
																										<a href="#">Helicopters &amp; Parts</a>
																									</li>
																									<li>
																										<a href="#">Outdoor &amp; Traveling</a>
																									</li>
																									<li>
																										<a href="#">Toys &amp; Hobbies</a>
																									</li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-lg-4 col-sm-6  static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Electronics</a>
																								<ul>
																									<li>
																										<a href="#">Earings</a>
																									</li>
																									<li>
																										<a href="#">Salon &amp; Spa Equipment</a>
																									</li>
																									<li>
																										<a href="#">Shaving &amp; Hair Removal</a>
																									</li>
																									<li>
																										<a href="#">Smartphone &amp; Tablets</a>
																									</li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																								<ul>
																									<li>
																										<a href="#">Flashlights &amp; Lamps</a>
																									</li>
																									<li>
																										<a href="#">Fragrances</a>
																									</li>
																									<li>
																										<a href="#">Fishing</a>
																									</li>
																									<li>
																										<a href="#">FPV System &amp; Parts</a>
																									</li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-lg-4 col-sm-6  static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">More Car Accessories</a>
																								<ul>
																									<li>
																										<a href="#">Lighter &amp; Cigar Supplies</a>
																									</li>
																									<li>
																										<a href="#">Mp3 Players &amp; Accessories</a>
																									</li>
																									<li>
																										<a href="#">Men Watches</a>
																									</li>
																									<li>
																										<a href="#">Mobile Accessories</a>
																									</li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
																								<ul>
																									<li>
																										<a href="#">Gift &amp; Lifestyle Gadgets</a>
																									</li>
																									<li>
																										<a href="#">Gift for Man</a>
																									</li>
																									<li>
																										<a href="#">Gift for Woman</a>
																									</li>
																									<li>
																										<a href="#">Gift for Woman</a>
																									</li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="item-vertical css-menu with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																
																<span>Smartphone &amp; Tablets</span>

															</a>
															<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
																<div class="content" style="display: none;">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-sm-12 hover-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" class="main-menu">Headphones, Headsets</a>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Home Audio</a>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Health &amp; Beauty</a>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																							</li>
																							<li>
																								<a href="#" class="main-menu">Helicopters &amp; Parts</a>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="item-vertical">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Flashlights &amp; Lamps</span>
																
															</a>
														</li>
														<li class="item-vertical">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Camera &amp; Photo</span>
															</a>
														</li>
														<li class="item-vertical">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Smartphone &amp; Tablets</span>
															</a>
														</li>
														<li class="item-vertical" style="display: none;">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Outdoor &amp; Traveling Supplies</span>
															</a>
														</li>
														<li class="item-vertical" style="display: none;">
															<p class="close-menu"></p>
															
															<a href="#" class="clearfix">
																
																<span>Health &amp; Beauty</span>
															</a>
														</li>
														<li class="item-vertical" style="display: none;">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Toys &amp; Hobbies </span>
															</a>
														</li>
														<li class="item-vertical" style="display: none;">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Jewelry &amp; Watches</span>
															</a>
														</li>
														<li class="item-vertical" style="display: none;">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																
																<span>Bags, Holiday Supplies</span>
															</a>
														</li>
														<li class="item-vertical" style="display: none;">
															<p class="close-menu"></p>
															
															<a href="#" class="clearfix">

																<span>More Car Accessories</span>
															</a>
														</li>
														<li class="loadmore">
															<i class="fa fa-plus-square-o"></i>
															<span class="more-view">More Categories</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>

					</div>
					<div id="yt_header_right" class="col-sm-12 col-md-9 col-lg-9 ">
						<div class="slider-container "> 
							<div class="owl-carousel owl-slider-1 owl" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="1" data-items_md="1" data-margin="0" >
								<div class="img-slider">
									<a href="#"><img src="img/demo/slider/slider-1.jpg" alt=""></a>
								</div>
								<div class="img-slider">
									<a href="#"><img src="img/demo/slider/slider-2.jpg" alt=""></a>
								</div>
								<div class="img-slider">
									<a href="#"><img src="img/demo/slider/slider-3.jpg" alt=""></a>
								</div>
							</div>

							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 four-block">
						<div class="modcontent clearfix">
							<div class="policy-detail">
								<div class="banner-policy">
									<div class="policy policy1">
										<a href="#"> 
											<span class="ico-policy"></span> 
											<div class="service-info">
												<span class="title">Free Shipping & Return</span> <br> <span>Free shipping on orders over $49</span> 
											</div>
										</a>
									</div>
									<div class="policy policy2">
										<a href="#">
											<span class="ico-policy"></span>
											<div class="service-info">
												<span class="title">Money Guarantee</span> <br><span>30 days money back guarantee</span>
											</div>
										</a>
									</div>
									<div class="policy policy3">
										<a href="#"> 
											<span class="ico-policy"></span> 
											<div class="service-info">
												<span class="title">Online Support</span> <br><span>We support online 24/24 on day</span> 
											</div>
										</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>  
			</section>
			<!-- //Block Spotlight1  -->

			<!-- Main Container  -->
			<div class="main-container container">

				<div class="row">
					<div id="content" class="col-xs-12 col-sm-12">

						<div class="module tab-slider titleLine">
							<h3 class="modtitle">Deals Of The Week</h3>
							<hr>
							<hr>
							<hr>

							<div class="owl-carousel owl-dead-week" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="2" data-items_md="2" data-margin="15" >
								<div class="product-layout ">
									<div class="product-item-container">
										<div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-1.jpg" alt=""></a>
												<!--Sale Label-->
												<span class="sale">-20%</span>

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="time-offer-end">
												<div class="title">Hurry Up! Offer ends in:</div>

												<div class="time-box">

												</div>
											</div>
											<div class="caption">
												<h4><a href="product.html">Dummy product #1</a></h4>	
												<div class="description item-desc">
													<p>Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
												</div>
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span>
													<span class="price-old">$122.00</span>		   
												</div>

											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>

								<div class="product-layout ">
									<div class="product-item-container ">
										<div class=" left-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-2.jpg" alt=""></a>
												<!--Sale Label-->
												<span class="sale">-15%</span>

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="time-offer-end">
												<div class="title">Hurry Up! Offer ends in:</div>

												<div class="time-box time-box-2">

												</div>
											</div>
											<div class="caption">
												<h4><a href="product.html">Dummy product #2</a></h4>	
												<div class="description item-desc">
													<p>Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat . </p>
												</div>
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$87.00</span>
													<span class="price-old">$122.00</span>		   
												</div>

											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>

								<div class="product-layout ">
									<div class="product-item-container ">
										<div class=" left-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-3.jpg" alt=""></a>
												<!--Sale Label-->
												<span class="sale">-25%</span>

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="time-offer-end">
												<div class="title">Hurry Up! Offer ends in:</div>

												<div class="time-box">
													<div class="day-time time">
														<div class="num-day num-time">356</div>
														<div class="name-day name-time">Days</div>
													</div>
													<div class="hour-time time">
														<div class="num-hour num-time">23</div>
														<div class="name-hour name-time">Hours</div>
													</div>
													<div class="min-time time">
														<div class="num-min num-time">56</div>
														<div class="name-min name-time">Mins</div>
													</div>
													<div class="sec-time time">
														<div class="num-sec num-time">33</div>
														<div class="name-sec name-time">Secs</div>
													</div>
												</div>
											</div>
											<div class="caption">
												<h4><a href="product.html">Dummy product #01</a></h4>	
												<div class="description item-desc">
													<p>Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
												</div>
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$68.00</span>
													<span class="price-old">$122.00</span>		   
												</div>

											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="module col-sm-12 hidden-xs">
						<div class="modcontent clearfix">
							<div class="banner-wraps ">
								<div class="m-banner ">
									<div class="banners htmlconten1 row">
										<div class="banners banner1-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner1-1.jpg" alt="banner1"></a>
											</div>
										</div>
										<div class=" banners banner1-2 col-sm-6 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner1-2.jpg" alt="banner1"></a>
											</div>
										</div>
									</div>
									<div class="htmlconten2 row">
										<div class="banners banner2-1 col-sm-3 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner2-1.jpg" alt="banner1"></a>
											</div>
										</div>
										<div class="banners banner2-2 col-sm-6 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner2-2.jpg" alt="banner1"></a>
											</div>
										</div>
										<div class="banners banner2-3 col-sm-3 col-xs-12">
											<div>
												<a href="#"><img src="img/demo/banner/banner2-3.jpg" alt="banner1"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="smartphone-tablet col-sm-12">
						<h3 class="modtitle">Smartphone & Tablet  </h3>
						<hr>
						<hr>
						<hr>
						<div class="smartphone-tablet-owl">
							<div class=" owl-carousel related-owl " data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="3" data-items_md="5" data-margin="10" >
								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-1.jpg" alt=""></a>
												<!--Sale Label-->
												<span class="new">New</span>

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #02</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span>
													<span class="price-old">$122.00</span>		   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>


								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-3.jpg" alt=""></a>
												<!--Sale Label-->
												<span class="new">New</span>

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #03</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span> 	
													<span class="price-old">$122.00</span>   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>


								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-2.jpg" alt=""></a>
												<!--Sale Label-->
												<span class="new">New</span>

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #04</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span> 
													<span class="price-old">$122.00</span>
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>


								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-5.jpg" alt=""></a>
												<!--Sale Label-->

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #05</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span> 
													<span class="price-old">$122.00</span>	   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>

								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-4.jpg" alt=""></a>
												<!--Sale Label-->

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #06</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span> 
													<span class="price-old">$122.00</span>	   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>


								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-7.jpg" alt=""></a>
												<!--Sale Label-->

												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #07</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span> 
													<span class="price-old">$122.00</span>	   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>


								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-6.jpg" alt=""></a>
												<!--Sale Label-->

												<span class="sale">-25%</span>
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #08</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span> 
													<span class="price-old">$122.00</span>   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>


								<div class="product-layout">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container  second_img ">
												<a href="product.html" class="product-img"><img src="img/demo/shop/product/product-6.jpg" alt=""></a>
												<!--Sale Label-->

												<span class="sale">-25%</span>
												<div class="hover">
													<ul>
														<li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
														<li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
														<li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="right-block">
											<div class="caption">
												<h4><a href="product.html">Dummy product #09</a></h4>		
												<div class="ratings">
													<div class="rating-box">
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class=""><i class="fa fa-star "></i></span>
														<span class="gray"><i class="fa fa-star "></i></span>
													</div>
												</div>

												<div class="price">
													<span class="price-new">$74.00</span> 
													<span class="price-old">$122.00</span>   
												</div>
												<div class="description item-desc hidden">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
												</div>
											</div>

											<div class="button-group">
												<button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
											</div>
										</div><!-- right block -->
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="module no-margin titleLine col-sm-12 latest-blog">
						<h3 class="modtitle">Latest Blog</h3>
						<hr><hr><hr>
						<div class="latest-blog-owl">
							<div class="owl-carousel latest-owl" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="3" data-items_md="4" data-margin="10" >
								<div class="itemBlogImg">
									<div class="article-image ">
										<div>
											<div class="day">
												<p>24</p>
												<p>Dec</p>
											</div>

											<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-1.jpg" alt="Kire tuma demonstraverunt lector">
												<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
											</div>
										</div>
									</div>
									<div class="itemBlogImg">
										<div class="article-image ">
											<div>
												<div class="day">
													<p>24</p>
													<p>Dec</p>
												</div>

												<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-2.jpg" alt="Kire tuma demonstraverunt lector">
													<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
												</div>
											</div>
										</div>
										<div class="itemBlogImg">
											<div class="article-image ">
												<div>
													<div class="day">
														<p>24</p>
														<p>Dec</p>
													</div>

													<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-3.jpg" alt="Kire tuma demonstraverunt lector">
														<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
													</div>
												</div>
											</div>
											<div class="itemBlogImg">
												<div class="article-image ">
													<div>
														<div class="day">
															<p>24</p>
															<p>Dec</p>
														</div>

														<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-4.jpg" alt="Kire tuma demonstraverunt lector">
															<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
														</div>
													</div>
												</div>
												<div class="itemBlogImg">
													<div class="article-image ">
														<div>
															<div class="day">
																<p>24</p>
																<p>Dec</p>
															</div>

															<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-5.jpg" alt="Kire tuma demonstraverunt lector">
																<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
															</div>
														</div>
													</div>
													<div class="itemBlogImg">
														<div class="article-image ">
															<div>
																<div class="day">
																	<p>24</p>
																	<p>Dec</p>
																</div>

																<a class="popup-gallery" href="blog-detail.html"><img src="img/demo/blog/blog-6.jpg" alt="Kire tuma demonstraverunt lector">
																	<p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- //Main Container -->
								<!-- Block Spotlight3  -->
								<section class="so-spotlight3">
									<div class="container">
										<div class="row">
											<div id="so_categories_173761471880018" class="so-categories module titleLine preset01-4 preset02-3 preset03-3 preset04-1 preset05-1">
												<div class="wrap-categories">
													<div class="col-xs-12 col-sm-6  col-md-3 col-lg-3 new-arrivals ">
														<div class="module latest-product titleLine">
															<h3 class="modtitle">New Arrivals</h3>
															<hr>
															<hr>
															<hr>
															<div class="modcontent owl-carousel owl-new-arrivals " data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="1" data-items_md="1" data-margin="10">
																<div class="product-latest-item">
																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Sunt Molup</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$100.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Et Spare</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$36.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-4.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Cisi Chicken</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star"></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$71.00</span>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
																<div class="product-latest-item">
																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-5.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Sunt Molup</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$126.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-6.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Et Spare</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$65.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-7.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Cisi Chicken</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star"></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$68.00</span>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
																<div class="product-latest-item">
																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-8.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Sunt Molup</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$130.00</span>
																					<span class="price-old">$165.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Et Spare</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star "></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$69.00</span>
																					<span class="price-old">$89.00</span>
																				</div>
																			</div>

																		</div>
																	</div>

																	<div class="media">
																		<div class="media-left">
																			<a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																		</div>
																		<div class="media-body">
																			<div class="caption">
																				<h4><a href="product.html">Cisi Chicken</a></h4>


																				<div class="ratings">
																					<div class="rating-box">
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class=""><i class="fa fa-star "></i></span>
																						<span class="gray"><i class="fa fa-star"></i></span>
																					</div>
																				</div>
																				<div class="price">
																					<span class="price-new">$96.00</span>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 bestsellers">
														<div class="module latest-product titleLine">
															<h3 class="modtitle">Bestsellers</h3>
															<hr>
															<hr>
															<hr>
															<div class="modcontent">
																<div class="owl-carousel owl-bestsellers" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$98.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$165.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$59.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$98.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$165.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$59.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																</div>
																
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 featured">
														<div class="module latest-product titleLine">
															<h3 class="modtitle">Featured</h3>
															<hr>
															<hr>
															<hr>
															<div class="modcontent">
																<div class="owl-carousel owl-featured" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$78.00</span>
																						<span class="price-old">$105.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-4.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$145.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-5.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$72.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$78.00</span>
																						<span class="price-old">$105.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-4.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$145.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-5.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$72.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																</div>
																
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 hot-sale">
														<div class="module latest-product titleLine">
															<h3 class="modtitle">Hot Sale</h3>
															<hr>
															<hr>
															<hr>
															<div class="modcontent">
																<div class="owl-carousel owl-hot-sale" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-6.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$132.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-7.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$87.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-8.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$63.00</span>
																						<span class="price-old">$84.00</span>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																	<div class="product-latest-item">
																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-6.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Sunt Molup</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$132.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-7.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Et Spare</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star "></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$87.00</span>
																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="media">
																			<div class="media-left">
																				<a href="product.html"><img src="img/demo/shop/product/product-8.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
																			</div>
																			<div class="media-body">
																				<div class="caption">
																					<h4><a href="product.html">Cisi Chicken</a></h4>


																					<div class="ratings">
																						<div class="rating-box">
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class=""><i class="fa fa-star "></i></span>
																							<span class="gray"><i class="fa fa-star"></i></span>
																						</div>
																					</div>
																					<div class="price">
																						<span class="price-new">$63.00</span>
																						<span class="price-old">$84.00</span>
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

												<div id="container-module-newletter" class="hidden-md hidden-sm hidden-xs">
													<div class="so_newletter_custom_popup_bg popup_bg"></div> 
													<div class="module main-newsleter-popup so_newletter_custom_popup so_newletter_oca_popup" id="so_newletter_custom_popup"> <div class="so-custom-popup so-custom-oca-popup" style="width: 850px; background: url('img/demo/cms/newletter-bg.jpg') no-repeat white;  "> 
														<div class="modcontent"> 
															<div class="oca_popup" id="test-popup"> <div class="popup-content"> <p class="newsletter_promo">Daily Promotion</p> 
																<div class="popup-title">SIGN UP FOR NEWSLETTER					</div>
																<form method="post" name="signup" class="form-group signup"> 
																	<div class="input-control"> <div class="email"> <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail"> </div> <button class="btn btn-default" type="submit" onclick="return subscribe_newsletter();" name="submit">Subscribe	</button> </div> 
																</form> 
																<label class="hidden-popup"> <input type="checkbox" value="1" name="hidden-popup"> <span class="inline">&nbsp;&nbsp;Don't show this popup again</span> </label> </div> 
															</div> 
														</div> <!--/.modcontent--> 
														<button title="Close"   class="popup-close">×</button> </div> 
													</div> 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="brands">
													<h3>Fetured brands</h3>
													<hr><hr><hr>
													<div class="owl-carousel owl-fetured-brand" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="2" data-items_sm="4" data-items_md="6" data-margin="10" >
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-1.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-2.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-3.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-4.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-5.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-6.jpg" alt=""></a>
														</div>
														<div class="img-brand">
															<a href="#"><img src="img/demo/brands/brand-1.jpg" alt=""></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<!-- //Block Spotlight3  -->
								<script type="text/javascript"><!--
									var $typeheader = 'header-home1';
	//-->
</script>

<!-- Footer Container -->
<footer class="footer-container type_footer1">
	<!-- Footer Top Container -->
	<section class="footer-top">
		<div class="container content">
			<div class="">
				<div class=" collapsed-block ">
					<div class="module clearfix">
						<h3 class="modtitle">Contact Us	</h3>
						<div class="modcontent">
							<ul class="contact-address">
								<li><p><span class="fa fa-map-marker"></span><span>Address : </span> My Company, 42 avenue des Champs Elysées</p></li>
								<li><span class="fa fa-envelope-o"></span><span>Email : </span> <a href="#"> sales@yourcompany.com</a></li>
								<li><p><span class="fa fa-phone"> </span><span>Phone :</span> 0123456789</p> </li>
							</ul>
						</div>
						<div class="share-icon">
							<ul>
								<li class="facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="skype"><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class=" box-information">
					<div class="module clearfix">
						<h3 class="modtitle">Information</h3>
						<div class="modcontent">
							<ul class="menu">
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="order-history.html">Order history</a></li>
								<li><a href="order-information.html">Order information</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class=" box-extras">
					<div class="module clearfix">
						<h3 class="modtitle">Extras</h3>
						<div class="modcontent">
							<ul class="menu">
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="return.html">Returns</a></li>
								<li><a href="sitemap.html">Site Map</a></li>
								<li><a href="my-account.html">My Account</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="box-account">
					<div class="module clearfix">
						<h3 class="modtitle">My Account</h3>
						<div class="modcontent">
							<ul class="menu">
								<li><a href="#">Brands</a></li>
								<li><a href="gift-voucher.html">Gift Vouchers</a></li>
								<li><a href="#">Affiliates</a></li>
								<li><a href="#">Specials</a></li>
								<li><a href="#" target="_blank">Our Blog</a></li>
							</ul>
						</div>
					</div>
				</div>



			</div>
		</div>
	</section>
	<!-- /Footer Top Container -->
	<div class="footer-mid">
		<div class=" help">
			<div class=" container">
				<div class=" row">
					<div class="footer-mid-left col-sm-6 col-xs-12">
						<h3>NEED HELP? </h3>
						<p>SUPPORT TEAM 24/7 AT (844) 555-8386</p>
					</div>
					<div class="footer-mid-right col-sm-6 col-xs-12">
						<div class="btn-sub">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Your Email Address..." name="subscribe">
							<button type="submit" class="button-search btn btn-primary" name="submit_subscribe">Subscribe</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- //end Footer Container -->


<!-- Social widgets -->
<div class="footer-bottom-block ">
	<div class=" container">
		<div class="row">
			<div class="footer-bottom-header">
				<div class="col-xs-12 col-sm-12 col-md-5 download">
					<h3>Download Our App</h3>
					<a href="#"><img src="img/demo/download/app.jpg" alt=""></a>
					<a href="#"><img src="img/demo/download/ggplay.jpg" alt=""></a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 pay">
					<ul>
						<li><img src="img/demo/payment/visa.jpg" alt=""></li>
						<li><img src="img/demo/payment/meastro.jpg" alt=""></li>
						<li><img src="img/demo/payment/paypal.jpg" alt=""></li>
						<li><img src="img/demo/payment/union.jpg" alt=""></li>
						<li><img src="img/demo/payment/cirrus.jpg" alt=""></li>
						<li><img src="img/demo/payment/ebay.jpg" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="text-footer-bot">
				<p>Destino - Premium Multipurpose HTML5/CSS3 Theme - Designed by <a href="#">SmartAddons.Com</a></p>
			</div>
			<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
		</div>
	</div>
</div>	<!-- End Social widgets -->



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
					<input name="cplthemesColors" class="minicolors minicolors-input form-control" type="text" value="#0083c1" size="7">
					
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
			
			$string_css 	= $scss->compile('@import "theme.scss"');
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
					<textarea id="getCSSTextarea" class="get-css" readonly=""><?php $fileCssName = !empty($themeCssName) ?  $themeCssName : 'theme.css'; echo '/********************************************
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