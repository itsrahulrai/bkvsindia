@extends('front.layout.master')
@section('title', 'Why us - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title">Why us </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Why us </span>
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

        <!-- about-area -->
        <section class="about-area-three section-py-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="section__title mb-10">
                        <h2 class="title text-center"> WHY US </h2>
                    </div>
                    <div class="col-lg-6">
                        <ul class="about__info-list list-wrap">
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Need based education</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Training and placement</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Wide network of branchies (500+)</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Diploma and certificates are widly accepted in all Govt and private jobs
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="about__info-list list-wrap">
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Low Fee </p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Faster and personalised services</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Very low franchise fee</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Online admission,online examination and online verification</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->


    </main>

    <!-- main-area --->


@endsection
