<section class="footer-section">
    <div class="container">
      <figure class="footer-leftimage mb-0">
        <img src="{{asset('assets/images/footer-leftimage.png')}}" alt="" class="img-fluid" />
      </figure>
      <figure class="mb-0 about-leftcircle">
        <img src="{{asset('assets/images/about-rightcircle.png')}}" alt="" class="img-fluid" />
      </figure>
      <div class="middle-portion">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-6 col-12">
            <div class="first-column">
              <a href="{{route('index')}}">
                <figure class="footer-logo">
                  <img width="180px" src="{{asset('assets/images/logo-white.png')}}" class="img-fluid" alt="" />
                </figure>
              </a>
              <p class="text-size-18 footer-text">
                Grursus mal suada faci lisis lorem ipsum dolaror more ameion consectetur elit vesti at bulum ne odio aea the dumm ipsum dolocons.
              </p>
              <div class="lower">
                <div class="lower-content">
                  <figure class="icon">
                    <img src="{{asset('assets/images/footer-callicon.png')}}" alt="" class="img-fluid" />
                  </figure>
                  <div class="content">
                    <span class="text-white">Call us:</span>
                    <a class="text-size-18 mb-0 text text-decoration-none" href="tel:+6138376284">+61 3 837 6284</a>
                  </div>
                </div>
                <div class="lower-content">
                  <figure class="icon">
                    <img src="{{asset('assets/images/footer-emailicon.png')}}" alt="" class="img-fluid" />
                  </figure>
                  <div class="content">
                    <span class="text-white">Email us:</span>
                    <a href="mailto:info@Esignax.com" class="text-size-18 mb-0 text-decoration-none">info@esignax.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-12 col-12 d-md-block d-none">
            <div class="links list-pd">
              <h4 class="heading text-white">Quick Links</h4>
              <ul class="list-unstyled mb-0">
                <li><a href="{{route('index')}}" class="text-size-18 text text-decoration-none">Home</a></li>
                <li><a href="about.html" class="text-size-18 text text-decoration-none">About</a></li>
                <li><a href="service.html" class="text-size-18 text text-decoration-none">Services</a></li>
                <li><a href="single-post.html" class="text-size-18 text text-decoration-none">Blog</a></li>
                <li><a href="{{Route('contact')}}" class="text-size-18 text text-decoration-none">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-12 d-lg-block d-none">
            <div class="links">
              <h4 class="heading text-white">Our Services</h4>
              <ul class="list-unstyled mb-0">
                <li><a href="service.html" class="text-size-18 text text-decoration-none">Cloud Service</a></li>
                <li><a href="{{route('index')}}" class="text-size-18 text text-decoration-none">Testimonial</a></li>
                <li><a href="team.html" class="text-size-18 text text-decoration-none">Team</a></li>
                <li><a href="project.html" class="text-size-18 text text-decoration-none">Digital marketing</a></li>
                <li><a href="{{Route('pricing')}}" class="text-size-18 text text-decoration-none">Pricing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-sm-block d-none">
            <div class="icons">
              <h4 class="heading mb-0 text-white">Subscribe to</h4>
              <h4 class="heading text-white">Our Newsletter Today!</h4>
              <p class="text-size-18 footer-text text-white">Exerci tation ullamcorper suscipit lobor nisl aliuie naro commodo.</p>
              <form id="contactpage1" method="POST" action="contact-form.php">
                <div class="form-group mb-0">
                  <input type="text" class="form_style" placeholder="Enter Email Address:" name="email" />
                </div>
                <button type="submit" class="subscribe_now text-white text-decoration-none">
                  Subscribe Now
                  <i class="circle fa-thin fa-arrow-right"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <div class="row copyright-border">
            <div class="col-lg-6 col-md-6 col-sm-12 co-12 column">
              <p class="text-size-16">Copyright ©2024 Esignax.com All Rights Reserved</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 co-12 d-md-block d-none">
              <div class="social-icons position-relative">
                <ul class="list-unstyled position-absolute">
                  <li>
                    <a href="" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a>
                  </li>
                  {{-- <li>
                    <a href="" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a>
                  </li> --}}
                  <li>
                    <a href="" class="text-decoration-none"><i class="fa-brands fa-instagram social-networks"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <figure class="footer-dotimage mb-0">
        <img src="{{asset('assets/images/footer-dotimage.png')}}" alt="" class="img-fluid" />
      </figure>
      <figure class="footer-leftlayer mb-0">
        <img src="{{asset('assets/images/footer-leftlayer.png')}}" alt="" class="img-fluid" />
      </figure>
    </div>
  </section>