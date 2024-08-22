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
                            <li>blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog body area start-->
    <div class="blog_details mt-60">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper">
                        <article class="single_blog">
                            <figure>
                                <div class="post_header">
                                    <h3 class="post_title">Blog image post (sticky)</h3>
                                    <div class="blog_meta">
                                        <span class="author">Posted by : <a href="#">admin</a> / </span>
                                        <span class="post_date">On : <a href="#">April 10, 2022</a> /</span>
                                        <span class="post_category">In : <a href="#">Company, Image, Travel</a></span>
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                    <a href="#"><img src="{{ asset('assets/img/blog/blog-big1.jpg')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <div class="post_content">
                                        <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam
                                            tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum
                                            condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis
                                            elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum
                                            odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed
                                            convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi
                                            vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                            molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed
                                            vitae fringilla enim, nec ullamcorper arcu.</p>
                                        <blockquote>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                consectetur. In venenatis elit ac ultrices convallis. Duis est nisi,
                                                tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet
                                                ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed
                                                finibus tortor eu scelerisque scelerisque.</p>
                                        </blockquote>
                                        <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam
                                            tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum
                                            condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis
                                            elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum
                                            odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed
                                            convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi
                                            vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                            molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed
                                            vitae fringilla enim, nec ullamcorper arcu.</p>
                                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In
                                            dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra
                                            condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo
                                            ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia.
                                            Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis.
                                            Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante
                                            quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis,
                                            placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna
                                            sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra
                                            facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar
                                            sollicitudin molestie.</p>
                                    </div>
                                    <div class="entry_content">
                                        <div class="post_meta">
                                            <span>Tags: </span>
                                            <span><a href="#">, fashion</a></span>
                                            <span><a href="#">, t-shirt</a></span>
                                            <span><a href="#">, white</a></span>
                                        </div>

                                        <div class="social_sharing">
                                            <p>share this post:</p>
                                            <ul>
                                                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="related_posts">
                            <h3>Related posts</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <img src="{{ asset('assets/img/blog/blog3.jpg')}}" alt="">
                                            </div>
                                            <figcaption class="related_content">
                                                <div class="blog_meta">
                                                    <span class="author">By : <a href="#">admin</a> / </span>
                                                    <span class="post_date"> April 11, 2022 </span>
                                                </div>
                                                <h4><a href="#">Post with Gallery</a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <img src="{{ asset('assets/img/blog/blog4.jpg')}}" alt="">
                                            </div>
                                            <figcaption class="related_content">
                                                <div class="blog_meta">
                                                    <span class="author">By : <a href="#">admin</a> / </span>
                                                    <span class="post_date"> April 11, 2022 </span>
                                                </div>
                                                <h4><a href="#">Post with Audio</a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <img src="{{ asset('assets/img/blog/blog5.jpg')}}" alt="">
                                            </div>
                                            <figcaption class="related_content">
                                                <div class="blog_meta">
                                                    <span class="author">By : <a href="#">admin</a> / </span>
                                                    <span class="post_date"> April 11, 2022 </span>
                                                </div>
                                                <h4><a href="#">Maecenas ultricies</a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="comments_box">
                            <h3>3 Comments </h3>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="{{ asset('assets/img/blog/comment3.png.jpg')}}" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2022 at 1:38 am</span>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>

                            </div>
                            <div class="comment_list list_two">
                                <div class="comment_thumb">
                                    <img src="{{ asset('assets/img/blog/comment3.png.jpg')}}" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Demo</a></h5>
                                        <span>October 16, 2022 at 1:38 am</span>
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="{{ asset('assets/img/blog/comment3.png.jpg')}}" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2022 at 1:38 am</span>
                                    </div>
                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at
                                    </p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Comment </label>
                                        <textarea name="comment" id="review_comment"></textarea>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="author">Name</label>
                                        <input id="author" type="text">

                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="email">Email </label>
                                        <input id="email" type="text">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="website">Website </label>
                                        <input id="website" type="text">
                                    </div>
                                </div>
                                <button class="button" type="submit">Post Comment</button>
                            </form>
                        </div>

                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_search">
                            <h3>Search</h3>
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">search</button>
                            </form>
                        </div>
                        <div class="widget_list comments">
                            <h3>Recent Comments</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/blog/comment2.png.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span> <a href="#">demo</a> says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/blog/comment2.png.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">admin</a> says:</span>
                                    <a href="blog-details.html">Quisque orci porta...</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/blog/comment2.png.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">demo</a> says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/blog/comment2.png.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">admin</a> says:</span>
                                    <a href="blog-details.html">Quisque semper nunc</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_post">
                            <h3>Recent Posts</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/blog/blog12.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Blog image post</a></h3>
                                    <span>March 16, 2022 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/blog/blog13.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                    <span>March 16, 2022 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/blog/blog14.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Post with Audio</a></h3>
                                    <span>March 16, 2022 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('assets/img/blog/blog15.jpg')}}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Post with Video</a></h3>
                                    <span>March 16, 2022 </span>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_categories">
                            <h3>Archives</h3>
                            <ul>
                                <li><a href="#">April 2022</a></li>
                            </ul>
                        </div>
                        <div class="widget_list widget_categories">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Audio</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Image</a></li>
                                <li><a href="#">Other</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Uncategorized</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="#">Wordpress</a></li>
                            </ul>
                        </div>
                        <div class="widget_list widget_tag">
                            <h3>Tag products</h3>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="#">asian</a></li>
                                    <li><a href="#">brown</a></li>
                                    <li><a href="#">euro</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->
@endsection