@extends('front.layout.master')
@section('title', 'Result')
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
                                    <h4 class="title">Result</h4>
                                </div>

                              <!-- Buttons to toggle marksheets -->
                                <div class="d-flex justify-content-center align-items-center mb-3 gap-3">
                                    @if ($courseProgram === 'one_year')
                                        <a href="{{ route('student.marksheets.firstYear', $student->id) }}" class="btn btn-primary d-flex align-items-center gap-2" id="marksheet1Button">
                                            <i class="fas fa-file-alt"></i> Marksheet 1
                                        </a>
                                    @elseif ($courseProgram === 'two_year')
                                        <a href="{{ route('student.marksheets.firstYear', $student->id) }}" class="btn btn-primary d-flex align-items-center gap-2" id="marksheet1Button">
                                            <i class="fas fa-file-alt"></i> Marksheet 1
                                        </a>
                                        <a href="{{ route('student.marksheets.secondYear', $student->id) }}" class="btn btn-secondary d-flex align-items-center gap-2" id="marksheet2Button">
                                            <i class="fas fa-file-alt"></i> Marksheet 2
                                        </a>
                                    @endif
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

@section('script')
@endsection
