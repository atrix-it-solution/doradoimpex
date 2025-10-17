@extends('frontend.layouts.navbarlayout')


@section('title','Blog')

@section('main')

 <!-- ================ Page Heading Start ================ -->
    <div class="blog-heading sec-padding">
        <div class="container d-flex justify-content-center">
            <h1 class="blog-heading-h1 fw-bold">Blogs</h1>
        </div>
    </div>

    <!-- ================ Page Heading End ================ -->

    <!-- ================ Blog content start ================ -->

    <div class="blog-content-sec pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="blog-card p-2 ">
                                <div class="blog-img-wrp ratio ratio-16x9 object-fit-fill">
                                    <img src="{{ Vite::asset('resources/assets/images/blog-1.jpeg') }}""images/" alt="" class="img-fluid">
                                    <div class="blog-details">
                                        <span> <i class="fa-solid fa-user"></i> DoradoImpex Team</span>
                                        <span> <i class="fa-solid fa-calendar-days"></i> 2025-08-08</span>
                                    </div>
                                </div>
                                <div class="blog-content py-4 px-2">
                                    <h4>Why the Right 3D Printer Matters for Your Business Success</h4>
                                    <p>Choosing the right 3D printer is more than specs—it's about reliability, scalability, and cost-efficiency for your business.</p>
                                    <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-card p-2 ">
                                <div class="blog-img-wrp ratio ratio-16x9 object-fit-fill ">
                                    <img src="{{ Vite::asset('resources/assets/images/blog-2.jpg') }}" alt="" class="img-fluid">
                                    <div class="blog-details">
                                        <span> <i class="fa-solid fa-user"></i> DoradoImpex Team</span>
                                        <span> <i class="fa-solid fa-calendar-days"></i> 2025-08-08</span>
                                    </div>
                                </div>
                                <div class="blog-content py-4 px-2">
                                    <h4>A Complete Guide to Choosing the Best 3D Printing Resin</h4>
                                    <p>Resins can make or break your 3D prints. Learn which resins are ideal for engineering, dental, or artistic models.</p>
                                    <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-card p-2 ">
                                <div class="blog-img-wrp ratio ratio-16x9 object-fit-fill">
                                    <img src="{{ Vite::asset('resources/assets/images/blog-3.jpg') }}" alt="" class="img-fluid">
                                    <div class="blog-details">
                                        <span> <i class="fa-solid fa-user"></i> DoradoImpex Team</span>
                                        <span> <i class="fa-solid fa-calendar-days"></i> 2025-08-08</span>
                                    </div>
                                </div>
                                <div class="blog-content py-4 px-2">
                                    <h4>Why 3D Printing Services Are Revolutionizing Manufacturing</h4>
                                    <p>Outsourcing 3D printing services helps startups and enterprises reduce costs, accelerate prototyping, and scale production.</p>
                                    <a href="#" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="latest-post-sec">
                        <div class="sec-heading border-1 border-bottom p-3">
                            <h3>Latest Post</h3>
                        </div>
                        <div class="cards-wrapper p-3">
                            <div class="latest-card pb-3 mb-3">
                                <div class="latest-post-heading">
                                    <h5>Why the Right 3D Printer Matters for Your Business Success</h5>
                                </div>
                                <div class="latest-post-info">
                                    <a href="#">DoradoImpex Team</a>
                                    <a href="#">2025-08-08</a>
                                </div>
                                <div class="latest-card-img mt-2">
                                    <img src="{{ Vite::asset('resources/assets/images/blog-1.jpeg') }}" alt="blog image">
                                </div>
                            </div>
                            <div class="latest-card pb-3 mb-3">
                                <div class="latest-post-heading">
                                    <h5>A Complete Guide to Choosing the Best 3D Printing Resin</h5>
                                </div>
                                <div class="latest-post-info">
                                    <a href="#">DoradoImpex Team</a>
                                    <a href="#">2025-08-08</a>
                                </div>
                                <div class="latest-card-img mt-2">
                                    <img src="{{ Vite::asset('resources/assets/images/blog-2.jpg') }}" alt="blog image">
                                </div>
                            </div>
                            <div class="latest-card ">
                                <div class="latest-post-heading">
                                    <h5>Why 3D Printing Services Are Revolutionizing Manufacturing</h5>
                                </div>
                                <div class="latest-post-info">
                                    <a href="#">DoradoImpex Team</a>
                                    <a href="#">2025-08-08</a>
                                </div>
                                <div class="latest-card-img mt-2">
                                    <img src="{{ Vite::asset('resources/assets/images/blog-3.jpg') }}" alt="blog image">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="latest-post-sec my-4">
                        <div class="sec-heading border-1 border-bottom p-3">
                            <h3>Latest Tags</h3>
                        </div>
                        <div class="tags-wrapper p-3 d-flex gap-1 flex-wrap">
                            <span>All</span>
                            <span>3D Printer</span>
                            <span>3D Printing Resin</span>
                            <span>3D Printing Service</span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================ Blog content end ================ -->
   

@endsection