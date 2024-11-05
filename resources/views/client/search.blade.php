@extends('layouts.clients.admin')
@section('main')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('admin.home') }}">home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip"
                                title="3"></button>

                            <button data-role="grid_4" type="button" class=" btn-grid-4" data-bs-toggle="tooltip"
                                title="4"></button>

                            <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip"
                                title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                    <div class="row shop_wrapper">
                        @if ($data->isEmpty())
                            @foreach ($products as $prod)
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ route('client.product' , $prod->id) }}">
                                                <img src="{{ asset('assets/img/product/' . $prod->image) }}" alt="">
                                            </a>
                                            {{-- <a class="secondary_img" href="product-details.html">
                                                <img src=" assets/img/product/product2.jpg" alt="">
                                            </a> --}}
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    @if ($prod->favorited)
                                                        <li class="wishlist">
                                                            <a title="disslike" href="{{ route('client.favorite', $prod->id) }}" title="Add to Wishlist">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="wishlist">
                                                            <a title="disslike" href="{{ route('client.favorite', $prod->id) }}" title="Add to Wishlist">
                                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    <li class="compare">
                                                        <a href="#" title="compare"><span class="ion-levels"></span>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view">
                                                            <span class="ion-ios-search-strong"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="{{ route('client.cart.add', $prod->id) }}" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="name"><b>{{ $prod->cat->name }}</b></span>
                                                <br>
                                                <span class="current_price">${{ number_format($prod->price) }}</span>
                                            </div>
                                            <div class="product_ratings">
                                                {{-- phần đánh giá chất lượng sản pahamr theo sao --}}
                                                {{-- <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul> --}}
                                            </div>
                                            <h3 class="product_name grid_name">
                                                <a href="product-details.html">{{ $prod->name }}</a>
                                            </h3>
                                        </div>
                                        {{-- <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Natus erro at congue
                                                        massa commodo sit</a></h3>
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                        ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                </div>
                                            </div>
                                            <div class="right_caption">
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                    aria-hidden="true"></i> Add to Wishlist</a></li>
                                                        <li class="compare"><a href="#" title="compare"><span
                                                                    class="ion-levels"></span> Compare</a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <span
                                                                    class="ion-ios-search-strong"></span> Quick View</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </figure>
                                </article>
                            </div>
                            @endforeach
                        @else
                            @foreach ($data as $prod)
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ route('client.product' , $prod->id) }}">
                                                <img src="{{ asset('assets/img/product/' . $prod->image) }}" alt="">
                                            </a>
                                            {{-- <a class="secondary_img" href="product-details.html">
                                                <img src=" assets/img/product/product2.jpg" alt="">
                                            </a> --}}
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    @if ($prod->favorited)
                                                        <li class="wishlist">
                                                            <a title="disslike" href="{{ route('client.favorite', $prod->id) }}" title="Add to Wishlist">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="wishlist">
                                                            <a title="disslike" href="{{ route('client.favorite', $prod->id) }}" title="Add to Wishlist">
                                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    <li class="compare">
                                                        <a href="#" title="compare"><span class="ion-levels"></span>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view">
                                                            <span class="ion-ios-search-strong"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="{{ route('client.cart.add', $prod->id) }}" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="name"><b>{{ $prod->cat->name }}</b></span>
                                                <br>
                                                <span class="current_price">${{ number_format($prod->price) }}</span>
                                            </div>
                                            <div class="product_ratings">
                                                {{-- phần đánh giá chất lượng sản pahamr theo sao --}}
                                                {{-- <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul> --}}
                                            </div>
                                            <h3 class="product_name grid_name">
                                                <a href="product-details.html">{{ $prod->name }}</a>
                                            </h3>
                                        </div>
                                        {{-- <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Natus erro at congue
                                                        massa commodo sit</a></h3>
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                        ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                                </div>
                                            </div>
                                            <div class="right_caption">
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="add to cart">Add to cart</a>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                    aria-hidden="true"></i> Add to Wishlist</a></li>
                                                        <li class="compare"><a href="#" title="compare"><span
                                                                    class="ion-levels"></span> Compare</a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modal_box" title="quick view"> <span
                                                                    class="ion-ios-search-strong"></span> Quick View</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </figure>
                                </article>
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h2>Categories</h2>
                                <ul>
                                    @foreach ($cats_home as $cat)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="{{ route('client.category', $cat->id) }}">{{ $cat->name }}</a>
                                        <span class="">{{ $cat->products->count() }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h2>Filter by price</h2>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />

                                </form>
                            </div>

                            {{-- có thể thêm layout cho đẹp sản phẩm --}}
                            <div class="widget_list">
                                <h2>Featured products</h2>
                                <div class="recent_product_container">
                                    @foreach ($news_products as $np)
                                    <article class="recent_product_list">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="{{ route('client.product', $np->id) }}">
                                                    <img src="{{ asset('assets/img/product/' . $np->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.html">Latest products</a></h3>
                                                <div class="price_box">
                                                    <span class="name">{{ $np->name}}</span>
                                                    <span class="current_price">${{ $np->price}}</span>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="widget_list tags_widget">
                                <h2>Product tags</h2>
                                <div class="tag_cloud">
                                    <a href="#">blouse</a>
                                    <a href="#">clothes</a>
                                    <a href="#">fashion</a>
                                    <a href="#">handbag</a>
                                    <a href="#">laptop</a>
                                </div>
                            </div> --}}
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
@endsection