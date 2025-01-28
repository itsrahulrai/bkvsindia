<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
      <!-- Title -->
	<title>Login - BKVS INDIA</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">

	<meta name="keywords" content="accommodation, admin dashboard, admin template, apartment, booking, bootstrap 5, dinning, hostel, hotel booking, hotel template, motel, resort, restaurant, room">
	<meta name="description" content="Innap is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various hotel booking and hotel template, booking, dinning, hostel, and other businesses">

	<meta property="og:title" content="Innap - Hotel Admin Dashboard Bootstrap Templates">
	<meta property="og:description" content="Innap is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various hotel booking and hotel template, booking, dinning, hostel, and other businesses">
	<meta property="og:image" content="https://innap.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/favicon.png')}}">
	<link href="{{asset('assets/admin/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">

</head>
<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="{{asset('assets/admin/images/bkvsindia.png')}}" class="dark-login" alt=""></a>
										<a href="index.html"><img src="{{asset('assets/admin/images/bkvsindia.png')}}" class="light-login" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form  method="POST" action="{{ route('frenchies.login') }}">
                                    @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Center Code</strong></label>
                                            <input type="text" name="center_code" value="{{ old('center_code') }}" class="form-control">
                                        </div>
                                        @if ($errors->has('email'))
                                        <code class="text-danger">{{ $errors->first('email') }}</code>
                                        @endif
                                        <div class="mb-3 position-relative">
                                            <label class="mb-1"><strong>Password</strong></label>
											<input type="text" name="center_code"  id="center_code" class="form-control" >
											<span class="show-pass eye">
											
												<i class="fa fa-eye-slash"></i>
												<i class="fa fa-eye"></i>
											
											</span>
                                            @if ($errors->has('password'))
                                             <code class="text-danger">{{ $errors->first('password') }}</code>
                                         @endif
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   <script src="{{asset('assets/admin/vendor/global/global.min.js')}}"></script>
   <script src="{{asset('assets/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/deznav-init.js')}}"></script>
	 <script src="{{asset('assets/admin/js/styleSwitcher.js')}}"></script>
</body>
</html>