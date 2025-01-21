    <!-- footer-area -->
    <footer class="footer__area footer__area-five">
        <div class="footer__top footer__top-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer__widget">
                            <div class="logo mb-35">
                                <a href="{{ url('/') }}"><img src="{{ asset('front-assets/img/logo/logo.png') }}"
                                        alt="img" style="background-color: #fff"></a>
                            </div>
                            <div class="footer__content">
                                <p>We, as an organization are known for providing computer and vocational education in
                                    rural area. </p>
                                <ul class="list-wrap">
                                    <li><a href="" class="text-light">BKVS INDIA, Near Nathu Sweets, Vikas Marg,
                                            Opp Pillar No-52, Laxmi Nagar, Nirman Vihar, New Delhi</a></li>
                                    <li><a href="tel:9643907483" class="text-light">+91 9643907483</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Useful Links</h4>
                            <div class="footer__link">
                                <ul class="list-wrap">
                                    <li><a href="{{ route('vision-mission') }}">Vision Mission</a></li>
                                    <li><a href="{{ route('about-us') }}">About us </a></li>
                                    <li><a href="{{ route('photo-gallery') }}">Photo Gallery</a></li>
                                    <li><a href="{{ route('director-messages') }}">Director Messages</a></li>
                                    <li><a href="{{ route('blog') }}">Our Blog</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Our Company</h4>
                            <div class="footer__link">
                                <ul class="list-wrap">
                                    <li><a href="{{ route('application-form') }}">Apply For Admission </a></li>
                                    <li><a href="{{ route('login') }}">Student Login</a></li>
                                    <li><a href="{{ route('apply-franchise') }}">Apply For Franchise</a></li>
                                    <li><a href="{{ route('apply-for-certificate') }}">Apply for Certificate</a></li>
                                    <li><a href="{{ route('all-courses') }}">Our Courses</a></li>
                                    <li><a href="{{ route('center-benefit') }}">Student Benefits</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Follow us</h4>
                            <div class="footer__contact-content">
                                <ul class="list-wrap footer__social">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="{{ asset('front-assets/img/icons/facebook.svg') }}"
                                                alt="img" class="injectable">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="{{ asset('front-assets/img/icons/twitter.svg') }}" alt="img"
                                                class="injectable">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="{{ asset('front-assets/img/icons/whatsapp.svg') }}"
                                                alt="img" class="injectable">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="{{ asset('front-assets/img/icons/instagram.svg') }}"
                                                alt="img" class="injectable">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <img src="{{ asset('front-assets/img/icons/youtube.svg') }}" alt="img"
                                                class="injectable">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-download">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3246.6164591105135!2d77.27758589999999!3d28.6307117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfde58862464d%3A0xd7d822bae15ba145!2sBKVS%20INDIA!5e1!3m2!1sen!2sin!4v1736921214975!5m2!1sen!2sin"
                                    width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom footer__bottom-four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="copy-right-text">
                        <p>© 2010 - <?= date('Y') ?> BKVS INDIA. All Rights Reserved.</p>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer__bottom-menu">
                            <ul class="list-wrap">
                                <li><a href="contact.html">Term of Use</a></li>
                                <li><a href="contact.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
