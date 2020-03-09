<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Neha - Minimalist eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="users/neha/assets/img/favicon.png">

         <!--Links here-->
        @include('users/layouts/links')
        <!--Links here-->
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <div class="wrapper">
            <!-- header end -->
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
                                <h4>Currency: <span>USD </span></h4>
                            </div>
                            <div class="cur-lang-acc-dropdown">
                                <ul>
                                    <li><a href="#">EUR  Euro</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-currency-language-account">
                            <div class="cur-lang-acc-title">
                                <h4>Language: <span><img src="users/neha/assets/img/icon-img/english.png" alt=""> English </span></h4>
                            </div>
                            <div class="cur-lang-acc-dropdown">
                                <ul>
                                    <li><a href="#"><img src="users/neha/assets/img/icon-img/english.png" alt=""> English </a></li>
                                    <li><a href="#"><img src="users/neha/assets/img/icon-img/es.png" alt=""> spanish </a></li>
                                    <li><a href="#"><img src="users/neha/assets/img/icon-img/fr.png" alt=""> french </a></li>
                                    <li><a href="#"><img src="users/neha/assets/img/icon-img/ge.png" alt=""> german </a></li>
                                    <li><a href="#"><img src="users/neha/assets/img/icon-img/es.png" alt=""> spanish </a></li>
                                </ul>
                            </div>
                        </div>
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
            <div class="breadcrumb-area pt-205 pb-210 bg-img" style="background-image: url(users/neha/assets/img/bg/bb.jpg)">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>shop</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li> shop </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shop-page-wrapper hidden-items padding-filter">
                <div class="container-fluid">
                    <div class="shop-filters-left">
                        <div class="shop-sidebar">
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Search Products</h3>
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input placeholder="Search Products..." type="text">
                                        <button><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-40">
                                <h3 class="sidebar-title">Filter by Price</h3>
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-45">
                                <h3 class="sidebar-title">Categories</h3>
                                <div class="sidebar-categories">
                                    <ul>
                                        <li><a href="#">Accessories <span>4</span></a></li>
                                        <li><a href="#">Book <span>9</span></a></li>
                                        <li><a href="#">Clothing <span>5</span> </a></li>
                                        <li><a href="#">Homelife <span>3</span></a></li>
                                        <li><a href="#">Kids & Baby <span>4</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-overflow mb-45">
                                <h3 class="sidebar-title">color</h3>
                                <div class="product-color">
                                    <ul>
                                        <li class="red">b</li>
                                        <li class="pink">p</li>
                                        <li class="blue">b</li>
                                        <li class="sky">b</li>
                                        <li class="green">y</li>
                                        <li class="purple">g</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-40">
                                <h3 class="sidebar-title">size</h3>
                                <div class="product-size">
                                    <ul>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">ml</a></li>
                                        <li><a href="#">lm</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Top rated products</h3>
                                <div class="sidebar-top-rated-all">
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="users/neha/assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">Flying Drone</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Php 140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="users/neha/assets/img/product/sidebar-product/2.jpg" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">Flying Drone</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Php 140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="users/neha/assets/img/product/sidebar-product/3.jpg" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">Flying Drone</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Php 140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-top-rated mb-30">
                                        <div class="single-top-rated">
                                            <div class="top-rated-img">
                                                <a href="#"><img src="users/neha/assets/img/product/sidebar-product/4.jpg" alt=""></a>
                                            </div>
                                            <div class="top-rated-text">
                                                <h4><a href="#">Flying Drone</a></h4>
                                                <div class="top-rated-rating">
                                                    <ul>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="reting-color ion-android-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Php 140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-filters-right">
                        <div class="shop-bar-area pb-60">
                            <div class="shop-bar">
                                <div class="shop-found-selector">
                                    <div class="shop-found">
                                        <p><span>23</span> Product Found of <span>50</span></p>
                                    </div>
                                    <div class="shop-selector">
                                        <label>Sort By : </label>
                                        <select name="select">
                                            <option value="">Default</option>
                                            <option value="">A to Z</option>
                                            <option value=""> Z to A</option>
                                            <option value="">In stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="shop-filter-tab">
                                    <div class="shop-filter">
                                        <a class="shop-filter-active" href="#">Filters <i class="ion-android-options"></i></a>
                                    </div>
                                    <div class="shop-tab nav" role=tablist>
                                       <a class="active" href="#grid-5-col1" data-toggle="tab" role="tab" aria-selected="false">
                                            <i class="ion-android-apps"></i>
                                        </a>
                                        <a href="#grid-5-col2" data-toggle="tab" role="tab" aria-selected="true">
                                            <i class="ion-android-menu"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-5-col1" class="tab-pane fade active show">
                                <div class="row custom-row">
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh2.jpg" alt="" width="302" height="365"></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh1.jpg" alt="" width="302" height="365"></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh3.jpg" alt="" width="302" height="365">  </a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh4.jpg" alt="" width="302" height="365"></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh5.jpg" alt="" width="302" height="365"></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh6.jpg" alt="" width="302" height="365"></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh7.jpg" alt="" width="302" height="365"></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh8.jpg" alt="" width="302" height="365"></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh9.jpg" alt="" width="302" height="365"></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh10.jpg" alt=" width="302" height="365""></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh11.jpg" alt=" width="302" height="365""></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh12.jpg" alt=" width="302" height="365""></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh13.jpg" alt=" width="302" height="365""></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh14.jpg" alt=" width="302" height="365""></a>
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
                                    <div class="custom-col-5 custom-col-style">
                                        <div class="single-product mb-35">
                                            <div class="product-img">
                                                <a href="#"><img src="users/neha/assets/img/shop/shop-grid-1/sh15.jpg" alt="" width="302" height="365"></a>
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
                                </div>
                            </div>
                            <div id="grid-5-col2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="users/neha/assets/img/product/list-img/1.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>Php 150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="users/neha/assets/img/product/list-img/2.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>Php 150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="users/neha/assets/img/product/list-img/3.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>Php 150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="users/neha/assets/img/product/list-img/4.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>Php 150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="users/neha/assets/img/product/list-img/5.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>Php 150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="users/neha/assets/img/product/list-img/6.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>Php 150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="users/neha/assets/img/product/list-img/7.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>Php 150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="single-product single-product-list product-list-right-pr mb-40">
                                            <div class="product-img list-img-width">
                                                <a href="#"><img src="users/neha/assets/img/product/list-img/8.jpg" alt=""></a>
                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Flying Drone with Remote</a></h4>
                                                    <span>Php 150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
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
            {{-- Fotter Start --}}
                @include('users/layouts/footer')
            {{-- Fotter End--}}
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

        </div>







         <!--Links JS  here-->
        @include('users/layouts/js');
         <!--Links JS  here-->

         <!--Links Custom JS  here-->
        {{-- @include('users/js/'); --}}
         <!--Links Custom JS  here-->


        <script type="text/javascript">
            // grab an element
            var myElement = document.querySelector(".intelligent-header");
            // construct an instance of Headroom, passing the element
            var headroom  = new Headroom(myElement);
            // initialise
            headroom.init();
        </script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
