@extends('layout.master')
@section('title', 'Business Agility - Esignax')
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
                        <div class="promise_box">
                            <a href="{{route('customer-experience')}}">
                                <h5 class="font-weight-bold">Customer Experience</h5>
                                <p class="m-0">An experience people love</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promise_box active">
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
                        <img src="{{ asset('assets/images/business-1.jpg') }}" alt="" class="w-100 rounded">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h2>Keep your business moving</h2>
                        <p>Today’s environment calls for continuous adaptation. We help you accelerate and create resilient, flexible workflows for all of your agreements.</p>
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



    <section class="offer-section resilience_section">
        <figure class="offer-toplayer mb-0">
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="container trust-and-security-sec-3-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer_content mt-4" data-aos="fade-right">
                            <h2 class="text-left text-light">For when you mean business</h2>
                            <p class="text-left p-0 text-light">
                                Business moves fast, and today’s customers expect convenience. Sometimes all it takes is a simple electronic signature. Sometimes it's a completely automated agreement process. Whichever it is, your digital transformation starts here.
                            </p>
                            <p class="text-left p-0 text-light">
                                Simplify your contracting process and give your customers the flexibility they want.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5">
                        <div class="row">
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">4 hours</h4>
                                    <p>
                                        Is the average contract turnaround time with Docudash CLM
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">80%</h4>
                                    <p>
                                        of Esignax eSignature requests are completed in less than 1 day
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">$36</h4>
                                    <p>
                                        saved per document compared to traditional paper processes
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">83%</h4>
                                    <p>
                                        reduction in contract processing time with Docudash CLM
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
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2>Integrations for every workflow</h2>
                        <p>Streamline your workflows with connected integrations—more than 400 of them. Wherever you need contracts to work, they do.</p>
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
                        <div>
                            <img class="w-100 business_3" src="{{asset('assets/images/customer-3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5">
                        <div class="offer_content mt-4" data-aos="fade-right">
                            <h2 class="text-left text-light">Your whole team deserves a great solution</h2>
                            <p class="text-left p-0 text-light">We create simple, thoughtful solutions that make everyday tasks and life-changing decisions easier.</p>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">HR</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Focus on your people, not paperwork. Hire and onboard well.</div>
                            </div>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">Sales</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Fast and friendly selling experiences help you get to agreement faster.</div>
                            </div>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">Legal</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Reduce risk by analyzing contract language in the same tool where you manage it all.</div>
                            </div>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">Procurement</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Increased visibility and a better process from procurement to payment.</div>
                            </div>
                            <hr class="bg-light ">
                            <div class="d-flex justify-content-between text-light">
                                <div class="text-left" style="width: 35%">IT & Operations</div><br class="d-block d-sm-none">
                                <div class="text-left" style="flex: 1">Your employees will thank you for ease, automation, and simplicity.</div>
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







<section class="expert-section mt-4">
    <figure class="offer-toplayer mb-0">
        <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="expert_content" data-aos="fade-right">
                    <h2 class="font-weight-bold">Customized Experiences</h2>
                    <p>Docudash works for you. It’s built to help you get things done — so you can <strong>get back to the work you love.</strong></p>
                    <p>
                        Create, edit, send and sign, all right in your browser. Bring everyone together to collaborate in one place. And simplify your entire agreement process.
                    </p>
                    <p>Whatever you need to work smarter and faster, Docudash fits right in.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="expert_wrapper">
                    <figure class="offer-circleimage mb-0">
                        <img src="{{asset('assets/images/offer-circleimage.png')}}" alt="" class="img-fluid">
                    </figure>
                    <img class="mt-5 w-100" src="https://img.freepik.com/free-vector/dashboard-business-user-panel_23-2148368431.jpg?t=st=1715603783~exp=1715607383~hmac=9d8c46f21794f888818b014d0f3a61a704ae72656bc7c3354b9e331bd1d6618d&w=1380"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <figure class="offer-bottomlayer mb-0">
        <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
    </figure>
</section>



@endsection
