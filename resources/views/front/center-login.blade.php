@extends('front.layout.master')
@section('title', 'Center Zone Login')
@section('content')


    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg"
            data-background="{{ asset('front-assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Center Zone Login</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Center Zone Login</span>
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

        <!-- singUp-area -->
        <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
                            <h2 class="title text-center">Center Zone Login</h2>
                            <form method="POST" action="{{ route('login') }}" class="account__form">
                                @csrf
                                <div class="form-grp">
                                    <label for="email">Email</label>
                                    <input id="email" class="input100" type="text" name="email"
                                        value="{{ old('email') }}" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <code class="text-danger">{{ $errors->first('email') }}</code>
                                    @endif
                                </div>
                                <div class="form-grp">
                                    <label for="password">Password</label>
                                    <input id="password" class="input100" type="password" name="password"
                                        placeholder="Password">
                                    @if ($errors->has('password'))
                                        <code class="text-danger">{{ $errors->first('password') }}</code>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">
                                    Sign In
                                    <img src="{{ asset('front-assets/img/icons/right_arrow.svg') }}" alt="img"
                                        class="injectable">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- singUp-area-end -->


    </main>


@endsection
