@extends('front.layout.master')
@section('title', 'Home - Bhartiya Kaushal Vikas Sansthan')
@section('content')

<!-- main-area -->
<main class="main-area fix">

    <!-- banner-area -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('front-assets/img/banner/banner-1.webp') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('front-assets/img/banner/banner-2.webp') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('front-assets/img/banner/banner-1.webp') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- banner-area-end -->

    <!-- Magquee-->
    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"
        style="background-color: #009846; color:#fff;">इस वेबसाइट के
        अलावा BKVS की अन्य कोई और वेबसाइट नहीं है, ऐसी दशा में किसी अन्य वेबसाइट
        पर हमारी कोई भी जानकारी या परीक्षा परिणाम मान्य योग्य नहीं होगा और इसके सम्बन्ध में हमारी किसी भी तरह की कोई
        जिम्मेदारी नहीं होगी। Apart from this website there is no other website of Bhartiya Kaushal Vikas yojna, in such
        a situation, any of our information or examination results on any other website will not be valid and we will
        not have any responsibility for it.
    </marquee>

    <!-- features-area -->
    <section class="features__area-two section-pt-60 section-pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Our Top Features</span>
                        <h2 class="title">Achieve Your Goal With BKVS INDIA</h2>
                        <p>India's Best Not For Profit Skills & Vocational Training Provider Self Financed Institution.
                        </p>
                    </div>
                </div>
            </div>
            <div class="features__item-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="features__item-two">
                            <div class="features__content-two">
                                <div class="content-top">
                                    <div class="features__icon-two">
                                        <img src="{{ asset('front-assets/img/icons/h2_features_icon01.svg') }}"
                                            alt="img" class="injectable">
                                    </div>
                                    <h2 class="title">Expert Tutors</h2>
                                </div>
                                <p>when an unknown printer took a galley offe type and scrambled makes.</p>
                            </div>
                            <div class="features__item-shape">
                                <img src="{{ asset('front-assets/img/others/features_item_shape.svg') }}" alt="img"
                                    class="injectable">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="features__item-two">
                            <div class="features__content-two">
                                <div class="content-top">
                                    <div class="features__icon-two">
                                        <img src="{{ asset('front-assets/img/icons/h2_features_icon02.svg') }}"
                                            alt="img" class="injectable">
                                    </div>
                                    <h2 class="title">Effective Courses</h2>
                                </div>
                                <p>when an unknown printer took a galley offe type and scrambled makes.</p>
                            </div>
                            <div class="features__item-shape">
                                <img src="{{ asset('front-assets/img/others/features_item_shape.svg') }}" alt="img"
                                    class="injectable">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="features__item-two">
                            <div class="features__content-two">
                                <div class="content-top">
                                    <div class="features__icon-two">
                                        <img src="{{ asset('front-assets/img/icons/h2_features_icon03.svg') }}"
                                            alt="img" class="injectable">
                                    </div>
                                    <h2 class="title">Earn Certificate</h2>
                                </div>
                                <p>when an unknown printer took a galley offe type and scrambled makes.</p>
                            </div>
                            <div class="features__item-shape">
                                <img src="{{ asset('front-assets/img/others/features_item_shape.svg') }}" alt="img"
                                    class="injectable">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="features__item-two">
                            <div class="features__content-two">
                                <div class="content-top">
                                    <div class="features__icon-two">
                                        <img src="{{ asset('front-assets/img/icons/h2_features_icon03.svg') }}"
                                            alt="img" class="injectable">
                                    </div>
                                    <h2 class="title">Earn Certificate</h2>
                                </div>
                                <p>when an unknown printer took a galley offe type and scrambled makes.</p>
                            </div>
                            <div class="features__item-shape">
                                <img src="{{ asset('front-assets/img/others/features_item_shape.svg') }}"
                                    alt="img" class="injectable">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <!-- Brand Logo Strat --->

    <!-- about-area -->

    <div class="section__title text-center">
        <h4 class="text-danger">India's Best Not For Profit Skills & Vocational Training Provider Self Financed
            Institution.
        </h4>
        <p style="color: #2aa352; font-weight:600; margin:0; font-size:18px;"> स्वरोजगार हेतु औद्योगिक कला विकास
            प्रशिक्षण संस्थान </p>
        <p style="color: #000000; font-weight:600; margin:0; font-size:18px;">(PPM) Private Partnership Model for
            Promotion of Skill & Vocational Training in India</p>
    </div>
    <section class="about-area-four section-pt-60 section-pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-9">
                    <div class="about__images-four">
                        <img src="{{ asset('front-assets/img/others/about-us.webp') }}" alt="">
                        <div class="about__enrolled" data-aos="fade-up" data-aos-delay="400">
                            <p class="title"><span>36K+</span> Enrolled Students</p>
                            <img src="{{ asset('front-assets/img/others/student_grp.png') }}" alt="img">
                        </div>
                        <div class="about__video" data-aos="fade-left" data-aos-delay="400">
                            <a href="https://www.youtube.com/watch?v=b2Az7_lLh3g" class="play-btn popup-video"><i
                                    class="fas fa-play"></i> Watch our <br> Video</a>
                        </div>
                        <div class="about__year-wrap">
                            <h2 class="count">15</h2>
                            <h5 class="title">year <br> of Institutes</h5>
                        </div>
                        <div class="shape">
                            <img src="{{ asset('front-assets/img/others/h3_about_shape01.svg') }}" alt="shape"
                                data-aos="fade-right" data-aos-delay="200" class="alltuchtopdown">
                            <img src="{{ asset('front-assets/img/others/h3_about_shape02.svg') }}" alt="shape"
                                data-aos="fade-right" data-aos-delay="200">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__content-four">
                        <div class="section__title mb-15">
                            <span class="sub-title">About Campus history</span>
                            <h2 class="title">ABOUT BKVS</h2>
                        </div>
                        <p>We, as an organization are known for providing computer and vocational education in rural
                            area with economic costing through a strong network of centers in small villages and towns.
                            We are providing education, which is required in every step of life, age and workplace.</p>
                        <div class="about__content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>We, as an organization are known for providing computer and vocational education
                                        in a rural area with economic costing through a strong network of centers in
                                        small villages and towns. Our well-trained staff is ready to teach such a
                                        practical education, which needed to a student, housewife, and businessman
                                        retire person, employee, self-employed, farmer, uneducated person, etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('about-us')}}" class="btn arrow-btn">Know More <img
                                src="{{ asset('front-assets/img/icons/right_arrow.svg') }}" alt=""
                                class="injectable"></a>
                        <img src="{{ asset('front-assets/img/others/h3_about_shape03.svg') }}" alt="shape"
                            class="shape alltuchtopdown">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about-area-end -->

    <!-- course-area -->
    <section class="courses-area section-pt-120 section-pb-90"
        data-background="{{ asset('front-assets/img/bg/courses_bg.jpg') }}">
        <div class="container">
            <div class="section__title-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Top Class Courses</span>
                            <h2 class="title">Explore Our World's Best Courses</h2>
                            <p class="desc text-center">When known printer took a galley of type scrambl edmake</p>
                        </div>
                        <div class="courses__nav">
                            <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                <!-- Categories will be injected here -->
                            </ul>
                        </div>





                    </div>
                </div>
            </div>
            
            
            <div class="swiper courses-swiper-active">
            <div class="swiper-wrapper" id="all-courses-wrapper">
                <!-- Courses will be dynamically added here -->
            </div>
            <!-- Navigation buttons -->
            <div class="courses__nav">
                        <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                        <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                    </div>
           
