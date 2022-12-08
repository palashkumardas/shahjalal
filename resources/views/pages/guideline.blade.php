@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center " data-aos="fade-up">
                    <h2 style="color:#4067b0;">App Guide Line</h2>
                    <ol>
                        <li><a href="{{url('/')}}" style="color:#4067b0;">Home</a></li>
                        <li style="color:#4067b0;">App Guide Line</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>App Guide Line</h2>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                            <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-1.png') }}" class="img-fluid" alt="">                      
                    </div>

                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">Bank through your phone with the Shahjalal Express App. <br>If you are looking for an easier and more convenient method of banking, let us help you with our app.<br><br> 1. Go to the App Store or the Google Play Store and search for “Shahjalal Express Limited”.</p>
                    </div>
                    <!--item one end-->
                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">2. Download the app using the App Store for Apple users, or the Google Play Store for Android users. It is free to download.</p>

                    </div>

                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-2.png') }}" class="img-fluid" alt="">                      

                    </div>
                    <!--item two end-->
                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-3.png') }}" class="img-fluid" alt="">                                

                    </div>

                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">
                            3. Once the app has been downloaded, you can open it.

                        </p>
                    </div>
                    <!--item three end-->
                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">
                            4. When you first open the app, you will be given some information about current exchange rates. You will also be asked to log in (if you are a returning user) or sign up (if you are a new user).
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-4.png') }}" class="img-fluid" alt="">                                
                    </div>
                    <!--item four end-->
                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-5.png') }}" class="img-fluid" alt="">                                
                    </div>
                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;" >
                            If you are a returning user, log in with your email and password. If you are new to the app, click “sign up” and fill in your details (first and last name, email, password, country of origin, phone number, referral code if you have one).
                        </p>
                    </div>
                    <!--item five end-->
                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">
                            5. A code will be sent to your email address. In order to verify your email address, locate this code and type it into the app (if you cannot find the email automatically sent to you, check your junk folder).
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-6.png') }}" class="img-fluid" alt="">                                
                    </div>
                    <!--item six end-->
                    <div class="col-lg-3">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-7.png') }}" class="img-fluid" alt="">                                                       
                    </div>
                    <div class="col-lg-3">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-8.png') }}" class="img-fluid" alt="">                                
                    </div>
                    <div class="col-lg-6" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">
                            6. Once you have logged in, you will see a dashboard of your account. If you want to send money, first choose which country you would like to send money to. At the moment, you can choose between Bangladesh and Pakistan.
                        </p>
                    </div>
                    <!--item seven end-->                  
                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">
                            7. Choose how you want to send money. If you are sending money to Pakistan, you can either bank transfer or select cash pickup from select bank stores. If you are sending money to Bangladesh, you can bank transfer or cash pickup, but you can also send via bKash.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-9.png') }}" class="img-fluid" alt="">                                                       
                    </div>                   
                    <!--item eight end-->
                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-10.png') }}" class="img-fluid" alt="">                                                       
                    </div>
                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">
                            8. Once you have selected your method (e.g. bank transfer), you will then input the amount that you are sending. The screen will give you a conversion rate (e.g. 1,000 GPB = 116,100 BDT), and will also identify the transfer fee, resulting in the final payable amount (in this case 1,015 GBP). Once you are satisfied with the amount you are sending, press “Proceed with Sending Payment”.
                        </p>
                    </div>                   
                    <!--item nine end-->
                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;">
                            9. You will then be directed to add the recipient. If you do not have the recipient already loaded onto your user, you can press “add a new beneficiary”.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-11.png') }}" class="img-fluid" alt="">                                                       
                    </div>                   
                    <!--item ten end-->
                    <div class="col-lg-5">
                        <img style="width:250px;height:80%;margin-left:10%;" src="{{ asset('frontend/assets/img/1-12.png') }}" class="img-fluid" alt="">                                                       
                    </div>
                    <div class="col-lg-7" style="background-color: #f2faf6; margin: 4% 0 9% 0; border-radius: 15px 50px 30px;">
                        <p style="margin-top:20%;" >
                            10. You will be directed to add all of their information (name, address, phone number, account number, bank, branch name, branch code, and their relationship to you). Once this has been filled in, press “Agree and Continue".
                        </p>
                    </div>                   
                    <!--item eleven end-->
                    <div class="col-lg-12" style="background-color: #f2faf6;">
                        <p style="margin-top:2%;">
                            11. You should now be able to select your specified beneficiary to receive the funds.

                            <br> 12. You will then be asked to review the payment. If you are satisfied that all details are correct, press “Agree and Continue”.

                            <br> 13. You will now be asked to input your own payment details. Input these if they are not already loaded (for existing users). Once that is ready, press “Send funds”

                            <br>14. You should get an email confirmation that your funds have been sent.
                        </p>
                    </div>
                </div>

            </div>
        </section>


    </main><!-- End #main -->

@endsection
