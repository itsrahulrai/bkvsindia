<!-- Scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <i class="tg-flaticon-arrowhead-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header>
    <div id="header-fixed-height"></div>
    <div class="tg-header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <ul class="tg-header__top-info list-wrap">
                        <li><img src="{{ asset('front-assets/img/icons/map_marker.svg') }}" alt="Icon"> <span>589 5th
                                BKVS INDIA, Near Nathu Sweets, Vikas Marg, Opp Pillar No-52, Laxmi Nagar, Nirman Vihar,
                                New Delhi</span></li>
                        <li><img src="{{ asset('front-assets/img/icons/envelope.svg') }}" alt="Icon"> <a
                                href="mailto:bkvsonline7@gmail.com">bkvsonline7@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="tg-header__top-right">
                        <ul class="tg-header__top-social list-wrap">
                            <li>Follow Us On :</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-header__logo-area">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-6">
                    <div class="logo text-start">
                        <a href=""><img src="{{ asset('front-assets/img/logo/logo.png') }}" alt="Logo"
                                width="180px"></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="logo text-end">
                        <a href=""><img src="{{ asset('front-assets/img/logo/govt-logo.png') }}" alt="Logo"
                                width="400px"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="sticky-header" class="tg-header__area tg-header__style-eight">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo d-none">
                                <a href="{{ url('/') }}"><img src="{{ asset('front-assets/img/logo/logo.png') }}"
                                        alt="Logo" width="100px"></a>
                            </div>

                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="active"><a href="{{url('/')}}">Home</a> </li>
                                    <li class="menu-item-has-children"><a href="Email id.?">About us</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('director-messages')}}">Director Message</a></li>
                                            <li><a href="{{route('about-us')}}">About us </a></li>
                                            <li><a href="{{route('why-us')}}">Why Choose us</a></li>
                                            <li><a href="{{route('vision-mission')}}">Vision and Mission</a></li>
                                            <li><a href="{{route('disclaimer-center')}}">Disclaimer for Center and Student</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Courses</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('all-courses')}}">All Courses</a></li>
                                            <li><a href="{{route('all-courses')}}">Department Of Computer</a></li>
                                            <li><a href="{{route('all-courses')}}">Department Of Vocational Training </a></li>
                                            <li><a href="{{route('all-courses')}}">Department Of Beauty And Wellness </a></li>
                                            <li><a href="{{route('all-courses')}}">Department Of Teacher Training Courses </a></li>
                                            <li><a href="{{route('all-courses')}}">Department Of Fire And Safety</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Membership</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('mhrd-letter')}}">MHRD </a></li>
                                            <li><a href="{{route('qci')}}">QCI Member</a></li>
                                            <li><a href="{{route('iso')}}">ISO-Certification</a></li>
                                            <li><a href="{{route('mhrd-letter-govt-of-india')}}">MHRD Govt of India</a></li>
                                            <li><a href="{{route('niesbud-certification')}}">NIESBUD Certification</a></li>
                                            <li><a href="{{route('central-vigilance-commission')}}">Central Vigilance Commission</a></li>
                                            <li><a href="{{route('msde-aiiros')}}">MSDE </a></li>
                                            <li><a href="{{route('human-rights-aiiros')}}">Human Rights</a></li>
                                            <li><a href="{{route('ministry-of-labour')}}">Ministry of Labour</a></li>
                                            <li><a href="{{route('women')}}">National Commision For Women</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Student Zone</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('online-admission')}}">Admission Form </a></li>
                                            <li><a href="{{route('center-benefit')}}">Student Benefits </a></li>
                                            <li><a href="{{route('panelexam')}}">Exam </a></li>
                                            <li><a href="{{route('login')}}">Student Login </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Download </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('application-form')}}">Student Application Form </a></li>
                                            <li><a href="{{route('prospectus')}}"> Prospectus </a></li>
                                            <li><a href="{{route('application-form')}}">Admission Form </a></li>
                                            <li><a href="{{route('photo-gallery')}}">Photo Gallery </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Center Apply </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('apply-franchise')}}">Become a Traning Center </a></li>
                                            <li><a href="{{route('apply-for-certificate')}}"> Apply Certificate </a></li>
                                            <li><a href="{{route('center-benefit')}}">Centers Benefits </a></li>
                                            <li><a href="{{route('center-login')}}">Centers/Franchise Login </a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{route('photo-gallery')}}">Photo Gallery </a></li>
                                    <li class=""><a href="{{route('contact-us')}}">Contact us </a></li>
                                </ul>
                            </div>
                            <div class="mobile-login-btn">
                                <a href="login.html" id="user-icon">
                                    <img src="{{ asset('front-assets/img/icons/user.svg') }}" alt=""
                                        class="injectable">
                                </a>
                                <!-- Dropdown List -->
                                <div id="user-list" style="display: none;">
                                    <ul class="">
                                        <li class="center-det"><a href="{{route('center-login')}}">CENTER LOGIN</a> </li>
                                        <li class="center-det"><a href="{{route('login')}}">STUDENT LOGIN </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="tgmobile__menu">
                        <nav class="tgmobile__menu-box">
                            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                            <div class="nav-logo">
                                <a href="{{url('/')}}"><img src="{{ asset('front-assets/img/logo/logo.png') }}"
                                        alt="Logo"></a>
                            </div>
                            <div class="tgmobile__search">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="tgmobile__menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="tgmobile__menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>

    <!-- header-search -->
    <div class="search__popup">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search__wrapper">
                        <div class="search__close">
                            <button type="button" class="search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="search__form">
                            <form action="#">
                                <div class="search__input">
                                    <input class="search-input-field" type="text"
                                        placeholder="Type keywords here">
                                    <span class="search-focus-border"></span>
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentcolor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-popup-overlay"></div>
    <!-- header-search-end -->

</header>
<!-- header-area-end -->
