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
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->
    
        <!--Checkout page section-->
        <div class="Checkout_section mt-60">
            <div class="container">
                <div class="row">

                    {{-- check lại đăng nhập nếu người dùng chưa đăng nhập khi đặt hàng --}}
                    {{-- <div class="col-12">
                        
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Returning customer?
                                <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_login"
                                    aria-expanded="true">Click here to login</a>
    
                            </h3>
                            <div id="checkout_login" class="collapse" data-bs-parent="#accordion">
                                <div class="checkout_info">
                                    <p>If you have shopped with us before, please enter your details in the boxes below. If
                                        you are a new customer please proceed to the Billing & Shipping section.</p>
                                    <form action="#">
                                        <div class="form_group">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group">
                                            <label>Password <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group group_3 ">
                                            <button type="submit">Login</button>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Returning customer?
                                <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon"
                                    aria-expanded="true">Click here to enter your code</a>
    
                            </h3>
                            
                        </div>
                    </div> --}}
                    
                </div>
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <form action="#">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total=0; ?>
                                            @foreach ($carts as $item)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/img/product/' . $item->prodC->image) }}" alt="" width="30%">
                                                    <strong>x{{$item->quantity}}</strong>
                                                    <br>
                                                    <p>{{$item->prodC->name}}</p>
                                                </td>
                                                <td>${{number_format($item->price)}}</td>
                                                <td>${{ number_format($item->prodC->price * $item->quantity, 0, ',', '.') }}</td>
                                            </tr>
                                            <?php $total += $item->prodC->price * $item->quantity; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <table>
                                        <tfoot>
                                            <tr>
                                                <th>Cart Subtotal</th>
                                                <td><strong>${{ number_format($total) }} </strong></td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td><strong>+ $7.00</strong></td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Order Total</th>
                                                <td><strong>${{ number_format($total + 7000) }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form action="{{ route('client.checkout') }}" method="POST">
                                @csrf
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="row ">
                                        <div class="col-lg-6 mb-20">
                                            <label>Name of orderer <span>*</span></label>
                                            <input type="text" value="@if (Auth::check() && Auth::user()->name){{ Auth::user()->name }}@endif" name="name_orderer" required>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label> Email Address <span>*</span></label>
                                            <input type="text" value="@if (Auth::check() && Auth::user()->email){{ Auth::user()->email }}@endif" name="email_orderer" required>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Name of consignee<span>*</span></label>
                                            <input type="text" placeholder="Name of consignee * (Người nhận)" name="name_consignee"required>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Phone of consignee<span>*</span></label>
                                            <input type="text" placeholder="Delivery phone number" name="phone_consignee" required>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>delivery address<span>*</span></label>
                                            <input type="text" placeholder="House number / Street / District / City / Country" name="address_consignee" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="order-notes">
                                                <label for="order_note">Order Notes<span>*</span></label>
                                                <input type="text" id="order_note" placeholder="Notes about your order, e.g. special notes for delivery." name="order_notes" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <div class="payment_method d-flex justify-content-between align-items-center">
                                        <div class="panel-default">
                                            <input id="payment_defult" name="payment_method" type="radio"/>
                                            <label for="payment_defult" data-bs-toggle="collapse" data-bs-target="#collapsedefult"
                                                aria-controls="collapsedefult">COD (Cash on Delivery)(Thanh toán khi nhận hàng)
                                            </label>
                                            <br>
                                            {{-- <input id="payment_defult" name="payment_method" type="radio"/>
                                            <label for="payment_defult" data-bs-toggle="collapse" data-bs-target="#collapsedefult"
                                                aria-controls="collapsedefult">PayPal=<img src="{{ asset('assets/img/icon/papyel.png')}}" alt="">
                                            </label> --}}
                                        </div>
                                        <div class="order_button">
                                            <button type="submit">thanh toan binh thuong</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form action="{{ route('vnpay_payments') }}" method="POST">
                                @csrf
                                <div class="order_button">
                                    <input type="hidden" name="total" value="{{$total}}" >
                                    <button type="submit" name="redirect">Thanh toan vnpay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Checkout page section end-->
@endsection