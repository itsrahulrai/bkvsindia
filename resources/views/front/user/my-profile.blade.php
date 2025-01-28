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
                        <div class="dashboard__content-wrap shadow-sm p-4 rounded-3">
                            <div class="dashboard__content-title mb-4">
                                <h4 class="title">My Profile</h4>
                            </div>
                            <div class="row justify-content-center">
                                <!-- Center Profile Image -->
                                <div class="col-md-4 text-center mb-4">
                                    <div class="profile-img-wrap">
                                        <!-- Profile Image (Dummy) -->
                                        <img src="{{ asset(@$student->photo) }}" alt="Profile Image" class="rounded-circle border border-2 border-primary" width="150" height="150">
                                    </div>

                                </div>
                            </div>
                            <div class="row justify-content-center">
                            <div class="col-md-12">
    <div class="profile__content-wrap border p-3"> <!-- Added 'border' and 'p-3' for padding -->
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-id-card"></i> Student Enrollment Number</span>
                <span>{{ $student->enroll_no }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-user"></i> Student Name</span>
                <span>{{ $student->student_name }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-user-tie"></i> Father Name</span>
                <span>{{ $student->father_name }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-user-friends"></i> Mother Name</span>
                <span>{{ $student->mother_name }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-calendar-alt"></i> Date of Birth</span>
                <span>{{ \Carbon\Carbon::parse($student->dob)->format('d-m-Y') }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-building"></i> Center Code</span>
                <span>{{ $student->center->center_code }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-book"></i> Course</span>
                <span>{{ $student->course->name }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-calendar-check"></i> Registration Year</span>
                <span>{{ \Carbon\Carbon::parse($student->registration_date)->format('Y') }}</span>
            </li>
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