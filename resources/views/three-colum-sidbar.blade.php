<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Three Column Sidebar | Esignax</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom-style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/special-classes.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<!-- Header  -->
<div class="sub-banner">
    <figure class="sub-bannerleftlayer mb-0">
        <img src="./assets/images/sub-bannerleftlayer.png" alt="" class="img-fluid">
    </figure>
    <header class="header">
        <div class="main-header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{route('index')}}"><figure class="mb-0 banner-logo"><img src="./assets/images/logo.png" alt="" class="img-fluid"></figure></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('index')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./service.html">Services</a>
                            </li>
                            <li class="nav-space nav-item dropdown active">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> Blog </a>
                                <div class="dropdown-menu drop-down-content">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="single-post.html">Single Post</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="infinite-scroll.html">Infinite Scroll</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="load-more.html">Load More</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="one-column.html">One Column</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="two-column.html">Two Column</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="three-column.html">Three Column</a></li>
                                        <li class="nav-item active"><a class="dropdown-item nav-link" href="three-colum-sidbar.html">Three Column Sidebar</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="four-column.html">Four Column</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="six-colum-full-wide.html">Six Column</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-space nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdownmain" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> Pages </a>
                                <div class="dropdown-menu drop-down-content">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link" href="./project.html">Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link" href="{{Route('pricing')}}">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item nav-link" href="./team.html">Teams</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-space nav-item">
                                <a class="nav-link" href="{{Route('contact')}}">Contact</a>
                            </li>
                        </ul>
                        <div class="last_list">
                            <figure class="nav-phoneimage mb-0"><img class="img-fluid" src="./assets/images/nav-phoneimage.png" alt=""></figure>
                            <div class="content">
                                <p class="text-size-18 text-white">Call Anytime:</p>
                                <a class="text-decoration-none last_list_atag" href="tel:+012(345)6789">+012 (345) 6789</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="banner_content" data-aos="fade-up">
                        <figure class="blog-rightcircle service-rightcircle mb-0">
                            <img src="{{asset('assets/images/service-rightcircle.png')}}" alt="" class="img-fluid">
                        </figure>
                        <h1 class="text-white">Three Column Sidebar</h1>
                        <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue morbi acer.</p>
                        <div class="box">
                            <span class="mb-0">Home</span>
                            <figure class="mb-0 arrow"><img src="{{asset('assets/images/button-arrow.png')}}" alt="" class="img-fluid"></figure>
                            <span class="mb-0 box_span">Three Column Sidebar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <figure class="banner-circleright mb-0">
        <img src="./assets/images/banner-circleright.png" class="img-fluid" alt="">
    </figure>
    <figure class="sub-bannerrightlayer mb-0">
        <img src="./assets/images/sub-bannerrightlayer.png" alt="" class="img-fluid">
    </figure>
