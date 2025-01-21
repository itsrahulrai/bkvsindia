@extends('front.layout.master')
@section('title', 'Director Messages - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title">Director Messages </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Director Messages </span>
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
                    <div class="col-lg-6">
                        <div class="section__title mb-10">
                            <h2 class="title"> DIRECTOR MESSAGE </h2>
                        </div>
                        <p class="desc">The central and state government have made considerable effort to enhance the
                            skill of the youth there continues to be a huge gap between the demand and supply of the
                            skilled workforce. This is magnified by the fact that with a population of a billion plus
                            people and majority.
                        </p>
                        <p class="desc">
                            In the average of 25 years nearly 300 million people are underemployed or unemployed. On the
                            other side industries in acute shortage of skilled labour. This clearly highlights that most
                            of our population is under skilled and therefore unemployable.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('front-assets/img/banner/banner-2.webp') }}" alt="">
                    </div>
                </div>
                <p class="desc">
                    In the average of 25 years nearly 300 million people are underemployed or unemployed. On the
                    other side industries in acute shortage of skilled labour. This clearly highlights that most
                    of our population is under skilled and therefore unemployable.
                </p>
                <p class="desc">
                    No program of action succeeds unless it has a vision, will, with all infrastructural facilities and
                    other quality inputs to transcribe its objectives into reality. BKVS has the vision, the will and the
                    infrastructural facilities and other quality inputs to transcribe its dream into reality. BKVS with all
                    its conviction sharpen the analytical skill and mould our students into rational thinkers and turned
                    them into skilled workforce.
                </p>
                <h4>All the Best...</h4>
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-8">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Chairman </span>
                            <h2 class="title">Mr. Sandeep</h2>
                            <p>( Bhartiya Kaushal Vikas Sansthan )</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->


    </main>

    <!-- main-area --->


@endsection
