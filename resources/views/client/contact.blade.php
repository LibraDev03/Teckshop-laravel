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
    
        <!--contact map start-->
        <div class="contact_map mt-60">
            <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.945899879058!2d105.79866031424552!3d21.028511393389334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab87648efbbf%3A0xf272821d896c80e4!2zSOG6u20gTmdoaeG7h3AgS2ltIEzDqiBI4bqhbywgSMOgIE7hu4MsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1690103152116!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!--contact map end-->
    
        <!--contact area start-->
        <div class="contact_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact_message content">
                            <h3>contact us</h3>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                                formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                            <ul>
                                <li><i class="fa fa-fax"></i> Address : Chuyen My, Phu Xuyen, Ha Noi, Viet Nam .</li>
                                <li><i class="fa fa-envelope-o"> </i> Email: <a href="mailto:demo@example.com">sonn20102003@gmail.com</a>
                                </li>
                                <li><i class="fa fa-phone"></i> Phone:<a href="tel: 0123456789"> 0912313402  </a> </li>
                            </ul>>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact_message form">
                            <h3>Tell us your project</h3>
                            <form id="contact-form" method="POST" action="https://htmldemo.net/junko/junko/assets/mail.php">
                                <p>
                                    <label> Your Name (required)</label>
                                    <input name="name" placeholder="Name *" type="text">
                                </p>
                                <p>
                                    <label> Your Email (required)</label>
                                    <input name="email" placeholder="Email *" type="email">
                                </p>
                                <p>
                                    <label> Subject</label>
                                    <input name="subject" placeholder="Subject *" type="text">
                                </p>
                                <div class="contact_textarea">
                                    <label> Your Message</label>
                                    <textarea placeholder="Message *" name="message" class="form-control2"></textarea>
                                </div>
                                <button type="submit"> Send</button>
                                <p class="form-messege"></p>
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!--contact area end-->
@endsection