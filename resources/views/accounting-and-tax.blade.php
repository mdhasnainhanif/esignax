@extends('layout.master')
@section('title', 'Accounting And Tax - Esignax')
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
                        <h2 class="text-center">Stop chasing paper</h2>
                        <p class="text-center">Docudash enables accountants and tax specialists to get necessary signatures faster than ever, while still meeting strict legal requirements. Now you can turn around documents in hours—not days.</p>
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
               
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h2 class="mt-5">Faster than faxing</h2>
                        <p>Gain critical speed when deadlines are looming. Docudash lets you send documents for electronic signature, saving time and hassle. No more waiting for clients to print PDFs, sign them, and then return them by fax or mail. With Docudash, you can turn documents around in hours instead of days, so you can focus on client work instead of on tracking documents.

                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div>
                        <img width="150px" src="{{ asset('assets/images/account1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
        </figure>
    </section>





       <!-- Aboutus -->
       <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div>
                        <img width="150px" src="{{ asset('assets/images/account2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h2 class="mt-5">Secure and private</h2>
                        <p>Use secure authentication to protect you and your clients. With today’s rampant identity theft, we’re all concerned about privacy and security. Your customers want the assurance that their documents won’t be shared or stolen and that their signatures can’t be forged. Docudash’s digital transaction management lets you send documents electronically, instead of leaving them sitting in the mail or on the fax machine. And our secure authentication helps protect against fraud.</p>
                    </div>
                </div>
                
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
        </figure>
    </section>



    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h2 class="mt-5">Convenient for clients</h2>
                        <p>Give your customers the modern experience they expect. Docudash lets your clients receive and sign documents on their computers or mobile devices. The process is simple and streamlined, so you can provide your customers with the best service possible.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div>
                        <img width="150px" src="{{ asset('assets/images/account3.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
        </figure>
    </section>



    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div>
                        <img width="150px" src="{{ asset('assets/images/account4.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h2 class="mt-5">Compliant with regulations</h2>
                        <p>Ensure that you and your clients are in compliance. Your business is all about saving your customers money while keeping them compliant with federal and state regulations. We meet the latest IRS regulations, ISO 27001 and SSAE 16 standards, and more. Plus, when you use Docudash, your documents are saved electronically and retain an audit trail for added transparency.</p>
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
            <h2 class="text-center text-light">Use Cases</h2>
            <p class="text-center text-light mb-5">
                Docudash can be used to send and sign many of the documents commonly required for tax <br> and accounting purposes, including:
            </p>
            <div class="container trust-and-security-sec-3-container">
                <div class="row">
                    <div class="col-md-12 mt-md-0 mt-5">
                        <div class="row">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <ul>
                                        <li class="font-weight-bold">IRS-approved tax forms</li>
                                        <li class="font-weight-bold">LLC formation</li>
                                        <li class="font-weight-bold">Asset purchase agreements</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <ul>
                                        <li class="font-weight-bold">Confidentiality agreements</li>
                                        <li class="font-weight-bold">Engagement letters</li>
                                        <li class="font-weight-bold">Practice continuation agreements</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <ul>
                                        <li class="font-weight-bold">Employment contracts</li>
                                        <li class="font-weight-bold">Power of attorney agreements</li>
                                        <li class="font-weight-bold">Independent contractor agreements</li>
                                    </ul>
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
               
                <div class="col-12">
                    <div>
                        <h2 class="text-center text_gradient">Use Docudash with Intuit to send and sign tax documents</h2>
                        <p class="mt-4">Save time during the busy tax season with secure electronic signing. Intuit has partnered with Docudash to offer Intuit eSignature. Now, you can send and sign IRS Forms 8878 and 8879 electronically—right from your Intuit product. Docudash ensures compliance with the latest IRS regulations for e-signing. And it helps prevent identity theft by securely sending encrypted documents and using authentication to verify the signer.

                        </p>
                        <p>
                            When you use Intuit eSignature, it’s faster and easier for you and your clients to sign tax documents. And Docudash provides an audit trail and keeps a copy of every signed document, making it easier for you to follow up or to reference documents later.


                        </p>
                    </div>
                    <div class="mt-5">
                       <h4 class="text_gradient text-center">"With Docudash, the entire process can be conducted seamlessly in the cloud—eliminating paper, hassles and wasted time. Docudash is the final mile in completing the loan process."
                    </h4>
                    <p class="text-center"><strong>Karen Stroup</strong>, Vice President of Product Management for Intuit’s Professional Tax Group</p>
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
            <h2 class="text-center text_gradient">Get Started</h2>
            <div class="container trust-and-security-sec-3-container">
                <div class="row">
                    <div class="col-md-12 mt-md-0 mt-5">
                        <div class="row">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3 box_shadow">
                                    <p class="text-center">
                                        Have an Intuit product? Start using Docudash from the product.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3 box_shadow">
                                   <p class="text-center">
                                    Need Docudash for more than tax forms or have more than 10 users?

                                   </p>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3 box_shadow">
                                   <p class="text-center">
                                    Want to try Docudash for free? Get your free 30-day trial.

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




@endsection
