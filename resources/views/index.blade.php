
@extends('layout.master')
@section('title', 'Home - Esignax')
@section('content')

 <!-- Service -->
 {{-- <section class="service-section">
  <figure class="service-leftlayer mb-0">
    <img src="assets/images/service-leftlayer.png" alt="" class="img-fluid" />
  </figure>
  <figure class="service-dotimage mb-0">
    <img src="assets/images/service-dotimage.png" alt="" class="img-fluid" />
  </figure>
  <div class="container">
    <div class="offer_content aos-init aos-animate mb-5 text-center" data-aos="fade-up">
      <h2>Why Choose Esignax?</h2>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="service_contentbox">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="service-box box-mb">
                <figure class="service-marketicon">
                  <i class="fa-solid fa-square-check mt-4 why_icons"></i>
                </figure>
                <h4>Always Available</h4>
                <p class="text-size-18">Now notarize documents at any given moment digitally.</p>
                <a class="arrow text-decoration-none" href="service.html"><i class="circle fa-thin fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="box-top">
                <div class="service-box box-mb">
                  <figure class="service-producticon">
                    <i class="fa-solid fa-award mt-4 why_icons"></i>
                  </figure>
                  <h4>Globally Trusted</h4>
                  <p class="text-size-18">Internationally recognized and certified as a verified and recommendedc source.</p>
                  <a class="arrow text-decoration-none" href="service.html"><i class="circle fa-thin fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="service-box">
                <figure class="service-designicon">
                  <i class="fa-regular fa-pen-to-square mt-4 why_icons"></i>
                </figure>
                <h4>One Stop Solution</h4>
                <p class="text-size-18">Advanced systems for end-to-end documentation development</p>
                <a class="arrow text-decoration-none" href="service.html"><i class="circle fa-thin fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="box-top">
                <div class="service-box">
                  <figure class="service-dataicon">
                    <i class="fa-solid fa-user-lock mt-4 why_icons"></i>
                  </figure>
                  <h4>Security of the Future</h4>
                  <p class="text-size-18">Enhanced digital encryption with trusted networks for a secure framework for documentation.</p>
                  <a class="arrow text-decoration-none" href="service.html"><i class="circle fa-thin fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="service_content position-relative" data-aos="fade-right">
          <figure class="service-rightcircle mb-0">
            <img src="assets/images/service-rightcircle.png" alt="" class="img-fluid" />
          </figure>
          <h6>Our Services</h6>
          <h2>BEST IT SOLUTION FOR YOUR BUSINESS</h2>
          <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm ipsumm recreo that dolocons.</p>
          <ul class="list-unstyled mb-0">
            <li class="text"><i class="circle fa-duotone fa-check"></i>Quisquam est, rui dolorem ipsum quia dolor corporis.</li>
            <li class="text"><i class="circle fa-duotone fa-check"></i>Rem aperiam, eaque ipsa quae ab illo inventore veritatis.</li>
            <li class="text"><i class="circle fa-duotone fa-check"></i>Duis aute irure dolor in reprehenderit in voluptate velio.</li>
            <li class="text text1"><i class="circle fa-duotone fa-check"></i>Molestiae non recusandae itarue earum rerum maio.</li>
          </ul>
          <a class="get_started text-white text-decoration-none" href="service.html"
            >Get Started
            <figure class="mb-0"><img src="assets/images/button-arrow.png" alt="" class="img-fluid" /></figure>
          </a>
        </div>
      </div> -->
    </div>
  </div>
  <figure class="service-rightlayer mb-0">
    <img src="assets/images/service-rightlayer.png" alt="" class="img-fluid" />
  </figure>
</section> --}}
<!-- Offer -->
<section class="offer-section">
  <figure class="offer-toplayer mb-0">
    <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
  </figure>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="offer_content mb-5" data-aos="fade-up">
          {{-- <h6>what We Offer</h6> --}}
          <h2>Why Choose Esignax</h2>
          <!-- <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm recreo that dolocons.</p> -->
        </div>
      </div>
    </div>
    <div class="row position-relative">
      <figure class="offer-circleimage mb-0">
        <img src="assets/images/offer-circleimage.png" alt="" class="img-fluid" />
      </figure>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 article_padding">
        <div class="offer_boxcontent">
          <div class="upper_portion">
            <figure class="mb-0"><img src="assets/images/offer-image1.jpg" class="article_img  w-100" alt="" /></figure>
            <div class="image_content">
              <figure class="offer-icon">
                {{-- <img src="assets/images/offer-icon3.png" alt="" class="img-fluid" /> --}}
                <i class="fa-solid fa-square-check mt-4 why_icons"></i>
              </figure>
            </div>
          </div>
          <div class="lower_portion_wrapper">
            <div class="lower_portion">
              <h4 class="mb-0">Always Available</h4>
              <p>Now notarize documents at any given moment digitally.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 article_padding mt-4 mt-md-0">
        <div class="offer_boxcontent">
          <div class="upper_portion">
            <figure class="mb-0"><img src="assets/images/offer-image2.jpg" class="article_img  w-100" alt="" /></figure>
            <div class="image_content">
              <figure class="offer-icon offer-icon2">
                {{-- <img src="assets/images/offer-icon2.png" alt="" class="img-fluid" /> --}}
                <i class="fa-solid fa-award mt-4 why_icons"></i>
              </figure>
            </div>
          </div>
          <div class="lower_portion_wrapper">
            <div class="lower_portion">
              <h4 class="mb-0">Globally Trusted</h4>
              <p>Internationally recognized and certified as a verified and recommendedc source.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 article_padding mt-4 mt-md-0">
        <div class="offer_boxcontent mb-0">
          <div class="upper_portion">
            <figure class="mb-0"><img src="assets/images/offer-image3.jpg" class="article_img  w-100" alt="" /></figure>
            <div class="image_content">
              <figure class="offer-icon">
                {{-- <img src="assets/images/offer-icon1.png" alt="" class="img-fluid" /> --}}
                <i class="fa-regular fa-pen-to-square mt-4 why_icons"></i>
              </figure>
            </div>
          </div>
          <div class="lower_portion_wrapper">
            <div class="lower_portion">
              <h4 class="mb-0">One Stop Solution</h4>
              <p>Advanced systems for end-to-end documentation development.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 article_padding mt-4 mt-md-0">
        <div class="offer_boxcontent mb-0">
          <div class="upper_portion">
            <figure class="mb-0"><img src="assets/images/offer-image3.jpg" class="article_img  w-100" alt="" /></figure>
            <div class="image_content">
              <figure class="offer-icon">
                {{-- <img src="assets/images/offer-icon1.png" alt="" class="img-fluid" /> --}}
                <i class="fa-solid fa-user-lock mt-4 why_icons"></i>
              </figure>
            </div>
          </div>
          <div class="lower_portion_wrapper">
            <div class="lower_portion">
              <h4 class="mb-0">Security of the Future</h4>
              <p>Enhanced digital encryption with trusted networks for a secure framework for documentation.</p>
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
<!-- About Us -->
<!-- <section class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2">
        <div class="about_wrapper">
          <figure class="mb-0 about-image1">
            <img src="assets/images/about-image1.jpg" alt="" class="" />
          </figure>
          <figure class="mb-0 about-image2">
            <img src="assets/images/about-image2.jpg" alt="" class="img-fluid" />
          </figure>
          <div class="image-circle">
            <div class="years">
              <span class="text-white value counter">30</span>
              <sup class="text-white mb-0 plus">+</sup>
              <span class="text-white text">Years of Experience</span>
            </div>
            <figure class="mb-0 about-imagecircle">
              <img src="assets/images/about-imagecircle.png" alt="" class="" />
            </figure>
          </div>
          <figure class="mb-0 about-dot">
            <img src="assets/images/about-dot.png" alt="" class="img-fluid" />
          </figure>
          <figure class="mb-0 about-leftcircle">
            <img src="assets/images/about-leftcircle.png" alt="" class="img-fluid" />
          </figure>
          <figure class="mb-0 about-layer">
            <img src="assets/images/about-layer.png" alt="" class="img-fluid" />
          </figure>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
        <div class="about_content" data-aos="fade-right">
          <h6>About us</h6>
          <h2 class="text-white">We help clients invent their future.</h2>
          <p class="text1">Grursus mal suada faci lisis lorem ipsum dolarorit more ae ion consectetur elit vesti at bulum nec odio aea the dumo ipsumm recreo that dolocons.</p>
          <p class="text2">Exercitationem ullam corporis suscipit laboriosam, nisi auali quid exear commodi consequatur.</p>
          <a class="read_more text-white text-decoration-none" href="about.html"
            >Read More
            <figure class="mb-0"><img src="assets/images/button-arrow.png" alt="" class="img-fluid" /></figure>
          </a>
        </div>
      </div>
    </div>
  </div>
  <figure class="mb-0 about-rightimage">
    <img src="assets/images/about-rightimage.png" alt="" class="img-fluid" />
  </figure>
  <figure class="mb-0 about-rightcircle">
    <img src="assets/images/about-rightcircle.png" alt="" class="img-fluid" />
  </figure>
