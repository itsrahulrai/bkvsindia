<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="BKVS - Online Courses & Education Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="site-url" content="{{ url('/') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- ---- Header link start ------- --}}

    @include('front.inc.head-link')

    {{-- Header link End --}}

@stack('style')
</head>

<body>

    {{-- Loader Start --}}

    @include('front.inc.loader')

    {{-- Loader End --}}

    {{-- Header Start --}}

    @include('front.inc.header')

    {{-- Header End --}}


    @yield('content')

    {{-- Footer  Start  --}}

    @include('front.inc.footer')

    {{-- Footer  End --}}

    {{-- Footer Link Start --}}

    @include('front.inc.footer-link')

    <!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}", "Success", {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 5000, // 5 seconds
            "positionClass": "toast-top-right"
        });
    @endif

    @if(session('error'))
        toastr.error("{{ session('error') }}", "Error", {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 5000, // 5 seconds
            "positionClass": "toast-top-right"
        });
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}", "Validation Error", {
                "closeButton": true,
                "progressBar": true,
                "timeOut": 5000, // 5 seconds
                "positionClass": "toast-top-right"
            });
        @endforeach
    @endif
</script>
    {{-- Footer Link End --}}
    @stack('script')


</body>

</html>
