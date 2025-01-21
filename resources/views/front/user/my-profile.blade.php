@extends('front.layout.master')
@section('title', 'My Profile')
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
                            <div class="dashboard__content-wrap">
                                <div class="dashboard__content-title">
                                    <h4 class="title">My Profile</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="profile__content-wrap">
                                            <ul class="list-wrap">
                                                <li><span>Registration Date</span> February 28, 2026 8:01 am</li>
                                                <li><span>Full Name</span> Shiavm Pal</li>
                                                <li><span>Date of Birth</span> 13-02-2000</li>
                                                <li><span>Username</span> instructor</li>
                                                <li><span>Email</span> info@bkvsindia.com</li>
                                                <li><span>Phone Number</span> +123 599 8989</li>
                                                <li><span>Enrollment Number </span> BKVS1025120</li>
                                                <li><span>Roll Number </span> 00001025120</li>
                                                <li><span>Address</span> BKVS INDIA, Near Nathu Sweets, Vikas Marg, Opp
                                                    Pillar No-52, Laxmi Nagar, Nirman Vihar, New Delhi</li>
                                            </ul>
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
