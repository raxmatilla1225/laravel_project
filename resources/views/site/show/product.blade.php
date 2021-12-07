@extends('site.layouts.layout')
@section('content')

    @php
        use App\Models\Product;
        use Illuminate\Support\Facades\DB;

        $products = DB::select("select * from products where id = $id");
        $data = [];
        foreach ($products as $product){
        $data['id'] = $product->id;
        $data['name'] = $product->name;
        $data['price'] = $product->price;
        $data['desc'] = $product->desc;
        $data['image'] = $product->image;
        }

        $image = $data['image'];
    @endphp

    <section class="flat-product-detail">
        <div class="container">
            <form method="post" action="{{route('store.cart')}}" class="row" enctype="multipart/form-data">
                @csrf

                    <div class="col-md-6">
                        <div class="image pull-right-10" style="padding-left: 135px">
                            <img src="{{asset("uploads/product_images/".$data['image'])}}" alt='' width="200px" height="400px"/>
                        </div><!-- /.flexslider -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">

                        <div class="product-detail">
                            <div class="header-detail">
                                <h4 class="name">{{$data['name']}}</h4>
                                <div class="category">
                                    Smart Watches
                                </div>
                            </div><!-- /.header-detail -->
                            <div class="content-detail">
                                <div class="price">
                                    <div class="regular">
                                        {{$data['price']*1.2}}
                                    </div>
                                    <div class="sale">
                                        {{$data['price']}}
                                    </div>
                                </div>
                                <div class="info-text">
                                    {{$data['desc']}}
                                </div>
                            </div><!-- /.content-detail -->
                            <div class="footer-detail">
                                <div class="quanlity-box">
                                    <div class="quanlity" id="app">
                                        <span class="btn btn-up" @click="add"></span>
                                        <input type="hidden" value="{{$data['id']}}" name="id">
                                        <input value="" min="1" max="100" :value="counter" name="count" placeholder="Quanlity">
                                        <span class="btn btn-down"  @click="minus"></span>
                                    </div>

{{--                                    <div class="price-total">--}}
{{--                                        <input type="text" :value="counter*{{$product->price}}">--}}
{{--                                    </div>--}}
                                </div><!-- /.quanlity-box -->
                                <div class="box-cart style2">
                                    <div class="btn-add-cart">
                                        <button class="btn btn-danger" type="submit">Add to Cart</button>
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

            </form><!-- /.row -->
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
