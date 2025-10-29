@extends('frontend.layouts.navbarlayout')


@section('title','3d-printing-resin')

@section('main')

    <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h1>3D Printing Resin</h1>
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

                    <!-- PRODUCT CARDS  -->
                    <div class="printer-products">
                        <div class="row g-4">
                            @foreach($products as $product)
                            <div class="col-lg-6">
                                <a href="{{ route('products.show', $product->slug) }}" class="text-decoration-none">
                                    <div class="printer-product-card shadow py-2 rounded-4">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Storage::url($product->image) }}" alt="app product image" class="rounded-3">
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
                    <!-- DESCRIPTION 1   -->
                    <div class="desc-1 mt-5">
                        <h2>And more... </h2>
                        <ul>
                            <li>Casting resin can be cast in the same furnace as real wax, simplifying production.</li>
                            <li>No specialized resin plaster required, making it more user-friendly.</li>
                            <li>Ideal for delicate jewelry, handicrafts, and fine-detail models.</li>
                            <li>Simple casting process for both professionals and hobbyists.</li>
                        </ul>
                    </div>
                    <!-- DESCRIPTION 2   -->
                    <div class="desc-2-with-cards pt-5">
                        <h2>Premium Resin Printing Benefits</h2>
                        <p class="my-4">Our advanced 3D printing resins are designed to deliver exceptional performance
                            across industries. From aesthetics to durability, bonding strength to ease of use,
                            DoradoImpex resins are tailored to meet diverse application needs, ensuring precise,
                            reliable, and visually appealing results every time.</p>

                        <div class="card-section my-5">
                            <div class="row gy-5">
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>High Aesthetic Quality</h4>
                                            <p>Resins provide excellent translucency and color matching, closely
                                                mimicking natural surfaces for visually stunning results.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-shield-halved"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Durability & Strength</h4>
                                            <p>Engineered to withstand demanding use, our resins offer long-lasting
                                                performance and superior resistance to wear.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-link"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Strong Bonding Capability</h4>
                                            <p>Excellent adhesive properties ensure secure bonding with multiple
                                                surfaces and materials, enhancing overall stability.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-face-smile"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Ease of Use</h4>
                                            <p>Quick curing times, simple handling, and easy polishing make our resins
                                                user-friendly and highly efficient in operation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 ps-lg-5">
                    <div class="app-right-sec">
                        <div class="sec-heading">
                            <h3>Overview</h3>
                            <hr>
                        </div>
                        <div class="app-pages-link-wrapper">
                            <ul class="list-unstyled">
                                <li><a href="/products/3d-printer">3D Printer</a></li>
                                <li><a href="/products/3d-printer-software">3D Printer Software</a></li>
                                <li class="active"><a href="/products/3d-printing-resin">3D Printing Resin</a></li>
                                <li><a href="/products/3d-printing-service">3D Printing Serv    ice</a></li>
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