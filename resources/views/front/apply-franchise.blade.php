@extends('front.layout.master')
@section('title', 'Apply For Franchise - Bhartiya Kaushal Vikas Sansthan')
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
                        <h3 class="title"> Apply For Franchise </h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ url('/') }}">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem"> Apply For Franchise </span>
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

    <section class="signup-area py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="text-center mb-4">Apply For Franchise</h2>
                            <form method="POST" action="{{route('franchise.apply')}}">
                                @csrf
                                <div class="row g-3">
                                    <!-- Institute Name -->
                                    <div class="col-md-6">
                                        <label for="instituteName" class="form-label">Institute Name *</label>
                                        <input type="text" id="instituteName" name="institute_name" class="form-control" placeholder="Enter Institute Name" required>
                                    </div>

                                    <!-- Director Name -->
                                    <div class="col-md-6">
                                        <label for="directorName" class="form-label">Director Name *</label>
                                        <input type="text" id="directorName" name="director" class="form-control" placeholder="Enter Director Name" required>
                                    </div>

                                    <!-- Mobile No -->
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile No. *</label>
                                        <input type="number" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile Number" required>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                                    </div>

                                    <!-- Space Available -->
                                    <div class="col-md-6">
                                        <label for="space_available" class="form-label">Space Available</label>
                                        <input type="number" id="space_available" name="space_available" class="form-control" placeholder="Enter Space Available">
                                    </div>

                                    <!-- Number of Lab Rooms -->
                                    <div class="col-md-6">
                                        <label for="number_of_lab_rooms" class="form-label">Number of Lab Rooms</label>
                                        <input type="number" id="number_of_lab_rooms" name="number_of_lab_rooms" class="form-control" placeholder="Enter Number of Lab Rooms">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="state" class="form-label">Select State *</label>
                                        <select name="state" id="state" class="form-select" required>
                                            <option value="">Choose State</option>
                                            @foreach (config("settings.states") as $state)
                                            <option value="{{ $state }}" {{ old('state', $admissions->state ?? '') == $state ? 'selected' : '' }}>
                                                {{ $state }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <!-- City -->
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City *</label>
                                        <input type="text" id="city" name="city" class="form-control" placeholder="Enter City" required>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-md-12">
                                        <label for="address" class="form-label">Address *</label>
                                        <textarea id="address" name="address" class="form-control" placeholder="Enter Address" rows="5" required></textarea>
                                    </div>


                                    <!-- Message -->
                                    <div class="col-md-12">
                                        <label for="message" class="form-label">Message </label>
                                        <textarea id="message" name="message" class="form-control" placeholder="Enter your message here" rows="5" required></textarea>
                                    </div>

                                </div>

                                <!-- Buttons -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-two arrow-btn">
                                        Submit
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14"
                                            viewBox="0 0 16 14" fill="none"
                                            data-inject-url="{{ asset('front-assets/img/icons/right_arrow.svg') }}"
                                            class="injectable">
                                            <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about-area-end -->


</main>

<!-- main-area --->


@endsection