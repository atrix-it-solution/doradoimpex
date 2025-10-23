{{-- get all products --}}
@php
    use App\Models\Product;
    
    $featuredProducts = Product::orderBy('created_at', 'desc')
                              ->take(8)
                              ->get();
@endphp

<div class="sec-heading">
    <h3>Featured Products</h3>
    <hr>
</div>
<div class="vertical-product-slider">
    @foreach($featuredProducts as $product)
    <div>
        <a href="{{ route('products.show', $product->slug) }}" class="text-decoration-none">
            <div class="product-card border border-1 rounded-3">
                <div class="product-img-wrapper p-4">
                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="img-fluid" />
                </div>
                <div class="product-heading mb-5">
                    <h4 class="text-center px-5">{{ $product->title }}</h4>
                </div>
                
                <!-- Short Description -->
                <div class="product-section">
                    <div class="text-center px-3">
                       {!! $product->description !!}
                    </div>
                </div>
                
                <button class="button-5 d-block m-auto">Read more</button>
            </div>
        </a>
    </div>
    @endforeach
</div>