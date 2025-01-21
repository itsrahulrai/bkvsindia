@extends('front.layout.master')
@section('title', 'Admit Card')
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
                                    <h4 class="title">Admit Card</h4>
                                </div>
                                <div class="row">

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
