﻿
    <!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template">
        <title><?=$title ?>- My Webpage</title>
        <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
        <meta name="author" content="itembridge.com">
        <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- Font -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic'>

        <?php  foreach($css as $cssfile){   ?>
            <link rel="stylesheet" type="text/css" href="<?=$cssfile?>">
        <?php } ?>


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <link rel='stylesheet' href="css/ie/ie8.css">
        <![endif]-->


    </head>

    <!-- EMPIEZA CONTENIDO  BODY/ HEADER -->
    <body class="fixed-header fixed-top">
    <div class="page-box">
        <div class="page-box-content">

    <div id="top-box">
    <div class="top-box-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-9 col-sm-5">
                    <div class="btn-group language btn-select">
                        <a class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#">
                            <span class="hidden-xs">Language</span><span class="visible-xs">Lang</span><!--
			  -->: English
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img src="img/eng-flag.png" alt="">English</a></li>
                            <li><a href="#"><img src="img/fra-flag.png" alt="">France</a></li>
                            <li><a href="#"><img src="img/ger-flag.png" alt="">Germany</a></li>
                        </ul>
                    </div>
                    <div class="btn-group currency btn-select">
                        <a class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#">
                            <span class="hidden-xs">Currency</span><span class="visible-xs">Curr</span><!--
			  -->: USD
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">GBP</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-3 col-sm-7">
                    <div class="navbar navbar-inverse top-navbar top-navbar-right" role="navigation">
                        <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".top-navbar .navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <nav class="collapse collapsing navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="shop-account.html">My Account</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> My Wishlist</a></li>
                                <li><a href="#">My Cart <span class="count">2</span></a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="shop-login.html">Log in <i class="fa fa-lock after"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- #top-box -->

