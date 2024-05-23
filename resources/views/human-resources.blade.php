@extends('layout.master')
@section('title', 'Human Resources - Esignax')
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
    <!-- Aboutus -->
    <section class="aboutus-section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
                    <div class="about_wrapper">
                        <figure class="mb-0 aboutus-image1">
                            <img src="./assets/images/aboutus-image1.jpg" alt="" class="">
                        </figure>
                        <figure class="mb-0 aboutus-image2">
                            <img src="./assets/images/aboutus-image2.jpg" alt="" class="img-fluid">
                        </figure>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                    <div class="service_content position-relative" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{ asset('assets/images/service-rightcircle.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                        <h2 class="mt-5">Invest in your people to better empower your business</h2>
                        <p>Attract and retain employees with simple, modern hiring, onboarding and employee experiences.
                            Automate and connect HR paperwork processes—and free up your team to focus on people, not
                            paperwork.</p>
                        {{-- <ul class="list-unstyled mb-0">
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Quisquam est, rui dolorem ipsum quia dolor cororis.</li>
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Rem aperiam, eaque ipsa quae ab illo inventore.</li>
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Duis aute irure dolor in reprehenderit in voluptatar.</li>
                        <li class="text text1"><i class="circle fa-duotone fa-check"></i>Molestiae non recusandae itarue earum rerum ma.</li>
                    </ul> --}}
                        <a class="get_started text-white text-decoration-none" href="{{ Route('pricing') }}">Get Pricing
                            <figure class="mb-0"><img src="{{ asset('assets/images/button-arrow.png') }}" alt=""
                                    class="img-fluid"></figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
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
    <!-- Experts -->
    <section class="expert-section mt-4">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_wrapper">
                        <figure class="offer-circleimage mb-0">
                            <img src="{{ asset('assets/images/offer-circleimage.png') }}" alt="" class="img-fluid">
                        </figure>
                        <img class="mt-3 individual_third w-75"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/human-resources/02.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_content pt-3" data-aos="fade-right">
                        <h2>Create dynamic, mobile friendly experiences for your employees</h2>
                        <p>From NDAs and offer letters to promotion approvals, your HR team manages tons of data and
                            documents.</p>
                        <p>
                            Drive efficiency and effectiveness in these processes with Docudash. You can use automation;
                            build security through traceable, secure audit trails; reach employees and candidates through
                            mobile-friendly, dynamic experiences; and integrate easily with the HR tools you know and love.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
        </figure>
    </section>


    <section class="expert-section mt-4 resilience_section">
        <figure class="offer-toplayer mb-0">
            <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_content pt-3" data-aos="fade-right">
                        <h2 class="text-light">Streamline agreements and enhance productivity</h2>
                        <p class="text-light">Automate your HR processes to optimize your workflows, enhance your productivity, and enhance
                            employee satisfaction by giving valuable time back to work on the tasks you need to work on.

                        <p class="text-light">
                            Adding electronic signatures into your HR workflows is just the first step toward getting HR
                            documents out and signed faster.

                        </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_wrapper">
                        <figure class="offer-circleimage mb-0">
                            <img src="{{ asset('assets/images/offer-circleimage.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                        <img class="mt-3 individual_third w-75"
                            src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/human-resources/03.jpg') }}"
                            alt="">
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
                  <div class="expert_wrapper">
                      <figure class="offer-circleimage mb-0">
                          <img src="{{ asset('assets/images/offer-circleimage.png') }}" alt="" class="img-fluid">
                      </figure>
                      <img class="mt-3 individual_third w-75"
                          src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/human-resources/04.jpg') }}"
                          alt="">
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="expert_content pt-3" data-aos="fade-right">
                      <h2>Increase retention and improve candidate & employee experience</h2>
                      <p>Drive further value by investing in tools that help not only speed up the candidate hiring and onboarding experience but also increase employee satisfaction.
                      </p>

                  </div>
              </div>
          </div>
      </div>
      <figure class="offer-bottomlayer mb-0">
          <img src="{{ asset('assets/images/offer-bottomlayer.png') }}" alt="" class="img-fluid">
      </figure>
  </section>



  <section class="expert-section mt-4 resilience_section">
    <figure class="offer-toplayer mb-0">
        <img src="{{ 'assets/images/offer-toplayer.png' }}" alt="" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                <div class="expert_content pt-3" data-aos="fade-right">
                    <h2 class="text-light">Improve data security and compliance</h2>
                    <p class="text-light">Get deeper visibility into your data, ensure your data is secure around the clock and get support for your compliance efforts.</p>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="expert_wrapper">
                    <figure class="offer-circleimage mb-0">
                        <img src="{{ asset('assets/images/offer-circleimage.png') }}" alt=""
                            class="img-fluid">
                    </figure>
                    <img class="mt-3 individual_third w-75"
                        src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/human-resources/05.jpg') }}"
                        alt="">
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
              <div class="expert_wrapper">
                  <figure class="offer-circleimage mb-0">
                      <img src="{{ asset('assets/images/offer-circleimage.png') }}" alt="" class="img-fluid">
                  </figure>
                  <img class="mt-3 individual_third w-75"
                      src="{{ asset('https://www.getdocudash.com/site-assets/assets/images/human-resources/06.jpg') }}"
                      alt="">
              </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center">
              <div class="expert_content pt-3" data-aos="fade-right">
                  <h2>Expand and enhance capabilities</h2>
                  <p>Optimize your workflows with our library of 400+ pre-built integrations with tools like Workday, ServiceNow, and Greenhouse, iCIMS and Oracle. Prepare, sign, act on and manage digital documents from the systems you already know and use.</p>

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
      <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
  </figure>
  <div class="container">
      <div class="container trust-and-security-sec-3-container">
          <div class="row">
              <div class="col-md-6">
                  <div>
                      <img class="w-100 human_3" src="{{asset('https://www.getdocudash.com/site-assets/assets/images/human-resources-04.png')}}" alt="">
                  </div>
              </div>
              <div class="col-md-6 mt-md-0 mt-5 d-flex align-items-center">
                  <div class="offer_content" data-aos="fade-right">
                      <h2 class="text-left ">Extend the power of eSignature for HR departments</h2>
                      <p class="text-left p-0 ">Docudash regularly releases new innovations to help your organization enable better ways of working. Here are a few notable innovations.</p>
                      <hr class="bg-light ">
                      <div class="d-flex justify-content-between ">
                          <div class="text-left" style="width: 35%">SMS delivery</div><br class="d-block d-sm-none">
                          <div class="text-left" style="flex: 1">Get candidate and employee agreements signed faster with text notifications.</div>
                      </div>
                      <hr class="bg-light ">
                      <div class="d-flex justify-content-between ">
                          <div class="text-left" style="width: 35%">Advanced workflows</div><br class="d-block d-sm-none">
                          <div class="text-left" style="flex: 1">Add more flexibility, control and ease to your eSignature workflows with conditional routing, signing groups, and more.</div>
                      </div>
                      <hr class="bg-light ">
                      <div class="d-flex justify-content-between ">
                          <div class="text-left" style="width: 35%">Web Forms</div><br class="d-block d-sm-none">
                          <div class="text-left" style="flex: 1">Streamline data collection from hiring managers and candidates and speed up signing.</div>
                      </div>
                      <hr class="bg-light ">
                      <div class="d-flex justify-content-between ">
                          <div class="text-left" style="width: 35%">Monitor</div><br class="d-block d-sm-none">
                          <div class="text-left" style="flex: 1">Protect your agreements with activity tracking.</div>
                      </div>
                      <hr class="bg-light ">
                      <div class="d-flex justify-content-between ">
                          <div class="text-left" style="width: 35%">Document generation</div><br class="d-block d-sm-none">
                          <div class="text-left" style="flex: 1">Eliminate traditional document-creation pain points.</div>
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
