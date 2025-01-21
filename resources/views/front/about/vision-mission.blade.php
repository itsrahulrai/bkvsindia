@extends('front.layout.master')
@section('title', 'Vision Mission - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title">Vision Mission </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Vision Mission </span>
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
                        <h2 class="title text-center">Vision Mission </h2>
                    </div>
                    <div class="col-lg-12">
                        <ul class="about__info-list list-wrap">
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">To continue building today’s youth for a promising tomorrow</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Strong linkage with job market.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Improving productivity and living standards of the people.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">All the courses offered by the organization are structured and in line
                                    with market demand.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Create opportunities for all to acquire skills throughout life and
                                    especially for youth and women.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Supply of trained workers who are adjustable dynamically to the changing
                                    demands of employment and technologies.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Enhancing individual’s employability and ability to adapt to changing
                                    technologies and labour market demands.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Our students are our strength. Our main mission is every year 10000
                                    students should be skilled from our various centers.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Seminars, workshops and concealing campus are organized at regular
                                    intervals.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">We have a centralized placement cell. This helps in the placement of Bkvs
                                    students through our in house placement portal.</p>
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
