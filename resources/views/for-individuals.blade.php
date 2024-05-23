@extends('layout.master')
@section('title', 'For Individual - Esignax')
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
        <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
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
                        <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                    </figure>
                    <h2 class="mt-5">For Individuals</h2>
                    <p>Users can have complete digital solutions for their personal documents through fluid end-to-end services including e-sign, notarization, document tracing and document verification.</p>
                    {{-- <ul class="list-unstyled mb-0">
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Quisquam est, rui dolorem ipsum quia dolor cororis.</li>
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Rem aperiam, eaque ipsa quae ab illo inventore.</li>
                        <li class="text"><i class="circle fa-duotone fa-check"></i>Duis aute irure dolor in reprehenderit in voluptatar.</li>
                        <li class="text text1"><i class="circle fa-duotone fa-check"></i>Molestiae non recusandae itarue earum rerum ma.</li>
                    </ul> --}}
                    <a class="get_started text-white text-decoration-none" href="{{Route('pricing')}}">Get Pricing
                        <figure class="mb-0"><img src="{{asset('assets/images/button-arrow.png')}}" alt="" class="img-fluid"></figure>
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
                    <h2>Create Your Document</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Add Link
                              </button>
                            </h2>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Share Link
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on 
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Export Document
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Add Link
                              </button>
                            </h2>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute
                            </div>
                          </div>
                        </div>
                      </div>
                    <a class="get_started text-white text-decoration-none mt-3" href="./team.html">Sign Your Document
                        <figure class="mb-0"><img src="{{asset('assets/images/button-arrow.png')}}" alt="" class="img-fluid"></figure>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="expert_wrapper">
                    <figure class="offer-circleimage mb-0">
                        <img src="{{asset('assets/images/offer-circleimage.png')}}" alt="" class="img-fluid">
                    </figure>
                   <img class="mt-3 individual_third w-75" src="{{asset('assets/images/for-individual-third-sec.png')}}" alt="">
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
            <h2>STEPS TO SIGN A DOCUMENT</h2>
          </div>
        </div>
      </div>
      <div class="row position-relative mt-5 pt-4">
        <figure class="offer-circleimage mb-0">
          <img src="assets/images/offer-circleimage.png" alt="" class="img-fluid" />
        </figure>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 article_padding">
          <div class="offer_boxcontent">
            <div class="upper_portion">
              <div class="image_content">
                <figure class="offer-icon">
                  <i class="fa-solid fa-user mt-4 why_icons"></i>
                </figure>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4 class="mb-0">Step # 01</h4>
                <p>Create Account</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 article_padding">
          <div class="offer_boxcontent">
            <div class="upper_portion">
              <div class="image_content">
                <figure class="offer-icon offer-icon2">
                  <i class="fa-solid fa-file-lines mt-4 why_icons"></i>
                </figure>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4 class="mb-0">Step # 02</h4>
                <p>Create/Select Document</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 article_padding">
          <div class="offer_boxcontent mb-0">
            <div class="upper_portion">
              <div class="image_content">
                <figure class="offer-icon">
                  <i class="fa-brands fa-telegram mt-4 why_icons"></i>
                </figure>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4 class="mb-0">Step # 03</h4>
                <p>Submit Request</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 article_padding">
          <div class="offer_boxcontent mb-0">
            <div class="upper_portion">
              <div class="image_content">
                <figure class="offer-icon">
                  <i class="fa-solid fa-file-lines mt-4 why_icons"></i>
                </figure>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4 class="mb-0">Step # 04</h4>
                <p>Receive Document</p>
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