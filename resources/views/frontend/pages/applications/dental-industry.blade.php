@extends('frontend.layouts.navbarlayout')


@section('title','Dental-Industry')

@section('main')

    <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h1>Dental Industry</h1>
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
                            <p class="mb-4">In the dental industry, precision and customization are essential for delivering optimal patient outcomes. DoradoImpex’s advanced 3D printing technology enables the creation of highly accurate dental models, crowns, bridges, and orthodontic devices with exceptional speed and consistency. By integrating digital manufacturing into clinics and labs, we help improve patient care while reducing turnaround times and operational costs.</p>
                            <a href="/contact" class="button-3 py-3">Get Consultation <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                       <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
                            <ul class="ps-5">
                                <li>Produce precise, patient-specific dental devices</li>
                                <li>Accelerate delivery of crowns, bridges, and orthodontic models</li>
                                <li>Enhance patient comfort with tailored solutions</li>
                                <li>Reduce manual processes and material waste</li>
                                <li>Enable faster diagnosis-to-treatment workflows</li>
                                <li>Support advanced digital dentistry practices</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row two-img-sec sec-padding sec-margin ">
                        <div class="col-lg-6 ps-lg-0 mb-4 mb-lg-0">
                            <div class="img-wrapper">
                                <img src="{{ Vite::asset('resources/assets/images/dimage_1.jpg') }}" alt="" class="img-fluid rounded-2">
                            </div>
                        </div>
                        <div class="col-lg-6 pe-lg-0">
                            <div class="img-wrapper">
                                <img src="{{ Vite::asset('resources/assets/images/dimage_2.jpg') }}"  alt="" class="img-fluid rounded-2">
                            </div>
                        </div>
                    </div>
                    <div class="desc-1">
                        <h2>Rapid Prototyping</h2>
                        <p class="my-4">DoradoImpex’s 3D printing solutions make dental prototyping faster and more reliable, allowing for immediate testing of fit, aesthetics, and function. This reduces the gap between diagnosis and treatment, ensures higher accuracy in end results, and supports greater collaboration between clinics and labs.</p>
                        <ul>
                            <li>Quickly produce accurate dental prototypes</li>
                            <li>Improve precision through iterative design adjustments</li>
                            <li>Reduce lead times for patient treatments</li>
                            <li>Enhance communication between dentists and technicians</li>
                        </ul>
                    </div>
                    <div class="four-images-sec my-5">
                        <div class="row g-4">
                            <div class="col-lg-3 col-6">
                                <div class="img-wraper">
                                    <img src="{{ Vite::asset('resources/assets/images/Dimage_3.jpg') }}" alt="automotive img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="img-wraper">
                                    <img src="{{ Vite::asset('resources/assets/images/Dimage_4.jpg') }}" alt="automotive img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="img-wraper">
                                    <img src="{{ Vite::asset('resources/assets/images/Dimage_5.jpg') }}"  alt="automotive img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="img-wraper">
                                    <img src="{{ Vite::asset('resources/assets/images/Dimage_6.jpg') }}"  alt="automotive img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-2-with-cards pt-5">
                        <h2>Reduce Development Costs</h2>
                        <p class="my-4">With additive manufacturing, dental practices and labs can lower costs by reducing material waste, minimizing outsourcing, and enabling in-house production of dental devices. DoradoImpex helps streamline workflows, improve efficiency, and make advanced dental care more affordable.</p>

                        <div class="card-section my-5">
                            <div class="row gy-5">
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-pencil"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Optimized Material Usage</h4>
                                            <p>Reduce waste and ensure precise use of high-quality dental materials, lowering overall production costs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-gear"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Complex Custom Designs</h4>
                                            <p>Easily produce intricate, patient-specific dental devices that improve comfort and functionality.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                               <i class="fa-solid fa-clipboard-list"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>On-Demand Manufacturing</h4>
                                            <p>Enable just-in-time production of crowns, bridges, and orthodontic appliances to cut inventory costs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-link"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Streamlined Workflows</h4>
                                            <p>Integrate digital design and manufacturing processes to shorten delivery times and reduce overhead.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-3 mt-5 pt-5">
                        <h2>Environmental Responsibility & Sustainability</h2>
                        <p>3D printing in the dental industry supports sustainable practices by minimizing material waste, reducing transportation needs through local production, and optimizing workflows for efficiency. DoradoImpex is committed to helping dental professionals adopt eco-conscious manufacturing solutions.</p>

                        <div class="tow-img-sec-2">
                            <div class="row py-4">
                                <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                                    <div class="img-wrapper">
                                        <img src="{{ Vite::asset('resources/assets/images/Dimage_7.jpg') }}" alt=" automotive img" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <div class="img-wrapper">
                                        <img src="{{ Vite::asset('resources/assets/images/Dimage_8.jpg') }}" alt=" automotive img" class="img-fluid">
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
                                <li class="active"><a href="/applications/dental-industry">Dental Industry</a></li>
                                <li><a href="/applications/jewelry-industry">Jewelry Industry</a></li>
                                <li><a href="/applications/industrial-engineering">Industrial Engineering</a></li>
                                <li ><a href="3d-printing-consumables">3D Printing Consumables</a></li>
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
    <!-- ================ Page Content Start  ================ -->

@endsection