</div>


            <!-- <div class="tab-content" id="courseTabContent">
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                    tabindex="0">
                    <div class="swiper courses-swiper-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="courses__item shine__animate-item">
                                    <div class="courses__item-thumb">
                                        <a href="course-details.html" class="shine__animate-link">
                                            <img src="{{ asset('front-assets/img/courses/auto-cad.webp') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="courses__item-content">
                                        <ul class="courses__item-meta list-wrap">
                                            <li class="courses__item-tag">
                                                <a href="course.html">Computer</a>
                                            </li>
                                            <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                        </ul>
                                        <h5 class="title"><a href="course-details.html">DIPLOMA IN AUTO CAD
                                                DESIGNING</a></h5>
                                        <div class="courses__item-bottom">
                                            <div class="button">
                                                <a href="course-details.html">
                                                    <span class="text">Enroll Now</span>
                                                    <i class="flaticon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <h5 class="price">INR 8,500</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="courses__nav">
                        <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                        <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                    </div>
                </div>


            </div> -->
        </div>
    </section>
    <!-- course-area-end -->

    <!-- cta-area -->
    <section class="cta__area-three">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="cta__bg-three" data-background="{{ asset('front-assets/img/bg/h7_cta_bg.jpg') }}">
                        <div class="cta__img-two">
                            <img src="{{ asset('front-assets/img/others/h7_cta_img.png') }}" alt="img">
                        </div>
                        <div class="cta__content-three">
                            <div class="content__left">
                                <h2 class="title">Finding Your Right Courses</h2>
                                <p>intuitive shared inbox makes it easy for team member</p>
                            </div>
                            <a href="{{route('all-courses')}}" class="btn arrow-btn">GET sTARTED <img
                                    src="{{ asset('front-assets/img/icons/right_arrow.svg') }}" alt=""
                                    class="injectable"></a>
                        </div>
                        <div class="cta__shape-two">
                            <img src="{{ asset('front-assets/img/others/h7_cta_shape.svg') }}" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area-end -->

    <!-- categories-area -->
    <section class="categories-area-four fix section-pt-60 section-pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center mb-50">
                        <span class="sub-title">Our Features</span>
                        <h2 class="title bold">Our Center Options</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories__item-four shine__animate-item">
                        <a href="{{route('login')}}" class="shine__animate-link">
                            <img src="{{ asset('front-assets/img/icons/student-zone.png') }}" alt="img">
                            <span class="name">Student Zone</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories__item-four shine__animate-item">
                        <a href="{{route('faculty')}}" class="shine__animate-link">
                            <img src="{{ asset('front-assets/img/icons/faculty.png') }}" alt="img">
                            <span class="name">Faculty</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories__item-four shine__animate-item">
                        <a href="" class="shine__animate-link">
                            <img src="{{ asset('front-assets/img/icons/card.png') }}" alt="img">
                            <span class="name">Result Card</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories__item-four shine__animate-item">
                        <a href="{{route('center-login')}}" class="shine__animate-link">
                            <img src="{{ asset('front-assets/img/icons/center.png') }}" alt="img">
                            <span class="name">Center</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories__item-four shine__animate-item">
                        <a href="{{route('online-admission')}}" class="shine__animate-link">
                            <img src="{{ asset('front-assets/img/icons/admission.png') }}" alt="img">
                            <span class="name">Apply Admission</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="categories__item-four shine__animate-item">
                        <a href="{{route('apply-franchise')}}" class="shine__animate-link">
                            <img src="{{ asset('front-assets/img/icons/university.png') }}" alt="img">
                            <span class="name">Apply Center</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- categories-area-end -->

    <!-- brand-area -->
    <div class="brand-area">
        <div class="section__title text-center mb-40">
            <h2 class="title text-light">We Support & Promote</h2>
        </div>
        <div class="container-fluid">
            <div class="marquee_mode">
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand01.png') }}" alt="star">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand02.png') }}" alt="star">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand03.png') }}" alt="star">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand04.png') }}" alt="star">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand05.png') }}" alt="star">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand06.png') }}" alt="star">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand07.png') }}" alt="star">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand08.png') }}" alt="star">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('front-assets/img/brand/brand03.png') }}" alt="star">
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial__area-two section-py-120 testimonial__bg"
        data-background="{{ asset('front-assets/img/bg/testimonials_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section__title text-center mb-50">
                        <span class="sub-title">Our Testimonials</span>
                        <h2 class="title">What Students Think and Say About BKVS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__item-wrap">
                        <div class="swiper-container testimonial-swiper-active-two">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__item-two">
                                        <div class="testimonial__content-two">

                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>“ when an unknown printer took alley ffferer area typey and scrambled to
                                                make a type specimen book hass”</p>
                                        </div>
                                        <div class="testimonial__author testimonial__author-two">
                                            <div class="testimonial__author-thumb testimonial__author-thumb-two">
                                                <img src="{{ asset('front-assets/img/others/testi_author03.png') }}"
                                                    alt="img">
                                            </div>
                                            <div class="testimonial__author-content testimonial__author-content-two">
                                                <h2 class="title">Wade Warren</h2>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-two">
                                        <div class="testimonial__content-two">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>“ when an unknown printer took alley ffferer area typey and scrambled to
                                                make a type specimen book hass”</p>
                                        </div>
                                        <div class="testimonial__author testimonial__author-two">
                                            <div class="testimonial__author-thumb testimonial__author-thumb-two">
                                                <img src="{{ asset('front-assets/img/others/testi_author03.png') }}"
                                                    alt="img">
                                            </div>
                                            <div class="testimonial__author-content testimonial__author-content-two">
                                                <h2 class="title">Jenny Wilson</h2>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-two">
                                        <div class="testimonial__content-two">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>“ when an unknown printer took alley ffferer area typey and scrambled to
                                                make a type specimen book hass”</p>
                                        </div>
                                        <div class="testimonial__author testimonial__author-two">
                                            <div class="testimonial__author-thumb testimonial__author-thumb-two">
                                                <img src="{{ asset('front-assets/img/others/testi_author03.png') }}"
                                                    alt="img">
                                            </div>
                                            <div class="testimonial__author-content testimonial__author-content-two">
                                                <h2 class="title">Kristin Watson</h2>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-two">
                                        <div class="testimonial__content-two">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>“ when an unknown printer took alley ffferer area typey and scrambled to
                                                make a type specimen book hass”</p>
                                        </div>
                                        <div class="testimonial__author testimonial__author-two">
                                            <div class="testimonial__author-thumb testimonial__author-thumb-two">
                                                <img src="{{ asset('front-assets/img/others/testi_author03.png') }}"
                                                    alt="img">
                                            </div>
                                            <div class="testimonial__author-content testimonial__author-content-two">
                                                <h2 class="title">Jenny Wilson</h2>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    <section class="blog__post-area-three tg-motion-effects blog__bg"
        data-background="{{ asset('front-assets/img/bg/h3_blog_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">News & Blogs</span>
                        <h2 class="title">Our Latest News Feed</h2>
                        <p>when known printer took a galley of type scrambl edmake</p>
                    </div>
                </div>
            </div>
            <div class="row gutter-20">
                <div class="col-xl-3 col-md-6">
                    <div class="blog__post-item shine__animate-item">
                        <div class="blog__post-thumb">
                            <a href="blog-details.html" class="shine__animate-link"><img
                                    src="{{ asset('front-assets/img/blog/blog_post04.jpg') }}" alt="img"></a>
                            <a href="blog.html" class="post-tag">Marketing</a>
                        </div>
                        <div class="blog__post-content">
                            <div class="blog__post-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                    <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="blog-details.html">How To Become idiculously Self-Aware In 20
                                    Minutes</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="blog__post-item shine__animate-item">
                        <div class="blog__post-thumb">
                            <a href="blog-details.html" class="shine__animate-link"><img
                                    src="{{ asset('front-assets/img/blog/blog_post03.jpg') }}" alt="img"></a>
                            <a href="blog.html" class="post-tag">Students</a>
                        </div>
                        <div class="blog__post-content">
                            <div class="blog__post-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                    <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="blog-details.html">Get Started With UI Design With Tips To
                                    Speed</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="blog__post-item shine__animate-item">
                        <div class="blog__post-thumb">
                            <a href="blog-details.html" class="shine__animate-link"><img
                                    src="{{ asset('front-assets/img/blog/blog_post03.jpg') }}" alt="img"></a>
                            <a href="blog.html" class="post-tag">Science</a>
                        </div>
                        <div class="blog__post-content">
                            <div class="blog__post-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                    <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="blog-details.html">Make Your Own Expanding Contracting
                                    Content</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="blog__post-item shine__animate-item">
                        <div class="blog__post-thumb">
                            <a href="blog-details.html" class="shine__animate-link"><img
                                    src="{{ asset('front-assets/img/blog/blog_post04.jpg') }}" alt="img"></a>
                            <a href="blog.html" class="post-tag">Agency</a>
                        </div>
                        <div class="blog__post-content">
                            <div class="blog__post-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-calendar"></i>20 July, 2024</li>
                                    <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="blog-details.html">What we are capable to usually
                                    discovered</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog__shape">
            <img src="{{ asset('front-assets/img/blog/blog_shape.svg') }}" alt="shape"
                class="tg-motion-effects5">
        </div>
    </section>
    <!-- blog-area-end -->


