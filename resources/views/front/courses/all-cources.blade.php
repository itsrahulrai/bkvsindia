@extends('front.layout.master')
@section('title', 'All Courses - Bhartiya Kaushal Vikas Sansthan')
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
                        <h3 class="title">All Courses </h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ url('/') }}">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">All Courses </span>
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

    <!-- all-courses -->
    <section class="all-courses-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 order-2 order-lg-0">
                    <aside class="courses__sidebar">
                        <div class="courses-widget">
                            <h4 class="widget-title">Categories</h4>
                            <div class="courses-cat-list">
                                <ul class="list-wrap" id="Categories">
                                    <!-- Categories will be dynamically inserted here -->
                                </ul>
                                <div class="show-more">
                                    <a href="#" id="ShowMoreLink">Show More +</a>
                                </div>
                            </div>

                        </div>
                        <div class="courses-widget">
                            <h4 class="widget-title">Price</h4>
                            <div class="courses-cat-list">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="price_1">
                                            <label class="form-check-label" for="price_1">All Price</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="price_2">
                                            <label class="form-check-label" for="price_2">Free</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="price_3">
                                            <label class="form-check-label" for="price_3">Paid</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="courses-widget">
                            <h4 class="widget-title">Skill level</h4>
                            <div class="courses-cat-list">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="difficulty_1">
                                            <label class="form-check-label" for="difficulty_1">All Skills</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="difficulty_2">
                                            <label class="form-check-label" for="difficulty_2">Beginner (55)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="difficulty_3">
                                            <label class="form-check-label" for="difficulty_3">Intermediate
                                                (22)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="difficulty_4">
                                            <label class="form-check-label" for="difficulty_4">High (42)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="courses-top-wrap courses-top-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="courses-top-left">
                                    <!-- <p>Showing 250 total results</p> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel"
                            aria-labelledby="grid-tab">
                        </div>
                        <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                            <!-- dynamic Coures display with API -->
                        </div>
                        <div class="col-md-7">
                            <div class="pagination-container d-flex justify-content-center mt-4">
                                <!-- Pagination buttons will be dynamically injected here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- all-courses-end -->




</main>

<!-- main-area --->


@endsection