@extends('frontend.layouts.navbarlayout')


@section('title','3d-Printing-Consumables')

@section('main')

    <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h1>3D Printing Consumables</h1>
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
                    <div class="row overview-sec">
                        <div class="col-lg-6">
                            <h2 class="mb-4">Overview</h2>
                            <p class="mb-4">In the 3D printing industry, high-quality consumables are essential for achieving consistent results, prolonging equipment lifespan, and ensuring precise output. DoradoImpex provides a wide range of premium printing consumables—including filaments, resins, powders, and specialty materials—designed to meet the needs of both professional and industrial applications. Our products help users maintain optimal printing performance while reducing waste and operational costs.</p>
                            <a href="/contact" class="button-3 py-3">Get Consultation <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
                            <ul class="ps-5">
                                <li>Wide range of filaments, resins, and powders for all applications</li>
                                <li>High-quality materials for consistent print results</li>
                                <li>Support for industrial-grade and specialty 3D printing</li>
                                <li>Materials engineered for strength, flexibility, and durability</li>
                                <li>Reduce print errors and material wastage</li>
                                <li>Enhance printer longevity with quality consumables</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row two-img-sec sec-padding sec-margin ">
                        <div class="col-lg-6 ps-lg-0 mb-4 mb-lg-0">
                            <div class="img-wrapper">
                                <img src="{{ Vite::asset('resources/assets/images/3image_1.jpg') }}" alt="" class="img-fluid rounded-2">
                            </div>
                        </div>
                        <div class="col-lg-6 pe-lg-0">
                            <div class="img-wrapper">
                                <img src="{{ Vite::asset('resources/assets/images/3image_2.jpg') }}" alt="" class="img-fluid rounded-2">
                            </div>
                        </div>
                    </div>
                    <div class="desc-1">
                        <h2>Rapid Prototyping</h2>
                        <p class="my-4">Premium consumables play a vital role in achieving reliable and fast prototyping. DoradoImpex’s materials ensure smooth extrusion, accurate layering, and stable mechanical properties—allowing engineers and designers to iterate quickly and move from concept to production with minimal adjustments.</p>
                        <ul>
                            <li>Enable high-speed, accurate prototyping with premium materials</li>
                            <li>Improve surface finish and dimensional accuracy</li>
                            <li>Reduce the need for post-processing</li>
                            <li>Enhance durability and performance of prototypes</li>
                        </ul>
                    </div>
                    <div class="four-images-sec my-5">
                        <div class="row g-4">
                            <div class="col-lg-3 col-6">
                                <div class="img-wraper">
                                    <img src="{{ Vite::asset('resources/assets/images/3image_3.jpg') }}" alt="automotive img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="img-wraper">
                                    <img src="{{ Vite::asset('resources/assets/images/3image_4.jpg') }}" alt="automotive img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="img-wraper">
                                    <img src="{{ Vite::asset('resources/assets/images/3image_5.jpg') }}" alt="automotive img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="img-wraper">
                                    <img src="{{ Vite::asset('resources/assets/images/3image_6.jpg') }}" alt="automotive img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-2-with-cards pt-5">
                        <h2>Reduce Development Costs</h2>
                        <p class="my-4">By using high-quality consumables, users can lower total production costs through fewer failed prints, reduced material waste, and increased printer efficiency. DoradoImpex’s consumables are optimized for performance, ensuring that every print delivers maximum value.</p>

                        <div class="card-section my-5">
                            <div class="row gy-5">
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-pencil"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Optimized Material Usage</h4>
                                            <p>Reduce waste by using premium materials that ensure reliable extrusion and consistent print quality.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-gear"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Specialized Formulations</h4>
                                            <p>Select materials with properties tailored for specific applications such as heat resistance, flexibility, or biocompatibility.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-clipboard-list"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Bulk Supply Options</h4>
                                            <p>Lower per-unit costs with bulk purchasing for large-scale or industrial 3D printing operations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-link"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Reduced Downtime</h4>
                                            <p>Avoid printer damage and operational delays with high-quality, clog-resistant consumables.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-3 mt-5 pt-5">
                        <h2>Environmental Responsibility & Sustainability</h2>
                        <p>DoradoImpex supports eco-friendly 3D printing by offering biodegradable filaments, recyclable resins, and materials produced through sustainable manufacturing practices. Our consumables help reduce environmental impact without compromising quality or performance.</p>

                        <div class="tow-img-sec-2">
                            <div class="row py-4">
                                <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                                    <div class="img-wrapper">
                                        <img src="{{ Vite::asset('resources/assets/images/3image_7.jpg') }}" alt=" automotive img" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="img-wrapper">
                                        <img src="{{ Vite::asset('resources/assets/images/3image_8.jpg') }}" alt=" automotive img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-5">
                    <div class="app-right-sec">
                        <div class="sec-heading">
                            <h3>Industry Applications</h3>
                            <hr>
                        </div>
                        <div class="app-pages-link-wrapper">
                            <ul class="list-unstyled">
                                <li><a href="/applications/automotive">Automotive</a></li>
                                <li><a href="/applications/aerospace">Aerospace</a></li>
                                <li><a href="/applications/dental-industry">Dental Industry</a></li>
                                <li><a href="/applications/jewelry-industry">Jewelry Industry</a></li>
                                <li><a href="/applications/industrial-engineering">Industrial Engineering</a></li>
                                <li class="active"><a href="#">3D Printing Consumables</a></li>
                                <li><a href="/applications/additive-manufacturing">Additive Manufacturing</a></li>
                                <li><a href="/applications/educational-applications">Educational Applications</a></li>
                            </ul>
                        </div>
                        <div class="app-cta rounded-3 ">
                            <div class="cta-sub-heading">Special offer</div>
                            <h2 class="mt-3 mb-4">Save More as You Buy More – Up to 50% Off!</h2>
                            <div>
                                <a href="/contact" class="button-3 py-3">Get a Quote Now</a>
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
                            <a href="/contact" class="button-5"
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