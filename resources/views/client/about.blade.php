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
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--about section area -->
    <section class="about_section mt-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <figure>
                        <div class="about_thumb">
                            <img src="{{ asset('assets/img/about/about1.jpg')}} " alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1>eCommerce Bootstrap Template for Electronics Store</h1>
                            <p>Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus
                                odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti
                                integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi
                                mauris, elit sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem
                                consectetuer, sociosqu phasellus risus urna aliquam, ornare.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--services img area-->
    <div class="about_gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{ asset('assets/img/about/about2.jpg')}} " alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                                <h3>What do we do?</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto. The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using ‘Content here, content here’, making it
                                    look like readable English.</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{ asset('assets/img/about/about3.jpg')}} " alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                                <h3>History Of Us</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto. The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using ‘Content here, content here’, making it
                                    look like readable English.</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!--services img end-->

    <!--chose us area start-->
    <div class="choseus_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('assets/img/about/About_icon1.png')}} " alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Money Back Guarantee</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('assets/img/about/About_icon2.png')}} " alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Creative Design</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('assets/img/about/About_icon3.png')}} " alt="">
                        </div>
                        <div class="chose_content">
                            <h3>High Quality</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare
                                velit amet</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--chose us area end-->

    <!--team area start-->
    <div class="team_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{ asset('assets/img/about/3.jpg')}} " alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>h_son_ng</h3>
                                <h5>Director</h5>
                                <p>Phone: 0912313402 <br> Email: sonn20102003@gmail.com</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{ asset('assets/img/about/4.jpg')}} " alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>h_son_ng</h3>
                                <h5>Designer</h5>
                                <p>Fb : Hoang Son <br> Instagram : h_son_ng</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{ asset('assets/img/about/7.jpg')}} " alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>h_son_ng</h3>
                                <h5>Developer</h5>
                                <p> Github : LibraDev03  <br> Github : Cury1Dev </p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="{{ asset('assets/img/about/6.jpg')}} " alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>h_son_ng</h3>
                                <h5>Coder</h5>
                                <p> MB : 5200120102003 <br> Viettinbank : 106877450268</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!--team area end-->
@endsection