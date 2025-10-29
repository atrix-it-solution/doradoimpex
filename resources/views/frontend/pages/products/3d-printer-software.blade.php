@extends('frontend.layouts.navbarlayout')


@section('title','3d-printer-software')

@section('main')

    <!-- ================ Page Banner Start ================ -->
    <div class="product-page-banner">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-8 col-md-8 col-12 d-flex flex-column justify-content-center ">
                    <h1>Revolutionizing 3D Printing with Next-Gen Software.</h1>
                    <p>Powered by in-house manufacturing and advanced resin R&D.</p>
                    <button class="button-1 align-self-start mt-5"><i class="fa-solid fa-phone"
                            style="color: white;"></i> (659) 208-7410</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Page Banner End ================ -->

    <!-- ================ Service button sec Start ================ -->
    <div class="service-buttons-sec">
        <div class="container">
            <div class="button-sec-heading">
                <h1>Seamless Compatibility with Leading Printers</h1>
                <h2>Automatically detects and installs the right printer driver</h2>
                <p>Ensuring your printer is always ready to use</p>
            </div>
            <section class="services-btns py-5">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Left side buttons -->
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <div class="d-flex flex-column gap-3 px-5">
                                <button class="service-btn active" data-target="#img1">
                                    Quick driver installation
                                    <span>&gt;</span>
                                </button>
                                <button class="service-btn" data-target="#img2">
                                    Repair unexpected printer issues
                                    <span>&gt;</span>
                                </button>
                                <button class="service-btn" data-target="#img3">
                                    Support for USB & Wi-Fi connections
                                    <span>&gt;</span>
                                </button>
                            </div>
                        </div>

                        <!-- Right side image section -->
                        <div class="col-lg-7">
                            <div class="image-box position-relative">
                                <img id="img1" src="{{ Vite::asset('resources/assets/images/fix-icon-1.jpg') }}" class="img-fluid active-img rounded shadow"
                                    alt="Service 1">
                                <img id="img2" src="{{ Vite::asset('resources/assets/images/fix-icon-2.jpg') }}" class="img-fluid d-none rounded shadow"
                                    alt="Service 2">
                                <img id="img3" src="{{ Vite::asset('resources/assets/images/fix-icon-3.jpg') }}" class="img-fluid d-none rounded shadow"
                                    alt="Service 3">
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
    <!-- ================ Service button sec End ================ -->

    <!-- ================ Page Content Start ================ -->
    <div class="page-content sec-padding sec-heading mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-5">
                    <div class="image-content-card p-4">
                        <div class="row shadow rounded-3">
                            <div class="col-lg-6 p-4 d-flex align-items-center justify-content-center">
                                <div class="card-img-wrp">
                                    <img src="{{ Vite::asset('resources/assets/images/image-1.png') }}" alt="" class="img-fluid rounded-4">
                                </div>
                            </div>
                            <div class="col-lg-6 p-4 d-flex align-items-center">
                                <div class="card-content ">
                                    <h3>DoradoImpex Motion Planner for 3D Printing</h3>
                                    <hr>
                                    <p>Achieve faster, more precise 3D prints with advanced motion control. Our
                                        jerk-limited technology ensures smooth acceleration, consistent layer quality,
                                        and superior results for every model.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="image-content-card p-4">
                        <div class="row shadow rounded-3">
                            <div class="col-lg-6 p-4 d-flex align-items-center">
                                <div class="card-content ">
                                    <h3>Slicing Features</h3>
                                    <hr>
                                    <p>At the core of DoradoImpex 3D Suite is a powerful, open-source slicing engine,
                                        refined through expert development and real-world contributions.</p>
                                    <ul class="desc-list list-unstyled p-0">
                                        <li>Intent profiles print specific applications at the click of a button</li>
                                        <li>Reliable results with recommended profiles tested for thousands of hours
                                        </li>
                                        <li>Custom mode offers over 400 settings for detailed control</li>
                                        <li>Regular updates constantly enhance features and print quality</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-6 p-4 d-flex align-items-center justify-content-center">
                                <div class="card-img-wrp">
                                    <img src="{{ Vite::asset('resources/assets/images/image-2.png') }}" alt="" class="img-fluid rounded-4">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="image-content-card p-4">
                        <div class="row shadow rounded-3">
                            <div class="col-lg-6 p-4 d-flex align-items-center justify-content-center">
                                <div class="card-img-wrp">
                                    <img src="{{ Vite::asset('resources/assets/images/image-3.png') }}" alt="" class="img-fluid rounded-4">
                                </div>
                            </div>
                            <div class="col-lg-6 p-4 d-flex align-items-center">
                                <div class="card-content ">
                                    <h3>Integrated Workflow</h3>
                                    <hr>
                                    <p>With DoradoImpex 3D Suite, your printer works seamlessly with software designed
                                        to optimize your workflow and maximize performance.</p>
                                    <ul class="desc-list list-unstyled p-0">
                                        <li>Seamless integration with all DoradoImpex products</li>
                                        <li>CAD plugin support for SolidWorks, Siemens NX, Autodesk Inventor, and more
                                        </li>
                                        <li>Supports STL, OBJ, X3D, 3MF, BMP, GIF, JPG, PNG file formats</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="image-content-card p-4">
                        <div class="row shadow rounded-3">
                            <div class="col-lg-6 p-4 d-flex align-items-center">
                                <div class="card-content ">
                                    <h3>Easy to Use</h3>
                                    <hr>
                                    <pManufacturing doesn’t need to be complicated. DoradoImpex software is designed for
                                        everyone – from beginners to expert 3D printing users.</p>
                                        <ul class="desc-list list-unstyled p-0">
                                            <li>Prepare your 3D model for print in minutes with recommended settings
                                            </li>
                                            <li>Simply choose speed and quality settings, then start printing</li>
                                            <li>DoradoImpex 3D Suite is free and open source</li>
                                        </ul>
                                </div>

                            </div>
                            <div class="col-lg-6 p-4 d-flex align-items-center justify-content-center">
                                <div class="card-img-wrp">
                                    <img src="{{ Vite::asset('resources/assets/images/image-4.png') }}" alt="" class="img-fluid rounded-4">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="image-content-card p-4">
                        <div class="row shadow rounded-3">
                            <div class="col-lg-6 p-4 d-flex align-items-center justify-content-center">
                                <div class="card-img-wrp">
                                    <img src="{{ Vite::asset('resources/assets/images/image-5.png') }}" alt="" class="img-fluid rounded-4">
                                </div>
                            </div>
                            <div class="col-lg-6 p-4 d-flex align-items-center">
                                <div class="card-content ">
                                    <h3>DoradoImpex Marketplace</h3>
                                    <hr>
                                    <p>Openness and collaboration are at the heart of DoradoImpex. Now we bring this to
                                        the professional 3D printing world with the DoradoImpex Marketplace.</p>
                                    <ul class="desc-list list-unstyled p-0">
                                        <li>Download material profiles from leading brands for your application</li>
                                        <li>Avoid manual setup when using third-party materials</li>
                                        <li>Access plugins to customize print preparation, rated by the community</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="image-content-card p-4">
                        <div class="row shadow rounded-3">
                            <div class="col-lg-6 p-4 d-flex align-items-center">
                                <div class="card-content ">
                                    <h3>Enterprise-Grade Reliability</h3>
                                    <hr>
                                    <p>DoradoImpex Enterprise delivers unmatched stability and security, tailor-made for
                                        businesses that demand robust infrastructure.</p>
                                    <ul class="desc-list list-unstyled p-0">
                                        <li>Deploy, configure, and manage across multiple platforms with ease</li>
                                        <li>Receive two thoroughly tested updates each year, including 12 months of full
                                            security patches and bug fixes</li>
                                        <li>Each release is independently scanned and tested for vulnerabilities, with
                                            transparent reports to continuously improve security</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-lg-6 p-4 d-flex align-items-center justify-content-center">
                                <div class="card-img-wrp">
                                    <img src="{{ Vite::asset('resources/assets/images/image-6.png') }}" alt="" class="img-fluid rounded-4">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-5">
                    <div class="app-right-sec">


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
            <div class="row">
                <section class="cta-section sec-spacing">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto text-center">
                                <h2 class="fw-bold">Need Expert 3D Printer Consultation?</h2>
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
        </div>
    </div>
    <!-- ================ Page Content Start  ================ -->

@endsection