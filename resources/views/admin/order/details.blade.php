@extends('layouts.admin.index')
@section('main')
<div class="container">
    <div class="row">
        <!-- Bảng 1 -->
        <div class="col-md-6">
            <h2>Billing details</h2>
            <form action="{{ route('admin.details', $order->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="row border">
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label>Name of orderer <span>*</span></label>
                            <p>{{$order->name_orderer}}</p>
                        </div>
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label> Email Address <span>*</span></label>
                            <p>{{$order->email_orderer}}</p>
                        </div>
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label>Name of consignee<span>*</span></label>
                            <p>{{$order->name_consignee}}</p>
                        </div>
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label>Phone of consignee<span>*</span></label>
                            <p>{{$order->phone_consignee}}</p>
                        </div>
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <label>Delivery address<span>*</span></label>
                            <p>{{$order->address_consignee}}</p>
                        </div>
                        <div class="col-lg-6 mb-20 border-bottom p-3">
                            <div class="order-notes">
                                <label for="order_note">Order Notes<span>*</span></label>
                                <p>{{$order->order_notes}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Bảng 2 -->
        <div class="col-md-6">
            <h2>Order</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->details as $item)
                        <tr>
                            <td>
                                <img src="{{ asset('assets/img/product/' . $item->product->image) }}" alt="" width="20%">
                                <strong>x{{$item->quantity}}</strong>
                                <br>
                                <p>{{$item->product->name}}</p>
                            </td>
                            <td>${{ number_format($item->price)}}</td>
                            <td>${{ number_format($item->price * $item->quantity)}}
                                <br>
                                + $7,000(ship)</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection