@extends('front.layout.master')
@section('title', 'Photo Gallery  - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title"> Photo Gallery </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem"> Photo Gallery </span>
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
                    <div class="col-lg-3">
                        <img src="{{ asset('front-assets/img/certificate/iso.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('front-assets/img/certificate/iso.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('front-assets/img/certificate/iso.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset('front-assets/img/certificate/iso.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->


    </main>

    <!-- main-area --->


@endsection
