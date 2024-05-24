@extends('layout.master')
@section('title', 'Solutions - Esignax')
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





    <!-- Aboutus -->
    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">

                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="rounded">
                                    <img class="img-fluid" src="{{ asset('assets/images/solutions1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 mt-4 mt-md-0">
                                <div>
                                    <h4 class="text_theme">Docudash solutions for departments and industries</h4>
                                    <p>
                                        Docudash is digitally transforming how organizations of all sizes do business via
                                        agreements and contracts. By connecting and automating the entire agreement process,
                                        Docudash helps industries and departments do business faster with less risk, lower
                                        costs, and better experiences for customers and employees.
                                    </p>
                                </div>
                            </div>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{ asset('assets/images/service-rightcircle.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                        <h2 class="mt-5 text-center text_gradient">Industries</h2>

                        <div class="row mt-5">
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/bank-account (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Accounting and Tax</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/social-media (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Communications & Media</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/construction (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Construction</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/saving (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Financial Services</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/government (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Government</h5>
                                        <ul class="p-0 text-dark">
                                            <li>US Federal Government</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/healthcare (1) (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Healthcare</h5>
                                        <ul class="p-0 text-dark">
                                            <li>Healthcare Providers</li>
                                            <li>Health Plans</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/mortarboard (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Higher Education</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/life-insurance (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Insurance</h5>
                                        <ul class="p-0 text-dark">
                                            <li>Insurance Agencies</li>
                                            <li>Insurance Carriers</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/legal-document (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Legal Services</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/virus (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Life Sciences</h5>
                                        <ul class="p-0 text-dark">
                                            <li>Pharmaceutical Companies</li>
                                            <li>Medical Device Manufacturers</li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/management (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Manufacturing</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/mortgage-loan (2) (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Mortgage</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/charity (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Nonprofit</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/agreement (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Real Estate</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/shopping-store (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Retail</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4">
                                <div class="box_shadow py-4 px-1 rounded industries_card">
                                    <a href="">

                                        <img class="mx-auto d-block" width="50px"
                                            src="{{ asset('assets/images/settings (1).png') }}" alt="">
                                        <h5 class="text-center mt-3">Technology</h5>
                                    </a>
                                </div>
                            </div>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{ asset('assets/images/service-rightcircle.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                        <h2 class="mt-5 text-center text_gradient">Departments</h2>

                        <div class="row mt-5">
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/facility-management (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Facilities</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/business-and-finance (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Finance</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/hr (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Human Resources</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/computer (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">IT/Operations</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/balance (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Legal</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/megaphone (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Marketing</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/supply-chain (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Procurement</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/management (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Product Management</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/sales (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Sales</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-3">
                                <div class="box_shadow py-4 rounded industries_card">
                                    <img class="mx-auto d-block" width="50px"
                                        src="{{ asset('assets/images/support (1).png') }}" alt="">
                                    <h5 class="text-center mt-3">Support</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
        </figure>
    </section>


    <section class="expert-section mt-4">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="text-start expert_content d-flex align-items-center justify-content-center h-100 flex-column"
                        data-aos="fade-right">
                        <h2>Integrate Docudash with your existing systems</h2>
                        <p>
                            Docudash offers the largest partner ecosystem and the most comprehensive set of applications and
                            platform services available—a solution for every size and type of organization.
                        </p>
                        <p>
                            Take advantage of over a dozen applications and more than 400 integrations for the most popular
                            CRM and productivity solutions available, including Microsoft, Salesforce, and SAP. Combined
                            with our powerful partner solutions, Docudash is a fast and easy way to modernize the entire
                            agreement process, from preparing to signing, acting on, and managing agreements from within the
                            applications you already use every day.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-4 mt-md-0 d-flex align-items-center justify-content">
                    <div class="expert_wrapper">
                        <figure class="offer-circleimage mb-0">
                            <img src="{{ asset('assets/images/offer-circleimage.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                        <img class="mt-5 w-100" src="{{ asset('assets/images/Industries-Footer-PartnerLogos.png') }}"
                            alt="">
                    </div>
                </div>

            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
        </figure>
    </section>



@endsection