</div>
<!-- MAIN SECTION -->
    <!--End Slider Section-->
    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div id="blog" class="three-column col-xl-12">
                        <div class="row">
                           <div class="col-xl-4 col-lg-4">
                              <div class="float-left w-100 post-item border mb-4">
                                 <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                       <a href="#">
                                       <img alt="" src="assets/images/standard_post_img01.jpg">
                                       </a>
                                       <span class="post-meta-category">
                                       <a href="">Lifestyle</a>
                                       </span>
                                       <!--post-image-->
                                    </div>
                                    <div class="post-item-description">
                                       <span class="post-meta-date">
                                       <i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                       <span class="post-meta-comments">
                                       <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                       </span>
                                       <h2>
                                          <a href="#">Standard post with a single image </a>
                                       </h2>
                                       <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat.</p>
                                       <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                       <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                 </div>
                                 <!--post-item-->
                              </div>
                              <!--col-->
                           </div>
                           <div class="col-xl-4 col-lg-4">
                              <div class="float-left w-100 post-item border mb-4">
                                 <div class="post-item-wrap position-relative">
                                    <div id="blogslider" class="carousel slide" data-ride="carousel">
                                       <div class="carousel-inner">
                                          <div class="carousel-item">
                                             <img src="assets/images/standard_post_img02.jpg" alt="">
                                             <!--carousel-item-->
                                          </div>
                                          <div class="carousel-item active carousel-item-left">
                                             <img src="assets/images/standard_post_img04.jpg" alt="">
                                             <!--carousel-item-->
                                          </div>
                                          <div class="carousel-item carousel-item-next carousel-item-left">
                                             <img src="assets/images/standard_post_img06.jpg" alt="">
                                             <!--carousel-item-->
                                          </div>
                                          <!--carousel-inner-->
                                       </div>
                                       <!-- Left and right controls -->
                                       <a class="carousel-control-prev" href="#blogslider" data-slide="prev">
                                       <span class="carousel-control-prev-icon"></span>
                                       </a>
                                       <a class="carousel-control-next" href="#blogslider" data-slide="next">
                                       <span class="carousel-control-next-icon"></span>
                                       </a>
                                       <!--blogslider-->
                                    </div>
                                    <span class="post-meta-category"><a href="">Technology</a></span>
                                    <div class="post-item-description">
                                       <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                       <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                       <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                                       <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat.</p>
                                       <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                       <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                 </div>
                                 <!--post-item-->
                              </div>
                              <!--col-->
                           </div>
                           <div class="col-xl-4 col-lg-4">
                              <div class="float-left w-100 post-item border mb-4">
                                 <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                       <a href="#">
                                       <img alt="" src="assets/images/standard_post_img03.jpg"> </a> <span class="post-meta-category">
                                       <a href="#">Science</a>
                                       </span>
                                       <!--post-image-->
                                    </div>
                                    <div class="post-item-description">
                                       <span class="post-meta-date">
                                       <i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                       <span class="post-meta-comments">
                                       <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                       </span>
                                       <h2><a href="#">Standard post with a single image </a></h2>
                                       <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat.</p>
                                       <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                       <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                 </div>
                                 <!--post-item-->
                              </div>
                              <!--col-->
                           </div>
                           <div class="col-xl-4 col-lg-4">
                              <div class="float-left w-100 post-item border mb-4">
                                 <div class="post-item-wrap position-relative">
                                    <div class="post-audio position-relative">
                                       <a href="#">
                                       <img alt="" src="assets/images/standard_post_img05.jpg"> </a>
                                       <span class="post-meta-category">
                                       <a href="">Audio</a>
                                       </span>
                                       <audio class="position-absolute" controls="">
                                          <source src="horse.ogg" type="audio/ogg">
                                          <source src="assets/audio/horse.mp3" type="audio/mpeg">
                                       </audio>
                                       <!--post-audio-->
                                    </div>
                                    <div class="post-item-description">
                                       <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                       <span class="post-meta-comments">
                                       <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                       </span>
                                       <h2>
                                          <a href="#">Self Hosted HTML5 Audio (mp3) with image cover</a>
                                       </h2>
                                       <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat.</p>
                                       <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                       <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                 </div>
                                 <!--post-item-->
                              </div>
                              <!--col-->
                           </div>
                           <div class="col-xl-4 col-lg-4">
                              <div class="float-left w-100 post-item border mb-4">
                                 <div class="post-item-wrap position-relative">
                                    <div class="post-video">
                                       <div class="embed-container"><iframe src="https://player.vimeo.com/video/157467640?background=1"></iframe></div>
                                       <span class="post-meta-category"><a href="">Video</a></span>
                                       <!--post-video-->
                                    </div>
                                    <div class="post-item-description">
                                       <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                       <h2><a href="#">This is a example post with Vimeo video</a></h2>
                                       <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat.</p>
                                       <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                       <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                 </div>
                              </div>
                              <!--col-->
                           </div>
                           <div class="col-xl-4 col-lg-4">
                              <div class="float-left w-100 post-item border mb-4">
                                 <div class="post-item-wrap position-relative">
                                    <div class="post-video">
                                       <div class="fluid-width-video-wrapper">
                                          <iframe width="560" height="376" src="https://www.youtube.com/embed/dA8Smj5tZOQ"></iframe>
                                          <!--fluid-width-video-wrapper-->
                                       </div>
                                       <span class="post-meta-category"><a href="">Video</a></span>
                                       <!--post-video-->
                                    </div>
                                    <div class="float-left w-100 post-item-description">
                                       <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                       <h2><a href="#">This is a example post with YouTube</a></h2>
                                       <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat.</p>
                                       <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                       <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                 </div>
                                 <!--post-item-->
                              </div>
                              <!--col-->
                           </div>
                        </div>
                        <!--blog-->
                    </div>
                </div>
                <div class="sidebar sticky-sidebar col-lg-3">
                    <div class="theiaStickySidebar">
                        <div class="widget widget-newsletter">
                            <form id="widget-search-form-sidebar" class="form-inline">
                                <div class="input-group">
                                    <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                                    <div class="input-group-append">
    <span class="input-group-btn">
    <button type="submit" id="widget-widget-search-form-button" class="btn"><i class="fa fa-search"></i></button>
    </span>
                                        <!--input-group-append-->
                                    </div>
                                    <!--input-group-->
                                </div>
                                <!--form-inline-->
                            </form>
                            <!--widget-->
                        </div>
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                                    </li>
                                    <!--nav-tabs-->
                                </ul>
                                <div class="tab-content" id="tabs-posts-content">
                                    <div class="tab-pane fade show active" id="popular" role="tabpanel">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img01.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">A true story, that never been told!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img02.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img03.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <!--post-thumbnail-list-->
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                    <div class="tab-pane fade" id="featured" role="tabpanel">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img03.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img02.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img01.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">New costs and rise of the economy!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <!--post-thumbnail-list-->
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                    <div class="tab-pane fade" id="recent" role="tabpanel">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img02.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img01.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">New costs and rise of the economy!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img03.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <!--post-thumbnail-list-->
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                    <!--tab-content-->
                                </div>
                                <!--tabs-->
                            </div>
                            <!--widget-->
                        </div>
                        <div class="widget widget-categories">
                            <div class="widget-title font_weight_600">Categories</div>
                            <ul>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(2)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(10)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(7)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(3)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(9)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(2)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(10)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(7)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(3)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(9)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-tweeter">
                            <h4 class="widget-title font_weight_600">Recent Tweets</h4>
                            <div id="twitter-cnt">
                                <ul>
                                    <li>Rule number 1: Don't overthink it
                                        <a href="#" target="_blank" title="Visit this link">https://t.co/T9Vg7b9XuI</a>
                                        <small>Sep/12/2019</small>
                                    </li>
                                    <li>Smart OR Stylish? How do you balance design principles with design trends? <a href="#" target="_blank" title="Visit this link">https://t.co/yBb0HKiksq</a>
                                        <a href="https://t.co/kR5EhraUuK" target="_blank" title="Visit this link">https://t.co/kR5EhraUuK</a>
                                        <small>Sep/10/2019</small>
                                    </li>
                                </ul>
                                <!--twitter-cnt-->
                            </div>
                            <!--widget-->
                        </div>
                        <div class="widget widget-tags">
                            <h4 class="widget-title font_weight_600">Tags</h4>
                            <div class="tags">
                                <a href="#">Design</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Digital</a>
                                <a href="#">Branding</a>
                                <a href="#">HTML</a>
                                <a href="#">Clean</a>
                                <a href="#">Peace</a>
                                <a href="#">Love</a>
                                <a href="#">CSS3</a>
                                <a href="#">jQuery</a>
                                <!--tags-->
                            </div>
                            <!--widget-->
                        </div>
                        <!--theiaStickySidebar-->
                    </div>
                    <!--sidebar-->
                </div>
                <!--row-->
            </div>
        </div>
    <!--container-->
    </section>
