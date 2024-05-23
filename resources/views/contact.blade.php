@extends('layout.master')
@section('title', 'Contact - Esignax')
@section('content')
<!--Contact -->
<section class="contact-section">
    <figure class="offer-toplayer mb-0">
        <img src="{{('assets/images/offer-toplayer.png')}}" alt="" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="contact_content" data-aos="fade-right">
                    <h6>Contact Info</h6>
                    <h2>Get in Touch</h2>
                    <div class="contact-box">
                        <div class="box-image">
                            <figure class="contact-location">
                                <img src="./assets/images/contact-location.png" alt="" class="img-fluid">
                            </figure> 
                        </div>
                        <div class="box-content">
                            <h4>Location:</h4>
                            <p class="text">121 King Street, Melbourne Victoria 3000 Australia</p>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="box-image">
                            <figure class="contact-email">
                                <img src="./assets/images/contact-email.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="box-content">
                            <h4 class="heading">Email:</h4>
                            <p>
                                <a href="mailto:info@artelligence.com" class="text-decoration-none">support@esignax.com</a>
                            </p>
                            <p>
                                <a href="mailto:artelligence@gmail.com" class="mb-0 text-decoration-none">esignax@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="contact-box box-mb">
                        <div class="box-image">
                            <figure class="contact-phone">
                                <img src="./assets/images/contact-phone.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="box-content">
                            <h4 class="heading">Phone:</h4>
                            <p>
                                <a href="tel:+012(345)67899" class="text-decoration-none text">+012 (345) 678 99</a>                                
                            </p>
                            <p>
                                <a href="tel:+1234567847858" class="mb-0 text-decoration-none text">+12345678 478 58</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="need-section">
                    <figure class="offer-circleimage mb-0">
                        <img src="{{asset('assets/images/offer-circleimage.png')}}" alt="" class="img-fluid">
                    </figure>
                    <div class="need_content"> 
                        <h6 class="text-white">Write to us</h6>
                        <h2 class="text-white">send us a Message</h2>
                        <form id="contactpage" method="POST" action="./contact-form.php">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-0">    
                                    <input type="text" class="form_style" placeholder="Your Name:" name="name"> 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                    <input type="email" class="form_style" placeholder="Your Email:" name="emailid">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">    
                                    <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="manage-button text-center">
                                <button type="submit" class="send_now text-white text-decoration-none">Send Now
                                    <i class="circle fa-thin fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                        <figure class="faq-image mb-0">
                            <img src="./assets/images/faq-image.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <figure class="offer-bottomlayer mb-0">
        <img src="{{asset('assets/images/offer-bottomlayer.png')}}" alt="" class="img-fluid">
    </figure>
</section>
<!-- Map -->
<div class="contact_map_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.3329737833114!2d144.96011341590386!3d-37.80566904135444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2s!4v1669200882885!5m2!1sen!2s"
            width="1920" height="556" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection