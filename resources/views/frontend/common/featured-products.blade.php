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
            <div class="product-card border rounded-3">
                <div class="product-img-wrapper p-4">
                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="img-fluid" />
                </div>
                <div class="product-heading mb-5">
                    <h4 class="text-center px-5">{{ $product->title }}</h4>
                </div>
                
                <!-- Description WITHOUT First Paragraph AND Specifications -->
                <div class="product-section">
                    <div class=" px-3">
                        @php
                            // Remove first paragraph
                            $step1 = preg_replace('/<p[^>]*>.*?<\/p>\s*/s', '', $product->description, 1);
                            
                            // Remove Specifications section - UNIVERSAL PATTERN
                            // Pattern 1: Remove <p><strong>Specifications</strong> with any content until next section
                            $step2 = preg_replace('/<p><strong>Specifications<\/strong>.*?<p><strong>(Applications|Key Features|$)/s', '<p><strong>$1', $step1);
                            
                            // Pattern 2: Remove standalone Specifications UL with technical data
                            $step3 = preg_replace('/<ul><li>(Print Technology|Nozzle Diameter|Layer Thickness|Print Speed|Filament Compatibility|Viscosity|Hardness|Curing Wavelength|Tensile Strength).*?<\/ul>/s', '', $step2);
                            
                            $descriptionWithoutFirstParagraph = $step3;
                        @endphp
                        {!! $descriptionWithoutFirstParagraph !!}
                    </div>
                </div>
                
                <button class="button-5 d-block m-auto">Read more</button>
            </div>
        </a>
    </div>
    @endforeach
</div>
<!-- .vertical-product-slider .product-card ul li{
    margin-bottom: 5px;
    font-size: 15px;
} -->
    <!-- .vertical-product-slider .product-card p{
    font-size: 17px;
    color: #f97316;
    margin-bottom: 10px;
} -->