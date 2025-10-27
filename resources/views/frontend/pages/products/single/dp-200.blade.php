@extends('frontend.layouts.navbarlayout')


@section('title','DoradoImpex DP-200 Compact 3D Printer')

@section('main')



@section('main')
     <!-- ================ Product Start ================ -->
    <div class="single-product-sec sec-padding sec-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-5">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/img/images/printer-product-3.png') }}" alt="single product image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="product-title">DoradoImpex DP-200 Compact 3D Printer</h1>
                    <p class="product-description mt-3">The DoradoImpex DP-200 is a compact and affordable 3D printer designed for hobbyists, students, and beginners. With a smaller footprint and easy-to-use interface, it delivers reliable prints while being accessible for first-time users. Perfect for classrooms, home projects, and makerspaces.</p>
                    <div class="mt-4">
                        <h5 class="di-productSpec-heading">Available Colors</h5>
                        <ul class="list-unstyled">
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> White</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg>Black</li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <h5 class="di-productSpec-heading">Key Features</h5>
                        <ul class="list-unstyled">
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Compact design with 200x200x200mm build volume</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> User-friendly interface with quick setup</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Quiet printing operation for home and school use</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Magnetic removable build plate for easy print removal</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Affordable solution for entry-level 3D printing</li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <h5 class="di-productSpec-heading">Specifications</h5>
                        <ul class="list-unstyled">
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Print Technology: FDM</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Nozzle Diameter: 0.4mm</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Layer Thickness: 0.1–0.3mm</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Print Speed: 20–120 mm/s</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Filament Compatibility: PLA, ABS, PETG</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Build Plate: Magnetic removable plate (up to 80°C)</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg>Connectivity: USB, SD Card</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg>Supported File Types: STL, OBJ</li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <h5 class="di-productSpec-heading">Applications</h5>
                        <ul class="list-unstyled">
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Education</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> DIY Projects</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Prototyping Small Parts</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Art and Craft Models</li>
                            <li><svg stroke="#F97316" fill="#F97316" stroke-width="0" viewBox="0 0 512 512"
                                    class="di-productSpec-icon" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg> Beginner 3D Printing</li>
                        </ul>
                    </div>
                    <a href='/contact'><button class="di-productSpec-btn-quote mt-4 button-3">Request a Quote</button></a>
                </div>
            </div>
        </div>
    </div>


    <!-- ================ Product End ================ -->
@endsection