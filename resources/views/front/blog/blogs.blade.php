@extends('front.layout.master')
@section('title', 'Blog - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title"> Blog </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem"> Blog </span>
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

    <!-- main-area --->


@endsection
