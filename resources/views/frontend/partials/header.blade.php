<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EduBlink | Online Education Platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon.png')}}">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/magnifypopup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/jqueru-ui-min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/tipped.min.css')}}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/app.css')}}">

</head>

<body class="sticky-header ">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div id="edublink-preloader">
    <div class="loading-spinner">
        <div class="preloader-spin-1"></div>
        <div class="preloader-spin-2"></div>
    </div>
    <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
    </div>
</div>

<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="edu-header header-style-1 header-fullwidth">

        <div id="edu-sticky-placeholder"></div>
        <div class="header-mainmenu">
            <div class="container-fluid">
                <div class="header-navbar">
                    <div class="header-brand">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="{{asset('frontend/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                                <img class="logo-dark" src="{{asset('frontend/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                            </a>
                        </div>
                        <div class="header-category">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li class="has-droupdown">
                                        <a href="#"><i class="icon-1"></i>Category</a>
                                        <ul class="submenu">
                                            <li><a href="course-one.html">Design</a></li>
                                            <li><a href="course-one.html">Development</a></li>
                                            <li><a href="course-one.html">Architecture</a></li>
                                            <li><a href="course-one.html">Life Style</a></li>
                                            <li><a href="course-one.html">Data Science</a></li>
                                            <li><a href="course-one.html">Marketing</a></li>
                                            <li><a href="course-one.html">Music</a></li>
                                            <li><a href="course-one.html">Photography</a></li>
                                            <li><a href="course-one.html">Finance</a></li>
                                            <li><a href="course-one.html">Motivation</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-mainnav">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <ul class="header-action">
                            <li class="icon cart-icon">
                                <a href="cart.html" class="cart-icon">
                                    <i class="icon-3"></i>
                                    <span class="count">0</span>
                                </a>
                            </li>
                            <li class="header-btn">
                                <a href="contact-us.html" class="edu-btn btn-medium">Login<i class="icon-4"></i></a>
                            </li>
                            <li class="mobile-menu-bar d-block d-xl-none">
                                <button class="hamberger-button">
                                    <i class="icon-54"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{asset('frontend/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                            <img class="logo-dark" src="{{asset('frontend/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="icon-73"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li class="has-droupdown"><a href="#">Home</a>
                        <ul class="mega-menu mega-menu-one">
                            <li>
                                <ul class="submenu mega-sub-menu mega-sub-menu-01">
                                    <li><a href="index.html">EduBlink Education <span class="badge-1">hot</span></a></li>
                                    <li><a href="index-distant-learning.html">Distant Learning</a></li>
                                    <li><a href="index-university.html">University</a></li>
                                    <li><a href="index-online-academy.html">Online Academy <span class="badge-1">hot</span></a></li>
                                    <li><a href="index-modern-schooling.html">Modern Schooling</a></li>
                                    <li><a href="index-kitchen.html">Kitchen Coach</a></li>
                                    <li><a href="index-yoga.html">Yoga Instructor</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="submenu mega-sub-menu mega-sub-menu-01">
                                    <li><a href="index-kindergarten.html">Kindergarten</a></li>
                                    <li><a href="index-health-coach.html">Health Coch <span class="badge">new</span></a></li>
                                    <li><a href="index-language-academy.html">Language Academy <span class="badge">new</span></a></li>
                                    <li><a href="index-remote-training.html">Remote Training <span class="badge">new</span></a></li>
                                    <li><a href="index-photography.html">Photography <span class="badge">new</span></a></li>
                                    <li><a href="https://edublink.html.dark.devsblink.com/" target="_blank">Dark Version</a></li>
                                    <li><a href="index-landing.html">Landing Demo</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="submenu mega-sub-menu-01">
                                    <li>
                                        <a href="https://1.envato.market/5bQ022">
                                            <img src="assets/images/others/mega-menu-image.webp" alt="advertising Image">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">Pages</a>
                        <ul class="mega-menu">
                            <li>
                                <h6 class="menu-title">Inner Pages</h6>
                                <ul class="submenu mega-sub-menu-01">
                                    <li><a href="about-one.html">About Us 1</a></li>
                                    <li><a href="about-two.html">About Us 2</a></li>
                                    <li><a href="about-three.html">About Us 3</a></li>
                                    <li><a href="team-one.html">Instructor 1</a></li>
                                    <li><a href="team-two.html">Instructor 2</a></li>
                                    <li><a href="team-three.html">Instructor 3</a></li>
                                    <li><a href="team-details.html">Instructor Profile</a></li>
                                    <li><a href="faq.html">Faq's</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <h6 class="menu-title">Inner Pages</h6>
                                <ul class="submenu mega-sub-menu-01">
                                    <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                    <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                    <li><a href="event-grid.html">Event Grid</a></li>
                                    <li><a href="event-list.html">Event List</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                    <li><a href="purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-condition.html">Terms & Condition</a></li>
                                    <li><a href="my-account.html">Sign In</a></li>
                                </ul>
                            </li>
                            <li>
                                <h6 class="menu-title">Shop Pages</h6>
                                <ul class="submenu mega-sub-menu-01">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-droupdown"><a href="#">Courses</a>
                        <ul class="submenu">
                            <li><a href="course-one.html">Course Style 1</a></li>
                            <li><a href="course-two.html">Course Style 2</a></li>
                            <li><a href="course-three.html">Course Style 3</a></li>
                            <li><a href="course-four.html">Course Style 4</a></li>
                            <li><a href="course-five.html">Course Style 5</a></li>
                            <li><a href="course-details.html">Course Details 1</a></li>
                            <li><a href="course-details-2.html">Course Details 2</a></li>
                            <li><a href="course-details-3.html">Course Details 3</a></li>
                        </ul>
                    </li>

                    <li class="has-droupdown"><a href="#">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">Contact</a>
                        <ul class="submenu">
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="contact-me.html">Contact Me</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Search Popup  -->
        <div class="edu-search-popup">
            <div class="content-wrap">
                <div class="site-logo">
                    <img class="logo-light" src="{{asset('frontend/assets/images/logo/logo-dark.png')}}" alt="Corporate Logo">
                    <img class="logo-dark" src="{{asset('frontend/assets/images/logo/logo-white.png')}}" alt="Corporate Logo">
                </div>
                <div class="close-button">
                    <button class="close-trigger"><i class="icon-73"></i></button>
                </div>
                <div class="inner">
                    <form class="search-form" action="#">
                        <input type="text" class="edublink-search-popup-field" placeholder="Search Here...">
                        <button class="submit-button"><i class="icon-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Search Popup  -->
    </header>