<!-- Footer -->
<section class="footer-section">
    <div class="container">
        <figure class="footer-leftimage mb-0">
            <img src="./assets/images/footer-leftimage.png" alt="" class="img-fluid">
        </figure>
        <figure class="mb-0 about-leftcircle">
            <img src="./assets/images/about-rightcircle.png" alt="" class="img-fluid">
        </figure>
        <div class="middle-portion">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <div class="first-column">
                        <a href="{{route('index')}}">
                            <figure class="footer-logo">
                                <img src="./assets/images/logo.png" class="img-fluid" alt="">
                            </figure>
                        </a>
                        <p class="text-size-18 footer-text">Grursus mal suada faci lisis lorem ipsum dolaror
                            more ameion consectetur elit vesti at bulum ne odio aea the dumm ipsum dolocons.</p>
                        <div class="lower">
                            <div class="lower-content">
                                <figure class="icon">
                                    <img src="./assets/images/footer-callicon.png" alt="" class="img-fluid">
                                </figure>
                                <div class="content">
                                    <span class="text-white">Call us:</span>
                                    <a class="text-size-18 mb-0 text text-decoration-none" href="tel:+6138376284">+61 3 837 6284</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <figure class="icon">
                                    <img src="./assets/images/footer-emailicon.png" alt="" class="img-fluid">
                                </figure>
                                <div class="content">
                                    <span class="text-white">Email us:</span>
                                    <a href="mailto:info@Esignax.com" class="text-size-18 mb-0 text-decoration-none">info@Esignax.com</a>
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
                            <li><a href="./about.html" class="text-size-18 text text-decoration-none">About</a></li>
                            <li><a href="./service.html" class="text-size-18 text text-decoration-none">Services</a></li>
                            <li><a href="./single-post.html" class="text-size-18 text text-decoration-none">Blog</a></li>
                            <li><a href="./contact.html" class="text-size-18 text text-decoration-none">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12 d-lg-block d-none">
                    <div class="links">
                        <h4 class="heading text-white">Our Services</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a href="./service.html" class="text-size-18 text text-decoration-none">Cloud Service</a></li>
                            <li><a href="{{route('index')}}" class="text-size-18 text text-decoration-none">Testimonial</a></li>
                            <li><a href="./team.html" class="text-size-18 text text-decoration-none">Team</a></li>
                            <li><a href="./project.html" class="text-size-18 text text-decoration-none">Digital marketing</a></li>
                            <li><a href="{{Route('pricing')}}" class="text-size-18 text text-decoration-none">Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-sm-block d-none">
                    <div class="icons">
                        <h4 class="heading mb-0 text-white">Subscribe to</h4>
                        <h4 class="heading text-white">Our Newsletter Today!</h4>
                        <p class="text-size-18 footer-text text-white">Exerci tation ullamcorper suscipit lobor nisl aliuie naro commodo.</p>
                        <form id="contactpage1" method="POST" action="./contact-form.php">
                            <div class="form-group mb-0">
                                <input type="text" class="form_style" placeholder="Enter Email Address:" name="email"> 
                            </div>
                            <button type="submit" class="subscribe_now text-white text-decoration-none">Subscribe Now
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
                                <li><a href="" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                                <li><a href="" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                                <li><a href="" class="text-decoration-none"><i class="fa-brands fa-google-plus-g social-networks"></i></a></li>
                                <li><a href="" class="text-decoration-none"><i class="fa-brands fa-instagram social-networks"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="footer-dotimage mb-0">
            <img src="./assets/images/footer-dotimage.png" alt="" class="img-fluid">
        </figure>
        <figure class="footer-leftlayer mb-0">
            <img src="./assets/images/footer-leftlayer.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>
<!-- Latest compiled JavaScript -->
<script src="assets/js/jquery-3.6.0.min.js"> </script>
<script src="assets/js/bootstrap.min.js"> </script>
<script src="assets/js/video_link.js"></script>
<script src="./assets/js/video.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/custom-carousel.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/animation_links.js"></script>
<script src="assets/js/animation.js"></script>
</body>
</html>
