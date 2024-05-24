@extends('layout.master')
@section('title', 'Communications and Media - Esignax')
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
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-center text_gradient">Get to 'yes' digitally with your customers</h2>
                        <p class="text-center">Agreements are part of the key moments in communications and media
                            businesses, such as when a customer establishes a new account. In an era of digital
                            transformation, customers expect better than paper contracts or PDFs that need to be printed,
                            signed, and scanned.</p>
                        <p class="text-center">Deliver a mobile-first, on-demand experience for your customers and
                            employees. Behind the scenes, your agreement workflows can be automated and connected so work
                            gets done faster, at a lower cost, with fewer errors. You'll see a dramatic improvement in
                            customer experience and operational efficiency, allowing you to deliver on the promise of
                            digital transformation.</p>
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
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{ asset('assets/images/service-rightcircle.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                        <h2 class="mt-5">T-Mobile delivers amazing customer experience with Docudash</h2>
                        <p>At the heart of T-Mobile’s Un-Carrier Revolution is an unwavering obsession with putting the
                            customer first. T-Mobile partnered with Docudash to create a mobile, frictionless agreement
                            process within its stores. The result was increased conversions, reduced transaction times, and
                            happy customers.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div>
                        <img class="w-100 rounded"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/communications-and-media/01.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
        </figure>
    </section>


    <section class="blog-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item box_shadow">
                        <div>
                            <img class="communications_slide_img"
                                src="https://www.getdocudash.com/site-assets/assets/images/communications-and-media-slider-image-2.png"
                                alt="">
                            <h5 class="text-center mt-4">Docudash gives Sales Reps the ability to meet with a customer, draw
                                up a proposal and
                                contract right there, and then sign on the tablet in just one meeting.</h5>
                            <p class="mt-3 text-center">Terry Connell</p>
                            <p class="text-center">Senior Vice President of Sales and Sales Operations, Comcast</p>
                        </div>
                    </div>
                    <div class="item box_shadow">
                        <div>
                            <img class="communications_slide_img"
                                src="https://www.getdocudash.com/site-assets/assets/images/communications-and-media-slider-image-1.png"
                                alt="">
                            <h5 class="text-center mt-3">Docudash is one of the industry's most strategic weapons—it helps
                                telcos streamline and automate internal and external workflows, and dramatically improve the
                                customer experience.</h5>
                            <p class="mt-3 text-center">Andy Geisse</p>
                            <p class="text-center">Former CEO of AT&T Business</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
        </figure>
    </section>





    <!-- Aboutus -->
    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center flex-column">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{ asset('assets/images/service-rightcircle.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                        <h2 class="mt-5">Docudash helps Comcast close more deals</h2>
                        <p>Docudash helps Comcast Business sales representatives close more deals on the spot.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                    <div>
                        <img class="w-100 rounded"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/communications-and-media/02.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
        </figure>
    </section>



    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-center text_gradient">Docudash for communications <br> and media</h2>
                        <p class="text-center">Automate and connect your entire agreement process to deliver a superior
                            customer experience while reducing costs associated with manual tasks.</p>
                        <p class="text-center">From sales and financing to customer care, organizations are digitally
                            transforming the many processes that require agreements or sign-offs—for example, truth in
                            lending documents, clickwraps, and partner agreements.</p>
                        <p class="text-center">The result is an ability to do business faster, simpler, greener, and more
                            cost-efficiently, while providing a modern digital experience for customers and employees alike.

                        </p>
                    </div>
                </div>
            </div>

        </div>
        {{-- <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid" />
        </figure> --}}
    </section>



    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-center text_gradient">Featured Solutions</h2>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <div
                                    class="box_shadow px-1 py-3 com_featured_card d-flex align-items-center justify-content-center flex-column h-100">
                                    <h5>eSignature</h5>
                                    <p>
                                        Send and sign agreements with the world’s #1 electronic signature solution.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div
                                    class="box_shadow px-1 py-3 com_featured_card d-flex align-items-center justify-content-center flex-column h-100">
                                    <h5>Docudash CLM</h5>
                                    <p>
                                        Transform the contract lifecycle before and after the signature with automated
                                        document generation, collaboration tools, workflows, and an easy-to-search,
                                        cloud-based central agreement repository.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div
                                    class="box_shadow px-1 py-3 com_featured_card d-flex align-items-center justify-content-center flex-column h-100">
                                    <h5>Click</h5>
                                    <p>
                                        Capture consent to standard agreement terms with a single click.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div
                                    class="box_shadow px-1 py-3 com_featured_card d-flex align-items-center justify-content-center flex-column h-100">
                                    <h5>Docudash Identify</h5>
                                    <p>
                                        Choose from several enhanced identification options, including verifying
                                        government-issued IDs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid" />
        </figure> --}}
    </section>



    <section class="offer-section resilience_section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <h2 class="text-center text-light">Featured Integrations</h2>
            <div class="container trust-and-security-sec-3-container">
                <div class="row">
                    <div class="col-md-12 mt-md-0 mt-5">
                        <div class="row">
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="text-center">Docudash for Salesforce</h4>
                                    <p class="text-center">
                                        Keep business moving forward when you access Docudash functionality from within the
                                        world’s #1 CRM.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="text-center">Docudash for Oracle</h4>
                                    <p class="text-center">

                                        Help your organization win by pairing Oracle with Docudash to automate and
                                        streamline workflows.

                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="text-center">Docudash for SAP</h4>
                                    <p class="text-center">

                                        Modernize your system of agreement with Docudash and SAP.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid" />
        </figure>
    </section>



    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row position-relative mt-5 pt-4">
                <figure class="offer-circleimage mb-0">
                    <img src="assets/images/offer-circleimage.png" alt="" class="img-fluid" />
                </figure>

                <div class="col-12">
                    <div>
                        <h2 class="text-center text_gradient">Use Docudash with Intuit to send and sign tax documents</h2>
                        <p class="mt-4">Save time during the busy tax season with secure electronic signing. Intuit has
                            partnered with Docudash to offer Intuit eSignature. Now, you can send and sign IRS Forms 8878
                            and 8879 electronically—right from your Intuit product. Docudash ensures compliance with the
                            latest IRS regulations for e-signing. And it helps prevent identity theft by securely sending
                            encrypted documents and using authentication to verify the signer.

                        </p>
                        <p>
                            When you use Intuit eSignature, it’s faster and easier for you and your clients to sign tax
                            documents. And Docudash provides an audit trail and keeps a copy of every signed document,
                            making it easier for you to follow up or to reference documents later.


                        </p>
                    </div>
                    <div class="mt-5">
                        <h4 class="text_gradient text-center">"With Docudash, the entire process can be conducted
                            seamlessly in the cloud—eliminating paper, hassles and wasted time. Docudash is the final mile
                            in completing the loan process."
                        </h4>
                        <p class="text-center"><strong>Karen Stroup</strong>, Vice President of Product Management for
                            Intuit’s Professional Tax Group</p>
                    </div>
                </div>

            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid" />
        </figure>
    </section>



    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
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
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid" />
        </figure>
    </section>




@endsection
