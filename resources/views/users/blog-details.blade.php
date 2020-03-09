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
        @include('layouts/links')
        <!--Links here-->

    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <div class="wrapper">
            <!-- Newsletter Popup Start -->
            <div class="popup_wrapper hidden-sm hidden-xs">
                <div class="test">
                    <span class="popup_off">Close</span>
                    <div class="subscribe_area text-center">
                        <h2>Newsletter</h2>
                        <p>Subscribe to the Neha mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div id="mc_embed_signup" class="subscribe-bottom">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <div class="clear-2"><input type="submit" value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                        <div class="subscribe-bottom mt-15">
                            <input type="checkbox" id="newsletter-permission">
                            <label for="newsletter-permission">Don't show this popup again</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter Popup End -->
            <!-- header start -->
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
                        <h2>blog details</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li> blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- blog-area start -->
            <div class="blog-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog-sidebar">
                                <div class="sidebar-widget mb-50">
                                    <img src="users/neha/assets/img/blog/blog-sidebar.jpg" alt="">
                                    <div class="sidebar-img-content">
                                        <p>On the other hand, dislike men who are so beguiled and the demoralized by the charms of pleasure of the moment.</p>
                                        <h4>Tayeb rayed</h4>
                                        <span>UI UX Designer</span>
                                        <div class="sidebar-img-social">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ion-social-tumblr"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ion-social-instagram-outline"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-50">
                                    <h3 class="sidebar-title">Search Products</h3>
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input placeholder="Search Products..." type="text">
                                            <button><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-45">
                                    <h3 class="sidebar-title">Categories</h3>
                                    <div class="sidebar-categories">
                                        <ul>
                                            <li><a href="#">Design <span>4</span></a></li>
                                            <li><a href="#">Development <span>9</span></a></li>
                                            <li><a href="#">Wordpress <span>5</span> </a></li>
                                            <li><a href="#">Research <span>3</span></a></li>
                                            <li><a href="#">Hunki panki <span>4</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-50">
                                    <h3 class="sidebar-title">Recent Posts</h3>
                                    <div class="sidebar-top-rated-all">
                                        <div class="sidebar-top-rated mb-30">
                                            <div class="single-top-rated">
                                                <div class="top-rated-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                                </div>
                                                <div class="top-rated-text">
                                                    <span>Feb 13,  2018</span>
                                                    <h4><a href="#">Diffrent title gose here. Thisisdemo title.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-top-rated mb-30">
                                            <div class="single-top-rated">
                                                <div class="top-rated-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/sidebar-product/2.jpg" alt=""></a>
                                                </div>
                                                <div class="top-rated-text">
                                                    <span>Feb 13,  2018</span>
                                                    <h4><a href="#">Diffrent title gose here. Thisisdemo title.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-top-rated mb-30">
                                            <div class="single-top-rated">
                                                <div class="top-rated-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/sidebar-product/3.jpg" alt=""></a>
                                                </div>
                                                <div class="top-rated-text">
                                                    <span>Feb 13,  2018</span>
                                                    <h4><a href="#">Diffrent title gose here. Thisisdemo title.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-top-rated mb-30">
                                            <div class="single-top-rated">
                                                <div class="top-rated-img">
                                                    <a href="#"><img src="users/neha/assets/img/product/sidebar-product/4.jpg" alt=""></a>
                                                </div>
                                                <div class="top-rated-text">
                                                    <span>Feb 13,  2018</span>
                                                    <h4><a href="#">Diffrent title gose here. Thisisdemo title.</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-40">
                                    <h3 class="sidebar-title">Instagram</h3>
                                    <ul id="Instafeed"></ul>
                                </div>
                                <div class="sidebar-widget mb-40">
                                    <h3 class="sidebar-title">Social Network</h3>
                                    <div class="social-network">
                                        <a href="#">
                                            <i class="ion-social-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ion-social-tumblr"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ion-social-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ion-social-instagram-outline"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-40">
                                    <h3 class="sidebar-title">Tags</h3>
                                    <div class="blog-tags-style">
                                        <ul>
                                            <li><a href="#">Development</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Adobe</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="blog-details-style">
                                <div class="blog-part">
                                    <img src="users/neha/assets/img/blog/blog-details.jpg" alt="news">
                                    <div class="blog-info-details mt-20">
                                        <h3>Lorem Ipsum is simply dummy text of the printing</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. U enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. U enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat. Duis aute irure dol in reprehenderit in voluptate velit</blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. U enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                </div>
                                <div class="news-details-bottom mtb-60">
                                    <h3 class="leave-comment-text">Comments</h3>
                                    <div class="blog-top">
                                        <div class="news-allreply">
                                            <a href="#"><img src="users/neha/assets/img/blog/4.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-img-details">
                                            <div class="blog-title">
                                                <h3>Salim Rana</h3>
                                                <span>14 October, 2016 at 6 : 00 pm</span>
                                            </div>
                                            <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. </p>
                                            <a href="#">reply</a>
                                        </div>
                                    </div>
                                    <div class="blog-top blog-middle-mrg">
                                        <div class="news-allreply">
                                            <a href="#"><img src="users/neha/assets/img/blog/5.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-img-details">
                                            <div class="blog-title">
                                                <h3>Tayeb Rayed</h3>
                                                <span>14 October, 2016 at 6 : 00 pm</span>
                                            </div>
                                            <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam. </p>
                                            <a href="#">reply</a>
                                        </div>
                                    </div>
                                    <div class="blog-top">
                                        <div class="news-allreply">
                                            <a href="#"><img src="users/neha/assets/img/blog/6.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-img-details">
                                            <div class="blog-title">
                                                <h3>farhana shuvo</h3>
                                                <span>14 October, 2016 at 6 : 00 pm</span>
                                            </div>
                                            <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                            <a href="#">reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="leave-comment">
                                    <h3 class="leave-comment-text">Write a comment</h3>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="leave-form">
                                                    <input placeholder="Name*" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="leave-form">
                                                    <input placeholder="Email*" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="text-leave">
                                                    <textarea placeholder="Comment*"></textarea>
                                                    <button class="submit btn-hover" type="submit">Send Commant</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
