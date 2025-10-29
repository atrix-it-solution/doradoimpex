@extends('frontend.layouts.navbarlayout')


@section('title','3d-printing-service')

@section('main')

     <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h1>3D Printing Services</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Page Heading End ================ -->


    <!-- ================ Page Content Start ================ -->
    <div class="page-content sec-padding sec-heading">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <!-- CARD  -->
                    <div class="image-content-card p-4">
                        <div class="row shadow rounded-3">
                            <div class="col-lg-6 p-4 d-flex align-items-center justify-content-center">
                                <div class="card-img-wrp">
                                    <img src="{{ Vite::asset('resources/assets/images/image-1.png') }}" alt="" class="img-fluid rounded-4">
                                </div>
                            </div>
                            <div class="col-lg-6 p-4 d-flex align-items-center">
                                <div class="card-content ">
                                    <h3>DoradoImpex Creator Program</h3>
                                    <hr>
                                    <p>At DoradoImpex, we empower dreamers to bring their ideas to life. Our mission is to turn imagination into achievable reality, helping innovators and creators transform visions into tangible outcomes. Every successful project fills both our team and our creators with pride and inspiration—fueling our passion to keep moving forward together.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- WHY CHOOSE  -->
                    <div class="why-choose sec-margin sec-padding">
                        <div class="why-choose-heading mb-5">
                            <h2 class="text-center fw-bold">Why Choose Our 3D Printing Service</h2>
                            <hr
                                style="border: none!important; background: #ffd311; height: 4px; width: 100px; margin: auto;">
                        </div>
                        <div class="card-wrapper">
                            <div class="row">
                                <div class="col-lg-4 p-3">
                                    <div class="why-choose-card  px-3 py-4 pt-5 rounded-4">
                                        <div class="why-choose-icon">
                                            <i class="fa-solid fa-gears"></i>
                                        </div>
                                        <div class="why-choose-desc text-center">
                                            <h5>End-to-End Service</h5>
                                            <p>From 3D model design to printing and delivery, we provide a seamless process that saves time and removes the hassle of multiple coordinations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <div class="why-choose-card  px-3 py-4 pt-5 rounded-4">
                                        <div class="why-choose-icon">
                                           <i class="fa-solid fa-cube"></i>
                                        </div>
                                        <div class="why-choose-desc text-center">
                                            <h5>Precision Rendering</h5>
                                            <p>Using advanced 3D rendering technology, we ensure every detail of your design is accurately captured, guaranteeing a flawless output.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <div class="why-choose-card  px-3 py-4 pt-5 rounded-4">
                                        <div class="why-choose-icon">
                                            <i class="fa-solid fa-layer-group"></i>
                                        </div>
                                        <div class="why-choose-desc text-center">
                                            <h5>Material Flexibility</h5>
                                            <p>Choose from a wide range of materials tailored for different industries, ensuring durability, functionality, and perfect customization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Creator Project  -->
                    <div class="why-choose creater-porject sec-margin sec-padding">
                        <div class="why-choose-heading mb-5">
                            <h2 class="text-center fw-bold text-uppercase">Creator Project</h2>
                            <hr
                                style="border: none!important; background: #ffd311; height: 4px; width: 100px; margin: auto;">
                        </div>
                        <div class="card-wrapper">
                            <div class="row">
                                <div class="col-lg-4 p-3">
                                    <div class="why-choose-card  px-3 py-4 pt-5 rounded-4">
                                        <div class="why-choose-icon">
                                            <i class="fa-solid fa-lightbulb"></i>
                                        </div>
                                        <div class="why-choose-desc text-center">
                                            <h5>Share Your Vision</h5>
                                            <p>Submit your innovative ideas or designs, and we’ll craft tailored solutions that bring your creativity to life.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <div class="why-choose-card  px-3 py-4 pt-5 rounded-4">
                                        <div class="why-choose-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <div class="why-choose-desc text-center">
                                            <h5>Model Validation</h5>
                                            <p>Our experts carefully analyze your 3D model, ensuring precision, optimizing design, and reducing material waste.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <div class="why-choose-card  px-3 py-4 pt-5 rounded-4">
                                        <div class="why-choose-icon">
                                            <i class="fa-solid fa-truck"></i>
                                        </div>
                                        <div class="why-choose-desc text-center">
                                            <h5>Seamless Delivery</h5>
                                            <p>We guarantee fast, reliable production and delivery with superior finishing, meeting your expectations every time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CTA  -->
                    <section class="cta-section sec-spacing">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mx-auto text-center">
                                    <h2 class="fw-bold">Need Expert Business Consultation?</h2>
                                    <p class="mb-4">Our specialists are here to guide you every step of the way.</p>
                                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                                        <button class="button-3">Contact Us Online</button>
                                        <button class="button-4"><i class="fa-solid fa-phone"></i> 8887880417</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </section>
                </div>
                <div class="col-lg-4 ps-lg-3">
                    <div class="app-right-sec">
                        <div class="sec-heading">
                            <h3>Overview</h3>
                            <hr>
                        </div>
                        <div class="app-pages-link-wrapper">
                           <ul class="list-unstyled">
                                <li><a href="/products/3d-printer">3D Printer</a></li>
                                <li><a href="/products/3d-printer-software">3D Printer Software</a></li>
                                <li><a href="/products/3d-printing-resin">3D Printing Resin</a></li>
                                <li class="active"><a href="/products/3d-printing-service">3D Printing Serv    ice</a></li>
                            </ul>
                        </div>
                        <div class="app-cta rounded-3 ">
                            <div class="cta-sub-heading">Special offer</div>
                            <h2 class="mt-3 mb-4">Save More as You Buy More – Up to 50% Off!</h2>
                            <div>
                                <a href="contact" class="button-3 py-3">Get a Quote Now</a>
                            </div>

                        </div>
                        <!-- VERTICLE SLIDER   -->
                        @include('frontend.common.featured-products')
                        <!-- Have Qn sec  -->
                        <div class="qn-sec sec-margin sec-padding">
                            <div class="sec-heading">
                                <h2>Questions?</h2>
                                <hr style="margin-bottom: 40px;">
                            </div>
                            <p class="mb-5" style="font-size: 18px;">Send a question for a quick, free analysis of your
                                business today!</p>
                            <a href="contact" class="button-5"
                                style="padding: 14px 35px; font-size: 16px;">Contact Us</a>
                        </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Page Content Start  ================ -->

@endsection