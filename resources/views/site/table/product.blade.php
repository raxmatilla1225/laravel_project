@extends('site.layouts.layout')


@section('content')

    @php

        use Illuminate\Support\Facades\DB;
        $products = DB::select("select  p.id, p.name, p.price, p.image, c.name as cat_n from products p inner join categories c on p.c_id = c.id where c.id = $id");

    @endphp
    <section class="flat-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumbs">
                        <li class="trail-item">
                            <a href="#" title="">Home</a>
                            <span><img src="images/icons/arrow-right.png" alt=""></span>
                        </li>
                        @php

                            $products = DB::select("select c.name as cat_n from products p inner join categories c on p.c_id = c.id where c.id = $id");
                            $data = [];
                            foreach ($products as $product)
                            $data['cat_n'] = $product->cat_n;

                        @endphp
                        <li class="trail-end">
                            <a href="#" title="">{{$data['cat_n']}}</a>
{{--                            <a href="#" title="">Smartphones</a>--}}
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-breadcrumb -->

    <main id="shop" class="style2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-shop">
                        <div class="wrap-imagebox">
                            <div class="flat-row-title style4">
                                <h3>{{$data['cat_n']}}</h3>
                                <span>
										Showing 1–15 of 20 results
									</span>
                                <div class="clearfix"></div>
                            </div><!-- /.flat-row-title style4 -->
                            <div class="sort-product style1">
                                <ul class="icons">
                                    <li>
                                        <img src="images/icons/list-1.png" alt="">
                                    </li>
                                    <li>
                                        <img src="images/icons/list-2.png" alt="">
                                    </li>
                                    <li class="filter waves-effect">
                                        Filter
                                    </li>
                                </ul><!-- /.icons -->
                                <div class="box-filter">
                                    <div class="widget widget-categories">
                                        <div class="widget-title">
                                            <h3>Categories<span></span></h3>
                                        </div>
                                        <ul class="cat-list style1 widget-content">
                                            <li>
                                                <span>Accessories<i>(03)</i></span>
                                                <ul class="cat-child">
                                                    <li>
                                                        <a href="#" title="">TV</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Monitors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Software</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span>Cameras<i>(19)</i></span>
                                                <ul class="cat-child">
                                                    <li>
                                                        <a href="#" title="">Go Pro</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Video</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Software</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <span>Computers<i>(56)</i></span>
                                                <ul class="cat-child">
                                                    <li>
                                                        <a href="#" title="">Desktop</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Monitors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Software</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span>Laptops<i>(03)</i></span>
                                                <ul class="cat-child">
                                                    <li>
                                                        <a href="#" title="">Desktop</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Monitors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Software</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span>Networking<i>(03)</i></span>
                                                <ul class="cat-child">
                                                    <li>
                                                        <a href="#" title="">Monitors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Software</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span>Old Products<i>(89)</i></span>
                                                <ul class="cat-child">
                                                    <li>
                                                        <a href="#" title="">Monitors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Software</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span>Smartphones<i>(90)</i></span>
                                                <ul class="cat-child">
                                                    <li>
                                                        <a href="#" title="">Apple</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">HTC</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Sony</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Samsung</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">LG</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span>Software<i>(23)</i></span>
                                                <ul class="cat-child">
                                                    <li>
                                                        <a href="#" title="">Desktop</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">Monitors</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="">BKAV</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul><!-- /.cat-list -->
                                    </div><!-- /.widget-categories -->
                                    <div class="widget widget-price">
                                        <div class="widget-title">
                                            <h3>Price<span></span></h3>
                                        </div>
                                        <div class="widget-content">
                                            <p>Price</p>
                                            <div class="price search-filter-input">
                                                <div id="slider-range" class="price-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" ></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span></div>
                                                <p class="amount">
                                                    <input type="text" id="amount" disabled="">
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- /.widget widget-price -->
                                    <div class="widget widget-brands">
                                        <div class="widget-title">
                                            <h3>Brands<span></span></h3>
                                        </div>
                                        <div class="widget-content">
                                            <form action="#" method="get" accept-charset="utf-8">
                                                <input type="text" name="brands" placeholder="Brands Search">
                                            </form>
                                            <ul class="box-checkbox scroll">
                                                <li class="check-box">
                                                    <input type="checkbox" id="checkbox1" name="checkbox1">
                                                    <label for="checkbox1">Apple <span>(4)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="checkbox2" name="checkbox2">
                                                    <label for="checkbox2">Samsung <span>(2)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3">
                                                    <label for="checkbox3">HTC <span>(2)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="checkbox4" name="checkbox4">
                                                    <label for="checkbox4">LG <span>(2)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="checkbox5" name="checkbox5">
                                                    <label for="checkbox5">Dell <span>(1)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="checkbox6" name="checkbox6">
                                                    <label for="checkbox6">Sony <span>(3)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="checkbox7" name="checkbox7">
                                                    <label for="checkbox7">Bphone <span>(4)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="checkbox8" name="chebckox8">
                                                    <label for="checkbox8">Oppo <span>(4)</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.widget widget-brands -->
                                    <div class="widget widget-color">
                                        <div class="widget-title">
                                            <h3>Color<span></span></h3>
                                            <div style="height: 2px"></div>
                                        </div>
                                        <div class="widget-content">
                                            <form action="#" method="get" accept-charset="utf-8">
                                                <input type="text" name="color" placeholder="Color Search">
                                            </form>
                                            <div style="height: 5px"></div>
                                            <ul class="box-checkbox scroll">
                                                <li class="check-box">
                                                    <input type="checkbox" id="check1" name="check1">
                                                    <label for="check1">Black <span>(4)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="check2" name="check2">
                                                    <label for="check2">Yellow <span>(2)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="check3" name="check3">
                                                    <label for="check3">White <span>(2)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="check4" name="check4">
                                                    <label for="check4">Blue <span>(2)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="check5" name="check5">
                                                    <label for="check5">Red <span>(1)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="check6" name="check6">
                                                    <label for="check6">Pink <span>(3)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="check7" name="check7">
                                                    <label for="check7">Green <span>(4)</span></label>
                                                </li>
                                                <li class="check-box">
                                                    <input type="checkbox" id="check8" name="check8">
                                                    <label for="check8">Gold <span>(4)</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.widget widget-color -->
                                </div><!-- /.box-filter -->
                                <div class="sort">
                                    <div class="popularity">
                                        <select name="popularity">
                                            <option value="">Sort by popularity</option>
                                            <option value="">Sort by popularity</option>
                                            <option value="">Sort by popularity</option>
                                            <option value="">Sort by popularity</option>
                                        </select>
                                    </div>
                                    <div class="showed">
                                        <select name="showed">
                                            <option value="">Show 15</option>
                                            <option value="">Show 15</option>
                                            <option value="">Show 15</option>
                                            <option value="">Show 15</option>
                                        </select>
                                    </div>
                                </div><!-- /.sort -->
                                <div class="clearfix"></div>
                            </div><!-- /.sort-product style1 -->
                            <div class="row">
                                @php

                                    $products = DB::select("select  p.id, p.name, p.price, p.image, c.name as cat_n from products p inner join categories c on p.c_id = c.id where c.id = $id");

                                @endphp
                                @foreach($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="imagebox">
                                            <div class="image">
                                                <a href="{{url('product_info/'.$product->id)}}" title="">
                                                    <img width="100" src="{{asset("uploads/product_images/".$product->image)}}" alt="">
                                                </a>
                                            </div>

                                            <div class="box-content">
                                                <div class="cat-name">
{{--                                                    <a href="#" title="">Mobile phone</a>--}}{{--product_category--}}
                                                    <a href="#" title="">{{$product->cat_n}}</a>{{--product_category--}}
{{--                                                    <a href="#" title="">Smartphones</a>--}}{{--product_category--}}
                                                </div>
                                                <div class="product-name">
                                                    <a href="#" title="">{{$product->name}}</a>{{--product_name--}}
                                                </div>
                                                <div class="price">
                                                    <span class="sale">{{$product->price}}$</span>{{--product_price--}}
                                                    <span class="regular">{{$product->price+($product->price)*.2}}$</span>{{--product_price--}}
                                                </div>
                                            </div><!-- /.box-content -->
                                            <div class="box-bottom">
                                                <div class="btn-add-cart">
                                                    <a href="#" title="">
                                                        <img src="images/icons/add-cart.png" alt="">Add to Cart
                                                    </a>
                                                </div>
                                                <div class="compare-wishlist">
                                                    <a href="#" class="compare" title="">
                                                        <img src="images/icons/compare.png" alt="">Compare
                                                    </a>
                                                    <a href="#" class="wishlist" title="">
                                                        <img src="images/icons/wishlist.png" alt="">Wishlist
                                                    </a>
                                                </div>
                                            </div><!-- /.box-bottom -->
                                        </div><!-- /.imagebox -->
                                    </div><!-- /.product-box -->
                                </div><!-- /.col-lg-3 col-md-4 col-sm-6 -->

                                @endforeach

                            </div><!-- /.row -->
                        </div><!-- /.wrap-imagebox -->
                        <div class="blog-pagination style1">
								<span>
									Showing 1–15 of 20 results
								</span>
                            <ul class="flat-pagination style1">
                                <li class="prev">
                                    <a href="#" title="">
                                        <img src="images/icons/left-1.png" alt="">Prev Page
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect" title="">01</a>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect" title="">02</a>
                                </li>
                                <li class="active">
                                    <a href="#" class="waves-effect" title="">03</a>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect" title="">04</a>
                                </li>
                                <li class="next">
                                    <a href="#" title="">
                                        Next Page<img src="images/icons/right-1.png" alt="">
                                    </a>
                                </li>
                            </ul><!-- /.flat-pagination -->
                            <div class="clearfix"></div>
                        </div><!-- /.blog-pagination -->
                    </div><!-- /.main-shop -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </main><!-- /#shop -->


@endsection
