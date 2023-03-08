@extends('frontend.partials.usermaster')

@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      	=-->
    <!--=====================================-->
    <div class="edu-breadcrumb-area breadcrumb-style-5">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       About Us Area Start      	=-->
    <!--=====================================-->
    <div class="edu-section-gap edu-about-area about-style-8">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">About Us</span>
                            <h2 class="title">We Provide Best <span class="color-secondary">Education</span> Services For You.</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Magna aliquaenim ad minim veniam quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tempor incididunt labore.</p>
                        </div>
                        <div class="about-mission">
                            <div class="single-item" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="icon color-extra02"><i class="icon-51"></i></div>
                                <div class="content">
                                    <h4 class="title">Our Mission</h4>
                                    <p>Magna aliquaenim minim quis nostrud exercitation ulamco labor is Lorem ipsum.</p>
                                </div>
                            </div>
                            <div class="single-item" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="icon color-extra06"><i class="icon-52"></i></div>
                                <div class="content">
                                    <h4 class="title">Our Vision</h4>
                                    <p>Magna aliquaenim minim quis nostrud exercitation ulamco labor is Lorem ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-gallery">
                        <div class="row g-5" id="masonry-gallery">
                            <div class="col-6 masonry-item">
                                <div class="thumbnail thumbnail-1" data-sal-delay="50" data-sal="slide-down" data-sal-duration="1000">
                                    <img src="{{asset('frontend/assets/images/about/about-13.webp')}}" alt="About Images">
                                </div>
                            </div>
                            <div class="col-6 masonry-item">
                                <div class="thumbnail thumbnail-2" data-sal-delay="50" data-sal="slide-down" data-sal-duration="1000">
                                    <img src="{{asset('frontend/assets/images/about/about-14.webp')}}" alt="About Images">
                                </div>
                            </div>
                            <div class="col-6 masonry-item">
                                <div class="thumbnail thumbnail-3" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                    <img src="{{asset('frontend/assets/images/about/about-16.webp')}}" alt="About Images">
                                </div>
                            </div>
                            <div class="col-6 masonry-item">
                                <div class="thumbnail thumbnail-4" data-sal-delay="50" data-sal="slide-up" data-sal-duration="1000">
                                    <img src="{{asset('frontend/assets/images/about/about-15.webp')}}" alt="About Images">
                                </div>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="2" src="{{asset('frontend/assets/images/about/shape-33.png')}}" alt="Shape Images">
                            </li>
                            <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{asset('frontend/assets/images/about/shape-25.png')}}" alt="Shape Images">
                            </li>
                            <li class="shape-3 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <img data-depth="-2" src="{{asset('frontend/assets/images/about/shape-13.png')}}" alt="Shape Images">
                            </li>
                            <li class="shape-4 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                                <span data-depth=".8"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=       CounterUp Area Start        =-->
    <!--=====================================-->
    <div class="counterup-area-9">
        <div class="container edublink-animated-shape">
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-counterup counterup-style-4">
                        <div class="icon primary-color">
                            <i class="icon-48"></i>
                        </div>
                        <h2 class="counter-item count-number">
                            <span class="odometer" data-odometer-final="29.3">.</span><span>K</span>
                        </h2>
                        <h6 class="title">Student Enrolled</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-counterup counterup-style-4">
                        <div class="icon secondary-color">
                            <i class="icon-47"></i>
                        </div>
                        <h2 class="counter-item count-number">
                            <span class="odometer" data-odometer-final="32.4">.</span><span>K</span>
                        </h2>
                        <h6 class="title">Class Completed</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-counterup counterup-style-4">
                        <div class="icon extra08-color">
                            <i class="icon-49"></i>
                        </div>
                        <h2 class="counter-item count-number">
                            <span class="odometer" data-odometer-final="100">.</span><span>%</span>
                        </h2>
                        <h6 class="title">Satisfaction Rate</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-counterup counterup-style-4">
                        <div class="icon extra05-color">
                            <i class="icon-50"></i>
                        </div>
                        <h2 class="counter-item count-number">
                            <span class="odometer" data-odometer-final="354">.</span><span>+</span>
                        </h2>
                        <h6 class="title">Top Instructors</h6>
                    </div>
                </div>
            </div>

            <ul class="shape-group">
                <li class="shape-1 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img data-depth="-1.8" src="{{asset('frontend/assets/images/others/shape-27.png')}}" alt="Shape Images">
                </li>
            </ul>
        </div>
    </div>
    <!--=====================================-->
    <!--=       Why Choose Area Start       =-->
    <!--=====================================-->
    <!-- Start Why Choose Area  -->
    <section class="why-choose-area-4 edu-section-gap">
        <div class="container edublink-animated-shape">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Why choose edublink</span>
                <h2 class="title">The Best <span class="color-secondary">Beneficial</span> Side <br> of LEARNATICS</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-3 features-box color-primary-style">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/images/others/why-choose-03.webp')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="icon">
                                <i class="icon-45"></i>
                            </div>
                            <h4 class="title">High Quality Courses</h4>
                            <p>Lorem ipsum dolor sit amet conset ur elit sed eiusmod ex tempor inc labore dolore magna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-3 features-box color-secondary-style">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/images/others/why-choose-04.webp')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="icon">
                                <i class="icon-46"></i>
                            </div>
                            <h4 class="title">Life Time Access</h4>
                            <p>Lorem ipsum dolor sit amet conset ur elit sed eiusmod ex tempor inc labore dolore magna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="why-choose-box-3 features-box color-extra08-style">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/images/others/why-choose-05.webp')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="icon">
                                <i class="icon-47"></i>
                            </div>
                            <h4 class="title">Expert Instructors</h4>
                            <p>Lorem ipsum dolor sit amet conset ur elit sed eiusmod ex tempor inc labore dolore magna.</p>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <img class="rotateit" src="{{asset('frontend/assets/images/about/shape-13.png')}}" alt="shape">
                </li>
                <li class="shape-2 scene" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <span data-depth="0.85"></span>
                </li>
                <li class="shape-3 circle scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200">
                    <span data-depth="-2.3"></span>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Why Choose Area  -->
    <!--=====================================-->
    <!--=       	CTA Area Start      	=-->
    <!--=====================================-->
    <!-- Start CTA Area  -->
    <div class="cta-area-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="home-four-cta edu-cta-box cta-style-3 bg-image bg-image--16">
                        <div class="inner">
                            <div class="content text-end">
                                <span class="subtitle">Get In Touch:</span>
                                <h3 class="title"><a href="mailto:info@fanatech.co">info@fanatech.co</a></h3>
                            </div>
                            <div class="sparator">
                                <span>or</span>
                            </div>
                            <div class="content">
                                <span class="subtitle">Call Us Via:</span>
                                <h3 class="title"><a href="tel:+011235641231">+01 123 5641 231</a></h3>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <li class="shape-01 scene">
                                <img data-depth="2" src="{{asset('frontend/assets/images/cta/shape-06.png')}}" alt="shape">
                            </li>
                            <li class="shape-02 scene">
                                <img data-depth="-2" src="{{asset('frontend/assets/images/cta/shape-12.png')}}" alt="shape">
                            </li>
                            <li class="shape-03 scene">
                                <img data-depth="-3" src="{{asset('frontend/assets/images/cta/shape-04.png')}}" alt="shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Area  -->
    <!--=====================================-->
    <!--=       	Team Area Start       	=-->
    <!--=====================================-->
    <!-- Start Team Area  -->
    <div class="edu-team-area team-area-3 edu-section-gap z-10">
        <div class="container">
            <div class="section-title section-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <span class="pre-title">Instructors</span>
                <h2 class="title">Course Instructors</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="row g-5">
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-md-6" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-3">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="team-details.html">
                                        <img src="{{asset('frontend/assets/images/team/team-05.webp')}}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="team-details.html">Jane Seymour</a></h5>
                                <span class="designation">UI Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-3">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="team-details.html">
                                        <img src="{{asset('frontend/assets/images/team/team-06.webp')}}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="team-details.html">Edward Norton</a></h5>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
                <!-- Start Instructor Grid  -->
                <div class="col-lg-4 col-md-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-team-grid team-style-3">
                        <div class="inner">
                            <div class="thumbnail-wrap">
                                <div class="thumbnail">
                                    <a href="team-details.html">
                                        <img src="{{asset('frontend/assets/images/team/team-08.webp')}}" alt="team images">
                                    </a>
                                </div>
                                <ul class="team-share-info">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="team-details.html">Penelope Cruz</a></h5>
                                <span class="designation">Digital Marketer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Instructor Grid  -->
            </div>
        </div>
    </div>
    <!-- End Team Area  -->
    <!--=====================================-->
    <!--=       Testimonial Area Start       =-->
    <!--=====================================-->
    <!-- Start Testimonial Area  -->
    <section class="testimonial-area-6 gap-bottom-equal">
        <div class="container edublink-animated-shape">
            <div class="row row--40">
                <div class="col-lg-6">
                    <div class="section-title section-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Testimonials</span>
                        <h2 class="title">What Our Students <br> Have To Say</h2>
                        <span class="shape-line"><i class="icon-19"></i></span>
                    </div>
                    <div class="testimonial-activation-5 swiper ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-slide testimonial-style-3">
                                    <div class="content">
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <p>“Lorem ipsum dolor amet consectur elit adicing elit sed do umod tempor ux incididunt enim ad minim veniam quis sit nosrud citation laboris nisiste aliquip comodo perspiatix une omnis iste natus error sit voluptatem accusantium dolore que laudantum”.</p>
                                        <div class="author-info">
                                            <div class="thumb">
                                                <img src="{{asset('frontend/assets/images/testimonial/testimonial-01.png')}}" alt="Testimonial">
                                            </div>
                                            <div class="info">
                                                <h5 class="title">Haley Bennet</h5>
                                                <span class="subtitle">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-slide testimonial-style-3">
                                    <div class="content">
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <p>“Lorem ipsum dolor amet consectur elit adicing elit sed do umod tempor ux incididunt enim ad minim veniam quis sit nosrud citation laboris nisiste aliquip comodo perspiatix une omnis iste natus error sit voluptatem accusantium dolore que laudantum”.</p>
                                        <div class="author-info">
                                            <div class="thumb">
                                                <img src="{{asset('frontend/assets/images/testimonial/testimonial-02.png')}}" alt="Testimonial">
                                            </div>
                                            <div class="info">
                                                <h5 class="title">Richard Gere</h5>
                                                <span class="subtitle">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-slide testimonial-style-3">
                                    <div class="content">
                                        <div class="rating-icon">
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                            <i class="icon-23"></i>
                                        </div>
                                        <p>“Lorem ipsum dolor amet consectur elit adicing elit sed do umod tempor ux incididunt enim ad minim veniam quis sit nosrud citation laboris nisiste aliquip comodo perspiatix une omnis iste natus error sit voluptatem accusantium dolore que laudantum”.</p>
                                        <div class="author-info">
                                            <div class="thumb">
                                                <img src="{{asset('frontend/assets/images/testimonial/testimonial-03.png')}}" alt="Testimonial">
                                            </div>
                                            <div class="info">
                                                <h5 class="title">Megan Foxx</h5>
                                                <span class="subtitle">Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-gallery video-gallery-5" data-sal-delay="150" data-sal="slide-left" data-sal-duration="800">
                        <div class="thumbnail">
                            <img src="{{asset('frontend/assets/images/others/video-03.webp')}}" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=PICj5tr9hcc" class="video-play-btn video-popup-activation">
                                <i class="icon-18"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title">Take a Video Tour to Learn Intro of Campus</h4>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-2 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <img data-depth="2" src="{{asset('frontend/assets/images/about/shape-25.png')}}" alt="Shape">
                </li>
                <li class="shape-3 scene" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                    <span data-depth="-1"></span>
                </li>
            </ul>
        </div>
        <ul class="shape-group">
            <li class="shape-1" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
                <img class="rotateit" src="{{asset('frontend/assets/images/about/shape-13.png')}}" alt="Shape">
            </li>
        </ul>
    </section>
    <!-- End Testimonial Area  -->
@endsection
