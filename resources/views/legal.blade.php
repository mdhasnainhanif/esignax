@extends('layout.master')
@section('title', 'Legal - Esignax')
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



    <section class="offer-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text_gradient">Featured Products</h2>
                        {{-- <p>Streamline your workflows with connected integrations—more than 400 of them. Wherever you need contracts to work, they do.</p> --}}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row featured_cards justify-content-center">
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded">
                            <h4 class="text_theme">Docudash eSignature</h4>
                            <p>
                                Use the world’s #1 way to send and sign from practically anywhere, at any time.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded">
                            <h4 class="text_theme">Docudash CLM</h4>
                            <p>Automate the contract lifecycle with document generation, collaboration, workflow, and a
                                central agreement repository. Watch this video to see CLM in action.</p>

                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded">
                            <h4 class="text_theme">Docudash Insight</h4>
                            <p>
                                Use AI-driven conceptual search, clause identification, and analytics across all of your
                                contracts, post signature.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded">
                            <h4 class="text_theme">Docudash eNotary</h4>
                            <p>
                                Enable notaries to execute electronic notarial acts in conjunction with electronic
                                signatures.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded">
                            <h4 class="text_theme">Docudash Click</h4>
                            <p>
                                Capture consent to standard agreement terms with a single click.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded">
                            <h4 class="text_theme">Docudash Identify</h4>
                            <p>
                                Verify the identity of signers with ID verification, SMS authentication or knowledge-based
                                authentication.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="box_shadow py-3 px-3 rounded">
                            <h4 class="text_theme">Docudash Integrations</h4>
                            <p>
                                Easily embed Docudash into your existing tools with our 400+ pre-built integrations with the
                                leading platforms, including Salesforce, Microsoft, Google, SAP, Box, iManage, NetDocuments,
                                and many more.
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
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text_gradient">Benefits for Legal Departments</h2>
                        {{-- <p>Streamline your workflows with connected integrations—more than 400 of them. Wherever you need contracts to work, they do.</p> --}}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="row align-items-center p-5 box_shadow rounded mt-4">
                        <div class="col-md-8">
                            <div>
                                <h4 class="text_theme">Reduce risk and improve governance</h4>
                                <p>
                                    Improve visibility and governance, centrally store all your agreements, and standardize
                                    contract clauses and processes with Docudash. Adapt to changing regulatory environments,
                                    including evolving data privacy obligations, with the power of pre-built AI.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div>
                                <img class="mx-auto d-block"
                                    src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/01.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center p-5 box_shadow rounded mt-4">
                        <div class="col-md-4">
                            <div>
                                <img class="mx-auto d-block"
                                    src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/02.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-8 mt-4 mt-md-0">
                            <div>
                                <h4 class="text_theme">Do more with the same</h4>
                                <p>
                                    Enable self-service by empowering contract risk scoring against pre-approved terms. Set
                                    thresholds for your legal team’s involvement with agreements to maximize your resources.
                                    Automate and simplify processes for intake, negotiations and approvals with pre-set
                                    workflows, approved templates, and clause libraries.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center p-5 box_shadow rounded mt-4">
                        <div class="col-md-8">
                            <div>
                                <h4 class="text_theme">Advise the enterprise</h4>
                                <p>
                                    Impact enterprise-wide revenue acceleration or cost savings by automating workflows and
                                    accelerating cycle times. Use AI to generate insights and improve <br> performance.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mt-md-0">
                            <div>
                                <img class="mx-auto d-block"
                                    src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/03.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center p-5 box_shadow rounded mt-4">
                        <div class="col-md-4">
                            <div>
                                <img class="mx-auto d-block"
                                    src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/04.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-8  mt-4 mt-md-0">
                            <div>
                                <h4 class="text_theme">Maintain lawfulness and court admissibility</h4>
                                <p>
                                    A Docudash agreement is tamper-evident, and includes a court-admissible certificate of
                                    completion and audit trail, exceeding what is possible with paper-based agreements.
                                </p>
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
            <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text_gradient">Legal Department Challenges</h2>
                        <p>47% of law departments process more than 1000 agreements every month.</p>
                    </div>
                </div>
            </div>
            <div class="container legal_depart_container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="p-5 box_shadow rounded mt-4">
                            <h3 class="text_theme">65%</h3>
                            <p>
                                Experience delays in closing deals relating to contract management issues.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-5 box_shadow rounded mt-4">
                            <h3 class="text_theme">59%</h3>
                            <p>
                                Lack visibility into the location and status of agreements pre-execution (and 44%
                                post-execution).
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-5 box_shadow rounded mt-4">
                            <h3 class="text_theme">52%</h3>
                            <p>
                                Says contracts go through 3-4 versions before being finalized.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-5 box_shadow rounded mt-4">
                            <h3 class="text_theme">49%</h3>
                            <p>
                                Have difficulty maintaining security and confidentiality.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-5 box_shadow rounded mt-4">
                            <h3 class="text_theme">44%</h3>
                            <p>
                                Experience risk from the inability to proactively detect problematic language.
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




    <!-- Customer Stories -->
    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content mb-5" data-aos="fade-up">
                        <h2 class="text-center text_gradient">Customer Stories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="card customer_card" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/unilever-us.png') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_theme">Smarter contracting initiative built on Docudash</h5>
                            <p class="card-text">Seeking to digitally transform procurement contracting, Unilever
                                implemented a global smarter contracting initiative that reduced average contract completion
                                time by 50%.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4 mt-md-0">
                    <div class="card customer_card" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/smashfly-us.png') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_theme">Smashfly is responding to growth and creating efficiency</h5>
                            <p class="card-text">Learn how Smashfly’s legal department lightened its workload with
                                automated workflows.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4 mt-md-0">
                    <div class="card customer_card" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/tata-us.png') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_theme">Tata Communications uses Docudash</h5>
                            <p class="card-text">Learn how this leading communications provider’s legal department reduced
                                contract turnarounds from months to just one day, and realized a 90% savings on courier
                                services.</p>
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
                        <h2 class="text-center text_gradient">Resources for Legal Departments</h2>
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
                            <h5 class="text_theme">Legal department solution brief</h5>
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
                            <h5 class="text_theme">Connect agreement processes</h5>
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
                            <h5 class="text_theme">CLM success webinar</h5>
                            <p class="card-text">Hear how legal experts at Docudash, ServiceNow and Arcos are overcoming
                                the challenges facing today’s legal leaders.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4">
                    <div class="card customer_card legal_departments" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/08.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_theme">Transform legal reviews</h5>
                            <p class="card-text">Learn the 4 most common challenges with contract reviews and the 5 ways to
                                improve them.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4">
                    <div class="card customer_card legal_departments" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/09.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_theme">Agree better</h5>
                            <p class="card-text">Learn how automating and connecting the entire agreement process gets
                                business done faster with less risk.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-4">
                    <div class="card customer_card legal_departments" style="width: 20rem;">
                        <img class="card-img-top"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/legal/10.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text_theme">Digital Trends for Legal Teams</h5>
                            <p class="card-text">Learn about the latest trends from this 800+ corporate legal professional participant survey.</p>
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
