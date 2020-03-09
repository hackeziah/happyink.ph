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
            <!-- header start-->
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
                                        <h3><a href="#"> BABY BLANKET 1</a></a></h3>
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
                                        <h3><a href="#"> BABY BLANKET 2 </a></h3>
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
                                        <h3><a href="#">BABY BLANKET 3</a></h3>
                                        <span>1 x Php 140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-total">
                                        <h4>Total : <span>Php  420</span></h4>
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
            <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(users/neha/assets/img/bg/bcart.jpg)">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>cart page</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li> cart </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- shopping-cart-area start -->
            <div class="cart-main-area pt-95 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="cart-heading">Cart</h1>
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">remove</th>
                                                <th class="product-price">images</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-remove"><a href="#"><i class="ion-android-close"></i></a></td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="users/neha/assets/img/cart/c1.jpg" alt="" width="80" height="80"></a>
                                                </td>Wooden
                                                <td class="product-name"><a href="#">Baby Blanket 1 </a></td>
                                                <td class="product-price"><span class="amount">Php 140.00</span></td>
                                                <td class="product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal">Php 140.00</td>

                                            </tr>
                                            <tr>
                                                <td class="product-remove"><a href="#"><i class="ion-android-close"></i></a></td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="users/neha/assets/img/cart/c2.jpg" alt="" width="80" height="80"></a>
                                                </td>
                                                <td class="product-name"><a href="#">Baby Blanket 2</a></td>
                                                <td class="product-price"><span class="amount">Php 140.00</span></td>
                                                <td class="product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal">Php 140.00</td>
                                            </tr>
                                            <tr>
                                                <td class="product-remove"><a href="#"><i class="ion-android-close"></i></a></td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="users/neha/assets/img/cart/c3.jpg" alt="" width="80" height="80"></a>
                                                </td>
                                                <td class="product-name"><a href="#">Baby Blanket 3</a></td>
                                                <td class="product-price"><span class="amount">Php 140.00</span></td>
                                                <td class="product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal">Php 140.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal<span>Php 420.00</span></li>
                                                <li>Total<span>Php 420.00</span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shopping-cart-area end -->
                {{-- Footer Start --}}
                @include('users/layouts/footer')
            {{-- Footer End--}}
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
        <script src="users/neha/assets/js/main.js"></script>
    </body>
</html>
