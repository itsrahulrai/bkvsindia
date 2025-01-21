@extends('front.layout.master')
@section('title', 'Apply for Certificate - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title"> Apply for Certificate </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem"> Apply for Certificate </span>
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

        <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="singUp-wrap">
                            <h2 class="title text-center">Apply for Certificate</h2>
                            <p class="text-center">Hey there! Ready to log in? Just enter your username and password below
                                and you'll be back in
                                action in no time. Let's go!</p>
                            <form method="POST" action="" class="account__form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="institute_name" type="text" placeholder="Institute Name *"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="director" type="text" placeholder="Director Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="mobile" type="text" placeholder="Mobile No. *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="email" type="email" placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="address" type="text" placeholder="Address *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="city" type="text" placeholder="City *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="state" type="text" placeholder="State" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="pincode" type="text" placeholder="Pincode" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-grp">
                                            <select name="state" required class="form-select form-select-lg">
                                                <option value="">Select State *</option>
                                                <option value="Andaman & Nicobar">Andaman & Nicobar</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra &Nagar Haveli">Dadra &Nagar Haveli</option>
                                                <option value="Daman & Diu">Daman & Diu</option>
                                                <option value="Delhi NCR">Delhi NCR</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Orissa">Orissa</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="account__check">
                                    <div class="account__check-remember">
                                        <input type="checkbox" class="form-check-input" name="remember"
                                            id="terms-check">
                                        <label for="terms-check" class="form-check-label">Remember me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">
                                    Send Now
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about-area-end -->


    </main>

    <!-- main-area --->


@endsection
