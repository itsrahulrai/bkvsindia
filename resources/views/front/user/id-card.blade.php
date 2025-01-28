@extends('front.layout.master')
@section('title', 'Result')
@section('style')
<!-- <style>
    .id-card {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        /* Added border to the ID card */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 20px;
        background-color: #f9f9f9;
        margin: 20px auto;
        /* Center card with auto margins */
        width: 400px;
        /* Set a fixed width for the ID card */
        box-sizing: border-box;
        /* Include border in width */
    }

    .logo {
        width: 400px;
        height: auto;
        margin-right: 20px;
        /* Spacing between logo and student details */
        border: none;
        /* Remove border from the logo */
    }

    .profile-image {
        width: 120px;
        height: 120px;
        border-radius: 10px;
        object-fit: cover;
        background-color: #ccc;
        /* Fallback color */
        margin-right: 20px;
        /* Spacing between image and details */
        border: none;
        /* Remove border from the profile image */
    }

    .student-details {
        flex-grow: 1;
        /* Allows details to take up remaining space */
        padding: 0px 10px;
        /* Add padding to the student details */
        box-sizing: border-box;
        /* Include padding in width */
    }

    .tab {
        border-collapse: collapse;
        /* Add border collapse to the table */
        border: 1px solid #ccc;
        /* Add border to the table */
    }

    .tab th,
    .tab td {
        border: 1px solid #ccc;
        /* Add border to the table cells */
        padding: 5px;
        /* Add padding to the table cells */
        text-align: left;
        /* Align text to the left */
    }

    .tab th {
        color: #333;
        /* Change color of table headers */
    }

    .tab td {
        color: #666;
        /* Change color of table cells */
    }

    .tab tr {
        border-bottom: 1px solid #ccc;
        /* Add border to the table rows */
    }

    .custom-logo {
        width: auto; /* Adjust width as needed */
        height: 50px; /* Maintain height */
        display: block; /* Center the logo block */
        margin: 0 auto; /* Center the logo */
        /* You can add more styles as needed */
    }
</style> -->

<style>
    .id-card {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 20px;
        background-color: #f9f9f9;
        margin: 20px auto;
        width: 300px;
        /* Set a smaller width for the ID card */
        box-sizing: border-box;
        /* Include border in width */
    }

    .logo {
        width: 300px;
        /* Adjust the logo width if necessary */
        height: auto;
        margin-right: 20px;
        border: none;
        /* Remove border from the logo */
    }

    .profile-image {
        width: 100px;
        /* Adjust profile image size if needed */
        height: 100px;
        /* Maintain height */
        border-radius: 10px;
        object-fit: cover;
        background-color: #ccc;
        /* Fallback color */
        margin-right: 10px;
        /* Spacing between image and details */
        border: none;
        /* Remove border from the profile image */
    }

    .student-details {
        flex-grow: 1;
        /* Allows details to take up remaining space */
        padding: 0px 10px;
        /* Add padding to the student details */
        box-sizing: border-box;
        /* Include padding in width */
    }

    .tab {
        border-collapse: collapse;
        /* Add border collapse to the table */
        border: 1px solid #ccc;
        /* Add border to the table */
    }

    .tab th,
    .tab td {
        border: 1px solid #ccc;
        /* Add border to the table cells */
        padding: 5px;
        /* Add padding to the table cells */
        text-align: left;
        /* Align text to the left */
    }

    .tab th {
        color: #333;
        /* Change color of table headers */
    }

    .tab td {
        color: #666;
        /* Change color of table cells */
    }

    .tab tr {
        border-bottom: 1px solid #ccc;
        /* Add border to the table rows */
    }

    .custom-logo {
        width: auto;
        /* Adjust width as needed */
        height: 50px;
        /* Maintain height */
        display: block;
        /* Center the logo block */
        margin: 0 auto;
        /* Center the logo */
        /* You can add more styles as needed */
    }

    
</style>
@endsection

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

                    <div class="col-lg-7">
                        <div class="dashboard__content-wrap">
                            <div class="dashboard__content-title">
                            </div>
                            <div id="id-card" style="border: 2px solid #FED078; border-radius: 10px; padding: 20px; background-color: #f9f9f9; display: flex; flex-direction: column; align-items: center;">
                                <!-- Logo Section -->
                                <div>
                                    <img src="{{ asset('bklogo.jpg') }}" alt="Logo" height="100" class="custom-logo">
                                </div>
                                <!-- ID Card Content -->
                                <div style="display: flex; align-items: center;">
                                    <div class="col-md-4 col-xs-4 text-center">
                                        <img src="{{ asset(@$student->photo) }}" alt="Profile Image" height="120" width="100" style="border-radius: 10px; object-fit: cover;" />
                                        <div style="margin-top: 10px;">
                                            <span style="font-size: 13px;">Seal & Sign Authority</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xs-7">
                                        <table class="tab mt-3" style="width: 100%; border-collapse: collapse; margin-left: 20px;">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 150px; font-size: 12px;">Student Name :</td>
                                                    <td style="font-size: 12px;">{{ $student->student_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px;">Enrollment No. :</td>
                                                    <td style="font-size: 12px;">{{ $student->enroll_no }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px;">Father Name :</td>
                                                    <td style="font-size: 12px;">{{ $student->father_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px;">Course :</td>
                                                    <td style="font-size: 12px;">{{ $student->course->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px;">Center Name :</td>
                                                    <td style="font-size: 12px;">{{ $student->center->center_code }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px;">Address :</td>
                                                    <td style="font-size: 12px;">,</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px;">Valid Date :</td>
                                                    <td style="font-size: 12px;">{{ \Carbon\Carbon::parse($student->registration_date)->format('Y') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Print Button -->
                            <div style="display: flex; justify-content: flex-end;">
                                <button type="button" class="btn btn-primary" style="margin-top: 10px;" onclick="printDiv('id-card')">Print ID Card</button>
                            </div>
                        </div>
                    </div>
                    <!-- id-card -->

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- dashboard-area-end -->

</main>
@endsection

@section('script')
<script>

</script>
@endsection