<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from creativelayers/themes/techno-html/index-v7.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Nov 2021 18:16:24 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Techno Store </title>

    <meta name="author" content="CreativeLayers">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">

    <!-- Theme style -->
    <link rel="stylesheet"  href="{{asset("css/style.css")}}">

    <!-- Reponsive -->
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}">

    <link rel="shortcut icon" href="{{asset("favicon/favicon.png")}}">

</head>

<body class="header_sticky">

<div class="boxed style1">

    <section id="header" class="header">
        <div class="header-top style4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="flat-support style1">
                            <li>
                                <a href="faq.html" title="">Support</a>
                            </li>
                            <li>
                                <a href="store-location.html" title="">Store Locator</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" title="">Track Your Order</a>
                            </li>
                        </ul><!-- /.flat-support -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <ul class="flat-infomation">
                            <li class="phone">
                                Call Us: <a href="#" title="">(888) 1234 56789</a>
                            </li>
                        </ul><!-- /.flat-infomation -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <ul class="flat-unstyled style2">
                            <li class="account">
                                <a href="#" title="">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="{{route('login')}}" title="">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{route('register-user')}}" title="">Register</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.logout')}}" title="">Log out</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="">USD<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="#" title="">Euro</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Dolar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="#" title="">Turkish</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">English</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">اللغة العربية</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Español</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">Italiano</a>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- /.flat-unstyled -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div id="logo" class="logo">
                            <a href="{{route('techno.store')}}" title="">
                                <img src="{{asset("images/logos/logo.png")}}" alt="">
                            </a>
                        </div><!-- /#logo -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6">
                        <div class="top-search">
                            <form action="#" method="get" class="form-search" accept-charset="utf-8">
                                <div class="box-search">
                                    <input type="text" name="search" placeholder="Search what you looking for ?">
                                    <span class="btn-search">
											<button type="submit" class="waves-effect"><img src="{{asset('images/icons/search.png')}}" alt=""></button>
										</span>
                                </div><!-- /.box-search -->
                            </form><!-- /.form-search -->
                        </div><!-- /.top-search -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-3">
                        <div class="box-cart">
                            <div class="inner-box">
                                <ul class="menu-compare-wishlist">
                                    <li class="compare">
                                        <a href="compare.html" title="">
                                            <img src="{{asset('images/icons/compare.png')}}" alt="">
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="wishlist.html" title="">
                                            <img src="{{asset('images/icons/wishlist.png')}}" alt="">
                                        </a>
                                    </li>
                                </ul><!-- /.menu-compare-wishlist -->
                            </div><!-- /.inner-box -->
                            @php

                                use \App\Models\Cart;

                                    $products = Cart::all();

                                $sum = Cart::sum('total');

                                $count_pr = Cart::all()->count();

                            @endphp
                            <div class="inner-box">
                                <a href="#" title="">
                                    <div class="icon-cart">
                                        <img src="{{asset('images/icons/cart.png')}}" alt="">



                                        <span>{{$count_pr}}</span>
                                    </div>
                                </a>
                                <div class="dropdown-box">
                                    <ul>
                                        @foreach($products as $product)
                                            <li>
                                                <p hidden>{{$product->id}}</p>
                                                <div class="img-product">
                                                    <img src="" alt=""> {{--image--}}
                                                </div>
                                                <div class="info-product">
                                                    <div class="name"> {{$product->name}}{{--name--}} </div>
                                                    <div class="price">
                                                        <span>{{$product->count}} x</span>{{--count--}}
                                                        <span>${{$product->price}}.00</span>{{--price--}}
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <span class="delete">
                                                    <a class="btn btn-cart" href="{{url('delete_cart/'.$product->id)}}">x</a>
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="total">
                                        <span>Subtotal:</span>
                                        <span class="price">${{$sum}}.00</span>
                                    </div>
                                    <div class="btn-cart">
                                        <a href="shop-cart.html" class="view-cart" title="">View Cart</a>
                                        <a href="shop-checkout.html" class="check-out" title="">Checkout</a>
                                    </div>
                                </div><!-- /.dropdown-box -->
                            </div><!-- /.inner-box -->
                        </div><!-- /.box-cart -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-middle -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-2">
                        <div id="mega-menu">
                            <div class="btn-mega"><span></span>ALL CATEGORIES</div>
                            <ul class="menu">
                                @foreach(\App\Models\Category::all() as $item)
                                    <li>
                                        <a href="{{url('product/'.$item->id)}}" title="">
												<span class="menu-img">
													<img src="{{asset("/uploads/category_images/$item->image")}}" alt="">
												</span>
                                            <span class="menu-title">
													{{$item->name}}
												</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul><!-- /.menu -->

                        </div>
                    </div><!-- /.col-md-3 col-2 -->
                    <div class="col-md-9 col-10">
                        <div class="nav-wrap">
                            <div id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li class="column-1">
                                        <a href="index.html" title="">Home</a>
                                        <ul class="submenu">

                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="column-1">
                                        <a href="shop.html" title="">Shop</a>
                                        <ul class="submenu">

                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="column-1">
                                        <a href="#" title="">Features</a>
                                        <ul class="submenu">

                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="has-mega-menu">
                                        <a href="#" title="">Electronic</a>
                                    </li><!-- /.has-mega-menu -->
                                    <li class="column-1">
                                        <a href="#" title="">Pages</a>
                                        <ul class="submenu">

                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="column-1">
                                        <a href="blog.html" title="">Blog</a>
                                        <ul class="submenu">

                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                    <li class="column-1">
                                        <a href="contact.html" title="">Contact</a>
                                        <ul class="submenu">

                                        </ul><!-- /.submenu -->
                                    </li><!-- /.column-1 -->
                                </ul><!-- /.menu -->
                            </div><!-- /.mainnav -->
                        </div><!-- /.nav-wrap -->
                        <div class="today-deal">
                            <a href="#" title="">TODAY DEALS : <span style="color: #222222">${{$sum}}</span></a>
                        </div><!-- /.today-deal -->
                        <div class="btn-menu">
                            <span>7777000</span>
                        </div><!-- //mobile menu button -->
                    </div><!-- /.col-md-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-bottom -->
    </section><!-- /#header -->

    @yield('content')

