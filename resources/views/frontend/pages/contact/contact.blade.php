@extends('frontend.layouts.navbarlayout')


@section('title','Contact')

@section('main')

 <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Page Heading End ================ -->

    <!-- ================ Contact Info Start ================ -->

    <section class="contact-info sec-padding sec-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex py-2">
                    <div class="contact-info-card pt-4 pb-2 flex-grow-1 rounded-1">
                        <div class="contact-icon d-flex justify-content-center mb-4">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-content text-center">
                            <h4 class="mb-3">Email Us</h4>
                            <p>contact@doradoimpex.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex py-2">
                    <div class="contact-info-card pt-4 pb-2 flex-grow-1 rounded-1">
                        <div class="contact-icon d-flex justify-content-center mb-4">
                           <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-content text-center">
                            <h4 class="mb-3">Call Us</h4>
                            <p>Tel. (659) 208-7410</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex py-2">
                    <div class="contact-info-card pt-4 pb-2 flex-grow-1 rounded-1 px-2">
                        <div class="contact-icon d-flex justify-content-center mb-4">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-content text-center">
                            <h4 class="mb-3">Address</h4>
                            <p>1207/343 & 1207/1/343/1, 9th Main,
                                7th Sector, HSR Layout Bangalore Karnataka 560102</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex py-2">
                    <div class="contact-info-card pt-4 pb-2 flex-grow-1 rounded-1">
                        <div class="contact-icon d-flex justify-content-center mb-4">
                           <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="contact-content text-center">
                            <h4 class="mb-3">Live Chat</h4>
                            <p>24/7, Always Available for Live Chat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ Contact Info End ================ -->


    <section class="contact-form-sec sec-paddign sec-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="contact-title">Ask us. <span>We are here to help!</span></h2>
                    <div class="underline"></div>
                    <p class="section-subtitle">
                        Share your inquiries, feedback, or any assistance you may need, and our dedicated team will
                        promptly respond to ensure your satisfaction.
                    </p>

                    <form>
                        <div class="row g-3 ">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your email address">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Subject">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Phone">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" placeholder="Your message..."></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeCheck">
                                    <label class="form-check-label " for="agreeCheck">
                                        I agree to be contacted and receive marketing information.
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 text-start mt-3">
                                <button type="submit" class="button-2">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 d-flex align-items-center ps-lg-5 mt-4 mt-lg-4">
                    <div class="contact-img-wrp shadow">
                        <img src="{{ Vite::asset('resources/assets/images/Contact-us.jpg') }}" alt="contact image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
   

@endsection