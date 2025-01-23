@extends('front.layout.master')
@section('title', 'Contact us - Bhartiya Kaushal Vikas Sansthan')
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
                            <h3 class="title"> Contact us </h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem"> Contact us </span>
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

        <!-- contact-area -->
        <section class="contact-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-wrap">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('front-assets/img/icons/map.svg')}}" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Address</h4>
                                        <p> BKVS INDIA, Near Nathu Sweets, Vikas Marg, Opp Pillar No-52, Laxmi Nagar, New Delhi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('front-assets/img/icons/contact_phone.svg')}}" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Phone</h4>
                                        <a href="tel:0123456789">+91 9999999999</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('front-assets/img/icons/emial.svg')}}" alt="img" class="injectable">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">E-mail Address</h4>
                                        <a href="mailto:bkvsonline7@gmail.com">bkvsonline7@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-wrap">
                            <h4 class="title">Send Us Message</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="contact-form" action="assets/mail.php" method="POST">
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Comment" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input name="name" type="text" placeholder="Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input name="email" type="email" placeholder="E-mail *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input name="website" type="url" placeholder="Website *" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">Submit Now <img
                                        src="{{ asset('front-assets/img/icons/right_arrow.svg')}}" alt="img" class="injectable"></button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
                <!-- contact-map -->
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d112030.10809589921!2d77.13809174408505!3d28.661488862188392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d28.6949376!2d77.16208639999999!4m5!1s0x390cfde58862464d%3A0xd7d822bae15ba145!2sbkvsindia!3m2!1d28.6307117!2d77.27758589999999!5e0!3m2!1sen!2sin!4v1736853018521!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- contact-map-end -->
            </div>
        </section>
        <!-- contact-area-end -->


    </main>

    <!-- main-area --->


@endsection
