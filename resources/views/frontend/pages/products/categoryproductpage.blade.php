@extends('frontend.layouts.navbarlayout')

@section('title', $category->name)

@section('main')
    <!-- ================ Page Heading Start ================ -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h1>{{ $category->name }}</h1>
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
                    <div class="printer-products">
                        <div class="row g-4">
                            @forelse($products as $product)
                            <div class="col-lg-6">
                                <a href="{{ route('products.show', $product->slug) }}" class="text-decoration-none">
                                    <div class="printer-product-card shadow py-2 rounded-4">
                                        <div class="product-img-wrapper p-4">
                                            @if($product->image)
                                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="rounded-3 img-fluid">
                                            @else
                                            <img src="{{ Vite::asset('resources/assets/images/default-product.png') }}" alt="{{ $product->title }}" class="rounded-3 img-fluid">
                                            @endif
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
                            @empty
                            <div class="col-12">
                                <div class="alert alert-info text-center">
                                    <h4>No products found in this category.</h4>
                                    <p>Please check back later for new products.</p>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Dynamic content based on category -->
                    @if($category->slug == '3d-printer')
                    <div class="desc-1 mt-5">
                        <h2>And more...</h2>
                        <ul>
                            <li>Pre-configured settings optimize print quality without additional user adjustments.</li>
                            <li>Fast heat-up in just 15 minutes with adjustable temperatures up to 50°C.</li>
                            <li>Designed for continuous 24/7 printing with a robust build plate and auto-cooling safety features.</li>
                            <li>Easy modular part replacement, full print support, and one month of technical assistance.</li>
                        </ul>
                    </div>
                    @elseif($category->slug == '3d-printing-resin')
                    <div class="desc-1 mt-5">
                        <h2>And more... </h2>
                        <ul>
                            <li>Casting resin can be cast in the same furnace as real wax, simplifying production.</li>
                            <li>No specialized resin plaster required, making it more user-friendly.</li>
                            <li>Ideal for delicate jewelry, handicrafts, and fine-detail models.</li>
                            <li>Simple casting process for both professionals and hobbyists.</li>
                        </ul>
                    </div>
                    @endif

                    <!-- Common content for all categories -->
                    <div class="desc-2-with-cards pt-5">
                        <h2>{{ $category->name }} Benefits</h2>
                        <p class="my-4">{{ $category->description ?? 'Explore our premium range of ' . $category->name . ' designed to deliver exceptional performance across various industries.' }}</p>

                        <div class="card-section my-5">
                            <div class="row gy-5">
                                <!-- Add category-specific benefits here -->
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>High Quality</h4>
                                            <p>Premium materials and construction ensure long-lasting performance and reliability.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-wrapper">
                                        <div class="card-icon">
                                            <i class="fa-solid fa-shield-halved"></i>
                                        </div>
                                        <div class="card-desc">
                                            <h4>Durability</h4>
                                            <p>Engineered to withstand demanding use with superior resistance to wear and tear.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ps-lg-3">
                    <div class="app-right-sec">
                        <div class="sec-heading">
                            <h3>Overview</h3>
                            <hr>
                        </div>
                        <div class="app-pages-link-wrapper">
                            <ul class="list-unstyled">
                                @php
                                    $categories = \App\Models\ProductCategory::whereIn('slug', [
                                        '3d-printer', 
                                        '3d-printer-software', 
                                        '3d-printing-resin', 
                                        '3d-printing-service'
                                    ])->get();
                                @endphp
                                
                                @foreach($categories as $cat)
                                <li class="{{ $cat->id == $category->id ? 'active' : '' }}">
                                    <a href="{{ route('products.' . str_replace('-', '_', $cat->slug)) }}">
                                        {{ $cat->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="app-cta rounded-3 ">
                            <div class="cta-sub-heading">Special offer</div>
                            <h2 class="mt-3 mb-4">Save More as You Buy More – Up to 50% Off!</h2>
                            <div>
                                <a href="{{ route('contact') }}" class="button-3 py-3">Get a Quote Now</a>
                            </div>
                        </div>

                        <!-- Featured Products Slider -->
                        <div class="sec-heading">
                            <h3>Featured Products</h3>
                            <hr>
                        </div>
                        <div class="vertical-product-slider">
                            @php
                                $featuredProducts = \App\Models\Product::with('categories')
                                    ->whereHas('categories', function($query) use ($category) {
                                        $query->where('product_categories.id', $category->id);
                                    })
                                    ->take(8)
                                    ->get();
                            @endphp
                            
                            @foreach($featuredProducts as $featuredProduct)
                            <div>
                                <a href="{{ route('products.show', $featuredProduct->slug) }}">
                                    <div class="product-card border border-1 rounded-3">
                                        <div class="product-img-wrapper p-4">
                                            @if($featuredProduct->image)
                                            <img src="{{ Storage::url($featuredProduct->image) }}" alt="{{ $featuredProduct->title }}" class="img-fluid">
                                            @else
                                            <img src="{{ Vite::asset('resources/assets/images/default-product.png') }}" alt="{{ $featuredProduct->title }}" class="img-fluid">
                                            @endif
                                        </div>
                                        <div class="product-heading mb-5">
                                            <h4 class="text-center px-5">{{ $featuredProduct->title }}</h4>
                                        </div>
                                        <div class="product-section">
                                            <p class="text-center">{{ Str::limit(strip_tags($featuredProduct->description), 150) }}</p>
                                        </div>
                                        <button class="button-5 d-block m-auto">Read more</button>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>

                        <!-- Questions Section -->
                        <div class="qn-sec sec-margin sec-padding">
                            <div class="sec-heading">
                                <h2>Questions?</h2>
                                <hr style="margin-bottom: 40px;">
                            </div>
                            <p class="mb-5" style="font-size: 18px;">Send a question for a quick, free analysis of your business today!</p>
                            <a href="{{ route('contact') }}" class="button-5" style="padding: 14px 35px; font-size: 16px;">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Page Content End ================ -->
@endsection