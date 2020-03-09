<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Neha - Minimalist eCommerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="users/neha/assets/img/favicon.png">
         <!--Links here-->
        @include('layouts/links')
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
                                        <a href="#"><img src="users/neha/assets/img/cart/1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="users/neha/assets/img/cart/2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="users/neha/assets/img/cart/3.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> HANDCRAFTED MUG</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-total">
                                        <h4>Total : <span>$ 120</span></h4>
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
            <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(users/neha/assets/img/bg/breadcrumb.jpg)">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>blog page</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li> blog </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- blog-area start -->
            <div class="blog-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-4 col-12">
                            <div class="single-blog mb-50">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/1.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">Standard blog post.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-12">
                            <div class="single-blog mb-50">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">But I must explain to you.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-12">
                            <div class="single-blog mb-50">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/3.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-12">
                            <div class="single-blog mb-50">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/3.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">Lorem ipsum dolor sit.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-12">
                            <div class="single-blog mb-50">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/1.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">Standard blog post.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-12">
                            <div class="single-blog mb-50">
                                <div class="blog-img">
                                    <a href="#"><img src="users/neha/assets/img/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="blog-info">
                                    <h3><a href="#">But I must explain to you.</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>February 13</li>
                                            <li><a href="#">Momen Bhuiyan</a></li>
                                            <li><a href="#">4 comments</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipising elit, sed do eimod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagination-style text-center">
                                <ul>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="ion-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-area end -->
            {{-- Fotter Start --}}
                @include('users/layouts/footer')
            {{-- Fotter End--}}
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
