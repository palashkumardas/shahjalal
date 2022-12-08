@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center" data-aos="fade-up">
                    <h2 style="color:#4067b0;">Contact</h2>
                    <ol>
                        <li><a href="{{url('/')}}" style="color:#4067b0;">Home</a></li>
                        <li style="color:#4067b0;">Contact</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header" data-aos="fade-up">
                    <h2>Contact Us</h2>
                </div>

            </div>

            <div class="map col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-12"></div>
                    <div class="col-lg-5 col-md-3 col-12">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div >
                                <h4 style="color:#4067b0;">Registered Address:</h4>
                                <p>231 East India Dock Road, London. United Kingdom, E14 0EG.</p>
                                
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4 style="color:#4067b0;">Email:</h4>
                                <p><a href="mailto:info@shahjalalexpress.co.uk"style="color:black;">info@shahjalalexpress.co.uk</a></p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4 style="color:#4067b0;">Call:</h4>
                                <p><a href="callto:+44 20 7537 1419" style="color: black;">+44 20 7537 1419
                                   </a>
                                <br><a href="callto:07883388370" style="color: black;">07883388370</a></p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>
            </div><!-- End Google Maps -->

            <div class="container">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-6 col-md-6  col-12">
                        <div class="info">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d310.3871276912808!2d-0.010991!3d51.511436!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x154099d9b5adef2a!2sSHAHJALAL%20EXPRESS%20LTD!5e0!3m2!1sen!2suk!4v1667491965755!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6  col-12">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                             <textarea class="form-control" name="message" placeholder="Message"
                                       required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
