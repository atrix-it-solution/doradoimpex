@extends('frontend.layouts.navbarlayout')


@section('title','About')

@section('main')

    <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Page Heading End ================ -->


    <!-- ================ Section 1 start ================ -->
    <section class="we-are-section sec-padding sec-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex justify-content-center">
                    <div class="we-are-img ratio ratio-1x1 overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/images/about_1.jpeg') }}" alt="about image" class="img-fluid rounded-1 object-fit-cover">
                    </div>
                </div>

                <div class="col-lg-5 d-flex align-items-center   ps-lg-5 mt-4 mt-lg-0">
                    <div class="">
                        <h2 class="mb-4 fw-semibold">Hi! We Are DoradoImpex</h2>
                        <p>At DoradoImpex, we combine innovation, precision, and expertise to deliver world-class 3D
                            printing solutions. With a state-of-the-art facility and a passionate team, we’ve been
                            shaping
                            industries for over two decades — offering cutting-edge printers, premium resins, and
                            advanced
                            UV curing systems to bring your ideas to life with exceptional quality.</p>
                        <p>Our solutions cater to diverse sectors including dental, jewelry, manufacturing, and
                            prototyping.
                            Every product we create is designed to empower creators, engineers, and businesses with the
                            tools they need to turn complex ideas into tangible reality — faster, smarter, and more
                            cost-efficient than ever.</p>
                        <p>With a commitment to excellence and customer satisfaction, DoradoImpex stands as a trusted
                            partner for those seeking reliable, high-performance, and sustainable 3D printing
                            technology.
                            We’re not just building products — we’re building the future of manufacturing.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ================ Section 1 End ================ -->
    <section class="sec-padding sec-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center ">
                    <h2 class="mb-4 fw-semibold">Cutting-Edge Production Excellence</h2>
                    <p>At Dorado Impex, our manufacturing facilities are equipped with state-of-the-art production
                        lines, advanced machinery, and a highly trained technical workforce. Every process is driven by
                        precision engineering and strict quality control, ensuring consistent output that meets global
                        standards. From small-batch prototyping to high-volume manufacturing, we deliver efficiency,
                        reliability, and exceptional product quality to support diverse industry needs.</p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="{{ Vite::asset('resources/assets/images/image_3.jpg') }}" alt="about 3" class="img-fluid mb-4 mb-lg-0">
                        </div>
                        <div class="col-lg-4 d-flex flex-column justify-content-between">
                            <div><img src="{{ Vite::asset('resources/assets/images/image_4.jpg') }}" alt="image_4" class="img-fluid mb-4 mb-lg-0"> </div>
                            <div><img src="{{ Vite::asset('resources/assets/images/image_4.jpg') }}" alt="image_5" class="img-fluid mb-4 mb-lg-0"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ Section 2 Start ================ -->


    <!-- ================ Section 3 Start ================ -->
    <section class="we-are-section about-3 sec-padding sec-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex justify-content-center">
                    <div class="we-are-img ratio ratio-1x1 overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/images/about_3.jpeg') }}" alt="about image" class="img-fluid rounded-1 object-fit-cover">
                    </div>
                </div>

                <div class="col-lg-5 d-flex align-items-center ps-5">
                    <div class="">
                        <h2 class="mb-4 fw-semibold mt-4 mt-lg-0">Our Purpose</h2>
                        <p>At DoradoImpex 3D, our purpose is to shape a more sustainable future for the 3D printing
                            industry. Through advanced technology and eco-conscious practices, we are committed to
                            delivering high-performance printers and environmentally friendly resins that minimize
                            waste, conserve energy, and inspire innovation.</p>
                        <ul>
                            <li>Commitment to environmental protection</li>
                            <li>Energy-efficient printing solutions</li>
                            <li>Promotion of sustainable practices</li>
                            <li>Decades of combined professional expertise</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ================ Section 3 End ================ -->

    <!-- ================ Our Team Sec Start ================ -->
    <section class="about-4 sec-padding sec-margin">
        <div class="container ">
            <h2 class="text-center fw-semibold mb-5 mt-4">Our Team</h2>
            <div class="row pt-3">
                <div class="col-lg-6">
                    <div class="team-card d-lg-flex gap-5">
                        <div class="team-img">
                            <img src="{{ Vite::asset('resources/assets/images/our-team-1.jpg') }}" alt="team image" >
                        </div>
                        <div class="team-content">
                            <h3>High-Precision Testing</h3>
                            <p>Using state-of-the-art precision testing equipment, we focus on driving innovation and
                                enhancing the capabilities of 3D printing technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-card d-lg-flex gap-5">
                        <div class="team-img">
                            <img src="{{ Vite::asset('resources/assets/images/our-team-2.jpg') }}" alt="team image" >
                        </div>
                        <div class="team-content">
                            <h3>Expert R&D Team</h3>
                            <p>Our skilled research and development specialists deliver exceptional stability, performance, and reliability through rigorous quality control and ongoing advancements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-card d-lg-flex gap-5">
                        <div class="team-img">
                            <img src="{{ Vite::asset('resources/assets/images/our-team-3.jpg') }}" alt="team image" >
                        </div>
                        <div class="team-content">
                            <h3>Decades of Experience</h3>
                            <p>With more than 20 years in the industry, we excel in delivering advanced 3D printers and resins for applications spanning security, AI, and digital manufacturing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-card d-lg-flex gap-5">
                        <div class="team-img">
                            <img src="{{ Vite::asset('resources/assets/images/our-team-4.jpg') }}" alt="team image" >
                        </div>
                        <div class="team-content">
                            <h3>Innovative Teamwork</h3>
                            <p>Our dedicated R&D professionals design and produce high-quality, specialized 3D printing resins tailored to meet the unique needs of multiple industries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- ================ Our Team Sec End  ================ -->

@endsection