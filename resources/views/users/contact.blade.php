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
            <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(users/neha/assets/img/bg/bb.jpg)">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>contact</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li> contact </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- contact-area start -->
            <div class="contact-area ptb-100">
                <div class="container">
                    <div class="contact-info">
                        <h2 class="contact-title">contact info</h2>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="single-contact-info mb-40">
                                    <div class="contact-info-icon">
                                        <i class="ion-ios-location-outline"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p>
                                            Location : <br> 77, avenue, Brat road USA.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-contact-info mb-40">
                                    <div class="contact-info-icon">
                                        <i class="ion-ios-telephone-outline"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p>
                                            Phone : <br> +012 345 678 102
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-contact-info mb-40">
                                    <div class="contact-info-icon">
                                        <i class="ion-ios-email-outline"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <p>Mail : <br> <a href="#">happtingk@ymail.com</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-wrap">
                        <h2 class="contact-title">Get In Touch</h2>
                        <div class="contact-message">
                            <form id="contact-form" action="assets/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style contact-font-one">
                                            <input name="name" placeholder="Your Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style contact-font-two">
                                            <input name="email" placeholder="Your Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style contact-font-three">
                                            <input name="subject" placeholder="Your Title" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style contact-font-four">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="submit btn-hover" type="submit"> Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                    <div class="contact-map">
                        <div id="hastech2"></div>
                    </div>
                </div>
            </div>
            <!-- contact-area end -->

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
        <!-- google map api -->

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
        <script>
            var myCenter=new google.maps.LatLng(30.249796, -97.754667);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:15,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech2"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'',
                    map: map,
                  });
                var styles = [
                  {
                    stylers: [
                      { hue: "#c5c5c5" },
                      { saturation: -100 }
                    ]
                  },
                ];
                map.setOptions({styles: styles});
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
      // grab an element
            var myElement = document.querySelector(".intelligent-header");
            // construct an instance of Headroom, passing the element
            var headroom  = new Headroom(myElement);
            // initialise
            headroom.init();
        </script>

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
