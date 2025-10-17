@extends('frontend.layouts.navbarlayout')


@section('title','Home')

@section('main')

    <!-- ================ Banner Start ================ -->
    <section class="banner-section">
        <div class="container-fluid p-0">
            <div class="banner-slider">
                <div class="slide-1">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-lg-8 col-md-8 col-12 d-flex flex-column justify-content-center ">
                                <h1> Revolutionizing 3D Printing with Next-Gen Solutions.</h1>
                                <p>Powered by in-house manufacturing and advanced resin R&D.</p>
                                <button class="button-1 align-self-start mt-5"><i class="fa-solid fa-phone"
                                        style="color: white;"></i> (659) 208-7410</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-2">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-lg-8 col-md-8 col-12 d-flex flex-column justify-content-center ">
                                <h1>Your Vision, Rapidly Prototyped.</h1>
                                <p>High-precision 3D printing for functional and aesthetic perfection.</p>
                                <button class="button-1 align-self-start mt-5"><i class="fa-solid fa-phone"
                                        style="color: white;"></i> (659) 208-7410</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-3">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-lg-8 col-md-8 col-12 d-flex flex-column justify-content-center ">
                                <h1> From Idea to Reality, Faster Than Ever.</h1>
                                <p>Streamlining design-to-production with unmatched efficiency.</p>
                                <button class="button-1 align-self-start mt-5"><i class="fa-solid fa-phone"
                                        style="color: white;"></i> (659) 208-7410</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ================ Banner End ================ -->


    <!-- ================ Services Start ================ -->
    <section class="services-section sec-spacing  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="3d-printer.html">
                        <div class="service-box text-center px-3 py-5 rounded-4 ">
                            <h3 class="fw-bold">3D Printers</h3>
                            <p>Turn your ideas into reality with high-precision, reliable 3D printing machines.</p>
                            <div class="service-img p-4 pb-0 pt-3 ">
                                <img src="{{ asset('images/3d-printing.jpeg') }}" alt="3D Printers" class="img-fluid rounded-4">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="3d-printing-resin.html">
                        <div class="service-box text-center px-3 py-5  rounded-4 ">
                            <h3 class="fw-bold">3D Printing Resin</h3>
                            <p>Produce detailed, durable, and smooth-finish models with premium resin materials.</p>
                            <div class="service-img p-4 pb-0 pt-3 ">
                                <img src="{{ Vite::asset('resources/assets/images/3D-Printing-Resin.jpeg') }}" alt="3D Printers" class="img-fluid rounded-4">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="3d-printing-service.html">
                        <div class="service-box text-center px-3 py-5 rounded-4 ">
                            <h3 class="fw-bold">3D Printing Services</h3>
                            <p>From concept to final product — professional printing solutions tailored to your needs.
                            </p>
                            <div class="service-img p-4 pb-0 pt-3 ">
                                <img src="{{ Vite::asset('resources/assets/images/3d-printing-service.jpeg') }}" alt="3D Printers"
                                    class="img-fluid rounded-4">
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Services End ================ -->



    <!-- ================ About Start ================ -->
    <section class="about-sec sec-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="sub-heading">Welcome to DoradoImpex 3D</div>
                    <h2>Empower 3D printing innovation with high-tech, total solutions — bringing your ideas to life
                        faster than ever.</h2>
                    <button class="button-2">About Us</button>
                </div>
                <div class="col-lg-5">
                    <section class="tab-section">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="choose-tab" data-bs-toggle="tab"
                                    data-bs-target="#choose" type="button" role="tab">Why choose us</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="principles-tab" data-bs-toggle="tab"
                                    data-bs-target="#principles" type="button" role="tab">Our principles</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="achievements-tab" data-bs-toggle="tab"
                                    data-bs-target="#achievements" type="button" role="tab">Achievements</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="choose" role="tabpanel">
                                <p>
                                    At DoradoImpex 3D, we combine advanced manufacturing facilities, cutting-edge
                                    production lines, and a skilled technical team to deliver unmatched precision and
                                    efficiency. With over two decades of expertise, we specialize in 3D printers,
                                    premium printing resins, and UV-curable materials, serving industries from smart
                                    security and AI to creative arts, toys, and furniture lighting.
                                </p>
                                <p>
                                    Our dedicated R&D team and rigorous quality testing ensure innovative, reliable
                                    products that meet diverse customer needs. We aim to set industry benchmarks while
                                    offering competitive pricing and world-class service.
                                </p>
                            </div>

                            <div class="tab-pane fade" id="principles" role="tabpanel">
                                <p>
                                    We are driven by innovation, integrity, and a passion for pushing the boundaries of
                                    3D printing technology. By continually refining our processes, we strive to deliver
                                    the most competitive and high-quality solutions to our clients worldwide.
                                </p>
                                <p>Collaboration is at the heart of our philosophy — partnering with engineers,
                                    designers, and makers to bring visionary projects to life. We are equally committed
                                    to sustainability, adopting green manufacturing practices that protect our planet
                                    while advancing the future of 3D printing.</p>
                            </div>

                            <div class="tab-pane fade" id="achievements" role="tabpanel">
                                <p>
                                    DoradoImpex 3D holds multiple utility model patents, including innovations like the
                                    “High-Sealing Glue Bottle” and the “Fully Automatic Glue Dispensing Machine.” These
                                    achievements reflect our leadership in product design and functionality.
                                </p>
                                <p>Our automatic glue dispensing system has earned the title of High-Tech Product in
                                    Guangdong Province, underscoring our dedication to technological excellence and
                                    product reliability. Each recognition strengthens our mission to deliver trusted,
                                    future-ready solutions.</p>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ About End ================ -->


    <!-- ================ CTA Start ================ -->
    <section class="cta-section sec-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
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
    <!-- ================ CTA End ================ -->


    <!-- ================ Advantages Start ================ -->
    <section class="advantage-sec sec-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sub-heading">Company Advantages</div>
                    <h2 class="sec-heading-1">Driving Innovation with Quality & Excellence</h2>
                    <p>We operate advanced production lines supported by a skilled, precision-driven team. Our focus on
                        quality, innovation, and problem-solving enables us to meet complex industry challenges.
                        Recognized with multiple patents and high-tech certifications, we are committed to setting new
                        benchmarks for excellence in the global market.</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="sec-heading-2">Our Principles</h2>
                    <div class="points mt-4">
                        <h5>Customers Served</h5>
                        <div class="colored-stripe stripe-1">
                            <p class="mb-0">Proudly serving over 500+ companies across the globe.</p>
                        </div>
                    </div>
                    <div class="points  mt-4">
                        <h5>Products Delivered</h5>
                        <div class="colored-stripe stripe-2">
                            <p class="mb-0">Successfully delivered more than 1 million products worldwide.</p>
                        </div>
                    </div>
                    <div class="points  mt-4">
                        <h5>Export Countries</h5>
                        <div class="colored-stripe stripe-3">
                            <p class="mb-0">Our products are exported to over 50 countries on 6 continents.</p>
                        </div>
                    </div>
                    <div class="points mt-4">
                        <h5>Products Developed</h5>
                        <div class="colored-stripe stripe-4">
                            <p class="mb-0">Developed 200+ innovative products tailored to diverse global needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Advantages End ================ -->


    <!-- ================ Steps Start ================ -->
    <section class="steps-sec sec-spacing">
        <div class="container">
            <div class="row ">
                <div class="step-wrapper col-lg-3 col-md-6 p-2">
                    <div class="step-card p-2">
                        <div class="num">
                            01
                        </div>
                        <h3 class="mb-4">Our Dental Manufacturing Facility</h3>
                        <p>We operate modern dental manufacturing facilities equipped with cutting-edge technology and
                            skilled professionals. With over 20 years of expertise, we ensure precision, efficiency, and
                            top-quality results. Our R&D team leverages advanced dental equipment to continuously
                            innovate and solve industry challenges.</p>
                    </div>
                </div>
                <div class="step-wrapper col-lg-3 col-md-6 p-2">
                    <div class="step-card p-2">
                        <div class="num">
                            02
                        </div>
                        <h3 class="mb-4">Dental 3D Printers</h3>
                        <p>Our state-of-the-art dental 3D printers deliver exceptional precision for crowns, bridges,
                            dentures, aligners, and surgical guides. Designed for continuous operation, they provide
                            consistent accuracy, speed, and reliability—making them ideal for both dental labs and
                            clinics aiming to improve productivity.</p>
                    </div>
                </div>
                <div class="step-wrapper col-lg-3 col-md-6 p-2">
                    <div class="step-card p-2">
                        <div class="num">
                            03
                        </div>
                        <h3 class="mb-4">Dental 3D Resin</h3>
                        <p>We provide high-quality dental resins engineered for accuracy, biocompatibility, and
                            durability. Our range includes materials for surgical guides, models, temporary crowns,
                            splints, and orthodontic applications—offering smooth finishes, low odor, and competitive
                            pricing for professional use.</p>
                    </div>
                </div>
                <div class="step-wrapper col-lg-3 col-md-6 p-2">
                    <div class="step-card p-2">
                        <div class="num">
                            04
                        </div>
                        <h3 class="mb-4">Dental 3D Printing Services</h3>
                        <p>From concept to completion, our dental 3D printing services offer unmatched precision and
                            reliability. We work closely with dental professionals to create customized solutions, fast
                            turnarounds, and strict quality control—helping bring advanced dental restorations and
                            appliances to life efficiently.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ================ Steps End ================ -->


    <!-- ================ Form Start ================ -->
    <section class="form-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="text-center">Any questions? Request a call-back to get a free analysis of your business!
                    </h2>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2 pt-5">
                <form class="callback-form mx-auto" style="max-width: 800px;">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control py-3" placeholder="Enter your name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control py-3" placeholder="Phone number" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control py-3" placeholder="Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control py-3" placeholder="Company" required>
                        </div>
                    </div>

                    <div class="form-check mt-3 ">
                        <input class="form-check-input" type="checkbox" id="marketingCheck">
                        <label class="form-check-label" for="marketingCheck">
                            I agree to be contacted and receive marketing information.
                        </label>
                    </div>

                    <div class="mt-4 d-flex justify-content-center">
                        <button type="submit" class="callback-btn">
                            <i class="fa-solid fa-phone"></i> Request a call-back
                        </button>
                    </div>
                </form>
            </div>


        </div>

        </div>
    </section>
    <!-- ================ Form End ================ -->


    <!-- ================ Why choose Start ================ -->
    <section class="why-choose sec-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-4 d-flex align-items-center">
                    <div class="content">
                        <div class="sub-heading mb-3">Why choose our company</div>
                        <h2 class="fw-semibold">Empowering your business with faster, smarter solutions</h2>
                        <ul class="why-choose-list list-unstyled">
                            <li>Deliver prototypes and samples in record time to speed up your market entry.</li>
                            <li>Operate seamlessly 24/7 with consistent quality and production efficiency.</li>
                            <li>Understand your vision in depth, refine product designs, and offer multiple optimized
                                solutions for your needs.</li>
                            <li>From 3D printing to finishing touches like polishing, coating, coloring, and packaging —
                                our expert team ensures your product is ready for success.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 p-lg-4 pe-lg-0">
                    <div class="why-choose-img">
                        <img src="{{ Vite::asset('resources/assets/images/why_choose.jpeg') }}" alt="Why choose us" class="img-fluid rounded-4">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Why choose End ================ -->

@endsection