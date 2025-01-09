<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
    <title>@yield('title') </title>
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
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('assets/admin/vendor/chartist/css/chartist.min.css')}}">
	<link href="{{asset('assets/admin/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{asset('assets/admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
	<!-- Style css -->
	<link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
	 <!-- Datatable -->
	 <link href="{{asset('assets/admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="{{asset('assets/admin/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	
	<!-- Toastr CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
       <!-- Include Dropify CSS -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">

        <!-- SweetAlert2 CSS -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

         
</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="waviy">
			<span style="--i:1">L</span>
			<span style="--i:2">o</span>
			<span style="--i:3">a</span>
			<span style="--i:4">d</span>
			<span style="--i:5">i</span>
			<span style="--i:6">n</span>
			<span style="--i:7">g</span>
			<span style="--i:8">.</span>
			<span style="--i:9">.</span>
			<span style="--i:10">.</span>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->

		<!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->

		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		@include('admin.includes.header')
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		@include('admin.includes.sidebar')
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
		@yield('content')
		</div>
		<!--**********************************
            Content body end
        ***********************************-->



		<!--**********************************
            Footer start
        ***********************************-->


		@include('admin.includes.footer')
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="{{asset('assets/admin/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

	<!-- Chart piety plugin files -->
	<script src="{{asset('assets/admin/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{asset('assets/admin/vendor/apexchart/apexchart.js')}}"></script>

	<script src="{{asset('assets/admin/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

	  <!-- Datatable -->
    <script src="{{asset('assets/admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/plugins-init/datatables.init.js')}}"></script>
	  <script src="{{asset('assets/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{asset('assets/admin/js/dashboard/dashboard-1.js')}}"></script>
	<script src="{{asset('assets/admin/js/custom.min.js')}}"></script>
	<script src="{{asset('assets/admin/js/deznav-init.js')}}"></script>
	<script src="{{asset('assets/admin/js/demo.js')}}"></script>
	<!-- <script src="{{asset('assets/admin/js/styleSwitcher.js')}}"></script> -->
 <!-- Include Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script>
		$(function() {
			$('#datetimepicker').datetimepicker({
				inline: true,
			});
		});

		$(document).ready(function() {
			$(".booking-calender .fa.fa-clock-o").removeClass(this);
			$(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
		});
	</script>
	<!-- <script>
    @if(session('success'))
        toastr.success("{{ session('success') }}", "Success", {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 5000, // 5 seconds
            "positionClass": "toast-top-right"
        });
    @endif
</script> -->

<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}", "Success", {
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




<script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '.delete-item', event => {
                event.preventDefault();

                const $row = $(event.currentTarget).closest('tr');
                const deleteUrl = $(event.currentTarget).attr('href');

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#F72B50',
                    cancelButtonColor: '#0E8A74',
                    confirmButtonText: "Yes, delete it!"
                }).then(result => {
                    if (result.isConfirmed) {
                        // Send an AJAX request to delete the item from the server
                        $.ajax({
                            type: 'POST',
                            url: deleteUrl,
                            data: {
                                _method: 'DELETE', // Include the method as hidden input
                            },
                            success: data => {
                                const {
                                    status,
                                    message
                                } = data;
                                const icon = status === 'success' ? 'success' : 'error';

                                Swal.fire({
                                    title: status === 'success' ? 'Deleted!' :
                                        'Error!',
                                    text: message,
                                    icon: icon
                                });

                                // If deletion is successful, remove the row from the table
                                if (status === 'success') {
                                    $row.remove();
                                }
                            },
                            error: (xhr, status, error) => {
                                console.error(xhr.responseText);
                            }
                        });
                    }
                });
            });
        });
    </script>

     <!-- Include Dropify JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        function deleteConfirm() {
            return confirm('Are you sure you want to delete this item?');
        }
        $('.dropify').dropify();

        // Used events
        var drEvent = $('.dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
    </script>
@stack('script')
</body>

</html>