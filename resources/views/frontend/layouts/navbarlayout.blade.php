<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Doradoimpex</title>
    <!-- Bootstrap Cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- fontawesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- slick slider cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link  -->
     @vite(['resources/assets/css/styles.css'])
     @vite(['resources/assets/css/about.css'])
     @vite(['resources/assets/css/blog.css'])
     @vite(['resources/assets/css/contact.css'])
     @vite(['resources/assets/css/product-page.css'])
     @vite(['resources/assets/css/application-page.css'])


</head>

<body>

    <!-- ================ Navbar Start ================ -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-bg px-2">
        <div class="container">
            <div class="col-3">
                <a class="navbar-brand d-flex" href="/">
                    <div style="width: 150px;">
                        <img src="{{ asset('images/Dorado-Impex-Logo-TM-Mark.png') }}" alt="Doradoimpex Logo" class="img-fluid">
                    </div>

                </a>
            </div>

            <button class="navbar-toggler align-self-end" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll flex-grow-1 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Applications
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="automotive">Automotive</a></li>
                            <li><a class="dropdown-item" href="aerospace">Aerospace</a></li>
                            <li><a class="dropdown-item" href="dental-industry">Dental Industry</a></li>
                            <li><a class="dropdown-item" href="jewelry-industry">Jewelry Industry</a></li>
                            <li><a class="dropdown-item" href="industrial-engineering">Industrial Engineering</a>
                            </li>
                            <li><a class="dropdown-item" href="3d-printing-consumables">3D Printing Consumables</a>
                            </li>
                            <li><a class="dropdown-item" href="additive-manufacturing">Additive Manufacturing</a>
                            </li>
                            <li><a class="dropdown-item" href="educational-applications">Educational
                                    Applications</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="3d-printer">3D Printer</a></li>
                            <li><a class="dropdown-item" href="3d-printer-software">3D Printer Software</a></li>
                            <li><a class="dropdown-item" href="3d-printing-resin">3D Printing Resin</a></li>
                            <li><a class="dropdown-item" href="3d-printing-service">3D Printing Service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>

            </div>
            <div class="col-3 d-none d-lg-block">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll d-lg-flex justify-content-end d-none">
                    <li class="nav-item">
                        <a class="nav-link " href="signup"><i class="fa-solid fa-user-plus"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin"><i class="fa-solid fa-user"></i> Sign In</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- ================ Navbar End ================ -->


    <main>
        @yield('main')
    </main>



     <!-- ================ Footer Start ================ -->
    <footer class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 pe-lg-4">
                    <div class="footer-logo" style="width: 205px;">
                        <a href="/"><img src="{{ Vite::asset('resources/assets/images/Dorado Impex Logo TM Mark.png') }}" alt="footer logo"
                                class="img-fluid"></a>
                    </div>
                    <p class="mt-4 ">Welcome to DoradoImpex, your trusted partner for premium imports and exports. We
                        specialize in delivering high-quality products worldwide, ensuring excellence in every
                        transaction.</p>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="fw-semibold border-bottom border-3 border-primary d-inline-block pb-3 mb-2">Quick Links
                    </h4>
                    <ul class="ps-lg-0 ps-3">
                        <li> <a href="about">About Us</a> </li>
                        <li><a href="blog">Our Blogs</a></li>
                        <li><a href="contact">Contact us</a></li>
                        <li><a href="signin">Sign In</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-12">
                    <div class=" d-flex justify-content-center">
                        <h4 class="fw-semibold  border-bottom border-3 border-primary d-inline-block pb-3 mb-2">Our
                            Applications</h4>
                    </div>
                    <ul class="our-app-list">
                        <li> <a href="automotive">Automotive</a></li>
                        <li><a href="aerospace">Aerospace</a></li>
                        <li><a href="dental-industry">Dental Industry</a></li>
                        <li><a href="jewelry-industry">Jewelry Industry</a></li>
                        <li><a href="industrial-engineering">Industrial Engineering</a></li>
                        <li><a href="3d-printing-consumables">3D Printing Consumables</a></li>
                        <li><a href="additive-manufacturing">Additive Manufacturing</a></li>
                        <li><a href="educational-applications">Educational Applications</a></li>

                    </ul>
                </div>
                <div class="col-lg-2 col-12 ">
                    <h4 class="fw-semibold border-bottom border-3 border-primary d-inline-block pb-3 mb-2">Legal
                        Info
                    </h4>

                    <ul class=" ps-lg-0 ps-3">
                        <li><a href="privacy-policy">Privacy Policy</a></li>
                        <li><a href="cookie-policy">Cookie Policy</a></li>
                        <li><a href="terms-and-condition">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="fw-semibold border-bottom border-3 border-primary d-inline-block pb-3 mb-2">Contact Info
                    </h4>
                    <ul class="list-unstyled ps-0">
                        <li>
                            <div class="d-flex">
                                <div class="icon pe-2"><i class="fa-solid fa-phone"></i> </div>
                                <div class="content">(659) 208-7410</div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="icon pe-2"><i class="fa-solid fa-envelope"></i> </div>
                                <div class="content">contact@doradoimpex.c om</div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="icon pe-2"><i class="fa-solid fa-location-dot"></i> </div>
                                <div class="content">1207/343 & 1207/1/343/1, 9th Main, 7th Sector, HSR Layout Bangalore
                                    Karnataka 560102</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

    </footer>
    <!-- ================ Footer End ================ -->

    <!-- ================ Footer Policy Start ================ -->
    <div class="term-policy pt-4">
        <div class="container">
            <div class="row justify-content-between py-2 mt-3">
                <div class="col-lg-12 col-12"><span class="copyright-para">© 2025 DoradoImpex. All Rights Reserved. The
                        information in this website/document is for promotional purposes only and not contractual. No
                        part of this website/document may be reproduced or transmitted in any form or by any means
                        without the prior written permission of DoradoImpex .</span></div>
            </div>
            <div class="py-2 copyright-para" style="font-size:12px">DoradoImpex is an independent support company,
                unaffiliated with any manufacturers. All brand names, trademarks, and logos on our site belong to their
                respective owners and are used for reference only. Our expert technicians provide support and repair
                services , but we do not sell or endorse any specific brand. By using our services, you agree that
                DoradoImpex is not responsible for warranties or guarantees from original manufacturers. For official
                support and warranties, contact the manufacturers directly.</div>
            <div class="py-2 copyright-para"><strong>Information collected:</strong><br><strong>Webforms:</strong>
                doradoimpex.com uses webforms on this site. These forms require users to give contact information [First
                and last name/ Email address/ Phone Number ]. Contact information from the registration form is used to
                send material relating to the Service for which it was collected and may be shared with our advertising
                partners or other third parties for advertising purposes. <br>If you complete an intake form, we collect
                the following personal information: [First and last name/ Email address/ Phone Number ].</div>
            <div class="py-2 copyright-para"><strong>Analytics:</strong> doradoimpex.com servers collect the following
                analytics: <br>• Anonymized conversion data through customer action button.<br><strong>Third Party Data
                    Collection:</strong> In addition, our website utilizes Microsoft Advertising, and we created our
                website using Smart Pages. Microsoft will collect and share the following information with DoradoImpex
                in accordance with their Privacy Statement at<!-- --> <a target="_blank" rel="noreferrer"
                    class="text-warning" href="https://www.microsoft.com/en-us/privacy/privacystatement">Microsoft
                    Privacy Statement</a>.<br>• Conversion data if you click a customer action button from an ad.<br>•
                Personal data associated with the action button, including: [First and last name/ Email address/ Phone
                Number ].</div>
            <div class="py-2 mb-5 copyright-para">Microsoft will use the above information in accordance with their
                Privacy Statement at<!-- --> <a target="_blank" rel="noreferrer" class="text-warning"
                    href="https://www.microsoft.com/en-us/privacy/privacystatement">Microsoft Privacy Statement</a>
                <!-- -->for the following purposes: <br>• To show you ads that are more personalized.<br>• To improve
                their advertising products and services.<br>• Smart Page website optimization and
                troubleshooting.<br>Microsoft account users can manage their ad settings and opt-out of personalized
                advertising with DoradoImpex at:<!-- --> <a target="_blank" rel="noreferrer" class="text-warning"
                    href="https://www.microsoft.com/en-us/privacy/privacystatement">Microsoft account | Privacy</a>.
            </div>
        </div>
    </div>
    <!-- ================ Footer Policy End ================ -->


    <!-- Bootstrap JS Cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <!-- Slick slider cdn   -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js file   -->
    <script src="{{ Vite::asset('resources/assets/js/script.js') }}"></script>
</body>

</html>