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
                        <div class="sec-heading">
                            <h3>Featured Products</h3>
                            <hr>
                        </div>
                        <div class="vertical-product-slider">
                            <!-- product 1 -->
                            <div>
                                 <a href="products/product-1">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Vite::asset('resources/assets/images/product-image-1.png') }}" alt="DoradoImpex Clear-Resin Ultra"
                                                class="img-fluid" />
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">DoradoImpex Clear-Resin Ultra</h4>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Color</h5>
                                            <ul class="product-list">
                                                <li>Transparent</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Features</h5>
                                            <ul class="product-list">
                                                <li>Crystal-clear transparency with minimal yellowing</li>
                                                <li>High detail resolution for precision parts</li>
                                                <li>Low viscosity for easy handling and fast curing</li>
                                                <li>Smooth surface finish ideal for optical prototypes</li>
                                                <li>Excellent dimensional accuracy</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Application</h5>
                                            <ul class="product-list">
                                                <li>Optical Prototypes</li>
                                                <li>Transparent Models</li>
                                                <li>Lighting Covers</li>
                                                <li>Artistic and Decorative Parts</li>
                                            </ul>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                            <!-- product 2 -->
                            <div>
                                 <a href="products/product-1">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Vite::asset('resources/assets/images/product-image-2.png') }}"
                                                alt="DoradoImpex DP-300 Professional 3D Printer" class="img-fluid" />
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">
                                                DoradoImpex DP-300 Professional 3D Printer
                                            </h4>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Color</h5>
                                            <ul class="product-list">
                                                <li>Black</li>
                                                <li>Grey</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Features</h5>
                                            <ul class="product-list">
                                                <li>Large build volume (300x300x400mm) for versatile prints</li>
                                                <li>High precision printing up to 50 microns</li>
                                                <li>Silent stepper drivers for noise-free operation</li>
                                                <li>Resume print after power failure or filament outage</li>
                                                <li>Heated build plate for improved first-layer adhesion</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Application</h5>
                                            <ul class="product-list">
                                                <li>Prototyping</li>
                                                <li>Education</li>
                                                <li>Product Design</li>
                                                <li>Engineering Models</li>
                                                <li>Custom Parts Manufacturing</li>
                                            </ul>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                            <!-- product 3 -->
                            <div>
                                 <a href="products/product-1">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Vite::asset('resources/assets/images/product-image-3.png') }}"
                                                alt="DoradoImpex DP-500 Industrial 3D Printer" class="img-fluid" />
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">
                                                DoradoImpex DP-500 Industrial 3D Printer
                                            </h4>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Color</h5>
                                            <ul class="product-list">
                                                <li>Black</li>
                                                <li>Blue-Gray</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Features</h5>
                                            <ul class="product-list">
                                                <li>
                                                    Ultra-large build volume (500x500x500mm) for industrial parts
                                                </li>
                                                <li>
                                                    Dual-extruder system for multi-material and support printing
                                                </li>
                                                <li>Fully enclosed heated chamber for advanced polymers</li>
                                                <li>7-inch touchscreen UI with smart control options</li>
                                                <li>WiFi-enabled remote monitoring and print management</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Application</h5>
                                            <ul class="product-list">
                                                <li>Automotive</li>
                                                <li>Aerospace</li>
                                                <li>Industrial Prototyping</li>
                                                <li>Large-Scale Manufacturing</li>
                                            </ul>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                            <!-- product 4 -->
                            <div>
                                <a href="products/product-1">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Vite::asset('resources/assets/images/product-image-4.png') }}"
                                                alt="DoradoImpex DP-200 Compact 3D Printer" class="img-fluid" />
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">
                                                DoradoImpex DP-200 Compact 3D Printer
                                            </h4>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Color</h5>
                                            <ul class="product-list">
                                                <li>White</li>
                                                <li>Black</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Features</h5>
                                            <ul class="product-list">
                                                <li>Compact design with 200x200x200mm build volume</li>
                                                <li>User-friendly interface with quick setup</li>
                                                <li>Quiet printing operation for home and school use</li>
                                                <li>Magnetic removable build plate for easy print removal</li>
                                                <li>Affordable solution for entry-level 3D printing</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Application</h5>
                                            <ul class="product-list">
                                                <li>Education</li>
                                                <li>DIY Projects</li>
                                                <li>Prototyping Small Parts</li>
                                                <li>Art and Craft Models</li>
                                                <li>Beginner 3D Printing</li>
                                            </ul>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                            <!-- product 5 -->
                            <div>
                                <a href="products/product-1">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Vite::asset('resources/assets/images/product-image-5.png') }}" alt="DoradoImpex Flex-Resin 200"
                                                class="img-fluid" />
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">DoradoImpex Flex-Resin 200</h4>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Color</h5>
                                            <ul class="product-list">
                                                <li>Transparent</li>
                                                <li>Light Grey</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Features</h5>
                                            <ul class="product-list">
                                                <li>High flexibility and superior elasticity</li>
                                                <li>Tear and impact resistance under repeated stress</li>
                                                <li>Durable performance in functional applications</li>
                                                <li>Smooth surface finish with fine details</li>
                                                <li>Excellent rebound properties after bending</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Application</h5>
                                            <ul class="product-list">
                                                <li>Wearables</li>
                                                <li>Prosthetics</li>
                                                <li>Flexible Connectors</li>
                                                <li>Functional Prototypes</li>
                                                <li>Engineering Models</li>
                                            </ul>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                            <!-- product 6 -->
                            <div>
                                <a href="products/product-1">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Vite::asset('resources/assets/images/product-image-6.png') }}" alt="DoradoImpex Dental-Resin Pro"
                                                class="img-fluid" />
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">DoradoImpex Dental-Resin Pro</h4>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Color</h5>
                                            <ul class="product-list">
                                                <li>White</li>
                                                <li>Light Beige</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Features</h5>
                                            <ul class="product-list">
                                                <li>Certified biocompatibility for dental applications</li>
                                                <li>High precision with fine layer resolution</li>
                                                <li>Low shrinkage during curing for accuracy</li>
                                                <li>Compatible with medical sterilization processes</li>
                                                <li>Smooth surface finish for detailed dental work</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Application</h5>
                                            <ul class="product-list">
                                                <li>Dental Models</li>
                                                <li>Surgical Guides</li>
                                                <li>Orthodontics</li>
                                                <li>Custom Prosthetics</li>
                                            </ul>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                            <!-- product 7 -->
                            <div>
                                <a href="products/product-1">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Vite::asset('resources/assets/images/product-image-7.png') }}" alt="DoradoImpex Tough-Resin X500"
                                                class="img-fluid" />
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">DoradoImpex Tough-Resin X500</h4>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Color</h5>
                                            <ul class="product-list">
                                                <li>Dark Grey</li>
                                                <li>Black</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Features</h5>
                                            <ul class="product-list">
                                                <li>High toughness and impact resistance</li>
                                                <li>Excellent dimensional stability with low shrinkage</li>
                                                <li>Smooth surface finish with sharp details</li>
                                                <li>Durable for functional and mechanical parts</li>
                                                <li>Optimized for long-term performance</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Application</h5>
                                            <ul class="product-list">
                                                <li>Functional Prototypes</li>
                                                <li>Mechanical Components</li>
                                                <li>Custom Enclosures</li>
                                                <li class="">End-Use Parts</li>
                                            </ul>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                            <!-- product 8 -->
                            <div>
                                <a href="products/product-1">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            <img src="{{ Vite::asset('resources/assets/images/product-image-8.png') }}"
                                                alt="DoradoImpex DP-700 Ultra Precision 3D Printer" class="img-fluid" />
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">
                                                DoradoImpex DP-700 Ultra Precision 3D Printer
                                            </h4>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Color</h5>
                                            <ul class="product-list">
                                                <li>Black</li>
                                                <li>Silver</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Features</h5>
                                            <ul class="product-list">
                                                <li>Large build volume (400x400x500mm) for professional use</li>
                                                <li>Ultra-precise printing resolution up to 20 microns</li>
                                                <li>Automatic bed leveling with smart sensors</li>
                                                <li>Multi-material compatibility including composites</li>
                                                <li>Reinforced frame for stability during long prints</li>
                                            </ul>
                                        </div>
                                        <div class="product-section">
                                            <h5 class="product-subheading">Application</h5>
                                            <ul class="product-list">
                                                <li>Medical Models</li>
                                                <li>Engineering Prototypes</li>
                                                <li>Architectural Models</li>
                                                <li>Industrial Design</li>
                                                <li>High-Precision Manufacturing</li>
                                            </ul>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                        </div>
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