</section> -->
<!-- Achievements -->
<section class="achievement-section">
  <figure class="service-rightlayer mb-0">
    <img src="assets/images/service-leftlayer.png" alt="" class="img-fluid" />
  </figure>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12 col-12">
        <div class="achievement_content" data-aos="fade-right">
          <figure class="offer-circleimage mb-0">
            <img src="assets/images/offer-circleimage.png" alt="" class="img-fluid" />
          </figure>
          <h6>Achievements</h6>
          <h2>Some Number of Our Achievements</h2>
          <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ion consectetur elit vesti at bulum nec odio aea the au ipsumm recreo that dolocons.</p>
          <a class="get_started text-white text-decoration-none" href="about.html"
            >Get Started
            <figure class="mb-0"><img src="assets/images/button-arrow.png" alt="" class="img-fluid" /></figure>
          </a>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 col-sm-12 col-12">
        <div class="achievement_wrapper">
          <div class="achievement-box box1">
            <figure class="icon achievement-icon">
              <img src="assets/images/achievement-projecticon.png" alt="" class="img-fluid" />
            </figure>
            <div class="wrapper">
              <h3>521</h3>
              <p class="text-size-18 mb-0">Projects</p>
            </div>
          </div>
          <div class="achievement-box box2">
            <figure class="icon1 achievement-icon">
              <img src="assets/images/achievement-clienticon.png" alt="" class="img-fluid" />
            </figure>
            <div class="wrapper">
              <h3>232</h3>
              <p class="text-size-18 mb-0">Happy Clients</p>
            </div>
          </div>
          <div class="achievement-box box3">
            <figure class="icon achievement-icon">
              <img src="assets/images/achievement-awardicon.png" alt="" class="img-fluid" />
            </figure>
            <div class="wrapper">
              <div class="number number1">
                <h3 class="value counter">1463</h3>
                <span class="plus">+</span>
              </div>
              <p class="text text-size-18 mb-0">Hours Of Support</p>
            </div>
          </div>
          <div class="achievement-box box4">
            <figure class="icon1 achievement-icon">
              <img src="assets/images/achievement-teamicon.png" alt="" class="img-fluid" />
            </figure>
            <div class="wrapper">
              <div class="number">
                <h3 class="value counter">15</h3>
                <span class="plus">+</span>
              </div>
              <p class="text text-size-18 mb-0">Legal Workers</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <figure class="service-leftlayer mb-0">
    <img src="assets/images/service-rightlayer.png" alt="" class="img-fluid" />
  </figure>
