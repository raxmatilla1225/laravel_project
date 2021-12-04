@extends('site.layouts.layout')
@section('content')

    <section class="flat-product-detail">
        <div class="container">
            <div class="row">
                @php

                    use App\Models\Product;
                    use Illuminate\Support\Facades\DB;

                    $products = DB::select("select * from products where id = $id");

                @endphp
                @foreach($products as $product)
                <div class="col-md-6">
                    <div class="image pull-right-10" style="padding-left: 135px">
                        <img src="{{asset("uploads/product_images/$product->image")}}" alt='' width="200px" height="400px"/>
                    </div><!-- /.flexslider -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">

                        <div class="product-detail">
                            <div class="header-detail">
                                <h4 class="name">{{$product->name}}</h4>
                                <div class="category">
                                    Smart Watches
                                </div>
                            </div><!-- /.header-detail -->
                            <div class="content-detail">
                                <div class="price">
                                    <div class="regular">
                                        {{$product->price*1.2}}
                                    </div>
                                    <div class="sale">
                                        {{$product->price}}
                                    </div>
                                </div>
                                <div class="info-text">
                                    {{$product->desc}}
                                </div>
                            </div><!-- /.content-detail -->
                            <div class="footer-detail">
                                <div class="quanlity-box">
                                    <div class="quanlity">
                                        <button class="btn btn-up plus" data-id="prod_1">+</button>
                                        <input type="number" name="number" value="" min="1" max="100" placeholder="Quanlity">
                                        <button class="btn btn-down minus" data-id="prod_1">-</button>
                                    </div>

                                    <div class="price-total">
                                        <p>852</p>
                                    </div>
                                </div><!-- /.quanlity-box -->
                                <div class="box-cart style2">
                                    <div class="btn-add-cart">
                                        <a href="#" title=""><img src="images/icons/add-cart.png" alt="">Add to Cart</a>
                                    </div>
                                    <div class="compare-wishlist">
                                        <a href="compare.html" class="compare" title=""><img
                                                src="images/icons/compare.png" alt="">Compare</a>
                                        <a href="compare.html" class="wishlist" title=""><img
                                                src="images/icons/wishlist.png" alt="">Wishlist</a>
                                    </div>
                                </div><!-- /.box-cart -->
                            </div><!-- /.footer-detail -->
                        </div><!-- /.product-detail -->
                </div><!-- /.col-md-6 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-product-detail -->

{{--        <section class="md-5">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <img src="" alt="image_pr1">--}}
{{--                    <p>Title_1</p>--}}
{{--                    <button class="btn btn-primary plus" data-id="prod_1">+</button>--}}
{{--                    <button class="btn btn-primary minus" data-id="prod_1">-</button>--}}
{{--                </div>--}}

{{--                <div class="col-md-6">--}}
{{--                    <img src="" alt="image_pr2">--}}
{{--                    <p>Title_2</p>--}}
{{--                    <button class="btn btn-primary plus" data-id="prod_2">+</button>--}}
{{--                    <button class="btn btn-primary minus" data-id="prod_2">-</button>--}}
{{--                </div>--}}

{{--                <div class="col-md-12">--}}
{{--                    <p>Total</p>--}}
{{--                    <p></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

@endsection
