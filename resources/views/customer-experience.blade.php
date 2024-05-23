@extends('layout.master')
@section('title', 'Customer Experience - Esignax')
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
                        <div class="promise_box">
                            <a href="{{route('trust-and-security')}}">
                                <h5 class="font-weight-bold">Trust & Security</h5>
                                <p class="m-0">A relationship you can trust</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promise_box active">
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
                        <img src="{{ asset('assets/images/customer-1.jpg') }}" alt="" class="w-100 rounded">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h2>Trusted solutions built for real people</h2>
                        <p>Customers love us, and they’ll love you, too, for using Docudash. Because it's more than a signature. It's an experience so simple, it's delightful.</p>
                        <p>
                            It's the moments that bring people and teams together to say, "yes, I agree with you."
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
                        <h6 class="font-weight-bold">When we talk about innovation, member experience and best-in-class security, Docudash is quite literally in lockstep with where we want to take things.</h6>
                        <p>Thomas P. Novak</p>
                        <p>Chief Digital Officer, Visions Federal Credit Union</p>
                        <hr>
                        <h5>It’s more than a signature. It’s a fantastic customer experience.</h5>
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
                        <img class="mt-3 individual_third w-75" src="{{ asset('assets/images/customer-2.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
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
                        <div>
                            <img class="w-100 customer_3" src="{{asset('assets/images/customer-3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5">
                        <div class="offer_content mt-4" data-aos="fade-right">
                            <h2 class="text-left text-light">Focus on the moments that matter</h2>
                            <p class="text-left p-0 text-light">We create simple, thoughtful solutions that make everyday tasks and life-changing decisions easier.</p>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">Convenient</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Sign and agree virtually anywhere, anytime.</div>
                            </div>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">Simple</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Ease of use with one-click simplicity.</div>
                            </div>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">Fast</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Reduce time to sign dramatically.</div>
                            </div>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">Safe</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Your information is private and protected. Always.</div>
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
                                    <i class="fa-solid fa-shuffle mt-3 mt-md-4 why_icons"></i>
                                </figure>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4 class="mb-0">Flexibility</h4>
                                <p>We work where you do, with over 400 integrations including Google, Salesforce, SAP, Oracle, and Apple.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article_padding">
                    <div class="offer_boxcontent">
                        <div class="upper_portion">
                            <div class="image_content">
                                <figure class="offer-icon offer-icon2">
                                    <i class="fa-solid fa-check-double mt-3 mt-md-4 why_icons"></i>
                                </figure>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4 class="mb-0">Ease of Use</h4>
                                <p>Keep the essentials and cut the rest. A convenient, digital-first experience means successful agreement.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article_padding">
                    <div class="offer_boxcontent mb-0">
                        <div class="upper_portion">
                            <div class="image_content">
                                <figure class="offer-icon">
                                    <i class="fa-regular fa-circle-check mt-3 mt-md-4 why_icons"></i>
                                </figure>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4 class="mb-0">Satisfaction</h4>
                                <p>It’s simple: Our technology exists to bring people together. Learn why our customers are happy customers.</p>
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
