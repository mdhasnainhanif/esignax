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
            <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="service_content position-relative pt-0" data-aos="fade-right">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h2 class="mt-5 text-center text_gradient">Explore Options And Pricing</h2>
                        <p class="text-center">We're here to help you establish exceptional trust with your customers. That's why we build
                            security into every step of the agreement process—so you can send and sign with peace of mind.
                        </p>
                        
                        <div class="row mt-5">
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-0">
                                <div class="box_shadow py-4 rounded">
                                    <img class="mx-auto d-block" width="50px" src="{{asset('assets/images/our-products-e-sign-sec-1-img-3.png')}}" alt="">
                                    <h5 class="text-center mt-3">Takes Just A Moment</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-0">
                                <div class="box_shadow py-4 rounded">
                                    <img class="mx-auto d-block" width="50px" src="{{asset('assets/images/payments-icon.png')}}" alt="">
                                    <h5 class="text-center mt-3">A Lot of $$$ Saved</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-0">
                                <div class="box_shadow py-4 rounded">
                                    <img class="mx-auto d-block" width="50px" src="{{asset('assets/images/salesforce-icon.png')}}" alt="">
                                    <h5 class="text-center mt-3">Reliable</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mt-4 mt-md-0">
                                <div class="box_shadow py-4 rounded">
                                    <img class="mx-auto d-block" width="50px" src="{{asset('assets/images/our-products-e-sign-sec-1-img-4.png')}}" alt="">
                                    <h5 class="text-center mt-3">Rising</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
        </figure>
    </section>
 
    <!-- Experts -->
    <section class="expert-section mt-4">
        <figure class="offer-toplayer mb-0">
            <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_wrapper">
                        <figure class="offer-circleimage mb-0">
                            <img src="{{asset('assets/images/offer-circleimage.png')}}" alt="" class="img-fluid">
                        </figure>
                        <img class="mt-3 individual_third w-75" src="{{ asset('assets/images/e-signature-1.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_content d-flex align-items-center justify-content-center h-100" data-aos="fade-right">
                        <h2>Ease and Efficiency</h2>
                    </div>
                </div>
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
        </figure>
    </section>


    <section class="expert-section mt-4">
        <figure class="offer-toplayer mb-0">
            <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="text-start expert_content d-flex align-items-center justify-content-center h-100 flex-column" data-aos="fade-right">
                        <h2>Expand The Capabilities Of ESignature</h2>
                        <h6>Create AI designed eSignatures</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="expert_wrapper">
                        <figure class="offer-circleimage mb-0">
                            <img src="{{asset('assets/images/offer-circleimage.png')}}" alt="" class="img-fluid">
                        </figure>
                        <img class="mt-3 individual_third w-75" src="{{ asset('assets/images/e-signature-2.jpg') }}"
                            alt="">
                    </div>
                </div>
                
            </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
            <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
        </figure>
    </section>


    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3 col-sm-6 mt-4 mt-md-0">
                    <div class="box_shadow py-4 rounded">
                        <img class="mx-auto d-block" width="50px" src="{{asset('assets/images/esign-individual-icon.png')}}" alt="">
                        <h5 class="text-center mt-3">For Individuals</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-4 mt-md-0">
                    <div class="box_shadow py-4 rounded">
                        <img class="mx-auto d-block" width="50px" src="{{asset('assets/images/esign-business-icon.png')}}" alt="">
                        <h5 class="text-center mt-3">For Businesses</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-4 mt-md-0">
                    <div class="box_shadow py-4 rounded">
                        <img class="mx-auto d-block" width="50px" src="{{asset('assets/images/esign-title-agents-icon.png')}}" alt="">
                        <h5 class="text-center mt-3">For Title Agents</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-4 mt-md-0">
                    <div class="box_shadow py-4 rounded">
                        <img class="mx-auto d-block" width="50px" src="{{asset('assets/images/esign-lender-icon.png')}}" alt="">
                        <h5 class="text-center mt-3">For Lenders</h5>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <a class="text-decoration-none" href="{{route('pricing')}}">
                    <button class="btn_theme d-block mx-auto">Pricing</button>
                </a>
            </div>
        </div>
    </section>



    <section class="project-section">
        <figure class="offer-toplayer mb-0">
          <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="project_content mb-5" data-aos="fade-right">
                <h6>RECENT BLOGS</h6>
                <h2>OUR LATEST NEWS</h2>
                <!-- <p>Dursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm recreo that dolocons.</p> -->
                <figure class="offer-circleimage mb-0">
                  <img src="assets/images/offer-circleimage.png" alt="" class="img-fluid" />
                </figure>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box1 case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image1.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Design</span>
                      <h5 class="text-white">Business Analysis</h5>
                      <p class="text-white text-size-18">Rerum hic tenetur sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image2.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Development</span>
                      <h5 class="text-white">Web Development</h5>
                      <p class="text-white text-size-18">Serum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box2 case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image3.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Marketing</span>
                      <h5 class="text-white">Digital Marketing</h5>
                      <p class="text-white text-size-18">Terum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image4.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Design</span>
                      <h5 class="text-white">Tech Solutions</h5>
                      <p class="text-white text-size-18">Uerum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image5.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Security</span>
                      <h5 class="text-white">Cyber Security</h5>
                      <p class="text-white text-size-18">Nerum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box1 case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image1.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Design</span>
                      <h5 class="text-white">Business Analysis</h5>
                      <p class="text-white text-size-18">Rerum hic tenetur sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image2.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Development</span>
                      <h5 class="text-white">Web Development</h5>
                      <p class="text-white text-size-18">Serum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box2 case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image3.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Marketing</span>
                      <h5 class="text-white">Digital Marketing</h5>
                      <p class="text-white text-size-18">Terum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image4.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Design</span>
                      <h5 class="text-white">Tech Solutions</h5>
                      <p class="text-white text-size-18">Uerum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image5.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Security</span>
                      <h5 class="text-white">Cyber Security</h5>
                      <p class="text-white text-size-18">Nerum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box1 case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image1.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Design</span>
                      <h5 class="text-white">Business Analysis</h5>
                      <p class="text-white text-size-18">Rerum hic tenetur sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image2.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Development</span>
                      <h5 class="text-white">Web Development</h5>
                      <p class="text-white text-size-18">Serum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box2 case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image3.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Marketing</span>
                      <h5 class="text-white">Digital Marketing</h5>
                      <p class="text-white text-size-18">Terum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image4.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Design</span>
                      <h5 class="text-white">Tech Solutions</h5>
                      <p class="text-white text-size-18">Uerum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="single-post.html">
                  <div class="case-box overlay">
                    <div class="overlay-image">
                      <figure class="image mb-0">
                        <img src="assets/images/case-image5.jpg" alt="" class="" />
                      </figure>
                    </div>
                    <div class="content">
                      <span class="text-white">Security</span>
                      <h5 class="text-white">Cyber Security</h5>
                      <p class="text-white text-size-18">Nerum hic tenetur a sapiente...</p>
                      <i class="circle fa-thin fa-arrow-right"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <figure class="offer-bottomlayer mb-0">
          <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid" />
        </figure>
      </section>



    <section class="project-section">
        <figure class="offer-toplayer mb-0">
          <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
        </figure>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="project_content mb-5" data-aos="fade-right">
                <h2>FAQs</h2>
                <!-- <p>Dursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm recreo that dolocons.</p> -->
                <figure class="offer-circleimage mb-0">
                  <img src="assets/images/offer-circleimage.png" alt="" class="img-fluid" />
                </figure>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button"
                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            What is an E-Signature?
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        An electronic signature (e-signature) is a legally binding signature that is created and transmitted electronically, often using a digital signature or other electronic authentication method. E-signatures are recognized by law in many countries, including the United States, Canada, and the European Union.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Are E-Signatures Secure and Legal?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        Yes, e-signatures are secure and legally binding when they meet certain requirements. For example, the e-signature must be linked to the signer, provide proof of the signer's identity, and show that the signer intended to sign the document. Docudash uses industry-standard encryption and security measures to ensure the integrity and confidentiality of e-signed documents.

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            What Documents Can be Signed Using E-Signatures?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        E-signatures can be used for a wide range of documents, including contracts, agreements, NDAs, waivers, and more. However, there are some documents that cannot be signed using e-signatures, such as wills, trusts, and certain real estate documents, which may require physical signatures or notarization.

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            How Does Docudash E-Signature Service Work?
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        With Docudash E-Signature service, you can upload your document to the platform, select the recipients who need to sign, and customize the signing order and workflow. The recipients will receive an email invitation to sign the document, and they can sign using a variety of methods, including typing, drawing, or uploading a signature image. Once all signatures are collected, the signed document will be securely stored and available for download.

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
