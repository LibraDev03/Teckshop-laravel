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
                                <li>Wishlist</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->
    
    
        <!--wishlist area start -->
        <div class="wishlist_area mt-60">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc wishlist">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_thumb">Stt</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_remove">Delete</th>
                                                <th class="product_total">Add To Cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($favorites as $myFav)
                                            <tr>
                                                <td class="product_id"> {{ $loop->index+1 }}</td>
                                                <td class="product_thumb"><a href="#">
                                                    <img src="{{asset('assets/img/product/' . $myFav->prodF->image)}}" alt=""></a>
                                                </td>
                                                <td class="product_name"><a href="#">{{ $myFav->prodF->name }}</a></td>
                                                <td class="product-price">${{ $myFav->prodF->price }}</td>
                                                <td class="product_remove">
                                                    <a title="disslike" href="{{ route('client.favorite', $myFav->product_id) }}">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <td class="product_total"><a href="#">Add To Cart</a></td>
    
    
                                            </tr>    
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
    
                            </div>
                        </div>
                    </div>
    
                </form>
                <div class="row">
                    <div class="col-12">
                        <div class="wishlist_share">
                            <h4>Share on:</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        <!--wishlist area end -->
@endsection