@extends('layout.master')
@section('title', 'Procurement - Esignax')
@section('content')
    <style>
        .offer-section .offer_boxcontent .lower_portion_wrapper {
            text-align: center;
            padding: 80px 20px 24px 30px;
            border-radius: 0 0 10px 10px;
            border-top: none;
            min-height: 0px !important;
        }
    </style>


    <section class="my-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-center text_gradient">Increase visibility into unnecessary risks and savings opportunities <br>
                            with Docudash</h2>
                        <p class="text-center mt-2">Procurement departments are using contract analytics to be more strategic
                            and drive better
                            business decisions. Yet, procurement contracts are mostly all paper-based, making analysis and
                            contract management labor-intensive and complicated.</p>
                        <p class="text-center">Increase your visibility into the full lifecycle of vendor contracts—including
                            pre- and
                            post-execution contract analysis—with Docudash . Centralize and streamline the agreement process
                            to save time, control costs, and decrease risks in the supply chain with an end-to-end agreement
                            process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="offer_content mt-4" data-aos="fade-right">
                        <h2 class="text-left text_gradient">How your procurement department can use Docudash</h2>
                        <p class="text-left p-0 mb-2">
                            Streamline vendor contracts across the procure-to-pay process. From RFPs and MSAs to supplier
                            contracts and financing agreements, Docudash can help you transform the way your organization
                            manages supplier agreements.</p>
                        <p class="text-left p-0">
                            Docudash has more than a dozen applications and 400+ integrations designed to help you modernize
                            your systems of agreement.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-5">
                    <div>
                        <img class="w-100 rounded" src="{{ asset('assets/images/procurement-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid" />
        </figure>
    </section>





    <section class="offer-section resilience_section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-light">Featured Products</h2>
                        {{-- <p>Streamline your workflows with connected integrations—more than 400 of them. Wherever you need contracts to work, they do.</p> --}}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row featured_cards justify-content-center">
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light">
                            <h4 class="text_theme">Docudash eSignature</h4>
                            <p class="text-dark">
                                Send and capture electronic signatures for supplier agreements in minutes from almost
                                anywhere, on most devices.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light">
                            <h4 class="text_theme">Docudash CLM</h4>
                            <p class="text-dark">Centralize the management of contracts across the full contract lifecycle.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light">
                            <h4 class="text_theme">Docudash Insight</h4>
                            <p class="text-dark">
                                Use AI-driven conceptual search, clause identification, and analytics across all your
                                supplier contracts.
                            </p>
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
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text_gradient">Featured Integrations</h2>
                        <p>Docudash works with the supply chain management (SCM) and <br>
                            enterprise resource planning (ERP) systems you already use.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light featured_integration_card">
                            <h4 class="text_theme">SAP</h4>
                            <p class="text-dark">
                                Streamline agreement workflows within SAP products like Ariba and ECC.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light featured_integration_card">
                            <h4 class="text_theme">Oracle</h4>
                            <p class="text-dark">Seamlessly integrate into the Oracle products your teams are already using
                                like NetSuite, PeopleSoft, and Oracle Procurement Cloud.</p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid" />
        </figure>
    </section>




    <section class="offer-section resilience_section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-light">Featured Use Cases</h2>
                        <p class="text-light">Streamline use cases across the procure-to-pay process with Docudash.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light bg-light" style="min-height: 180px">
                            <h4 class="text_theme">Vendor Contracting</h4>
                            <p class="text-dark">
                                Save time and money throughout vendor contracting from the RFx process to pre-and
                                post-execution contract analysis with an end-to-end agreement cloud solution.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light bg-light" style="min-height: 180px">
                            <h4 class="text_theme">Vendor negotiations and Contract Execution</h4>
                            <p class="text-dark">Seamlessly integrate into the Oracle products your teams are already using
                                like NetSuite, PeopleSoft, and Oracle Procurement Cloud.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light bg-light" style="min-height: 180px">
                            <h4 class="text_theme">Vendor Management</h4>
                            <p class="text-dark">Discover and report on agreements per party, prioritize actions based on
                                contract requirements and vendor and renewal modeling–and manage expiring contracts.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light bg-light" style="min-height: 180px">
                            <h4 class="text_theme">Contract Analytics</h4>
                            <p class="text-dark">Find and absorb contract terms and provisions that expose your business to
                                legal, regulatory and financial risks.</p>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="offer_content mt-4" data-aos="fade-right">
                        <h2 class="text-left text_gradient">Unilever drives efficiency and speed in its supply chain</h2>
                        <p class="text-left p-0 mb-2">
                            Wei Ling Lim, General Counsel for Unilever, talks about the complications of its supply chain
                            delivering consumer goods to 7 out of 10 homes in the world. Unilever drives efficiency and
                            simplifies how it prepares, signs, acts on and manages contracts by using Docudash.


                        </p>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-5">
                    <div>
                        <img class="w-100 rounded" src="{{ asset('assets/images/procurement-2.jpg') }}" alt=""
                            style="z-index: 99999">
                    </div>
                </div>
            </div>
        </div>

        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid" />
        </figure>
    </section>





    <section class="offer-section resilience_section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ asset('assets/images/offer-toplayer.png') }}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-light">Benefits for Procurement</h2>
                        <p class="text-light">Supply chain disruptions and force majeure issues can break the
                            hyperconnected production, logistics and delivery of goods and services cycle. Docudash can help
                            you provide strategic business value, increase the agility and transparency of operational
                            processes and mitigate risk.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                    <div class="row align-items-center p-5 box_shadow rounded mt-4 bg-light">
                        <div class="col-md-8">
                            <div>
                                <h4 class="text_theme">Drive value</h4>
                                <p>
                                    Increase efficiency and reduce costs with faster and better contract <br> execution.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div>
                                <img class="mx-auto d-block"
                                    src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/procurement/02.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center p-5 box_shadow rounded mt-4 bg-light">
                        <div class="col-md-4">
                            <div>
                                <img class="mx-auto d-block"
                                    src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/procurement/03.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-8 mt-4 mt-md-0">
                            <div>
                                <h4 class="text_theme">Improve Business Outcomes</h4>
                                <p>
                                    Use AI-driven analytics to inform business strategies, better respond to supply chain
                                    disruptions and force majeure, and help negotiate supplier terms.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center p-5 box_shadow rounded mt-4 bg-light">
                        <div class="col-md-8">
                            <div>
                                <h4 class="text_theme">Ensure Vendor Data Privacy</h4>
                                <p>
                                    Tightly secure your vendor data, protect against breaches and maintain the highest
                                    standards for protecting data.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div>
                                <img class="mx-auto d-block"
                                    src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/procurement/04.png') }}"
                                    alt="">
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
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text_gradient">Procurement teams are Driving Value</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light featured_integration_card">
                            <h3 class="text_theme">$36</h3>
                            <p class="text-dark">
                                Average savings of $36 per agreement</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light featured_integration_card">
                            <h3 class="text_theme">400+</h3>
                            <p class="text-dark">400+ integrations with leading ERP and SCM systems, like SAP and Oracle.</p>

                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded bg-light featured_integration_card">
                            <h3 class="text_theme">79%</h3>
                            <p class="text-dark">79% of agreements completed in less than a day</p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid" />
        </figure>
    </section>



    
    <!-- Customer Stories -->
    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-center text_gradient">Leading procurement teams standardize on Docudash</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="card customer_card" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/leading-procurement-image-1.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_gradient">Unilever</h5>
                            <p class="card-text">Seeking to digitally transform procurement contracting, Unilever implemented a global smarter contracting initiative that reduced average contract completion time by 50%.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4 mt-md-0">
                    <div class="card customer_card" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/leading-procurement-image-2.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_gradient">Circle K</h5>
                            <p class="card-text">Circle K transformed their supply chain process with SAP Ariba and Signature Management by Docudash.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
        </figure>
    </section>
    <!-- Customer Stories -->













    <!-- Resources for legal departments -->
    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-center text_gradient">Related Resources</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4">
                    <div class="card customer_card legal_departments" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/05.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_gradient">Agile Procurement</h5>
                            <p class="card-text">Learn more about how legal departments use Docudash.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4">
                    <div class="card customer_card legal_departments" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/06.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_gradient">Managing Data Privacy Laws</h5>
                            <p class="card-text">Get the stats and information you need to understand why modernizing your
                                systems of agreement can be a game-changer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4">
                    <div class="card customer_card legal_departments" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/07.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_gradient">8 Digital Best Practices for Procurement Professionals</h5>
                            <p class="card-text">Hear how legal experts at Docudash, ServiceNow and Arcos are overcoming
                                the challenges facing today’s legal leaders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
        </figure>
    </section>
    <!-- Resources for legal departments -->


    {{-- <section class="offer-section resilience_section">
        <figure class="offer-toplayer mb-0">
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="container trust-and-security-sec-3-container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="offer_content" data-aos="fade-right">
                            <h2 class="text-left text-light">Enhance the hire-to-retire lifecycle with Esignax</h2>
                            <p class="text-left p-0 text-light">
                                Throughout the hire-to-retire process, let Docudash manage your documents so you can focus
                                on the things that matter—hiring, retaining and developing talent.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-5">
                        <div class="row">
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">Easier hiring</h4>
                                    <p class="fs_16">
                                        Attract and close top talent. Complete offer letters, background checks and other
                                        paper-intensive processes with remote, mobile-friendly signing experiences.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">More efficient onboarding</h4>
                                    <p class="fs_16">
                                        Give new employees a great onboarding experience by taking away the stack of
                                        paperwork. Automate manual tasks and save everyone the hassle of follow-up and
                                        rework.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">Stronger employee management</h4>
                                    <p class="fs_16">
                                        Keep employee data secure, remove cross-departmental bottlenecks, simplify manager
                                        routing processes and improve morale by simplifying documentation.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <div class="bg-light border_14 p-3 mt-3">
                                    <h4 class="font-weight-bold">More secure offboarding</h4>
                                    <p class="fs_16">
                                        Former employees can be future advocates if their last experience is a good one.
                                        Docudash helps you manage sensitive agreements securely and reliably.
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
    </section> --}}




@endsection
