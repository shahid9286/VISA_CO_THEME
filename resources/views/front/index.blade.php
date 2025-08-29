@extends('front.layouts.master')
@section('title', 'Home Page')

@section('content')

    <!-- Start Banner Area
    ============================================= -->
   @include('front.partials.hero-section')
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
   @include('front.partials.about1')

    <!-- End About -->

    <!-- Start Visa Category
    ============================================= -->
    <div class="visa-category-area default-padding text-center bg-gray bg-cover"
        style="background-image: url(assets/img/shape/20.png);">
        <div class="shape-top-right">
            <img src="{{asset('front/assets/img/illustration/4.png')}}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Varieties of visa</h4>
                        <h2 class="title split-text">Achieve your dream of citizenship & immigration</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="visa-category-items wow fadeInUp" data-wow-delay="200ms">
                        <!-- Slider main container -->
                        <div class="visa-category-carousel swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="visa-cat-style-one">
                                        <div class="thumb">
                                            <img src="assets/img/category/1.jpg" alt="Image Not Found">
                                            <div class="shape">
                                                <img src="assets/img/shape/39.png" alt="Image Not Found">
                                            </div>
                                            <div class="icon">
                                                <img src="assets/img/icon/business-visa.png" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4><a href="visa-details.html">Business Visa</a></h4>
                                            <p>
                                                Business visa is a conditional permission provided by a region to a
                                                foreigner to enter, stay in, or leave that country.
                                            </p>
                                        </div>
                                        <div class="button">
                                            <a href="visa-details.html">
                                                <i class="fas fa-angle-right"></i>
                                                <span>Know More</span>
                                                <div class="shape"><img src="assets/img/shape/40.png"
                                                        alt="Image Not Found"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="visa-cat-style-one">
                                        <div class="thumb">
                                            <img src="assets/img/category/2.jpg" alt="Image Not Found">
                                            <div class="shape">
                                                <img src="assets/img/shape/39.png" alt="Image Not Found">
                                            </div>
                                            <div class="icon">
                                                <img src="assets/img/icon/student-visa.png" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4><a href="visa-details.html">Student Visa</a></h4>
                                            <p>
                                                Student visa is a conditional permission provided by a region to a
                                                foreigner to enter, stay in, or leave that country.
                                            </p>
                                        </div>
                                        <div class="button">
                                            <a href="visa-details.html">
                                                <i class="fas fa-angle-right"></i>
                                                <span>Know More</span>
                                                <div class="shape"><img src="assets/img/shape/40.png"
                                                        alt="Image Not Found"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="visa-cat-style-one">
                                        <div class="thumb">
                                            <img src="assets/img/category/3.jpg" alt="Image Not Found">
                                            <div class="shape">
                                                <img src="assets/img/shape/39.png" alt="Image Not Found">
                                            </div>
                                            <div class="icon">
                                                <img src="assets/img/icon/travel-visa.png" alt="Image Not Found">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4><a href="visa-details.html">Travel Visa</a></h4>
                                            <p>
                                                Travel visa is a conditional permission provided by a region to a
                                                foreigner to enter, stay in, or leave that country.
                                            </p>
                                        </div>
                                        <div class="button">
                                            <a href="visa-details.html">
                                                <i class="fas fa-angle-right"></i>
                                                <span>Know More</span>
                                                <div class="shape"><img src="assets/img/shape/40.png"
                                                        alt="Image Not Found"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Visa Category -->

    <!-- Start Why Choose Us
    ============================================= -->
   @include('front.partials.why_choose_us')

    <!-- End Why Choose Us  -->

    <!-- Start Visa Country
    ============================================= -->
   @include('front.partials.visa_country')

    <!-- End Visa Country  -->

    <!-- Start Faq
    ============================================= -->
   @include('front.partials.FAQ')

    <!-- End Faq  -->

    <!-- Start Course
    ============================================= -->
    <div class="course-style-one-area default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Coaching we provide</h4>
                        <h2 class="title split-text">Discover the elite training programs you need</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-style-one-items">
            <div class="container">
                <!-- Navigation -->
                <div class="course-style-one-nav">
                    <div class="course-carousel-prev"><i class="fas fa-long-arrow-left"></i></div>
                    <div class="course-carousel-next"><i class="fas fa-long-arrow-right"></i></div>
                </div>
                <!-- Slider main container -->
                <div class="course-style-one-carousel swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="course-style-one-item">
                                <img src="assets/img/course/1.jpg" alt="Image Not Found">
                                <div class="overlay-title">
                                    <h4><a href="coaching-details.html">Entrepreneurs Starting</a></h4>
                                    <div class="icon">
                                        <img src="assets/img/icon/3.png" alt="Image Not Found">
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="icon">
                                        <img src="assets/img/icon/3.png" alt="Image Not Found">
                                    </div>
                                    <h4><a href="coaching-details.html">Entrepreneurs Starting</a></h4>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="course-style-one-item">
                                <img src="assets/img/course/2.jpg" alt="Image Not Found">
                                <div class="overlay-title">
                                    <h4><a href="coaching-details.html">Visa Training</a></h4>
                                    <div class="icon">
                                        <img src="assets/img/icon/4.png" alt="Image Not Found">
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="icon">
                                        <img src="assets/img/icon/4.png" alt="Image Not Found">
                                    </div>
                                    <h4><a href="coaching-details.html">Visa Training</a></h4>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="course-style-one-item">
                                <img src="assets/img/course/3.jpg" alt="Image Not Found">
                                <div class="overlay-title">
                                    <h4><a href="coaching-details.html">Immigration law</a></h4>
                                    <div class="icon">
                                        <img src="assets/img/icon/5.png" alt="Image Not Found">
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="icon">
                                        <img src="assets/img/icon/5.png" alt="Image Not Found">
                                    </div>
                                    <h4><a href="coaching-details.html">Immigration law</a></h4>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="course-style-one-item">
                                <img src="assets/img/course/4.jpg" alt="Image Not Found">
                                <div class="overlay-title">
                                    <h4><a href="coaching-details.html">Business Development</a></h4>
                                    <div class="icon">
                                        <img src="assets/img/icon/6.png" alt="Image Not Found">
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="icon">
                                        <img src="assets/img/icon/6.png" alt="Image Not Found">
                                    </div>
                                    <h4><a href="coaching-details.html">Business Development </a></h4>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course  -->

    <!-- Start Testimonial
    ============================================= -->
    <div class="tesimonial-style-one-area text-center default-padding bg-cover"
        style="background-image: url(assets/img/shape/map.png);">
        <div class="container">
            <div class="testimonial-style-one-items">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="testimonial-style-one-contents">
                            <div class="testimonial-one-shape">
                                <img class="wow fadeInUp" src="assets/img/team/7.jpg" alt="Image Not Found">
                                <img class="wow fadeInUp" src="assets/img/team/8.jpg" alt="Image Not Found">
                                <img class="wow fadeInUp" data-wow-delay="100ms" src="assets/img/team/9.jpg"
                                    alt="Image Not Found">
                                <img class="wow fadeInUp" data-wow-delay="100ms" src="assets/img/team/10.jpg"
                                    alt="Image Not Found">
                            </div>
                            <!-- Slider main container -->
                            <div class="testimonial-style-one-carousel wow fadeInUp swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-one-item">
                                            <div class="tm-provider">
                                                <img src="assets/img/team/10.jpg" alt="Image Not Found">
                                            </div>
                                            <div class="reviews">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h3>Positive and supportive interactions</h3>
                                            <p>
                                                Objectively administrate bleeding-edge best practices through
                                                interactive niche market. Distinctively productize Phosphorescently
                                                promote excellent.Sed ut perspiciatis unde omnis isteerror voluptatem
                                                Distinctively.
                                            </p>
                                            <div class="tm-provider-detaisl">
                                                <h4>Nazat Sarwar</h4>
                                                <span>Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-one-item">
                                            <div class="tm-provider">
                                                <img src="assets/img/team/11.jpg" alt="Image Not Found">
                                            </div>
                                            <div class="reviews">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h3>Courteous and attentive support</h3>
                                            <p>
                                                Regulation administrate bleeding-edge best practices through interactive
                                                niche market. Distinctively productize Phosphorescently promote
                                                excellent.Sed ut perspiciatis unde omnis isteerror voluptatem
                                                Distinctively.
                                            </p>
                                            <div class="tm-provider-detaisl">
                                                <h4>Kevin Martin</h4>
                                                <span>Product Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Start Call to action
    ============================================= -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="call-to-action-style-one bg-dark text-light">
                <div class="shape">
                    <img src="assets/img/shape/24.png" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="thumb bg-theme-secondary">
                            <img class="wow fadeInUp" src="assets/img/illustration/6.png" alt="Image Not Found">
                            <div class="shape">
                                <img src="assets/img/illustration/7.png" alt="Image Not Found">
                                <img src="assets/img/shape/23.png" alt="Image Not Found">
                                <img src="assets/img/shape/25.png" alt="Image Not Found">
                                <img src="assets/img/shape/26.png" alt="Image Not Found">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-action-info">
                            <h4 class="sub-title">Get free online visa</h4>
                            <h2 class="title split-text">Reliable visa & immigration experts</h2>
                            <a href="apply-form.html" class="btn-style-one circle mt-10 wow fadeInUp"
                                data-wow-delay="100ms">Apply for visa <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to action  -->

    <!-- Start Blog
    ============================================= -->
    <div class="home-blog-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">News & Updates</h4>
                        <h2 class="title split-text">Recent story & articles <br> in our community</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-6 col-md-6">
                    <div class="home-blog-style-one wow fadeInUp">
                        <div class="thumb">
                            <img src="assets/img/blog/1.jpg" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="inner">
                                <div class="meta">
                                    <div class="date">
                                        <strong>29</strong> Jan
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i> Md Sohag</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i> 18 Comments</a>
                                        </li>
                                    </ul>
                                    <h3><a href="blog-single-with-sidebar.html">Picked up a Brussels burger Sprouts
                                            with ham</a></h3>
                                    <a href="blog-single-with-sidebar.html" class="btn-regular">
                                        Read More
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 17L17 1H7.8" stroke="#232323" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-6 col-md-6">
                    <div class="home-blog-style-one wow fadeInUp" data-wow-delay="100ms">
                        <div class="thumb">
                            <img src="assets/img/blog/2.jpg" alt="Image Not Found">
                        </div>
                        <div class="info">
                            <div class="inner">
                                <div class="meta">
                                    <div class="date">
                                        <strong>24</strong> Mar
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i> Md Sohag</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-comments"></i> 15 Comments</a>
                                        </li>
                                    </ul>
                                    <h3><a href="blog-single-with-sidebar.html">This prefabrice passive house is highly
                                            sustainable</a></h3>
                                    <a href="blog-single-with-sidebar.html" class="btn-regular">
                                        Read More
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 17L17 1H7.8" stroke="#232323" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Blog  -->

    
@endsection