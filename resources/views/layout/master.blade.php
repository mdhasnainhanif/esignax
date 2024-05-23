<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title', 'Esignax')</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('assets/images/favicon/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicon/manifest.json') }}" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap.min.js') }}" />
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- StyleSheet link CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom-style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/special-classes.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    @yield('style')

</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>



    @if (Route::currentRouteName() == 'index')
        <!-- Header  -->
        <div class="banner_outer" data-here="{{ Route::currentRouteName() }}">
            @include('layout.header')
            <figure class="banner-layerright mb-0">
                <img src="./assets/images/banner-layerright.png" class="img-fluid" alt="" />
            </figure>
            <section class="banner-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12" data-aos="fade-right">
                            <div class="social-icons position-relative" data-aos="fade-up">
                                <ul class="list-unstyled position-absolute">
                                    <li>
                                        <a href="" class="text-decoration-none"><i
                                                class="fa-brands fa-facebook-f social-networks"></i></a>
                                    </li>
                                    {{-- <li>
                                        <a href="" class="text-decoration-none"><i
                                                class="fa-brands fa-twitter social-networks"></i></a>
                                    </li> --}}
                                    {{-- <li>
                                        <a href="" class="text-decoration-none"><i
                                                class="fa-brands fa-google-plus-g social-networks"></i></a>
                                    </li> --}}
                                    <li>
                                        <a href="" class="text-decoration-none"><i
                                                class="fa-brands fa-instagram social-networks"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="banner_content">
                                <!-- <figure class="banner-line mb-0"><img src="./assets/images/banner-line.png" alt="" class="img-fluid" /></figure> -->
                                <!-- <h6 class="text-white">WE PROVIDE OUTSOURCED</h6> -->
                                <h1 class="text-light">Sign Your Documents Anywhere Anytime!</h1>
                                <p>Your Digital End-to-End Solution For E-Documentation</p>
                                <a class="get_started button1 text-white text-decoration-none"
                                    href="./contact.html">Get Started
                                    <figure class="mb-0"><img src="{{asset('assets/images/button-arrow.png')}}" alt=""
                                            class="img-fluid" /></figure>
                                </a>
                                <a class="get_started button2 text-white text-decoration-none"
                                    href="./contact.html">Contact Us
                                    <figure class="mb-0"><img src="{{asset('assets/images/button-arrow.png')}}" alt=""
                                            class="img-fluid" /></figure>
                                </a>
                                <figure class="banner-circleleft mb-0">
                                    <img src="./assets/images/banner-circleleft.png" class="img-fluid"
                                        alt="" />
                                </figure>
                                <figure class="banner-dotleft mb-0">
                                    <img src="./assets/images/banner-dotleft.png" class="img-fluid" alt="" />
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="banner_wrapper">
                                <figure class="mb-0 banner-image">
                                    <img src="./assets/images/banner-image.jpg" alt="" class="img-fluid" />
                                </figure>
                                <!-- <div class="position-relative">
                            <a class="popup-vimeo" href="https://video-previews.elements.envatousercontent.com/h264-video-previews/d1c81f1e-849f-4d45-ae57-b61c2f5db34a/25628048.mp4">
                                <figure class="mb-0 banner-vedioimage">
                                    <img class="thumb img-fluid" style="cursor: pointer" src="./assets/images/banner-vedioimage.png" alt="">
                                </figure>
                            </a>
                        </div> -->
                                <figure class="banner-circleright mb-0">
                                    <img src="./assets/images/banner-circleright.png" class="img-fluid"
                                        alt="" />
                                </figure>
                                <figure class="banner-dotright mb-0">
                                    <img src="./assets/images/banner-dotright.png" class="img-fluid"
                                        alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @else
        <!-- Header  -->
        <div class="sub-banner" data-here="{{ Route::currentRouteName() }}">
            <figure class="sub-bannerleftlayer mb-0">
                <img src="./assets/images/sub-bannerleftlayer.png" alt="" class="img-fluid" />
            </figure>
            @include('layout.header')
            {{-- header --}}
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="banner_content" data-aos="fade-up">
                                <figure class="service-rightcircle mb-0">
                                    <img src="{{asset('assets/images/service-rightcircle.png')}}" alt=""
                                        class="img-fluid" />
                                </figure>
                                @if (Route::currentRouteName() == 'single-post')
                                    <h1 class="text_gradient">Blog Detail</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Blog Detail</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'pricing')
                                    <h1 class="text_gradient">PRICING PLAN</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Pricing</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'for-individuals')
                                    <h1 class="text_gradient">For Individuals</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">For Individuals</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'for-businesses')
                                    <h1 class="text_gradient">For Businesses</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">For Businesses</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'trust-and-security')
                                    <h1 class="text_gradient">Trust And Security</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Trust And Security</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'customer-experience')
                                    <h1 class="text_gradient">Customer Experience</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Customer Experience</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'business-agility')
                                    <h1 class="text_gradient">Business Agility</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Business Agility</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'human-resources')
                                    <h1 class="text_gradient">Human Resources</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Human Resources</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'legal')
                                    <h1 class="text_gradient">Esignax For Legal Departments</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Legal</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'procurement')
                                    <h1 class="text_gradient">Transform The Procure-To-Pay Process</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Procurement</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'sales')
                                    <h1 class="text_gradient">Move, Adapt & Sell</h1>
                                    <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue
                                        morbi acer.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Sales</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'e-signature')
                                    <h1 class="text_gradient">Your Smart E-Signature</h1>
                                    <p>Optimize your document workflow with the top-rated electronic signature solution for digital document sending and signing.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">E - Signature</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'contact')
                                    <h1 class="text_gradient">Contact</h1>
                                    <p>Optimize your document workflow with the top-rated electronic signature solution for digital document sending and signing.</p>
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Contact</span>
                                    </div>
                                @elseif (Route::currentRouteName() == 'solutions')
                                    <h1 class="text_gradient">Solutions</h1>
                                    {{-- <p>Optimize your document workflow with the top-rated electronic signature solution for digital document sending and signing.</p> --}}
                                    <div class="box">
                                        <span class="mb-0">Home</span>
                                        <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}"
                                                alt="" class="img-fluid" /></figure>
                                        <span class="mb-0 box_span">Contact</span>
                                    </div>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <figure class="banner-circleright mb-0">
                <img src="./assets/images/banner-circleright.png" class="img-fluid" alt="" />
            </figure>
            <figure class="sub-bannerrightlayer mb-0">
                <img src="./assets/images/sub-bannerrightlayer.png" alt="" class="img-fluid" />
            </figure>
        </div>

    @endif


    @yield('content')



    @include('layout.footer')
    <!-- Footer -->

    <!-- Latest compiled JavaScript -->
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/video_link.js') }}"></script>
    <script src="{{ asset('assets/js/video.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/custom-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/animation_links.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    @yield('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var loaderWrapper = document.getElementById('loader-wrapper');
            window.addEventListener('load', function() {
                loaderWrapper.classList.add('hidden');
            });
        });
    </script>
</body>

</html>