<footer class="background">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget-ft widget-about">
                    <div class="logo logo-ft">
                        <a href="index.html" title="">
                            <img src="images/logos/logo-ft.png" alt="">
                        </a>
                    </div><!-- /.lgo-ft -->
                    <div class="widget-content">
                        <div class="icon">
                            <img src="images/icons/call.png" alt="">
                        </div>
                        <div class="info">
                            <p class="questions">Got Questions ? Call us 24/7!</p>
                            <p class="phone">Call Us: (888) 1234 56789</p>
                            <p class="address">
                                PO Box CT16122 Collins Street West, Victoria 8007,<br/>Australia.
                            </p>
                        </div>
                    </div><!-- /.widget-content -->
                    <ul class="social-list">
                        <li>
                            <a href="#" title="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <i class="fa fa-google" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul><!-- /.social-list -->
                </div><!-- /.widget-about -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget-ft widget-categories-ft">
                    <div class="widget-title">
                        <h3>Find By Categories</h3>
                    </div><!-- /.widget-title -->
                    <ul class="cat-list-ft">
                        <li>
                            <a href="#" title="">Desktops</a>
                        </li>
                        <li>
                            <a href="#" title="">Laptops & Notebooks</a>
                        </li>
                        <li>
                            <a href="#" title="">Components</a>
                        </li>
                        <li>
                            <a href="#" title="">Tablets</a>
                        </li>
                        <li>
                            <a href="#" title="">Software</a>
                        </li>
                        <li>
                            <a href="#" title="">Phones & PDAs</a>
                        </li>
                    </ul><!-- /.cat-list-ft -->
                </div><!-- /.widget-categries-ft -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-2 col-md-6">
                <div class="widget-ft widget-menu">
                    <div class="widget-title">
                        <h3>Customer Care</h3>
                    </div><!-- /.widget-title -->
                    <ul>
                        <li>
                            <a href="#" title="">
                                Contact us
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                Site Map
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                Wish List
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                Delivery Information
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                Terms & Conditions
                            </a>
                        </li>
                    </ul>
                </div><!-- /.widget-menu -->
            </div><!-- /.col-lg-2 col-md-6 -->
            <div class="col-lg-4 col-md-6">
                <div class="widget-ft widget-newsletter">
                    <div class="widget-title">
                        <h3>Sign Up To New Letter</h3>
                    </div><!-- /.widget-title -->
                    <p>Make sure that you never miss our interesting <br/>
                        news by joining our newsletter program
                    </p>
                    <form action="#" class="subscribe-form" method="get" accept-charset="utf-8">
                        <div class="subscribe-content">
                            <input type="text" name="email" class="subscribe-email" placeholder="Your E-Mail">
                            <button type="submit"><img src="images/icons/right-2.png" alt=""></button>
                        </div>
                    </form><!-- /.subscribe-form -->
                    <ul class="pay-list">
                        <li>
                            <a href="#" title="">
                                <img src="images/logos/ft-01.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <img src="images/logos/ft-02.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <img src="images/logos/ft-03.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <img src="images/logos/ft-04.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <img src="images/logos/ft-05.png" alt="">
                            </a>
                        </li>
                    </ul><!-- /.pay-list -->
                </div><!-- /.widget-newletter -->
            </div><!-- /.col-lg-4 col-md-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="widget widget-apps">
                    <div class="widget-title">
                        <h3>Mobile Apps</h3>
                    </div><!-- /.widget-title -->
                    <ul class="app-list">
                        <li class="app-store">
                            <a href="#" title="">
                                <div class="img">
                                    <img src="images/icons/app-store.png" alt="">
                                </div>
                                <div class="text">
                                    <h4>App Store</h4>
                                    <p>Available now on the</p>
                                </div>
                            </a>
                        </li><!-- /.app-store -->
                        <li class="google-play">
                            <a href="#" title="">
                                <div class="img">
                                    <img src="images/icons/google-play.png" alt="">
                                </div>
                                <div class="text">
                                    <h4>Google Play</h4>
                                    <p>Get in on</p>
                                </div>
                            </a>
                        </li><!-- /.google-play -->
                    </ul><!-- /.app-list -->
                </div><!-- /.widget-apps -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /footer -->

