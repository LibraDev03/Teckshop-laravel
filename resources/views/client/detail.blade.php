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
                                <li>Order details</li>
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
                            <form action="{{ route('client.checkout') }}" method="POST">
                                @csrf
                                <h3 style="text-align: center">Billing Details</h3>
                                <div class="row">
                                    <div class="row ">
                                        <div class="col-lg-6 mb-20">
                                            <label>Name of orderer <span>*</span></label>
                                            <p>{{$order->name_orderer}}</p>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label> Email Address <span>*</span></label>
                                            <p>{{$order->email_orderer}}</p>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Name of consignee<span>*</span></label>
                                            <p>{{$order->name_consignee}}</p>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Phone of consignee<span>*</span></label>
                                            <p>{{$order->phone_consignee}}</p>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>delivery address<span>*</span></label>
                                            <p>{{$order->address_consignee}}</p>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <div class="order-notes">
                                                <label for="order_note">Order Notes<span>*</span></label>
                                                <p>{{$order->order_notes}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                                            @foreach ($order->details as $item)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/img/product/' . $item->product->image) }}" alt="" width="30%">
                                                    <strong>x{{$item->quantity}}</strong>
                                                    <br>
                                                    <p>{{$item->product->name}}</p>
                                                </td>
                                                <td>${{ number_format($item->price)}}</td>
                                                <td>${{ number_format($item->price * $item->quantity)}}+ $7,000</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- <table>
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
                                                <td><strong>${{ number_format($total + 7000) }} </strong></td>
                                            </tr>
                                        </tfoot>
                                    </table> --}}
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Checkout page section end-->
@endsection