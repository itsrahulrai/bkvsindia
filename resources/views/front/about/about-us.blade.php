@extends('front.layout.master')
@section('title', 'About us - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title">About us </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">About us </span>
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
                    <div class="col-lg-7">
                        <div class="section__title mb-10">
                            <h2 class="title"> BHARTIYA KAUSHAL VIKAS SANSTHAN </h2>
                        </div>
                        <ul class="about__info-list list-wrap">
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">We, as an organization are known for providing computer and vocational
                                    education in a rural area with economic costing through a strong network of centers in
                                    small villages and towns.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">We are providing education, which is required in every step of life, age
                                    and workplace.</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Our well-trained staff is ready to teach such a practical education,
                                    which needed to a student, housewife, and businessman retire person, employee,
                                    self-employed, farmer, uneducated person, etc.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('front-assets/img/banner/banner-2.webp') }}" alt="">
                    </div>
                </div>
                <ul class="about__info-list list-wrap mt-3">
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">We are generating employment opportunities for trained and skilled people who
                            don’t have a formal school certificate.</p>
                    </li>
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">We are also running courses to empower unskilled women for their economic and
                            social upliftment. </p>
                    </li>
                </ul>
                <h4 class="mt-5 mb-3">Key Components of the Scheme</h4>
                <ul class="about__info-list list-wrap">
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">Short Term Training – Providing 60 lakh youth with the opportunity to get
                            trained, assessed and certified.</p>
                    </li>
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">Recognition of prior Learning – Aligning the competencies of 40 lakh individuals
                            from the un-regulated workforce with the NSQF. </p>
                    </li>
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">Special Projects – Enabling a platform that will facilitate trainings in special
                            areas and premises of Government bodies and Corporates. </p>
                    </li>
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">Kaushal and ROZGAR Mela – Organized every six months by Training Partners to
                            ensure Schemeâ€™s reach and success far and wide. </p>
                    </li>
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">Placement Assistance – Linking the aptitude, aspiration, and knowledge of PMKVY
                            candidates to potential employers </p>
                    </li>
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">Continuous Monitoring – Using technology driven methodologies to ensure high
                            standards of quality are maintained of by PMKVY Training Centreâ€™s. </p>
                    </li>
                    <li class="about__info-list-item">
                        <i class="flaticon-angle-right"></i>
                        <p class="content">Standardized Branding and communication – Ensuring greater visibility and the
                            accurate communication of the Scheme on-ground. </p>
                    </li>
                </ul>
            </div>
        </section>
        <!-- about-area-end -->


    </main>

    <!-- main-area --->


@endsection