</section>
<!-- Project -->
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
<!-- Testimonial -->
<section class="testimonial-section position-relative">
  <figure class="service-leftlayer mb-0">
    <img src="assets/images/service-leftlayer.png" alt="" class="img-fluid" />
  </figure>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12 col-12">
        <div class="testimonial_wrapper position-relative" data-aos="fade-right">
          <figure class="service-rightcircle mb-0">
            <img src="assets/images/service-rightcircle.png" alt="" class="img-fluid" />
          </figure>
          <div class="circle_wrapper position-relative">
            <div class="center-circle">
              <figure class="testimonial-centerimage mb-0">
                <img src="assets/images/testimonial-centerimage.png" alt="" class="img-fluid" />
              </figure>
            </div>
            <figure class="testimonial-image1 position-absolute mb-0">
              <img src="assets/images/testimonial-image1.png" alt="" class="img-fluid" />
            </figure>
            <figure class="testimonial-image2 position-absolute mb-0">
              <img src="assets/images/testimonial-image2.png" alt="" class="img-fluid" />
            </figure>
            <figure class="testimonial-image3 position-absolute mb-0">
              <img src="assets/images/testimonial-image3.png" alt="" class="img-fluid" />
            </figure>
            <figure class="testimonial-image4 position-absolute mb-0">
              <img src="assets/images/testimonial-image4.png" alt="" class="img-fluid" />
            </figure>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 col-sm-12 col-12">
        <div class="testimonial_contentwrapper">
          <div class="heading">
            <h6>TESTIMONIALS</h6>
            <h2>We care about your opinion</h2>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial_content">
                  <div class="content-box">
                    <p>
                      Nemo enim ipsam voluptatem quia voluptas sit asperna aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                      nesciuntporro quisuam est, rui dolorem ipsum quia dolor sit amet, consectetur adieisci velit sed ruia.
                    </p>
                    <div class="content">
                      <div class="circle">
                        <figure class="testimonial-quote mb-0">
                          <img src="assets/images/testimonial-quote.png" alt="" class="img-fluid" />
                        </figure>
                      </div>
                      <div class="designation-outer">
                        <span>Kevin James</span>
                        <p class="text-size-18 mb-0">Happy Client</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial_content">
                  <div class="content-box">
                    <p>
                      Nemo enim ipsam voluptatem quia voluptas sit asperna aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                      nesciuntporro quisuam est, rui dolorem ipsum quia dolor sit amet, consectetur adieisci velit sed ruia.
                    </p>
                    <div class="content">
                      <div class="circle">
                        <figure class="testimonial-quote mb-0">
                          <img src="assets/images/testimonial-quote.png" alt="" class="img-fluid" />
                        </figure>
                      </div>
                      <div class="designation-outer">
                        <span>Kevin James</span>
                        <p class="text-size-18 mb-0">Happy Client</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pagination-outer">
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <figure class="service-rightlayer mb-0">
    <img src="assets/images/service-rightlayer.png" alt="" class="img-fluid" />
  </figure>
