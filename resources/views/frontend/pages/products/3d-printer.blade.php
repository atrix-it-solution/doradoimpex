@extends('frontend.layouts.navbarlayout')


@section('title','3d-printer')

@section('main')

    <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h1>3D Printer</h1>
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
                    <div class="printer-products">
                        <div class="row g-4">
                            @foreach($products as $product)
                            <div class="col-lg-6">
                                <a href="{{ route('products.show', $product->slug) }}" class="text-decoration-none">
                                    <div class="printer-product-card shadow py-2 rounded-4">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Storage::url($product->image) }}" alt="app product image"
                                                class="rounded-3">
                                        </div>
                                        <div class="product-heading">
                                            <h5 class="text-center px-4">{{ $product->title }}</h5>
                                        </div>
                                        <p class="text-center px-4">
                                            {{ Str::limit(strip_tags($product->description), 250) }}
                                        </p>
                                    </div>
                                </a>

                            </div>
                            @endforeach
                        
                        </div>
                    </div>

                    <div class="desc-1 mt-5">
                        <h2>And more...</h2>
                        <ul>
                            <li>Pre-configured settings optimize print quality without additional user adjustments.</li>
                            <li>Fast heat-up in just 15 minutes with adjustable temperatures up to 50°C.</li>
                            <li>Designed for continuous 24/7 printing with a robust build plate and auto-cooling safety
                                features.</li>
                            <li>Easy modular part replacement, full print support, and one month of technical
                                assistance.</li>
                        </ul>
                    </div>

                    <div class="desc-2-with-cards pt-5">
                        <h2>High-Quality After-Sales Service</h2>
                        <p class="my-4">At DoradoImpex, we are committed to delivering exceptional after-sales support
                            to keep your 3D printing workflow efficient and trouble-free. From quick and simple module
                            replacements to expert guidance on print settings, we provide end-to-end solutions that
                            minimize downtime and maximize productivity, ensuring our customers get the most out of
                            their 3D printing experience.</p>

                        <div class="card-section my-5">
                            <div class="row gy-5">
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-gears"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Modular Replacement</h4>
                                            <p>Easily swap out any printer module without interrupting your production
                                                process.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-sliders"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Printing Parameter Support</h4>
                                            <p>Receive expert recommendations to fine-tune printing parameters for the
                                                best output.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>One-Month Operational Data</h4>
                                            <p>Access detailed performance reports for one month to streamline learning
                                                and operation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-cube"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Sample Printing Service</h4>
                                            <p>Test our precision and quality with professional sample printing
                                                services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 ps-lg-3">
                    <div class="app-right-sec">
                        <div class="sec-heading">
                            <h3>Overview</h3>
                            <hr>
                        </div>
                        <div class="app-pages-link-wrapper">
                            <ul class="list-unstyled">
                                <li class="active"><a href="/products/3d-printer">3D Printer</a></li>
                                <li><a href="/products/3d-printer-software">3D Printer Software</a></li>
                                <li><a href="/products/3d-printing-resin">3D Printing Resin</a></li>
                                <li><a href="/products/3d-printing-service">3D Printing Service</a></li>
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

    <!-- ================ Page Content Start  ================ -->

@endsection