<section class="footer-bottom style1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright">All Rights Reserved © Techno Store 2017</p>
                <p class="btn-scroll">
                    <a href="#" title="">
                        <img src="images/icons/top.png" alt="">
                    </a>
                </p>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.footer-bottom -->

</div><!-- /.boxed -->

<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script type="text/javascript" src="{{asset("js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/tether.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/waypoints.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery.circlechart.js")}}"></script>
<script type="text/javascript" src="{{asset("js/easing.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery.zoom.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery.flexslider-min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/owl.carousel.js")}}"></script>
<script type="text/javascript" src="{{asset("js/smoothscroll.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery-ui.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery.mCustomScrollbar.js")}}"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&amp;region=GB"></script>
<script type="text/javascript" src="{{asset("js/gmap3.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/waves.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery.countdown.js")}}"></script>

<script type="text/javascript" src="{{asset("js/main.js")}}"></script>
<script>

    // let cart = {
    //     'prod_1' : 1,
    // };
    //
    // document.onclick = event => {
    //     if(event.target.classList.contains('plus')){
    //         plusFunction(event.target.dataset.id);
    //     }
    //     if(event.target.classList.contains('minus')){
    //         minusFunction(event.target.dataset.id);
    //     }
    // }
    //
    // //увеличение кол товара
    // const plusFunction = id => {
    //     cart[id]++;
    //     renderCart();
    // }
    //
    // //уменьшение кол товара
    // const minusFunction = id => {
    //     if(cart[id] - 1 == 0){
    //         deleteFunction(id);
    //         return true;
    //     }
    //     cart[id]--;
    //     renderCart();
    // }
    //
    // //удаление кол товара
    // const deleteFunction = id => {
    //     delete cart[id];
    //     renderCart();
    // }
    //
    // const renderCart = () => {
    //     console.log(cart);
    // }
    //
    // renderCart();
    new Vue({
        el:"#app",
        data:{
            counter:1
        },
        methods:{
            add:function () {
                this.counter++
            },
            minus:function () {
                if(this.counter>1){
                    this.counter--;
                }
            }
        }
    })

</script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}

</body>

<!-- Mirrored from creativelayers/themes/techno-html/index-v7.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Nov 2021 18:17:30 GMT -->
</html>
