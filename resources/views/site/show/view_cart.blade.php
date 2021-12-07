@extends('site.layouts.layout')

@section('content')

    <section class="flat-shop-cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="flat-row-title style1">
                        <h3>Shopping Cart</h3>
                    </div>
                    <div class="table-cart">
                        <table>
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="img-product">
                                        <img src="images/product/other/12.jpg" alt="">
                                    </div>
                                    <div class="name-product">
                                        Apple iPad Mini <br />G2356
                                    </div>
                                    <div class="price">
                                        $1,250.00
                                    </div>
                                    <div class="clearfix"></div>
                                </td>
                                <td>
                                    <div class="quanlity">
                                        <span class="btn-down"></span>
                                        <input type="number" name="number" value="5" min="1" max="100" placeholder="Quanlity">
                                        <span class="btn-up"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="total">
                                        $6,250.00
                                    </div>
                                </td>
                                <td>
                                    <a href="#" title="">
                                        <img src="images/icons/delete.png" alt="">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img-product">
                                        <img src="images/product/other/11.jpg" alt="">
                                    </div>
                                    <div class="name-product">
                                        Beats Pill+ Portable<br />Speaker
                                    </div>
                                    <div class="price">
                                        $1,250.00
                                    </div>
                                    <div class="clearfix"></div>
                                </td>
                                <td>
                                    <div class="quanlity">
                                        <span class="btn-down"></span>
                                        <input type="number" name="number" value="5" min="1" max="100" placeholder="Quanlity">
                                        <span class="btn-up"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="total">
                                        $6,250.00
                                    </div>
                                </td>
                                <td>
											<span>
												<img src="images/icons/delete.png" alt="">
											</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="form-coupon">
                            <form action="#" method="get" accept-charset="utf-8">
                                <div class="coupon-input">
                                    <input type="text" name="coupon code" placeholder="Coupon Code">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            </form>
                        </div><!-- /.form-coupon -->
                    </div><!-- /.table-cart -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="cart-totals">
                        <h3>Cart Totals</h3>
                        <form action="#" method="get" accept-charset="utf-8">
                            <table>
                                <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="subtotal">$2,589.00</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td class="btn-radio">
                                        <div class="radio-info">
                                            <input type="radio" id="flat-rate" checked name="radio-flat-rate">
                                            <label for="flat-rate">Flat Rate: <span>$3.00</span></label>
                                        </div>
                                        <div class="radio-info">
                                            <input type="radio" id="free-shipping" name="radio-flat-rate">
                                            <label for="free-shipping">Free Shipping</label>
                                        </div>
                                        <div class="btn-shipping">
                                            <a href="#" title="">Calculate Shipping</a>
                                        </div>
                                    </td><!-- /.btn-radio -->
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="price-total">$1,591.00</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="btn-cart-totals">
                                <a href="#" class="update" title="">Update Cart</a>
                                <a href="#" class="checkout" title="">Proceed to Checkout</a>
                            </div><!-- /.btn-cart-totals -->
                        </form><!-- /form -->
                    </div><!-- /.cart-totals -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-shop-cart -->

@endsection
