@extends('front.layout.master')
@section('title', 'Blog Details - Bhartiya Kaushal Vikas Sansthan')
@section('content')

    <!-- main-area -->

    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg"
            data-background="{{ asset('front-assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title"> Blog Details </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem"> Blog Details </span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="{{ asset('front-assets/img/others/breadcrumb_shape01.svg') }}" alt="img"
                    class="alltuchtopdown">
                <img src="{{ asset('front-assets/img/others/breadcrumb_shape02.svg') }}" alt="img"
                    data-aos="fade-right" data-aos-delay="300">
                <img src="{{ asset('front-assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                    data-aos-delay="400">
                <img src="{{ asset('front-assets/img/others/breadcrumb_shape04.svg') }}" alt="img"
                    data-aos="fade-down-left" data-aos-delay="400">
                <img src="{{ asset('front-assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                    data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog-details-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="blog__details-wrapper">
                            <div class="blog__details-thumb">
                                <img src="{{ asset('front-assets/img/courses/courses_details.jpg')}}" alt="img">
                            </div>
                            <div class="blog__details-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i> 20 July, 2024</li>
                                        <li><i class="flaticon-user-1"></i> by <a href="#">Admin</a></li>
                                        <li><i class="flaticon-clock"></i> 5 Min Read</li>
                                        <li><i class="far fa-comment-alt"></i> 05 Comments</li>
                                    </ul>
                                </div>
                                <h3 class="title">How To Become idiculously Self-Aware In 20 Minutes</h3>
                                <p>Maximus ligula eleifend id nisl quis interdum. Sed malesuada tortor non turpis semper
                                    bibendum. Ut ac nisi porta, malesuada risus nonrra dolo areay Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia curae in tristique libero,
                                    quis ultrices diamraesent varius diam dui. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra.Maximus ligula eleifend.</p>
                                <p>Maximus ligula eleifend id nisl quis interdum. Sed malesuada tortor non turpis semper
                                    bibendum. Ut ac nisi porta, malesuada risus nonrra dolo areay Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia curae in tristique libero,
                                    quis ultrices diamraesent varius diam dui. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra.Maximus ligula eleifend.</p>
                                <p>Maximus ligula eleifend id nisl quis interdum. Sed malesuada tortor non turpis semper
                                    bibendum. Ut ac nisi porta, malesuada risus nonrra dolo areay Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                                <div class="blog__details-content-inner">
                                    <h4 class="inner-title">What Will I Learn From This Course?</h4>
                                    <p>Maximus ligula eleifend id nisl quis interdum. Sed malesuada tortor non turpis semper
                                        bibendum. Ut ac nisi porta, malesuada risus non viverra dolor. Vestibulum ante ipsum
                                        primis in faucibus orci luctus et ultrices posuere.</p>
                                    <ul class="about__info-list list-wrap">
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">Work with color & Gradients & Grids</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">All the useful shortcuts</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">Be able to create Flyers, Brochures, Advertisements</p>
                                        </li>
                                        <li class="about__info-list-item">
                                            <i class="flaticon-angle-right"></i>
                                            <p class="content">How to work with Images & Text</p>
                                        </li>
                                    </ul>
                                </div>
                                <p>Maximus ligula eleifend id nisl quis interdum. Sed malesuada tortor non turpis semper
                                    bibendum. Ut ac nisi porta, malesuada risus nonrra dolo areay Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia curae in tristique libero,
                                    quis ultrices diamraesent varius diam dui. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra.Maximus ligula eleifend id nisl quis interdum. Sed malesuada
                                    tortor non turpis semper bibendum. Ut ac nisi porta, malesuada risus nonVestibulum ante
                                    ipsum primis</p>
                                <div class="blog__details-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-md-7">
                                            <div class="tg-post-tag">
                                                <h5 class="tag-title">Tags :</h5>
                                                <ul class="list-wrap p-0 mb-0">
                                                    <li><a href="#">Bath Cleaning</a></li>
                                                    <li><a href="#">Cleaning</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-5">
                                            <div class="tg-post-social justify-content-start justify-content-md-end">
                                                <h5 class="social-title">Share :</h5>
                                                <ul class="list-wrap p-0 mb-0">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <aside class="blog-sidebar">
                            <div class="blog-widget widget_search">
                                <div class="sidebar-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h4 class="widget-title">Categories</h4>
                                <div class="shop-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="#"><i class="flaticon-angle-right"></i>Art & Design</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-angle-right"></i>Business</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-angle-right"></i>Data Science</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-angle-right"></i>Development</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-angle-right"></i>Finance</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-angle-right"></i>Health & Fitness</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-angle-right"></i>Lifestyle</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h4 class="widget-title">Latest Post</h4>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('front-assets/img/courses/course_thumb02.jpg')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="rc-post-content">
                                        <span class="date"><i class="flaticon-calendar"></i> April 13, 2024</span>
                                        <h4 class="title"><a href="blog-details.html">the Right Learning Path for
                                                your</a></h4>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('front-assets/img/courses/course_thumb02.jpg')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="rc-post-content">
                                        <span class="date"><i class="flaticon-calendar"></i> April 13, 2024</span>
                                        <h4 class="title"><a href="blog-details.html">The Growing Need Management</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('front-assets/img/courses/course_thumb02.jpg')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="rc-post-content">
                                        <span class="date"><i class="flaticon-calendar"></i> April 13, 2024</span>
                                        <h4 class="title"><a href="blog-details.html">the Right Learning Path for
                                                your</a></h4>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ asset('front-assets/img/courses/course_thumb02.jpg')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="rc-post-content">
                                        <span class="date"><i class="flaticon-calendar"></i> April 13, 2024</span>
                                        <h4 class="title"><a href="blog-details.html">The Growing Need Management</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud">
                                    <a href="#">Education</a>
                                    <a href="#">Training</a>
                                    <a href="#">Online</a>
                                    <a href="#">Learn</a>
                                    <a href="#">Course</a>
                                    <a href="#">LMS</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->




    </main>

    <!-- main-area --->


@endsection