</section>
<!-- Blog -->
<!-- <section class="blog-section">
  <figure class="offer-toplayer mb-0">
    <img src="{{asset('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid" />
  </figure>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="blog_content" data-aos="fade-right">
          <h6>News and articles</h6>
          <h2>our latest blog posts</h2>
          <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm recreo that dolocons.</p>
          <figure class="offer-circleimage mb-0">
            <img src="assets/images/offer-circleimage.png" alt="" class="img-fluid" />
          </figure>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="blog_boxcontent">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image1.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">18</h3>
                  <span class="text-white">March</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>Useful Tips From Experts In Service.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="blog_boxcontent">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image2.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">26</h3>
                  <span class="text-white">April</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>How Will Service Be In The Future.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="blog_boxcontent mb-0">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image3.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">09</h3>
                  <span class="text-white">June</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>How Service Can Ease Your Pain.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="blog_boxcontent">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image1.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">18</h3>
                  <span class="text-white">March</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>Useful Tips From Experts In Service.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="blog_boxcontent">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image2.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">26</h3>
                  <span class="text-white">April</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>How Will Service Be In The Future.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="blog_boxcontent mb-0">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image3.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">09</h3>
                  <span class="text-white">June</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>How Service Can Ease Your Pain.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="blog_boxcontent">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image1.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">18</h3>
                  <span class="text-white">March</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>Useful Tips From Experts In Service.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="blog_boxcontent">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image2.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">26</h3>
                  <span class="text-white">April</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>How Will Service Be In The Future.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="blog_boxcontent mb-0">
            <div class="upper_portion">
              <figure class="mb-0"><img src="assets/images/blog-image3.jpg" class="article_img" alt="" /></figure>
              <div class="image_content">
                <div class="content">
                  <h3 class="text-white counter">09</h3>
                  <span class="text-white">June</span>
                </div>
              </div>
            </div>
            <div class="lower_portion_wrapper">
              <div class="lower_portion">
                <h4>How Service Can Ease Your Pain.</h4>
                <p class="text-size-18">Nostrum exercitationem aeullam corporis suscipit labo riosam aliruiea molestiae non recusandae...</p>
                <a class="read_more text-decoration-none" href="single-post.html"
                  >Read More
                  <figure class="arrow mb-0"><img src="assets/images/blog-arrow.png" alt="" class="img-fluid" /></figure>
                </a>
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
</section> -->

@endsection