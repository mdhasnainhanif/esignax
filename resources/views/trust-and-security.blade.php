@extends('layout.master')
@section('title', 'Trust And Security - Esignax')
@section('content')
    <style>
        .offer-section .offer_boxcontent .lower_portion_wrapper {
            text-align: center;
            padding: 80px 20px 24px 30px;
            border-radius: 0 0 10px 10px;
            border-top: none;
            min-height: 0px !important;
        }

        .offer-section .offer_boxcontent .upper_portion .image_content {
            left: 124px !important;
        }
    </style>



    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2>Our Promise</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="promise_box active">
                            <a href="{{route('trust-and-security')}}">
                                <h5 class="font-weight-bold">Trust & Security</h5>
                                <p class="m-0">A relationship you can trust</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promise_box">
                            <a href="{{route('customer-experience')}}">
                                <h5 class="font-weight-bold">Customer Experience</h5>
                                <p class="m-0">An experience people love</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promise_box">
                            <a href="{{route('business-agility')}}">
                                <h5 class="font-weight-bold">Business Agility</h5>
                                <p class="m-0">A better way to work</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid" />
        </figure> --}}
    </section>






    <!-- Aboutus -->
    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
                    <div>
                        <img src="{{ asset('assets/images/trust-1.jpg') }}" alt="" class="w-100 rounded">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h2 class="mt-5">Every agreement starts with trust</h2>
                        <p>We're here to help you establish exceptional trust with your customers. That's why we build
                            security into every step of the agreement process—so you can send and sign with peace of mind.
                        </p>
                        {{-- <ul class="list-unstyled mb-0">
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Quisquam est, rui dolorem ipsum quia dolor cororis.</li>
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Rem aperiam, eaque ipsa quae ab illo inventore.</li>
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Duis aute irure dolor in reprehenderit in voluptatar.</li>
                        <li class="text text1"><i class="circle fa-duotone fa-check"></i>Molestiae non recusandae itarue earum rerum ma.</li>
                    </ul> --}}
                        <a class="get_started text-white text-decoration-none" href="{{ Route('pricing') }}">Get Pricing
                            <figure class="mb-0"><img src="{{asset('assets/images/button-arrow.png')}}" alt=""
                                    class="img-fluid"></figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
        </figure>
    </section>
    <!-- AboutOffer -->
    {{-- <section class="aboutoffer-section">
    <figure class="service-rightlayer mb-0">
        <img src="./assets/images/service-leftlayer.png" alt="" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offer_content">
                    <h6>what We Offer</h6>
                    <h2>some of Our Achievements</h2>
                    <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm recreo that dolocons.</p>
                </div>
            </div>
        </div>
        <div class="achievement_wrapper">
            <div class="row">
                <figure class="offer-circleimage mb-0">
                    <img src="{{asset('assets/images/offer-circleimage.png')}}" alt="" class="img-fluid">
                </figure>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="achievement-box box1">
                        <figure class="icon achievement-icon">
                            <img src="./assets/images/achievement-clienticon.png" alt="" class="img-fluid">
                        </figure> 
                        <div class="wrapper">
                            <h3>3,860</h3>
                            <p class="text-size-18 mb-0">Satisfied Clients</p>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="achievement-box box2">
                        <figure class="icon1 achievement-icon">
                            <img src="./assets/images/achievement-projecticon.png" alt="" class="img-fluid">
                        </figure>
                        <div class="wrapper">
                            <h3>8,550</h3>
                            <p class="text-size-18 mb-0">Projects Completed</p>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="achievement-box box3">
                        <figure class="icon achievement-icon">
                            <img src="./assets/images/achievement-teamicon.png" alt="" class="img-fluid">
                        </figure> 
                        <div class="wrapper">
                            <div class="number">
                                <h3 class="value counter">90</h3>
                                <span class="plus">+</span>
                            </div>
                            <p class="text text-size-18 mb-0">Team Members</p>
                        </div>
                    </div>   
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="achievement-box box4">
                        <figure class="icon1 achievement-icon">
                            <img src="./assets/images/achievement-awardicon.png" alt="" class="img-fluid">
                        </figure>
                        <div class="wrapper">
                            <div class="number">
                                <h3 class="value counter">180</h3>
                                <span class="plus">+</span>
                            </div>
                            <p class="text text-size-18 mb-0">Awards Win</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <figure class="service-leftlayer mb-0">
        <img src="./assets/images/service-rightlayer.png" alt="" class="img-fluid">
    </figure>
</section> --}}
    <!-- Experts -->
    <section class="expert-section mt-4">
        <figure class="offer-toplayer mb-0">
            <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_content" data-aos="fade-right">
                        <h2>Are your contracts safe and protected?</h2>
                        <p>Explore our trust and security values.</p>
                        <a class="get_started text-white text-decoration-none mt-3" href="javascript:void(0);">Esignax Trust
                            Center
                            <figure class="mb-0"><img src="{{asset('assets/images/button-arrow.png')}}" alt=""
                                    class="img-fluid"></figure>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_wrapper">
                        <figure class="offer-circleimage mb-0">
                            <img src="{{asset('assets/images/offer-circleimage.png')}}" alt="" class="img-fluid">
                        </figure>
                        <img class="mt-3 individual_third w-75" src="{{ asset('assets/images/trust-2.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
        </figure>
    </section>



    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2>The world’s leading e-signature <br> solution</h2>
                        <p>More than 1 million customers and 1 billion users trust Esignax.</p>
                    </div>
                </div>
            </div>
            <div class="container trust-and-security-sec-3-container">
                <div class="row trust-and-security-sec-3-row-2">
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/3qbQxIL9lgb6XYUEzN19G0/10a865b305b9b872ae4cd034ff9d8f12/Salesforce__3_.svg"
                                class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/3lzQeZagUzlDiB7DwXvNfO/419b4bee5fdf35d6aeb35aeee2570f00/tmobile-logo.svg"
                                class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/4HdUdxcxAnOzkX3YkOzULw/4df55b5082d3161a16ad9cb269e833b4/Santander.svg"
                                class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/4Svig98lbnJqbVIhHx5JZs/286e2a64979f273ccdf5bee4cb511b6e/Unilever__1_.svg"
                                class="img-responsive">
                        </div>
                    </div>

                </div>

                <div class="row trust-and-security-sec-3-row-2">
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/2FRtoVnrTjQ3n9Hwjhj0Gl/aa11a018715e86e234d5b37560b06321/Apple.svg"
                                class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/6Yh8WNf7RtvxPYEhVDOTSo/9fe52e1b78b6f164cf78980ae99f649d/Citgo.svg"
                                class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/aIhP7ENBvSXtGF1q4c8kR/e14062d1f21bb2e1091e7bbab9872e54/AstraZeneca__1_.svg"
                                class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/px5zcrMIih2dlfGOybggW/c5223f7d19b42ad0457791ad0af8b683/Aetna__1_.svg"
                                class="img-responsive">
                        </div>
                    </div>

                </div>
                <div class="row trust-and-security-sec-3-row-2">
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/1PIEAsIYP15xln4zDEzvk5/ebfc3811365705d52a166dd74eb7e19a/UCSF.svg"
                                class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/kgbJ8DIOowHETwhNL7tod/81358b75681a4edbffd1d00d85c72b26/Refintiv.svg"
                                class="img-responsive">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/1PelwRG39OHV0bBSW8HkmL/2762d913fb627b038b123cdb724e53e9/Sunrun__1_.svg"
                                class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="trust-and-security-sec-3-boxes">
                            <img width="100px"
                                src="https://images.ctfassets.net/0jnmtsdzg6p5/hcl72PfnkbptChxhLxElK/ab72750e642b025d622f37d09e26cec0/Genesys__1_.svg"
                                class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid" />
        </figure>
    </section>




    <section class="offer-section resilience_section">
        <figure class="offer-toplayer mb-0">
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="container trust-and-security-sec-3-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer_content mt-4" data-aos="fade-right">
                            <h2 class="text-left text-light">Always-on reliability and resilience</h2>
                            <p class="text-left p-0 text-light">
                                Esignax empowers mission-critical agreements around the world with industry-leading
                                uptimes. We work when and where you do.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5">
                        <div class="row">
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">99.99%</h4>
                                    <p>
                                        uptime for eSignature, with zero maintenance downtime
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">180+</h4>
                                    <p>
                                        countries have used Esignax to sign agreements
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">44</h4>
                                    <p>
                                        languages available for signers, plus 14 for senders
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid" />
        </figure>
    </section>



    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row position-relative mt-5 pt-4">
                <figure class="offer-circleimage mb-0">
                    <img src="assets/images/offer-circleimage.png" alt="" class="img-fluid" />
                </figure>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article_padding">
                    <div class="offer_boxcontent">
                        <div class="upper_portion">
                            <div class="image_content">
                                <figure class="offer-icon">
                                    <i class="fa-solid fa-shield mt-3 mt-md-4 text-light h4"></i>
                                </figure>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4 class="mb-0">Protection</h4>
                                <p>We secure all of your critical business and personal information. Your confidentiality is
                                    our priority.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article_padding">
                    <div class="offer_boxcontent">
                        <div class="upper_portion">
                            <div class="image_content">
                                <figure class="offer-icon offer-icon2">
                                    <i class="fa-solid fa-check-double mt-3 mt-md-4 text-light h4"></i>
                                </figure>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4 class="mb-0">Acceptance</h4>
                                <p>Agreements made on our platform are considered valid in many countries around the world.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article_padding">
                    <div class="offer_boxcontent mb-0">
                        <div class="upper_portion">
                            <div class="image_content">
                                <figure class="offer-icon">
                                    <i class="fa-regular fa-circle-check mt-3 mt-md-4 text-light h4"></i>
                                </figure>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4 class="mb-0">Availability</h4>
                                <p>When you need to get work done, you can count on service across devices and time zones.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid" />
        </figure>
    </section>




@endsection
