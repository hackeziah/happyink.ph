<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Furniture - Minimalist eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="users/neha/assets/img/favicon.png">

         <!--Links here-->
        @include('users/layouts/links')
        <!--Links here-->

    </head>
    <body>
        <!-- header start -->
        <div class="wrapper">
            <!--Header End-->
              @include('users/layouts/header')
            <!-- header end -->
            <!-- sidebar-cart start -->
            <div class="sidebar-cart onepage-sidebar-area">
                <div class="wrap-sidebar">
                    <div class="sidebar-cart-all">
                        <div class="sidebar-cart-icon">
                            <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
                        </div>
                        <div class="cart-content">
                            <h3>Shopping Cart</h3>
                            <ul>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="users/neha/assets/img/cart/c1.jpg" alt="" width="80" height="80"></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> BABY BLANKET</a></h3>
                                        <span>1 x Php 140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="users/neha/assets/img/cart/c2.jpg" alt="" width="80" height="80"></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> BABY BLANKET</a></h3>
                                        <span>1 x Php 140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="users/neha/assets/img/cart/c3.jpg" alt="" width="80" height="80"></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> BABY BLANKET</a></h3>
                                        <span>1 x Php 140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-total">
                                        <h4>Total : <span>Php 420</span></h4>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-checkout-btn">
                                        <a class="btn-hover cart-btn-style" href="#">view cart</a>
                                        <a class="no-mrg btn-hover cart-btn-style" href="#">checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar-cart End -->



            <!-- main-search start -->
            <div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ion-android-close"></span></button>
                </div>
                <div class="sidebar-search-input">
                    <form>
                        <div class="form-search">
                            <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                            <button>
                                <i class="ion-ios-search-strong"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- main-search start -->
            <div class="cur-lang-acc-active">
                <div class="wrap-sidebar">
                    <div class="sidebar-nav-icon">
                        <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
                    </div>
                    <div class="cur-lang-acc-all">
                        <div class="single-currency-language-account">
                            <div class="cur-lang-acc-title">
                                <h4>My Account:</h4>
                            </div>
                            <div class="cur-lang-acc-dropdown">
                                <ul>
                                    <li><a href="#">Compare Products </a></li>
                                    <li><a href="#">Default welcome msg!</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="wishlist.html">My Wish List</a></li>
                                    <li><a href="login.html">Sign In </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <div class="single-slider single-slider-hm1 bg-img ptb-260" style="background-image: url(users/neha/assets/img/slider/slider1.jpg)">
                        <div class="container">
                            <div class="slider-content slider-content-style-1 slider-animated-1">
                                <h3 class="animated">New Collection <span>2018.</span></h3>
                                <h2 class="animated">Amazing Blanket</h2>
                                <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tempor incididunt ut labore et dolore </p>
                                <a class="btn-hover slider-btn-style animated" href="shop-grid-view-sidebar.html">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider single-slider-hm1 bg-img slider-content-style-1 ptb-260" style="background-image: url(users/neha/assets/img/slider/slider2.jpg)">
                        <div class="container">
                            <div class="slider-content slider-content-style-1 slider-animated-2 slider-text-right">
                                <h3 class="animated">New Fashion <span>2018.</span></h3>
                                <h2 class="animated">Awesome Product</h2>
                                <div class="slide-right-pera">
                                    <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tempor incididunt ut labore et dolore </p>
                                </div>
                                <a class="btn-hover slider-btn-style animated" href="shop-grid-view-sidebar.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="banner-area pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-12">
                            <div class="single-banner mb-30">
                                <a href="shop-grid-view-sidebar.html"><img src="users/neha/assets/img/banner/1.jpg" alt=""></a>
                                <div class="banner-content banner-content-position1">
                                    <h3>morden <span>sofa</span></h3>
                                    <p>Sale up to <span>30% off</span> all product in the new collection</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-none d-lg-block col-lg-6 col-12">
                            <div class="single-banner mb-30">
                                <a href="shop-grid-view-sidebar.html"><img src="users/neha/assets/img/banner/2.jpg" alt=""></a>
                                <div class="banner-content banner-content-position2">
                                    <span>Summer Sale</span>
                                    <h3>morden <span>chair</span></h3>
                                    <p>Sale up to <span>30% off</span> all product <br>in the new collection</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-12">
                            <div class="single-banner mb-30">
                                <a href="shop-grid-view-sidebar.html"><img src="users/neha/assets/img/banner/3.jpg" alt=""></a>
                                <div class="banner-content banner-content-position3">
                                    <h3>morden <span>chair</span></h3>
                                    <p>Sale up to <span>30% off</span> all product in the new collection</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="banner-area pt-100 pb-70">
            </div>
            <div class="product-area pb-100">
                <div class="container">
                    <div class="section-title text-center mb-35">
                        <h2>Featured Products</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
                    </div>
                    <div class="product-style">
                        <div class="product-tab-list text-center mb-45 nav product-menu-mrg" role="tablist">
                            <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                <h4>NEW IN </h4>
                            </a>
                            <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                <h4>ON SALE </h4>
                            </a>
                            <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                <h4>FREE SHIPPING</h4>
                            </a>
                            <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                                <h4>HIGHEST RATING</h4>
                            </a>
                        </div>
                        <div class="tab-content jump">
                            <div class="tab-pane active show fade" id="home1" role="tabpanel">
                                <div class="row">
                                    <div class="product-slider-active owl-carousel">
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p1.jpg" alt="" width="270" height="300"></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 110.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p2.jpg" alt="" width="270" height="300"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 120.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p3.jpg" alt="" width="270" height="300"></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 130.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p4.jpg" alt="" width="270" height="300"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 140.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="home2" role="tabpanel">
                                <div class="row">
                                    <div class="product-slider-active owl-carousel">
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p5.jpg" alt="" width="270" height="300"></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 150.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p6.jpg" alt="" width="270" height="300"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 160.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p7.jpg" alt="" width="270" height="300"></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 170.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p8.jpg" alt="" width="270" height="300"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 180.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="home3" role="tabpanel">
                                <div class="row">
                                    <div class="product-slider-active owl-carousel">
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p9.jpg" alt="" width="270" height="300"></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 190.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p10.jpg" alt="" width="270" height="300"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 110.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/p11.jpg" alt="" width="270" height="300"></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 120.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/12.jpg" alt="" width="270" height="300"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 130.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="home4" role="tabpanel">
                                <div class="row">
                                    <div class="product-slider-active owl-carousel">
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/6.jpg" alt="" width="270" heigth="300"></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 140.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/1.jpg" alt="" width="270" heigth="300"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 150.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/10.jpg" alt="" width="270" heigth="300"></a>
                                                    <span>sale</span>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 160.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/7.jpg" alt="" width="270" heigth="300"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title-price">
                                                        <div class="product-title">
                                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>Php 170.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-cart-categori">
                                                        <div class="product-cart">
                                                            <span>Blanket</span>
                                                        </div>
                                                        <div class="product-categori">
                                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
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
            <div  class="shop-limited-area bg-img pt-90 pb-100" style="background-image: url(users/neha/assets/img/banner/banner1.jpg) " data-overlay="3">
                <div class="container">
                    <div class="shop-limited-content text-center">
                        <h2>Shop Limited Edition.</h2>
                        <a class="btn-hover limited-btn" href="#">view more</a>
                    </div>
                </div>
            </div>
            <div class="product-collection-area pt-100 pb-50">
                <div class="container">
                    <div class="section-title text-center mb-55">
                        <h2>New Collection</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="users/neha/assets/img/product/p5.jpg" alt="" width="270" heigth="300"></a>
                                    <span>sale</span>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Php 110.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Blanket</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="users/neha/assets/img/product/p6.jpg" alt="" width="270" heigth="300"></a>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Php 120.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Blanket</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="users/neha/assets/img/product/p7.jpg" alt="" width="270" heigth="300"></a>
                                    <span>sale</span>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Php 130.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Blanket</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="users/neha/assets/img/product/p8.jpg" alt="" width="270" heigth="300"></a>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Php 140.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Blanket</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="users/neha/assets/img/product/p9.jpg" alt="" width="270" heigth="300"></a>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Php 150.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Blanket</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="users/neha/assets/img/product/p10.jpg" alt="" width="270" heigth="300"></a>
                                    <span>sale</span>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Php 160.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Blanket</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="users/neha/assets/img/product/p11.jpg" alt="" width="270" heigth="300"></a>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Php 170.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Blanket</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single-product mb-35">
                                <div class="product-img">
                                    <a href="#"><img src="users/neha/assets/img/product/p12.jpg" alt="" width="270" heigth="300"></a>
                                    <span>sale</span>
                                    <div class="product-action">
                                        <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-title-price">
                                        <div class="product-title">
                                            <h4><a href="product-details-6.html">BABY BLANKET</a></h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Php 180.00</span>
                                        </div>
                                    </div>
                                    <div class="product-cart-categori">
                                        <div class="product-cart">
                                            <span>Blanket</span>
                                        </div>
                                        <div class="product-categori">
                                            <a href="#"><i class="ion-bag"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area pb-65">
                <div class="container">
                    <div class="section-title text-center mb-55">
                        <h2> Top Stories</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when look</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/blog1.jpg" alt="" width="370px" height="236px"></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">Standard blog post.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/blog2.jpg" alt="" width="370px" height="236px"></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">But I must explain to you.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/blog3.jpg" alt="" width="370px" height="236px"></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Footer Start--}}
                @include('users/layouts/footer')
            {{-- Footer End--}}



            <!-- modal START-->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close" aria-hidden="true"></span>
                </button>

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="users/neha/assets/img/quick-view/qv1.jpg" alt="" width="320" height="380">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="users/neha/assets/img/quick-view/qv1.jpg" alt="" width="320" height="380">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="users/neha/assets/img/quick-view/qv1.jpg" alt="" width="320" height="380">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                        <img src="users/neha/assets/img/quick-view/qv1.jpg" alt="" width="100" heigh="112">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                        <img src="users/neha/assets/img/quick-view/qv1.jpg" alt="" width="100" heigh="112">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                        <img src="users/neha/assets/img/quick-view/qv1.jpg" alt="" width="100" heigh="112">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>BABY BLANKET</h3>
                                    <div class="price">
                                        <span class="new">Php 90.00</span>
                                        <span class="old">Php 120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-android-star-outline"></i>
                                            <i class="ion-android-star-outline"></i>
                                            <i class="ion-android-star-outline"></i>
                                        </div>
                                        <div class="quick-view-number">
                                            <span>2 Ratting (S)</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-hover-black" href="#">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#"><i class="ion-ios-heart-outline"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- modal END -->

            <div class="clickable-mainmenu-btn">
                <a class="clickable-mainmenu-active" href="#"><i class="ion-navicon"></i></a>
            </div>
            <div class="clickable-mainmenu text-center">
                <div class="clickable-mainmenu-icon">
                    <button class="clickable-mainmenu-close">
                        <span class="ion-android-close"></span>
                    </button>
                </div>
                <div id="menu" class="text-left">
                    <ul>
                                            <li><a href="#">home</a></li>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="shop-grid-view-5-col.html">shop</a></li>
                                            <li><a href="#">pages</a>
                                                <ul class="dropdown">
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.html">blog </a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                </div>
            </div>
        </div>

         <!--Links JS  here-->
        @include('users/layouts/js');
         <!--Links JS  here-->

         <!--Links JS Custom  here-->
        {{-- @include('users/js'); --}}
         <!--Links JS Custom  here-->

    </body>
</html>
