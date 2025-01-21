@extends('front.layout.master')
@section('title', 'User Dashboard')
@section('content')

    <!-- main-area -->
    <main class="main-area fix">

        <!-- dashboard-area -->
        <section class="dashboard__area section-pb-120">
            <div class="dashboard__bg"><img src="{{ asset('front-assets/img/bg/dashboard_bg.jpg') }}" alt=""></div>
            <div class="container">
                @include('front.user.inc.profile')
                <div class="dashboard__inner-wrap">
                    <div class="row">
                        <div class="col-lg-3">
                            @include('front.user.inc.sidebar')
                        </div>
                        <div class="col-lg-9">
                            <div class="dashboard__count-wrap">
                                <div class="dashboard__content-title">
                                    <h4 class="title">Dashboard</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="dashboard__counter-item">
                                            <div class="icon">
                                                <i class="skillgro-book"></i>
                                            </div>
                                            <div class="content">
                                                <span class="count odometer" data-count="15"></span>
                                                <p>Enrolled Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="dashboard__counter-item">
                                            <div class="icon">
                                                <i class="skillgro-tutorial"></i>
                                            </div>
                                            <div class="content">
                                                <span class="count odometer" data-count="12"></span>
                                                <p>Active Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="dashboard__counter-item">
                                            <div class="icon">
                                                <i class="skillgro-diploma-1"></i>
                                            </div>
                                            <div class="content">
                                                <span class="count odometer" data-count="10"></span>
                                                <p>Completed Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress__courses-wrap">
                                <div class="dashboard__content-title">
                                    <h4 class="title">Recent View Courses</h4>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="courses__item courses__item-two shine__animate-item">
                                            <div class="courses__item-thumb courses__item-thumb-two">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('front-assets/img/courses/course_thumb01.jpg') }}"
                                                        alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content courses__item-content-two">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Development</a>
                                                    </li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">Learning JavaScript With
                                                        Imagination</a></h5>
                                                <div class="courses__item-content-bottom">
                                                    <div class="author-two">
                                                        <a href="instructor-details.html"><img
                                                                src="{{ asset('front-assets/img/courses/course_author001.png') }}"
                                                                alt="img">David Millar</a>
                                                    </div>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.8 Reviews)
                                                    </div>
                                                </div>
                                                <div class="progress-item progress-item-two">
                                                    <h6 class="title">COMPLETE <span>88%</span></h6>
                                                    <div class="progress" role="progressbar" aria-label="Example with label"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar" style="width: 88%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="courses__item-bottom-two">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-book"></i>05</li>
                                                    <li><i class="flaticon-clock"></i>11h 20m</li>
                                                    <li><i class="flaticon-mortarboard"></i>22</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="courses__item courses__item-two shine__animate-item">
                                            <div class="courses__item-thumb courses__item-thumb-two">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('front-assets/img/courses/course_thumb02.jpg') }}"
                                                        alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content courses__item-content-two">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Design</a>
                                                    </li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">The Complete Graphic
                                                        Design for Beginners</a></h5>
                                                <div class="courses__item-content-bottom">
                                                    <div class="author-two">
                                                        <a href="instructor-details.html"><img
                                                                src="{{ asset('front-assets/img/courses/course_author002.png') }}"
                                                                alt="img">Wilson</a>
                                                    </div>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.5 Reviews)
                                                    </div>
                                                </div>
                                                <div class="progress-item progress-item-two">
                                                    <h6 class="title">COMPLETE <span>70%</span></h6>
                                                    <div class="progress" role="progressbar" aria-label="Example with label"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar" style="width: 70%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="courses__item-bottom-two">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-book"></i>60</li>
                                                    <li><i class="flaticon-clock"></i>70h 45m</li>
                                                    <li><i class="flaticon-mortarboard"></i>202</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="courses__item courses__item-two shine__animate-item">
                                            <div class="courses__item-thumb courses__item-thumb-two">
                                                <a href="course-details.html" class="shine__animate-link">
                                                    <img src="{{ asset('front-assets/img/courses/course_thumb03.jpg') }}"
                                                        alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-content courses__item-content-two">
                                                <ul class="courses__item-meta list-wrap">
                                                    <li class="courses__item-tag">
                                                        <a href="course.html">Data Science</a>
                                                    </li>
                                                </ul>
                                                <h5 class="title"><a href="course-details.html">Learning JavaScript With
                                                        Imagination</a></h5>
                                                <div class="courses__item-content-bottom">
                                                    <div class="author-two">
                                                        <a href="instructor-details.html"><img
                                                                src="{{ asset('front-assets/img/courses/course_author003.png') }}"
                                                                alt="img">Warren</a>
                                                    </div>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.8 Reviews)
                                                    </div>
                                                </div>
                                                <div class="progress-item progress-item-two">
                                                    <h6 class="title">COMPLETE <span>95%</span></h6>
                                                    <div class="progress" role="progressbar"
                                                        aria-label="Example with label" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar" style="width: 95%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="courses__item-bottom-two">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-book"></i>08</li>
                                                    <li><i class="flaticon-clock"></i>18h 20m</li>
                                                    <li><i class="flaticon-mortarboard"></i>66</li>
                                                </ul>
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
        <!-- dashboard-area-end -->

    </main>


@endsection
