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
                                <li>Camera & Video </li>
                                <li>shop</li>
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
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Natus erro at
                                                    congue massa commodo sit</a></h3>
                                        </div>
                                        <div class="product_content list_content">
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product4.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Auctor gravida
                                                    enim pellentesque quam ut risus</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Auctor gravida enim
                                                        pellentesque quam ut risus</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product5.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Auctor gravida
                                                    enim pellentesque quam ut risus</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Auctor gravida enim
                                                        pellentesque quam ut risus</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product8.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Cillum dolore
                                                    tortor nisl fermentum quam</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Cillum dolore tortor
                                                        nisl fermentum quam</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product10.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Condimentum
                                                    posuere consectetur urna</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Condimentum posuere
                                                        consectetur urna</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product11.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product12.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Cras neque
                                                    metus eugiat felis sem</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Cras neque metus
                                                        eugiat felis sem</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product13.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product14.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Donec tempus
                                                    pretium arcu et faucibus commodo</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Donec tempus pretium
                                                        arcu et faucibus commodo</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product15.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product16.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Duis pulvinar
                                                    obortis eleifend elementum</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Duis pulvinar
                                                        obortis eleifend elementum</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product17.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product18.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Epicuri per
                                                    lobortis eleifend elementum viverra odio</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Epicuri per lobortis
                                                        eleifend elementum viverra odio</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product19.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product20.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Natus erro at
                                                    congue massa commodo sit</a></h3>
                                        </div>
                                        <div class="product_content list_content">
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product21.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product22.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Cras neque
                                                    metus eugiat felis sem</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Cras neque metus
                                                        eugiat felis sem</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img
                                                    src="assets/img/product/product23.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                    src="assets/img/product/product24.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i
                                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="product-details.html">Cras neque
                                                    honcus consectetur magna</a></h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <h3 class="product_name"><a href="product-details.html">Cras neque honcus
                                                        consectetur magna</a></h3>
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
                                        </div>
                                    </figure>
                                </article>
                            </div>
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
                                    <h2>Product categories</h2>
                                    <ul>
                                        <li><a href="#">Cameras & Camcoders</a></li>
                                        <li class="widget_sub_categories"><a href="javascript:void(0)">Computer &
                                                Networking</a>
                                            <ul class="widget_dropdown_categories">
                                                <li><a href="#">Computer</a></li>
                                                <li><a href="#">Networking</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Games & Consoles</a></li>
                                        <li><a href="#">Headphone & Speaker</a></li>
                                        <li><a href="#">Movies & Video Games</a></li>
                                        <li><a href="#">Smartphone</a> </li>
                                        <li><a href="#">Uncategorized</a></li>
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
                                <div class="widget_list">
                                    <h2>Compare Products</h2>
                                    <div class="recent_product_container">
                                        <article class="recent_product_list">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="product-details.html"><img
                                                            src="assets/img/product/product1.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <h3><a href="product-details.html">Natus erro at congue</a></h3>
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>
                                        <article class="recent_product_list">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="product-details.html"><img
                                                            src="assets/img/product/product2.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <h3><a href="product-details.html">Auctor gravida enim</a></h3>
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>
                                        <article class="recent_product_list">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="product-details.html"><img
                                                            src="assets/img/product/product24.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <h3><a href="product-details.html">Cillum dolore tortor</a></h3>
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                                <div class="widget_list tags_widget">
                                    <h2>Product tags</h2>
                                    <div class="tag_cloud">
                                        <a href="#">blouse</a>
                                        <a href="#">clothes</a>
                                        <a href="#">fashion</a>
                                        <a href="#">handbag</a>
                                        <a href="#">laptop</a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!--sidebar widget end-->
                    </div>
                </div>
            </div>
        </div>
        <!--shop  area end-->
@endsection