</main>


@endsection
@push('script')




<!-- <script>
    document.addEventListener('DOMContentLoaded', async () => {
        const tabList = document.querySelector('#courseTab');
        const courseTabContent = document.querySelector('#courseTabContent .swiper-wrapper');
        try {
            const response = await fetch(`${siteUrl}/api/home-categories`);
            if (!response.ok) throw new Error('Failed to fetch home categories');

            const categories = await response.json();
            console.log('Fetched categories:', categories); // Debugging: Log categories

            if (!tabList) return console.error('#courseTab not found in DOM');

            // Render all courses tab and category tabs dynamically
            tabList.innerHTML = `
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-categories="" data-bs-toggle="tab" 
                        data-bs-target="#all-tab-pane" type="button" role="tab" 
                        aria-controls="all-tab-pane" aria-selected="true">
                        All Courses
                    </button>
                </li>
                ${categories.map(({ id, name }) => `
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="category-tab-${id}" data-categories="${id}"
                            data-bs-toggle="tab" data-bs-target="#category-tab-pane-${id}" 
                            type="button" role="tab" aria-controls="category-tab-pane-${id}" 
                            aria-selected="false">${name}</button>
                    </li>`).join('')}
            `;

            fetchAndRenderCourses();

            tabList.addEventListener('click', (e) => {
                if (e.target.classList.contains('nav-link')) {
                    const categoryIds = e.target.dataset.categories || null;
                    fetchAndRenderCourses(categoryIds);

                    // Update active tab
                    tabList.querySelectorAll('.nav-link').forEach(tab => {
                        tab.classList.remove('active');
                    });
                    e.target.classList.add('active');
                }
            });

        } catch (error) {
            console.error('Error fetching home categories:', error.message || error);
        }

        async function fetchAndRenderCourses(categoryIds = null) {
            try {
                const url = categoryIds ? `${siteUrl}/api/slider-courses?categories=${categoryIds}` : `${siteUrl}/api/slider-courses`;
                
                // Fetch courses from the API
                const response = await fetch(url);
                if (!response.ok) throw new Error('Failed to fetch courses');

                const courses = await response.json();

                const coursesWrapper = document.querySelector('#all-courses-wrapper');
                if (!coursesWrapper) {
                    console.error('Courses wrapper not found in DOM');
                    return;
                }

                coursesWrapper.innerHTML = '';

                if (courses.length === 0) {
                    coursesWrapper.innerHTML = `
                    <div class="errorModule">
                    <div class="errorIcon">
                        <i class="fa fa-unlink"></i>
                    </div>
                    <div class="errorMsg">No courses available for this category.</div>
                </div>
                    
                    `;
                    return;
                }

                // Render the fetched courses dynamically
                coursesWrapper.innerHTML = courses.map(({ id, name, slug, fees, image, category_name }) => `
                    <div class="swiper-slide">
                        <div class="courses__item shine__animate-item">
                            <div class="courses__item-thumb">
                                <a href="/course-details/${slug}" class="shine__animate-link">
                                    <img src="${image || 'https://via.placeholder.com/300x200?text=No+Image'}" alt="${name}">
                                </a>
                            </div>
                            <div class="courses__item-content">
                                <ul class="courses__item-meta list-wrap">
                                    <li class="courses__item-tag">
                                        <a href="#">${category_name}</a>
                                    </li>
                                </ul>
                                <h5 class="title text-nowrap"><a href="/course-details/${slug}">${name}</a></h5>
                                <div class="courses__item-bottom">
                                    <div class="button">
                                        <a href="/course-details/${slug}">
                                            <span class="text">Read more</span>
                                            <i class="flaticon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <h5 class="price">₹ ${fees}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                `).join('');

                
            } catch (error) {
                console.error('Error fetching courses:', error.message || error);
                const coursesWrapper = document.querySelector('#all-courses-wrapper');
                if (coursesWrapper) {

                    coursesWrapper.innerHTML = `<div class="errorModule">
                    <div class="errorIcon">
                        <i class="fa fa-unlink"></i>
                    </div>
                    <div class="errorMsg">Failed to load courses. Please try again later.</div>
                </div>`;
                }
            }
        }
       
    });
