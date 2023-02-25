@extends('frontend.partials.usermaster')

@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start      =-->
    <!--=====================================-->


    <div class="edu-breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">Course</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item"><a href="index-one.html">Home</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item"><a href="#">Courses</a></li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Course</li>
                </ul>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1">
                <span></span>
            </li>
            <li class="shape-2 scene"><img data-depth="2" src="{{asset('frontend/assets/images/about/shape-13.png')}}" alt="shape"></li>
            <li class="shape-3 scene"><img data-depth="-2" src="{{asset('frontend/assets/images/about/shape-15.png')}}" alt="shape"></li>
            <li class="shape-4">
                <span></span>
            </li>
            <li class="shape-5 scene"><img data-depth="2" src="{{asset('frontend/assets/images/about/shape-07.png')}}" alt="shape"></li>
        </ul>
    </div>

    <!--=====================================-->
    <!--=        Courses Area Start         =-->
    <!--=====================================-->
    <div class="edu-course-area course-area-1 gap-tb-text">
        <div class="container">


            <div class="edu-sorting-area">
                <div class="sorting-left">
                    <h6 class="showing-text">We found <span>71</span> courses available for you</h6>
                </div>
                <div class="sorting-right">

                </div>
            </div>

            <div class="row g-5">
                <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4 col-xl-3" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-1 course-box-shadow hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="{{asset('frontend/assets/images/course/course-07.jpg')}}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>7 Weeks</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Beginner</span>
                                <h6 class="title">
                                    <a href="#">The Complete Camtasia Course for Content Creators</a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /9 Rating)</span>
                                </div>
                                <div class="course-price">$49.00</div>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>15 Lessons</li>
                                    <li><i class="icon-25"></i>31 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="course-hover-content-wrapper">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                        </div>
                        <div class="course-hover-content-wrapper">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                        </div>
                        <div class="course-hover-content">
                            <div class="content">
                                <button class="wishlist-btn"><i class="icon-22"></i></button>
                                <span class="course-level">Advanced</span>
                                <h6 class="title">
                                    <a href="course-details.html">The Complete Camtasia Course for Content Creators</a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /9 Rating)</span>
                                </div>
                                <div class="course-price">$49.00</div>
                                <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.</p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>15 Lessons</li>
                                    <li><i class="icon-25"></i>31 Students</li>
                                </ul>
                                <a href="course-details.html" class="edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4 col-xl-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-1 course-box-shadow hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="{{asset('frontend/assets/images/course/course-04.jpg')}}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>9 Weeks</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Intermediate</span>
                                <h6 class="title">
                                    <a href="#">Starting SEO as your Home Based Business</a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.9 /7 Rating)</span>
                                </div>
                                <div class="course-price">$35.00</div>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>74 Lessons</li>
                                    <li><i class="icon-25"></i>20 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="course-hover-content-wrapper">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                        </div>
                        <div class="course-hover-content">
                            <div class="content">
                                <button class="wishlist-btn"><i class="icon-22"></i></button>
                                <span class="course-level">Intermediate</span>
                                <h6 class="title">
                                    <a href="course-details.html">Starting SEO as your Home Based Business</a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(4.9 /7 Rating)</span>
                                </div>
                                <div class="course-price">$35.00</div>
                                <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.</p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>74 Lessons</li>
                                    <li><i class="icon-25"></i>20 Students</li>
                                </ul>
                                <a href="course-details.html" class="edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4 col-xl-3" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-1 course-box-shadow hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="{{asset('frontend/assets/images/course/course-05.jpg')}}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>4 Weeks</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Beginner</span>
                                <h6 class="title">
                                    <a href="#">Building A Better World One Student At A Time</a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /7 Rating)</span>
                                </div>
                                <div class="course-price">$29.00</div>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>8 Lessons</li>
                                    <li><i class="icon-25"></i>20 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="course-hover-content-wrapper">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                        </div>
                        <div class="course-hover-content">
                            <div class="content">
                                <button class="wishlist-btn"><i class="icon-22"></i></button>
                                <span class="course-level">Beginner</span>
                                <h6 class="title">
                                    <a href="course-details.html">Building A Better World One Student At A Time</a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /7 Rating)</span>
                                </div>
                                <div class="course-price">$29.00</div>
                                <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.</p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>8 Lessons</li>
                                    <li><i class="icon-25"></i>20 Students</li>
                                </ul>
                                <a href="course-details.html" class="edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
                <!-- Start Single Course  -->
                <div class="col-md-6 col-lg-4 col-xl-3" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="edu-course course-style-1 course-box-shadow hover-button-bg-white">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="course-details.html">
                                    <img src="{{asset('frontend/assets/images/course/course-06.jpg')}}" alt="Course Meta">
                                </a>
                                <div class="time-top">
                                    <span class="duration"><i class="icon-61"></i>4 Weeks</span>
                                </div>
                            </div>
                            <div class="content">
                                <span class="course-level">Beginner</span>
                                <h6 class="title">
                                    <a href="#">Java Programming Masterclass for Software Developers</a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /18 Rating)</span>
                                </div>
                                <div class="course-price">$19.00</div>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>24 Lessons</li>
                                    <li><i class="icon-25"></i>95 Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="course-hover-content-wrapper">
                            <button class="wishlist-btn"><i class="icon-22"></i></button>
                        </div>
                        <div class="course-hover-content">
                            <div class="content">
                                <button class="wishlist-btn"><i class="icon-22"></i></button>
                                <span class="course-level">Beginner</span>
                                <h6 class="title">
                                    <a href="course-details.html">Java Programming Masterclass for Software Developers</a>
                                </h6>
                                <div class="course-rating">
                                    <div class="rating">
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                        <i class="icon-23"></i>
                                    </div>
                                    <span class="rating-count">(5.0 /18 Rating)</span>
                                </div>
                                <div class="course-price">$19.00</div>
                                <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor.</p>
                                <ul class="course-meta">
                                    <li><i class="icon-24"></i>24 Lessons</li>
                                    <li><i class="icon-25"></i>95 Students</li>
                                </ul>
                                <a href="course-details.html" class="edu-btn btn-secondary btn-small">Enrolled <i class="icon-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more-btn" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1200">
                <a href="course-one.html" class="edu-btn">Load More <i class="icon-56"></i></a>
            </div>
        </div>
    </div>
    <!-- End Course Area -->

@endsection
