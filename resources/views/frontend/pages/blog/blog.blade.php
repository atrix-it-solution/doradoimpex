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
                        @foreach($blogs as $blog)
                        <div class="col-lg-6">
                            <div class="blog-card p-2">
                                <div class="blog-img-wrp ratio ratio-16x9 object-fit-fill">
                                    @if($blog->featured_image)
                                        <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}" class="img-fluid">
                                    @else
                                        <img src="{{ Vite::asset('resources/assets/images/blog-default.jpg') }}" alt="{{ $blog->title }}" class="img-fluid">
                                    @endif
                                    <div class="blog-details">
                                        <span><i class="fa-solid fa-user"></i> {{ $blog->author ?? 'DoradoImpex Team' }}</span>
                                        <span><i class="fa-solid fa-calendar-days"></i> {{ $blog->created_at->format('Y-m-d') }}</span>
                                    </div>
                                </div>
                                <div class="blog-content py-4 px-2">
                                    <h4>{{ $blog->title }}</h4>

                                    <div class="blog-excerpt">
                                        @if($blog->shot_description)
                                            {!! $blog->shot_description !!}
                                        @else
                                            @php
                                                $cleanText = strip_tags($blog->description);
                                            @endphp
                                            <p>{{ Str::limit($cleanText, 150) }}</p>
                                        @endif
                                    </div>
  

                                    <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- Show message if no blogs -->
                        @if($blogs->count() == 0)
                        <div class="col-12">
                            <div class="text-center py-5">
                                <h4>No blogs available yet.</h4>
                                <p>Check back later for new blog posts.</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <!-- Latest Posts Sidebar -->
                    <div class="latest-post-sec">
                        <div class="sec-heading border-1 border-bottom p-3">
                            <h3>Latest Posts</h3>
                        </div>
                        <div class="cards-wrapper p-3">
                            @foreach($blogs->take(3) as $latestBlog)
                            <div class="latest-card pb-3 mb-3">
                                <div class="latest-post-heading">
                                    <h5>{{ $latestBlog->title }}</h5>
                                </div>
                                <div class="latest-post-info">
                                    <a href="#">{{ $latestBlog->author ?? 'DoradoImpex Team' }}</a>
                                    <a href="#">{{ $latestBlog->created_at->format('Y-m-d') }}</a>
                                </div>
                                <div class="latest-card-img mt-2">
                                    @if($latestBlog->featured_image)
                                        <img src="{{ Storage::url($latestBlog->featured_image) }}" alt="{{ $latestBlog->title }}">
                                    @else
                                        <img src="{{ Vite::asset('resources/assets/images/blog-default.jpg') }}" alt="{{ $latestBlog->title }}">
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Tags Section -->
                    <div class="latest-post-sec my-4">
                        <div class="sec-heading border-1 border-bottom p-3">
                            <h3>Popular Tags</h3>
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