</script> -->


<script>
    document.addEventListener('DOMContentLoaded', async () => {
    const tabList = document.querySelector('#courseTab');
    const coursesWrapper = document.querySelector('#all-courses-wrapper');

    if (!tabList || !coursesWrapper) {
        console.error('Required DOM elements not found');
        return;
    }

    try {
        const categories = await fetchData(`${siteUrl}/api/home-categories`);
        renderTabs(categories);
        fetchAndRenderCourses();

        tabList.addEventListener('click', (e) => {
            if (e.target.classList.contains('nav-link')) {
                fetchAndRenderCourses(e.target.dataset.categories);
                updateActiveTab(e.target);
            }
        });
    } catch (error) {
        console.error('Error fetching home categories:', error.message || error);
    }

    async function fetchData(url) {
        const response = await fetch(url);
        if (!response.ok) throw new Error('Network response was not ok');
        return response.json();
    }

    function renderTabs(categories) {
        tabList.innerHTML = `
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-categories="" data-bs-toggle="tab" 
                    data-bs-target="#all-tab-pane">All Courses</button>
            </li>
            ${categories.map(({ id, name }) => `
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="category-tab-${id}" data-categories="${id}" 
                        data-bs-toggle="tab" data-bs-target="#category-tab-pane-${id}">
                        ${name}
                    </button>
                </li>`).join('')}
        `;
    }

    async function fetchAndRenderCourses(categoryIds = null) {
        try {
            const url = categoryIds ? `${siteUrl}/api/slider-courses?categories=${categoryIds}` : `${siteUrl}/api/slider-courses`;
            const courses = await fetchData(url);

            coursesWrapper.innerHTML = courses.length
                ? courses.map(({ id, name, slug, fees, image, category_name }) => `
                    <div class="swiper-slide">
                        <div class="courses__item shine__animate-item">
                            <div class="courses__item-thumb">
                                <a href="/course-details/${slug}">
                                    <img src="${image || 'https://via.placeholder.com/300x200?text=No+Image'}" alt="${name}">
                                </a>
                            </div>
                            <div class="courses__item-content">
                                <ul class="courses__item-meta list-wrap">
                                    <li class="courses__item-tag"><a href="#">${category_name}</a></li>
                                </ul>
                                <h5 class="title text-nowrap"><a href="/course-details/${slug}">${name}</a></h5>
                                <div class="courses__item-bottom">
                                    <div class="button">
                                        <a href="/course-details/${slug}"><span class="text">Read more</span><i class="flaticon-arrow-right"></i></a>
                                    </div>
                                    <h5 class="price">₹ ${fees}</h5>
                                </div>
                            </div>
                        </div>
                    </div>`).join('')
                : `<div class="errorModule"><div class="errorIcon"><i class="fa fa-unlink"></i></div>
                   <div class="errorMsg">No courses available for this category.</div></div>`;
        } catch (error) {
            console.error('Error fetching courses:', error.message || error);
            coursesWrapper.innerHTML = `<div class="errorModule"><div class="errorIcon"><i class="fa fa-unlink"></i></div>
                                       <div class="errorMsg">Failed to load courses. Please try again later.</div></div>`;
        }
    }

    function updateActiveTab(activeTab) {
        tabList.querySelectorAll('.nav-link').forEach(tab => tab.classList.remove('active'));
        activeTab.classList.add('active');
    }
});
</script>



@endpush