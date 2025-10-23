@extends('frontend.layouts.navbarlayout')

@section('title', $product->meta_title ?: $product->title)

@section('meta')
    <meta name="description" content="{{ $product->meta_description ?: $product->short_description }}">
@endsection

@section('main')
    <div class="single-product-sec sec-padding sec-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-5">
                    <div class="image-wrapper">
                        @if($product->image)
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="img-fluid">
                        @else
                            <img src="../images/product-img2 (1).png" alt="{{ $product->title }}" class="img-fluid">
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="product-title">{{ $product->title }}</h2>
                    
                    <!-- Main description from CKEditor -->
                    <div class="product-description mt-3">
                        {!! $product->description !!}
                    </div>

                    <!-- Structured sections (if you have them as separate fields) -->
                    @if($product->colors)
                    <div class="mt-4">
                        <h5 class="di-productSpec-heading">Available Colors</h5>
                        <ul class="list-unstyled">
                            @foreach(json_decode($product->colors) as $color)
                            <li>
                                <svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512" class="di-productSpec-icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                                </svg> 
                                {{ $color }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <button class="di-productSpec-btn-quote mt-4 button-3">Request a Quote</button>
                </div>
            </div>
        </div>
    </div>
@endsection