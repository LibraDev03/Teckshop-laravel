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
                                <li>History</li>
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
                                                <th class="product_total">Order date</th>
                                                <th>total</th>
                                                <th>details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total=0; ?>
                                            @foreach ($auth->orders as $item)
                                            <tr>
                                                <td class="product_id">{{ $loop->index+1 }}</td>
                                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                                <td>${{ number_format($item->totalPrice) }}</td>
                                                <td class="product_total"><a href="{{ route('client.detail', $item->id) }}">detaill</a></td>
                                            </tr>
                                            <?php ?>
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
                </form>
            </div>
        </div>
        <!--shopping cart area end -->
@endsection