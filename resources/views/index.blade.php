@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
 
        <div class="container">
            <div class="row"> 
                <div class="col-md-8 col-lg-8 col-12 ">
                    <div class="container d-flex flex-column justify-content-left align-items-left text-left position-relative" data-aos="fade-up">
                        {{-- <img src="{{ asset('fontend/assets/img/quick.png') }}"> --}}
                        <h2><strong>Shahjalal Express Ltd</strong></h2>
                        <p>The trusted money remittance services. Seamless process and variety of options for your money transfer,travelling and cargo needs.</p>
                        <div class="d-flex">
                        <a href="https://worldwide.shahjalalexpress.com/" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12" style="margin-top: 8%;">
                  <iframe src="https://worldwidesvc.co.uk/shacal/indexv2.php?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9615" style="border:0px  #ffffff none float:left;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="430" width="100%" allowfullscreen></iframe>
                    <div class="text-center">
                <p class="text-white" style="font-size:14px"><strong>Powered By</strong> <img  src="frontend/assets/img/power.png" class="img-fluid" width="200" alt="Worldwide"></p>
            </div>
                </div>
            </div>
        </div>
    
    </section>
    
    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-graph-up"></i></div>
                            <h4><a href="" class="stretched-link">CHECK FOR BEST RATES</a></h4>
                            <p>Use our calculator to get  your expected quote with smoothly and easily.</p>
                        </div>
                    </div><!-- End Service Item -->
 
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-lock"></i></div>
                            <h4><a href="" class="stretched-link">SAFE & SECURE</a></h4>
                            <p>Security is our priority, identity checks and authentication on every transaction by providing recipient details and ID documents.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-hr"></i></div>
                            <h4><a href="" class="stretched-link">FAST TRANSFER</a></h4>
                            <p>You can easily transfer cash anywhere using webportal. You also transfer to a Bangladesh bank in a workday.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-envelope-paper"></i></div>
                            <h4><a href="" class="stretched-link">PAYOUT NOTIFICATIONS</a></h4>
                            <p>Get inform when the recipient collects the transaction.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

     <!--start another feature section-->
        <section class="business_section" style="background-color:#e2e4e729;">
            <div class="container">
                <div class="row g-5 align-items-top" data-aos="fade-up">
                    <div class="col-md-4 col-12 ">
                    <img class="d-block m-auto mb-5" src="{{asset('frontend/assets/img/mobile.png')}}" alt=""style="height:330px;object-fit:contain">
                        <h3 style="color:#4067b0;">Mobile App</h3>
                        <p class="mt-4 mb-4">We made a mobile app to send money. Using our app you can easily and comfortly operate transaction system from your own home and anywhere. 
                            </p>
                            <p>
                               The goal is to help you execute tasks or enjoy our services remotely and conveniently. The interface is user-friendly which will allow you to navigate the features withease.</p>
                                <div class="mt-4 d-flex">
                                    <a href="https://play.google.com/store/apps/details?id=com.shahjalal" target="_blank"><img  class="me-3" src="{{asset('frontend/assets/img/playstore.png')}}" alt="" style="width:150px;object-fit:contain">
                                    </a>
                                    <a href="https://apps.apple.com/gb/app/shahjalal-express-ltd/id1602514016" target="_blank" ><img  class="" src="{{asset('frontend/assets/img/apple.png')}}" alt=""style="width:150px;object-fit:contain">
                                    </a>
                        </div>
                      
                    </div>
                    <div class="col-md-4 col-12 tex-start ">
                    <img class=" mb-5" src="{{asset('frontend/assets/img/laptop.png')}}" alt=""style="width:100%;height:330px;object-fit:contain">
                    <h3 class="mb-4" style="color:#4067b0;">Website</h3>
                        <p>We created an interactive and dynamic website where you can make transactions locally and internationally. We also customize the website design as your specific needs and requirements. The main goal is to use interactive and functionality.</p>
                        
                    </div>
                    <div class="col-md-4 col-12 tex-start ">
                    <img class="mb-5" src="{{asset('frontend/assets/img/shop.png')}}" alt=""style="width:100%;height:330px;object-fit:contain">
                    <h3 style="color:#4067b0;">Shop</h3>
                        <p class="mb-4 mt-4">We also set up an Agent Portal Shop where we can process the transaction on the customer’s behalf and their beneficiary will receive the payment in real-time. If customers feel to comfortable making the transaction themselves by using Agent.</p>
                        <p>The goal of these 3 platforms – mobile app, website, and Agent Portal Shop is to provide top-rate service and convenience to our customers.</p>
                    </div>
                </div>
    
            </div>
        </section>
        <!-- end of feature section -->
        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta mt-5">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>Making a wonderful and easiest transaction <span style="color:#7255f3;"> by using app.</span>
                        </h3>
                        <p>You can make a transaction using app from anywhere and anytime. It is very easy and secure way to make a transaction.</p>
                        <a class="cta-btn align-self-start" href="{{url('/guideline/')}}">Guide Line</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/img/send-money.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->

    </main><!-- End #main -->

@endsection