<header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/logo.svg" class="logo-img" alt="">
                        </a>
                    </div>
                </div><!-- .logo-box -->

                <div class="col-xs-6 col-md-10 col-lg-9 right-box">
                    <div class="right-box-wrapper">
                        <div class="header-icons">
                            <div class="search-header hidden-600">
                                <a href="#">
                                    <svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
					<path d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
					s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
					s4,1.794,4,4S8.206,10,6,10z"></path>
                                        <image src="img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
				  </svg>
                                </a>
                            </div><!-- .search-header

			  --><div class="phone-header hidden-600">
                                <a href="#">
                                    <svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
					<path d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
					c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
					M11.001,12H5V2h6V12z"></path>
                                        <image src="img/png-icons/phone-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
				  </svg>
                                </a>
                            </div><!-- .phone-header

			  --><div class="btn-group cart-header">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="icon">
                                        <svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
					  <g>
                          <path d="M15.001,4h-0.57l-3.707-3.707c-0.391-0.391-1.023-0.391-1.414,0c-0.391,0.391-0.391,1.023,0,1.414L11.603,4
						H4.43l2.293-2.293c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L1.602,4H1C0.448,4,0,4.448,0,5s0.448,1,1,1
						c0,2.69,0,7.23,0,8c0,1.104,0.896,2,2,2h10c1.104,0,2-0.896,2-2c0-0.77,0-5.31,0-8c0.553,0,1-0.448,1-1S15.554,4,15.001,4z
						M13.001,14H3V6h10V14z"></path>
                          <path d="M11.001,13c0.553,0,1-0.447,1-1V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v4C10.001,12.553,10.448,13,11.001,13z"></path>
                          <path d="M8,13c0.553,0,1-0.447,1-1V8c0-0.553-0.448-1-1-1S7,7.447,7,8v4C7,12.553,7.448,13,8,13z"></path>
                          <path d="M5,13c0.553,0,1-0.447,1-1V8c0-0.553-0.447-1-1-1S4,7.447,4,8v4C4,12.553,4.448,13,5,13z"></path>
                      </g>
					</svg>
                                    </div>
                                    Cart <span class="count">$94</span>
                                </a>
                                <div class="dropdown-menu">
                                    <strong>Recently added item(s)</strong>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="shop-product-view.html" class="product-image"><img class="replace-2x" src="content/img/product-1.jpg" width="70" height="70" alt=""></a>
                                            <a href="#" class="product-remove">
                                                <svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
						  <g>
                              <path d="M6,13c0.553,0,1-0.447,1-1V7c0-0.553-0.447-1-1-1S5,6.447,5,7v5C5,12.553,5.447,13,6,13z"></path>
                              <path d="M10,13c0.553,0,1-0.447,1-1V7c0-0.553-0.447-1-1-1S9,6.447,9,7v5C9,12.553,9.447,13,10,13z"></path>
                              <path d="M14,3h-1V1c0-0.552-0.447-1-1-1H4C3.448,0,3,0.448,3,1v2H2C1.447,3,1,3.447,1,4s0.447,1,1,1
							c0,0.273,0,8.727,0,9c0,1.104,0.896,2,2,2h8c1.104,0,2-0.896,2-2c0-0.273,0-8.727,0-9c0.553,0,1-0.447,1-1S14.553,3,14,3z M5,2h6v1
							H5V2z M12,14H4V5h8V14z"></path>
                          </g>
						</svg>
                                            </a><!-- .product-remove -->
                                            <h4 class="product-name"><a href="shop-product-view.html" title="">New Apple iPad mini Wi-Fi + with special offer</a></h4>
                                            <div class="product-price">1 x <span class="price">$1199.00</span></div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <a href="shop-product-view.html" class="product-image"><img class="replace-2x" src="content/img/product-2.jpg" width="70" height="70" alt=""></a>
                                            <a href="#" class="product-remove">
                                                <svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
						  <g>
                              <path d="M6,13c0.553,0,1-0.447,1-1V7c0-0.553-0.447-1-1-1S5,6.447,5,7v5C5,12.553,5.447,13,6,13z"></path>
                              <path d="M10,13c0.553,0,1-0.447,1-1V7c0-0.553-0.447-1-1-1S9,6.447,9,7v5C9,12.553,9.447,13,10,13z"></path>
                              <path d="M14,3h-1V1c0-0.552-0.447-1-1-1H4C3.448,0,3,0.448,3,1v2H2C1.447,3,1,3.447,1,4s0.447,1,1,1
							c0,0.273,0,8.727,0,9c0,1.104,0.896,2,2,2h8c1.104,0,2-0.896,2-2c0-0.273,0-8.727,0-9c0.553,0,1-0.447,1-1S14.553,3,14,3z M5,2h6v1
							H5V2z M12,14H4V5h8V14z"></path>
                          </g>
						</svg>
                                            </a><!-- .product-remove -->
                                            <h4 class="product-name"><a href="shop-product-view.html" title="">New Apple iPad mini Wi-Fi + with special offer</a></h4>
                                            <div class="product-price">1 x <span class="price">$1199.00</span></div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                    <div class="cart-button">
                                        <button class="btn btn-default">View Cart</button>
                                        <button class="btn checkout btn-default">Checkout</button>
                                    </div>
                                </div>
                            </div><!-- .cart-header -->
                        </div><!-- .header-icons -->

                        <div class="primary">
                            <div class="navbar navbar-default" role="navigation">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                                    <span class="text">Menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <nav class="collapse collapsing navbar-collapse">
                                    <ul class="nav navbar-nav navbar-center">
                                        <li class="parent">
                                            <a href="index.html">Home<span class="item-new">New</span></a>
                                            <ul class="sub">
                                                <li><a href="index.html">Creative</a></li>
                                                <li><a href="home-2.html">Paralax</a></li>
                                                <li><a href="home-3.html">Simple (Boxed)</a></li>
                                                <li><a href="home-4.html">Business</a></li>
                                                <li><a href="home-5.html">Animation</a></li>
                                                <li class="parent">
                                                    <a href="shop.html">Shop</a>
                                                    <ul class="sub">
                                                        <li><a href="shop.html">Shop 1</a></li>
                                                        <li><a href="shop-2.html">Shop 2</a></li>
                                                        <li><a href="shop-3.html">Shop 3</a></li>
                                                        <li><a href="shop-4.html">Shop 4</a></li>
                                                        <li><a href="shop-5.html">Shop 5</a></li>
                                                        <li><a href="shop-6.html">Shop 6</a></li>
                                                        <li><a href="shop-7.html">Shop 7</a></li>
                                                        <li><a href="shop-8.html">Shop 8</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index-one-page.html">One Page Site</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent">
                                            <a href="#">Pages<span class="item-new">New</span></a>
                                            <ul class="sub">
                                                <li class="parent">
                                                    <a href="#">Headers<span class="item-new">New</span></a>
                                                    <ul class="sub">
                                                        <li><a href="header1.html">Simple Header</a></li>
                                                        <li><a href="header2.html">Fixed Header</a></li>
                                                        <li><a href="header3.html">Shop Header with User Menu</a></li>
                                                        <li><a href="header4.html">Shop Header with Social Icons</a></li>
                                                        <li><a href="header5.html">Shop Header with Search Bar</a></li>
                                                        <li><a href="header6.html">Shop Header with Contacts</a></li>
                                                        <li><a href="header7.html">Header with Hidden User Menu</a></li>
                                                        <li><a href="header8.html">Fixed Header with Hidden User Menu</a></li>
                                                        <li><a href="header9.html">Fixed Shop Header with User Menu</a></li>
                                                        <li><a href="header10.html">Extended Header</a></li>
                                                        <li><a href="header11.html">Extended Header with User Menu</a></li>
                                                        <li><a href="header12.html">Header with collapsed menu</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="sidebar-blocks.html">All sidebar blocks</a></li>
                                                <li><a href="full-width.html">Full Width</a></li>
                                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                                <li class="parent">
                                                    <a href="about-us.html">About Us</a>
                                                    <ul class="sub">
                                                        <li><a href="about-us.html">About Us (1)</a></li>
                                                        <li><a href="about-us-2.html">About Us (2)</a></li>
                                                        <li><a href="about-us-3.html">About Us (3)</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="clients.html">Clients</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-view.html">Blog Post View</a></li>
                                                <li><a href="search-results.html">Search Results</a></li>
                                                <li class="parent">
                                                    <a href="404.html">Page 404</a>
                                                    <ul class="sub">
                                                        <li><a href="404.html">Page 404 (1)</a></li>
                                                        <li><a href="404-2.html">Page 404 (2)</a></li>
                                                        <li><a href="404-3.html">Page 404 (3)</a></li>
                                                    </ul>
                                                </li>
                                                <li class="parent">
                                                    <a href="#">Portfolio</a>
                                                    <ul class="sub">
                                                        <li><a href="portfolio-1.html">Portfolio (1 column)</a></li>
                                                        <li><a href="portfolio-2.html">Portfolio (2 column)</a></li>
                                                        <li><a href="portfolio-3.html">Portfolio (3 column)</a></li>
                                                        <li><a href="portfolio-4.html">Portfolio (4 column)</a></li>
                                                        <li><a href="portfolio-slider.html">Portfolio (Slider)</a></li>
                                                        <li><a href="portfolio-single.html">Single Project</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="gallery-modern.html">Modern Gallery</a></li>
                                                <li class="parent">
                                                    <a href="#">Gallery</a>
                                                    <ul class="sub">
                                                        <li><a href="gallery-1.html">Gallery (1 column)</a></li>
                                                        <li><a href="gallery-2.html">Gallery (2 column)</a></li>
                                                        <li><a href="gallery-3.html">Gallery (3 column)</a></li>
                                                        <li><a href="gallery-4.html">Gallery (4 column)</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="careers.html">Careers</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="under-construction.html">Under Construction</a></li>
                                                <li><a href="sitemap.html">Sitemap</a></li>
                                                <li><a href="login-2.html">Login / Register</a></li>
                                                <li class="parent">
                                                    <a href="#">Newsletter</a>
                                                    <ul class="sub">
                                                        <li><a href="newsletter-big-intro.html">Newsletter Big Intro</a></li>
                                                        <li><a href="newsletter-big-portfolio.html">Newsletter Big Portfolio</a></li>
                                                        <li><a href="newsletter-columns.html">Newsletter Columns</a></li>
                                                        <li><a href="newsletter-info.html">Newsletter Info</a></li>
                                                        <li><a href="newsletter-plan.html">Newsletter Plan</a></li>
                                                        <li><a href="newsletter-portfolio.html">Newsletter Portfolio</a></li>
                                                        <li><a href="newsletter-product-list.html">Newsletter Product List</a></li>
                                                        <li><a href="newsletter-story.html">Newsletter Story</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent">
                                            <a href="shop.html">Shop</a>
                                            <ul class="sub">
                                                <li class="parent">
                                                    <a href="shop-catalog-grid.html">Catalog (Grid)</a>
                                                    <ul class="sub">
                                                        <li><a href="shop-catalog-grid-left.html">Catalog (Left Sidebar)</a></li>
                                                        <li><a href="shop-catalog-grid-right.html">Catalog (Right Sidebar)</a></li>
                                                        <li><a href="shop-catalog-grid-3.html">Catalog (3 columns)</a></li>
                                                        <li><a href="shop-catalog-grid.html">Catalog (4 columns)</a></li>
                                                        <li><a href="shop-catalog-grid-5.html">Catalog (5 columns)</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-catalog-list.html">Catalog (List)</a></li>
                                                <li class="parent">
                                                    <a href="shop-product-view.html">Product View</a>
                                                    <ul class="sub">
                                                        <li><a href="shop-product-view.html">Product View</a></li>
                                                        <li><a href="shop-product-view-variants.html">Product View (Variants)</a></li>
                                                        <li><a href="shop-product-view-sidebar-left.html">Product View (Left Sidebar)</a></li>
                                                        <li><a href="shop-product-view-sidebar.html">Product View (Right Sidebar)</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-cart.html">Shopping Cart</a></li>
                                                <li><a href="shop-checkout.html">Proceed to Checkout</a></li>
                                                <li><a href="shop-confirmation.html">Confirmation Page</a></li>
                                                <li><a href="shop-compare.html">Compare Products</a></li>
                                                <li class="parent">
                                                    <a href="shop-account.html">My Account</a>
                                                    <ul class="sub">
                                                        <li><a href="shop-account.html">My Dashboard</a></li>
                                                        <li><a href="shop-account-information.html">Account Information</a></li>
                                                        <li><a href="shop-account-address.html">Address Book</a></li>
                                                        <li><a href="shop-account-orders.html">My Orders</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-login.html">Login / Register</a></li>
                                                <li><a href="shop-forgot.html">Password Recovery</a></li>
                                            </ul>
                                        </li>
                                        <li class="parent megamenu promo">
                                            <a href="#">Mega Menu<span class="item-new">New</span></a>
                                            <ul class="sub">
                                                <li class="sub-wrapper">
                                                    <div class="sub-list">
                                                        <div class="box closed">
                                                            <h6 class="title">Savant Apple Integration</h6>
                                                            <ul>
                                                                <li><a href="#">iPad, iPod touch, iPhone &amp; Mac Control</a></li>
                                                                <li><a href="#">iPod touch Remote Control</a></li>
                                                                <li><a href="#">Savant Host (Mac Mini)<span class="item-new bg-warning">Wow</span></a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Audio/Video Control</h6>
                                                            <ul>
                                                                <li><a href="#">Distributed Audio &amp; Video</a></li>
                                                                <li><a href="#">Matrix Switchers</a></li>
                                                                <li><a href="#">Audio/Video Processing</a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Display Solutions</h6>
                                                            <ul>
                                                                <li><a href="#">Video Tiling<span class="item-new">New</span></a></li>
                                                                <li><a href="#">On-Screen Display</a></li>
                                                                <li><a href="#">Digital Messaging</a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Sound</h6>
                                                            <ul>
                                                                <li><a href="#">Distributed Audio Controller</a></li>
                                                                <li><a href="#">Multi-channel Amplifiers<span class="item-new">New</span></a></li>
                                                                <li><a href="#">Architectural Speakers</a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Display Solutions</h6>
                                                            <ul>
                                                                <li><a href="#">Video Tiling<span class="item-new bg-success">Coming Soon</span></a></li>
                                                                <li><a href="#">On-Screen Display</a></li>
                                                                <li><a href="#">Digital Messaging</a></li>
                                                            </ul>
                                                        </div><!-- .box -->

                                                        <div class="box closed">
                                                            <h6 class="title">Savant Sound</h6>
                                                            <ul>
                                                                <li><a href="#">Distributed Audio Controller</a></li>
                                                                <li><a href="#">Multi-channel Amplifiers</a></li>
                                                                <li><a href="#">Architectural Speakers<span class="item-new">New</span></a></li>
                                                            </ul>
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->

                                                    <div class="promo-block text-right">
                                                        <a href="#">
                                                            <img class="replace-2x" src="content/img/megamenu-big.jpg" width="253" height="457" alt="">
                                                        </a>
                                                    </div><!-- .promo-block -->
                                                </li>
                                            </ul><!-- .sub -->
                                        </li>
                                        <li class="parent megamenu promo">
                                            <a href="#">Elements</a>
                                            <ul class="sub">
                                                <li class="sub-wrapper">
                                                    <div class="sub-list">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="elements-accordions.html"><i class="fa fa-plus-square"></i> Accordions &amp; Toggles</a></li>
                                                                <li><a href="elements-animations.html"><i class="fa fa-money"></i> Animations</a></li>
                                                                <li><a href="elements-buttons.html"><i class="fa fa-twitter"></i> Buttons &amp; Social Icons</a></li>
                                                                <li><a href="elements-carousel.html"><i class="fa fa-arrows-h"></i> Carousels &amp; Sliders</a></li>
                                                                <li><a href="elements-charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a></li>
                                                                <li><a href="elements-container.html"><i class="fa fa-archive"></i> Container</a></li>
                                                                <li><a href="elements-content-band.html"><i class="fa fa-road"></i> Content Band</a></li>
                                                                <li><a href="elements-dividers.html"><i class="fa fa-ellipsis-h"></i> Dividers &amp; Gaps</a></li>
                                                                <li><a href="elements-featured-box.html"><i class="fa fa-star"></i> Featured Box</a></li>
                                                                <li><a href="elements-icons.html"><i class="fa fa-rocket"></i> Font Awesome Icons</a></li>
                                                                <li><a href="elements-frames.html"><i class="fa fa-square-o"></i> Frames</a></li>
                                                                <li><a href="elements-maps.html"><i class="fa fa-map-marker"></i> Google Maps</a></li>
                                                                <li><a href="elements-livicons.html"><i class="livicon block" data-n="rocket" data-s="16" data-c="#1e1e1e" data-hc="0"></i> LivIcons</a></li>
                                                                <li><a href="elements-media.html"><i class="fa fa-video-camera"></i> Media</a></li>
                                                                <li><a href="elements-notification.html"><i class="fa fa-info-circle"></i> Notification</a></li>
                                                            </ul>
                                                        </div><!-- .box -->
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="elements-person.html"><i class="fa fa-user"></i> Person</a></li>
                                                                <li><a href="elements-post-sliders.html"><i class="fa fa-th-list"></i> Posts Sliders</a></li>
                                                                <li><a href="elements-pricing.html"><i class="fa fa-list-alt"></i> Pricing and Data Tables</a></li>
                                                                <li><a href="elements-progress-bar.html"><i class="fa fa-tasks"></i> Progress Bars</a></li>
                                                                <li><a href="elements-promo-panel.html"><i class="fa fa-tasks"></i> Promo Panel</a></li>
                                                                <li><a href="elements-recent-posts.html"><i class="fa fa-flash"></i> Recent Posts</a></li>
                                                                <li><a href="elements-shop.html"><i class="fa fa-shopping-cart"></i> Shop Elements</a></li>
                                                                <li><a href="elements-sequence.html"><i class="fa fa-sort-numeric-asc"></i> Sequence</a></li>
                                                                <li><a href="elements-social-feed.html"><i class="fa fa-users"></i> Social Feed</a></li>
                                                                <li><a href="elements-tabs.html"><i class="fa fa-folder-open"></i> Tabs</a></li>
                                                                <li><a href="elements-testimonials.html"><i class="fa fa-comment"></i> Testimonials</a></li>
                                                                <li><a href="elements-text-rotation.html"><i class="fa fa-rotate-right"></i> Text Rotation</a></li>
                                                                <li><a href="elements-time-line.html"><i class="fa fa-clock-o"></i> Timeline</a></li>
                                                                <li><a href="elements-works.html"><i class="fa fa-picture-o"></i> Works</a></li>
                                                            </ul>
                                                        </div><!-- .box -->
                                                    </div><!-- .sub-list -->

                                                    <div class="promo-block bg">
                                                        <img class="replace-2x" src="content/img/menu-elements.png" width="240" height="434" alt="">
                                                    </div><!-- .promo-block -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent item-primary item-bg">
                                            <a href="#">Bootstrap</a>
                                            <ul class="sub">
                                                <li><a href="bootstrap-accordions.html">Accordions</a></li>
                                                <li><a href="bootstrap-alerts.html">Alerts</a></li>
                                                <li><a href="bootstrap-buttons.html">Buttons</a></li>
                                                <li><a href="bootstrap-forms.html">Forms</a></li>
                                                <li><a href="bootstrap-list-group.html">List Group</a></li>
                                                <li><a href="bootstrap-panels.html">Panels</a></li>
                                                <li><a href="bootstrap-tables.html">Tables</a></li>
                                                <li><a href="bootstrap-tabs.html">Tabs</a></li>
                                                <li><a href="bootstrap-tooltips.html">Tooltip</a></li>
                                                <li><a href="bootstrap-typography.html">Typography</a></li>
                                            </ul>
                                        </li>
                                        <li class="item-danger item-bg text-danger">
                                            <a href="http://themeforest.net/item/progressive-multipurpose-responsive-template/7197521" target="_blank">Buy Now!</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!-- .primary -->
                    </div>
                </div>

                <div class="phone-active col-sm-9 col-md-9">
                    <a href="#" class="close"><span>close</span>×</a>
                    <span class="title">Call Us</span> <strong>+1 (777) 123 45 67</strong>
                </div>
                <div class="search-active col-sm-9 col-md-9">
                    <a href="#" class="close"><span>close</span>×</a>
                    <form name="search-form" class="search-form">
                        <input class="search-string form-control" type="search" placeholder="Search here" name="search-string">
                        <button class="search-submit">
                            <svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
				<path fill="#231F20" d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
				s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
				s4,1.794,4,4S8.206,10,6,10z"></path>
                                <image src="img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
			  </svg>
                        </button>
                    </form>
                </div>
            </div><!--.row -->
        </div>
    </div><!-- .header-wrapper -->
</header><!-- .header -->

<div class="breadcrumb-box">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Headers</a></li>
            <li class="active">Fixed Shop Header with User Menu</li>
        </ul>
    </div>
</div><!-- .breadcrumb-box -->
            <!-- FIN CONTENIDO  BODY/ HEADER -->


            <!--  EMPIEZA  BODY/ CONTENIDO -->

            <section id="main">
                <header class="page-header">
                    <div class="container">
                        <h1 class="title">Fixed Shop Header with User Menu</h1>
                    </div>
                </header>
                <div class="container">

                    <!-- AHORA IRIA SIDEBAR LEFT SI ESTA PUESTA.... -->

