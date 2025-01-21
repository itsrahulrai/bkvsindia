@extends('front.layout.master')
@section('title', ' Academic Center 10 Benefits - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title"> Academic Center 10 Benefits </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem"> Academic Center 10 Benefits </span>
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
                    <div class="col-lg-12">
                        <div class="section__title mb-10">
                            <h2 class="title"> Franchise/ Study Center/ Academic Center 10 Benefits </h2>
                        </div>
                        <ul class="about__info-list list-wrap">
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Best Fees Structure Share</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content"> Books & Study Material Per Admission*</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">MOU Agreement</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content"> Authorization Certification</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Center Name of Website AC List</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content"> Direct Transfer City Student Admission leads</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Advertisement Material Soft Copies Like: Banners, Posters, Hoarding, Pamphlet, Visiting Card etc.</p>
                            </li>

                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">No Exam Fees, No Marksheet Charges.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Online Result, Admit Card, Verification, Admission Apply.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">No Center allotment Fees for Exam.</p>
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
