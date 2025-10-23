@extends('frontend.layouts.navbarlayout')

@section('title', $blog->title)

@section('main')

   <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Page Heading End ================ -->
    <div class="blog-single-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="blog-single-content">
                        @if($blog->featured_image)
                        <div class="blog-featured-image mb-4">
                            <img src="{{ Storage::url($blog->featured_image) }}" alt="{{ $blog->title }}" class="img-fluid rounded">
                        </div>
                        @endif
                        
                        <h1 class="blog-title">{{ $blog->title }}</h1>
                        
                        <div class="blog-meta mb-4">
                            <span><i class="fa-solid fa-user"></i> {{ $blog->author ?? 'DoradoImpex Team' }}</span>
                            <span><i class="fa-solid fa-calendar-days"></i> {{ $blog->created_at->format('F j, Y') }}</span>
                        </div>
                        
                        <div class="blog-content">
                            {!! $blog->description !!}
                        </div>
                    </article>
                </div>
                
                <div class="col-lg-4">
                    <!-- Sidebar with latest posts -->
                    <div class="latest-post-sec">
                        <div class="sec-heading border-1 border-bottom p-3">
                            <h3>Latest Posts</h3>
                        </div>
                        <div class="cards-wrapper p-3">
                            @foreach(\App\Models\Blog::latest()->take(3)->get() as $latestBlog)
                            <div class="latest-card pb-3 mb-3">
                                <div class="latest-post-heading">
                                    <h5><a href="{{ route('blog.show', $latestBlog->slug) }}">{{ $latestBlog->title }}</a></h5>
                                </div>
                                <div class="latest-post-info">
                                    <span>{{ $latestBlog->author ?? 'DoradoImpex Team' }}</span>
                                    <span>{{ $latestBlog->created_at->format('Y-m-d') }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection