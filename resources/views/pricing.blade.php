@extends('layout.master')
@section('title', 'Pricing - Esignax')
@section('content')

<!-- Pricing -->
<section class="pricing-section">
    <figure class="offer-toplayer mb-0">
        <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pricing_content" data-aos="fade-up">
                    <h6>Best Offers</h6>
                    <h2>Our Pricing Plans</h2>
                    <p>Dursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec
                        odio aea the dumm recreo that dolocons.</p>
                    <figure class="offer-circleimage mb-0">
                        <img src="{{asset('assets/images/offer-circleimage.png')}}" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <div class="price-block">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4">
                    <div class="price_content">
                        <div class="icon">
                            <figure class="price-basicicon">
                                <img src="./assets/images/price-basicicon.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h4>Basic Plan</h4>
                        <sup>$</sup>
                        <span class="text1">27.99</span>
                        <ul class="list-unstyled mb-0">
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Ad Management</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Live Chat</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Multi-Language Content</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Conversational Bots</li>
                            <li class="for-space text-size-18"><i class="circle fa-duotone fa-check"></i>Programmable Chatbots</li>
                        </ul>
                        <a class="get_started text-decoration-none" href="{{Route('pricing')}}">Get Started
                            <i class="circle fa-thin fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4">
                    <div class="price_content">
                        <div class="icon">
                            <figure class="price-silvericon">
                                <img src="./assets/images/price-silvericon.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h4>Silver Plan</h4>
                        <sup>$</sup>
                        <span class="text1">37.99</span>
                        <ul class="list-unstyled mb-0">
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Ad Management</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Live Chat</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Multi-Language Content</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Conversational Bots</li>
                            <li class="for-space text-size-18"><i class="circle fa-duotone fa-check"></i>Programmable Chatbots</li>
                        </ul>
                        <a class="get_started text-decoration-none" href="{{Route('pricing')}}">Get Started
                            <i class="circle fa-thin fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="price_content">
                        <div class="icon">
                            <figure class="price-goldicon">
                                <img src="./assets/images/price-goldicon.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h4>Gold Plan</h4>
                        <sup>$</sup>
                        <span class="text1">47.99</span>
                        <ul class="list-unstyled mb-0">
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Ad Management</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Live Chat</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Multi-Language Content</li>
                            <li class="text-size-18"><i class="circle fa-duotone fa-check"></i>Conversational Bots</li>
                            <li class="for-space text-size-18"><i class="circle fa-duotone fa-check"></i>Programmable Chatbots</li>
                        </ul>
                        <a class="get_started text-decoration-none" href="{{Route('pricing')}}">Get Started
                            <i class="circle fa-thin fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <figure class="offer-bottomlayer mb-0">
        <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
    </figure>
</section>

@endsection