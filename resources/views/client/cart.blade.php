@extends('layouts.clients.admin')
@section('main')
        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a href="index.html">home</a></li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->
    
        <!--shopping cart area start -->
        <div class="shopping_cart_area mt-60">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_thumb">Stt</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                                <th class="product_remove">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carts as $item)
                                            <tr>
                                                <td class="product_id"> {{ $loop->index+1 }}</td>
                                                <td class="product_thumb">
                                                    <a href=""><img src="{{asset('assets/img/product/' . $item->prodC->image)}}" alt=""></a>
                                                </td>
                                                <td class="product_name"><a href="#">{{ $item->prodC->name }}</a></td>
                                                <td class="product-price">${{ number_format($item->prodC->price) }}</td>
                                                <td class="product_quantity">
                                                    {{ $item->quantity }}
                                                </td>
                                                <td class="product_total">${{ number_format($item->prodC->price * $item->quantity, 0, ',', '.') }}</td>
                                                <td class="product_remove"><a href="{{ route('client.cart.delete', $item->product_id) }}"><i class="fa fa-trash-o"></i></a></td>
    
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{-- update cart --}}
                                {{-- <div class="cart_submit">
                                    <button type="submit">update cart</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!--coupon code area start-->
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Coupon</h3>
                                    <div class="coupon_inner">
                                        <p>Enter your coupon code if you have one.</p>
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart_amount"></p>
                                        </div>
                                        <div class="cart_subtotal ">
                                            <p>Shipping</p>
                                            <p class="cart_amount"><span>Flat Rate:</span>7$</p>
                                        </div>
                                        <a href="#">Calculate shipping</a>

                                        <div class="cart_subtotal">
                                            <p>Total</p>
                                            <p class="cart_amount">£215.00</p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a href="#">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area end-->
                </form>
            </div>
        </div>
        <!--shopping cart area end -->
@endsection