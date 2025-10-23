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