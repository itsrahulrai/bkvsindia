<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="images/fav-icon.png">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
        body {}

        .main_box {
            border: 1px solid #000;
        }

        .container {
            width: 980px;
            margin: 0px auto;
            font-family: calibri;
            position: absolute;
            a top: 0px;
            left: 0;
        }

        table {
            border: 0px solid #000;
            position: absolute;
            top: 20px;
            left: 16px;
            width: 900px;
        }

        p {
            font-size: 16px;
            padding: 0px;
            margin: 0px 0 4px;
        }

        tr,
        td {
            font-size: 15px;
            font-weight: bold;
        }

        .pad {
            padding: 2px;
        }

        .top-part {
            background: #ffffff;
            /* Old browsers */
            background: -moz-linear-gradient(top, #ffffff 0%, #fcfcfc 71%, #f2f2f2 100%);
            /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(71%, #fcfcfc), color-stop(100%, #f2f2f2));
            /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #ffffff 0%, #fcfcfc 71%, #f2f2f2 100%);
            /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #ffffff 0%, #fcfcfc 71%, #f2f2f2 100%);
            /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #ffffff 0%, #fcfcfc 71%, #f2f2f2 100%);
            /* IE10+ */
            background: linear-gradient(to bottom, #ffffff 0%, #fcfcfc 71%, #f2f2f2 100%);
            /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f2f2f2', GradientType=0);
            /* IE6-9 */
        }

        .border_new {
            border-right: 0px solid #ccc;
        }

        .address p span {
            font-weight: bold;
        }

        .border_sub {
            border: 0px solid #ccc;
            text-align: center;
        }

        .border_sub p {
            margin-top: 8px;
        }

        .logo {
            width: 71px;
            text-align: right;
        }

        .clmn {
            margin-left: 30px;
        }

        .certi {
            margin-top: 20px;
        }

        .img_clients {
            margin-top: 30px;
        }

        .img_clients {
            width: 100%;
            height: 170px;
            overflow: hidden;
        }

        .img_clients img {
            height: 170px;
            width: 100%;
        }

        .main-box-bg-top {
            background: #fff;
            padding: 15px;
        }

        .top-nav h2 {
            font-family: 'Courgette', cursive;
        }

        .top-nav h2 span {
            border-bottom: 0px solid #4CA0DF;
        }

        .top-nav ul {
            list-style-type: none;
        }

        .top-nav ul li {
            display: inline-block;
            padding: 7px;
            border-right: 0px solid #eee;
        }

        .top-nav ul li a:hover {
            text-decoration: none;
        }

        .social {
            border: 0px solid #f2f2f2;
            margin-top: -10px;
        }

        .social ul {
            list-style-type: none;
            margin-left: -35px;
            margin-top: 22px;
        }

        .social ul li {
            display: inline-table;
            margin-left: 10px;
        }

        .logo img {
            margin-top: -71px;
            margin-left: 183px;
        }

        .address h1 {
            color: #016FC1;
            font-size: 23px;
            font-weight: bold;
        }

        .cargo p {
            padding: 10px;
        }

        .back-to-top {
            position: fixed;
            bottom: 2em;
            right: 0px;
            text-decoration: none;
            padding: 1em;
            display: none;
        }

        .heading {
            border: 0px solid #ccc;
            padding: 5px 5px 0px;
            background: #0170C1;
            color: #fff;
            font-size: 22px;
        }

        .heading h1 {
            font-size: 22px;
            margin-top: 3px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .consignee {
            border: 0px solid #ccc;
            padding: 9px;
            margin-top: -4px;
        }

        .table_new tr td {
            border: 0px solid #000;
            padding: 4px;
        }

        .bank {
            background: #0170C1;
            color: #fff
        }

        .bank h4 {
            padding: 8px;
            text-align: center;
        }

        .text_bg {
            background: #0170C1;
            color: #fff;
        }

        .new_side_row {
            border: 0px solid #ccc;
            margin-top: -2px;
        }

        .new_side_row p {
            padding: 10.2px;
        }

        .sub td {
            border: 0px solid #ccc;
            margin-left: -2px;
        }

        .container {
            width:
        }

        .new {
            border: none !important;
            margin-top: 20px;
        }

        .image {
            position: relative;
            width: 100%;
            /* for IE 6 */
        }

        #main {
            position: absolute;
            top: 0px;
            left: 0;
            width: 100%;
        }
    </style>

</head>

<body>
    <div class="marksheet-bg" style="background: url('{{ asset('marksheet/marksheet.jpg') }}'); height: 1380px; width: 980px;">
        <table width="980" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <div class="image">
                        <!--<img src="images/bg2.jpg" alt="" width="100%" />-->
                        <div id="main">

                            <table width="980" border="0" align="center" cellspacing="0" cellpadding="0">

                                @if(isset($firstMarksheet) && isset($firstCourseDetails))
                                <tr>
                                    <td align="left">
                                        <table align="left" border="0">
                                            <tr>
                                                <td colspan="10" height="75">&nbsp;</td>
                                            </tr>
                                            <tr>

                                                <td style="font-size:22px; font-family:calibri; font-weight:bold; padding-top:115px; padding-left: 15px;" align="left" colspan="3">Sr No:&nbsp;12660855</td>



                                                <td colspan="2" style="font-size:22px; font-family:calibri; font-weight:bold; padding-top:115px; padding-right: 30px;" align="right">&nbsp; Enrollment No: {{$firstMarksheet->enroll_no}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                        <table width="1100" border="0" align="center" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td colspan="10" height="170">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="10" height="125">&nbsp;</td>
                                            </tr>





                                            <tr>
                                                <td colspan="10" height="60" style="font-size:25px; text-align:center; font-family:calibri; text-transform:uppercase;">
                                                    <br>{{$firstMarksheet->course->name}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="font-size:16px; font-family:calibri; padding:2px;">Student Name</td>
                                                <td colspan="4" style="font-size:16px; font-family:calibri; padding:4px;">: &nbsp; &nbsp; {{$firstMarksheet->student_name}} </td>
                                                <td align="left" colspan="2" rowspan="4">
                                                    <img src="{{asset($firstMarksheet->photo)}}" width="100" height="100">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="font-size:16px; font-family:calibri; padding:4px;">Father’s/Husb. Name</td>
                                                <td colspan="4" style="font-size:16px; font-family:calibri; padding:4px;">: &nbsp; &nbsp; {{$firstMarksheet->father_name}} </td>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="font-size:16px; font-family:calibri; padding:4px;">Mother Name</td>
                                                <td colspan="4" style="font-size:16px; font-family:calibri; padding:4px;">: &nbsp; &nbsp; {{$firstMarksheet->mother_name}}</td>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="font-size:16px; font-family:calibri; padding:4px;">Date of Birth</td>
                                                <td colspan="4" style="font-size:16px; font-family:calibri; padding:4px;">: &nbsp; &nbsp; {{$firstMarksheet->dob}}</td>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="font-size:16px; font-family:calibri; padding:4px;">Roll No.</td>
                                                <td colspan="4" style="font-size:16px; font-family:calibri; padding:2px;">: &nbsp; &nbsp; {{$firstMarksheet->roll_no}}</td>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="font-size:16px; font-family:calibri; padding:2px;">Session</td>
                                                <td colspan="4" style="font-size:16px; font-family:calibri; padding:2px;">: &nbsp; &nbsp; {{
                                                        $firstMarksheet->course_program == 'one_year'
                                                            ? ($firstMarksheet->start_session ?? '') . '-' . ($firstMarksheet->end_session ?? '')
                                                            : ($firstMarksheet->start_session_first ?? '') . '-' . ($marksheet->end_session_second ?? '')
                                                     }}</td>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="10" height="50" style="font-size:24px; text-align:center; font-family:calibri;">Statement of Marks
                                                    Year I</td>
                                            </tr>

                                            @endif

                                            @if(isset($secondMarksheet) && isset($secondCourseDetails))

                                            <!-- 2nd Years Markshet -->

                                            <tr>
                                                <td align="left">
                                                    <table align="left" border="0">
                                                        <tr>
                                                            <td colspan="10" height="75">&nbsp;</td>
                                                        </tr>
                                                        <tr>

                                                            <td style="font-size:22px; font-family:calibri; font-weight:bold; padding-top:115px; padding-left: 15px;" align="left" colspan="3">Sr No:&nbsp;12660855</td>



                                                            <td colspan="2" style="font-size:22px; font-family:calibri; font-weight:bold; padding-top:115px; padding-right: 30px;" align="right">&nbsp; Enrollment No: {{$secondMarksheet->enroll_no}}</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>

                                                    <table width="1100" border="0" align="center" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td colspan="10" height="170">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="10" height="125">&nbsp;</td>
                                                        </tr>





                                                        <tr>
                                                            <td colspan="10" height="60" style="font-size:25px; text-align:center; font-family:calibri; text-transform:uppercase;">
                                                                <br>{{$secondMarksheet->course->name}}
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td style="font-size:16px; font-family:calibri; padding:2px;">Student Name</td>
                                                            <td colspan="4" style="font-size:16px; font-family:calibri; padding:4px;">: &nbsp; &nbsp; {{$secondMarksheet->student_name}} </td>
                                                            <td align="left" colspan="2" rowspan="4">
                                                                <img src="{{asset($secondMarksheet->photo)}}" width="100" height="100">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td style="font-size:16px; font-family:calibri; padding:4px;">Father’s/Husb. Name</td>
                                                            <td colspan="4" style="font-size:16px; font-family:calibri; padding:4px;">: &nbsp; &nbsp; {{$secondMarksheet->father_name}} </td>
                                                            <td colspan="2">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td style="font-size:16px; font-family:calibri; padding:4px;">Mother Name</td>
                                                            <td colspan="4" style="font-size:16px; font-family:calibri; padding:4px;">: &nbsp; &nbsp; {{$secondMarksheet->mother_name}}</td>
                                                            <td colspan="2">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td style="font-size:16px; font-family:calibri; padding:4px;">Date of Birth</td>
                                                            <td colspan="4" style="font-size:16px; font-family:calibri; padding:4px;">: &nbsp; &nbsp; {{$secondMarksheet->dob}}</td>
                                                            <td colspan="2">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td style="font-size:16px; font-family:calibri; padding:4px;">Roll No.</td>
                                                            <td colspan="4" style="font-size:16px; font-family:calibri; padding:2px;">: &nbsp; &nbsp; {{$secondMarksheet->roll_no}}</td>
                                                            <td colspan="2">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td style="font-size:16px; font-family:calibri; padding:2px;">Session</td>
                                                            <td colspan="4" style="font-size:16px; font-family:calibri; padding:2px;">: &nbsp; &nbsp; {{
                                                        $secondMarksheet->course_program == 'one_year'
                                                            ? ($secondMarksheet->start_session ?? '') . '-' . ($secondMarksheet->end_session ?? '')
                                                            : ($secondMarksheet->start_session_first ?? '') . '-' . ($secondMarksheet->end_session_second ?? '')
                                                     }}</td>
                                                            <td colspan="2">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="10" height="50" style="font-size:24px; text-align:center; font-family:calibri;">Statement of Marks
                                                                Year II</td>
                                                        </tr>


                                                        <!-- 2nd Year Marksheet -->
                                                        @endif

                                                        @if(isset($firstMarksheet) && isset($firstCourseDetails))
                                                        <!-- Display First Year Data -->

                                                        <div>
                                                            <tr>
                                                                <td width="65" height="30">&nbsp;</td>
                                                                <td align="center" rowspan="2" width="30" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid;"><strong>Code</strong></td>
                                                                <td rowspan="2" align="center" width="300" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Subjects</strong></td>
                                                                <td colspan="3" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Marks Obtained</strong></td>
                                                                <td width="60" rowspan="2" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Minimum Marks</strong></td>
                                                                <td width="80" rowspan="2" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Maximum Marks</strong></td>
                                                                <td width="80" rowspan="2" align="center" style="font-size:15px; border-right:2px #000000 solid; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Grade</strong></td>
                                                                <td width="66">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="65" height="30">&nbsp;</td>
                                                                <td width="40" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Marks</strong></td>
                                                                <td width="50" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Internal</strong></td>
                                                                <td width="70" align="center" style="font-size:15px; font-family:calibri; border-right:0px #000000 solid; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Total Marks</strong></td>
                                                                <td width="66">&nbsp;</td>
                                                            </tr>
                                                            @php
                                                            // Initialize totals for all subjects
                                                            $totalMarksObtained = $totalInternalMarks = $totalMarks2 = $totalMaximumMarks = 0;

                                                            // Helper function for determining grade
                                                            function getGradeA($percentage) {
                                                            if ($percentage >= 90) return 'A+';
                                                            if ($percentage >= 75) return 'A';
                                                            if ($percentage >= 70) return 'B+';
                                                            if ($percentage >= 60) return 'B';
                                                            if ($percentage >= 50) return 'C+';
                                                            if ($percentage >= 40) return 'C';
                                                            if ($percentage >= 32) return 'D+';
                                                            if ($percentage >= 20) return 'D';
                                                            return 'E';
                                                            }
                                                            @endphp
                                                            
                                                            @php                                                                    
                                                                $totalMarksObtained = 0;
                                                                $totalInternalMarks = 0;
                                                                $totalMarks1 = 0;  // Initialize $totalMarks1
                                                                $totalMaximumMarks = 0;
                                                             @endphp

                                                            @foreach($firstCourseDetails as $course)
                                                            @foreach ($course->subjects as $index => $subject)
                                                            @php
                                                            // Retrieve subject data dynamically
                                                            $subjectData = $firstSubjectsData[$index] ?? [];
                                                            $marksObtained = $subjectData['marks_obtained'] ?? 0;
                                                            $internalMarks = $subjectData['internal_marks'] ?? 0;
                                                            $maximumMarks = $subject->maximum_marks ?? 0;
                                                            $totalMarks = $marksObtained + $internalMarks;

                                                            // Sum up total marks for calculations
                                                            $totalMarksObtained += $marksObtained;
                                                            $totalInternalMarks += $internalMarks;
                                                            $totalMarks1 += $totalMarks;
                                                            $totalMaximumMarks += $maximumMarks;

                                                            // Calculate percentage and grade
                                                            $percentage = $maximumMarks > 0 ? ($totalMarks / $maximumMarks) * 100 : 0;
                                                            $grade = getGradeA($percentage);
                                                            @endphp

                                                            <tr height="30">
                                                                <td width="55" height="20">&nbsp;</td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:2px #000000 solid;">
                                                                    <strong>{{ $subject->subject_code }}</strong>
                                                                </td>
                                                                <td style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $subject->subject_name }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $marksObtained }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $internalMarks }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalMarks }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $subject->minimum_marks ?? 'Not Available' }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $maximumMarks }} </strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; border-right:2px #000000 solid; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $grade }}</strong>
                                                                </td>
                                                                <td width="55">&nbsp;</td>
                                                            </tr>
                                                            @endforeach
                                                            @endforeach

                                                            @php
                                                            // Calculate total percentage and grade
                                                            $totalPercentage = $totalMaximumMarks > 0 ? ($totalMarks1 / $totalMaximumMarks) * 100 : 0;
                                                            $formattedPercentage = number_format($totalPercentage, 2);
                                                            $totalGrade = getGradeA($totalPercentage);
                                                            @endphp

                                                            <tr height="30">
                                                                <td width="55" height="20">&nbsp;</td>
                                                                <td align="center" colspan="2" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid;">TOTAL</td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalMarksObtained }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalInternalMarks }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalMarks1 }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $firstTotalMinimumMarks ?? '00' }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $firstTotalMaximumMarks }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; border-right:2px #000000 solid; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalGrade }}</strong>
                                                                </td>
                                                                <td width="55">&nbsp;</td>
                                                            </tr>






                                                            <tr height="30">
                                                                <td width="55" height="20">&nbsp;</td>
                                                                <td align="center" colspan="3" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid; border-bottom:2px #000000 solid;">Result</td>
                                                                <td align="center" colspan="2" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid; border-bottom:2px #000000 solid;">Pass</td>
                                                                <td align="center" colspan="2" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid; border-bottom:2px #000000 solid;">Percentage</td>
                                                                <td align="center" style="font-size:17px; border-right:2px #000000 solid; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid; border-bottom:2px #000000 solid;"><strong>{{$formattedPercentage}}%</strong></td>
                                                                <td width="55">&nbsp;</td>
                                                            </tr>

                                                        </div>

                                                        @endif

                                                        @if(isset($secondMarksheet) && isset($secondCourseDetails))
                                                        <!-- Display Second Year Data -->
                                                        <div>
                                                            <tr>
                                                                <td width="65" height="30">&nbsp;</td>
                                                                <td align="center" rowspan="2" width="30" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid;"><strong>Code</strong></td>
                                                                <td rowspan="2" align="center" width="300" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Subjects</strong></td>
                                                                <td colspan="3" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Marks Obtained</strong></td>
                                                                <td width="60" rowspan="2" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Minimum Marks</strong></td>
                                                                <td width="80" rowspan="2" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Maximum Marks</strong></td>
                                                                <td width="80" rowspan="2" align="center" style="font-size:15px; border-right:2px #000000 solid; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;"><strong>Grade</strong></td>
                                                                <td width="66">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="65" height="30">&nbsp;</td>
                                                                <td width="40" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Marks</strong></td>
                                                                <td width="50" align="center" style="font-size:15px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Internal</strong></td>
                                                                <td width="70" align="center" style="font-size:15px; font-family:calibri; border-right:0px #000000 solid; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Total Marks</strong></td>
                                                                <td width="66">&nbsp;</td>
                                                            </tr>
                                                            @php
                                                            // Initialize totals for all subjects
                                                            $totalMarksObtained = $totalInternalMarks = $totalMarks2 = $totalMaximumMarks = 0;

                                                            // Helper function for determining grade
                                                            function getGrade($percentage) {
                                                            if ($percentage >= 90) return 'A+';
                                                            if ($percentage >= 75) return 'A';
                                                            if ($percentage >= 70) return 'B+';
                                                            if ($percentage >= 60) return 'B';
                                                            if ($percentage >= 50) return 'C+';
                                                            if ($percentage >= 40) return 'C';
                                                            if ($percentage >= 32) return 'D+';
                                                            if ($percentage >= 20) return 'D';
                                                            return 'E';
                                                            }
                                                            @endphp

                                                            @foreach($secondCourseDetails as $course)
                                                            @foreach ($course->subjects as $index => $subject)
                                                            @php
                                                            // Get marks data for each subject
                                                            $subjectData = $secondSubjectsData[$index] ?? [];
                                                            $marksObtained = $subjectData['marks_obtained'] ?? 0;
                                                            $internalMarks = $subjectData['internal_marks'] ?? 0;
                                                            $maximumMarks = $subject->maximum_marks ?? 0;
                                                            $totalMarks = $marksObtained + $internalMarks;

                                                            // Sum up total marks for calculations
                                                            $totalMarksObtained += $marksObtained;
                                                            $totalInternalMarks += $internalMarks;
                                                            $totalMarks2 += $totalMarks;
                                                            $totalMaximumMarks += $maximumMarks;

                                                            // Calculate percentage
                                                            $percentage = $maximumMarks > 0 ? ($totalMarks / $maximumMarks) * 100 : 0;
                                                            $grade = getGrade($percentage);
                                                            @endphp

                                                            <tr height="30">
                                                                <td width="55" height="20">&nbsp;</td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:2px #000000 solid;">
                                                                    <strong>{{ $subject->subject_code }}</strong>
                                                                </td>
                                                                <td style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $subject->subject_name }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $marksObtained }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $internalMarks }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalMarks }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $subject->minimum_marks ?? 'Not Available' }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $maximumMarks }} </strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; border-right:2px #000000 solid; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $grade }}</strong>
                                                                </td>
                                                                <td width="55">&nbsp;</td>
                                                            </tr>
                                                            @endforeach
                                                            @endforeach

                                                            @php
                                                            // Calculate total percentage and grade
                                                            $totalPercentage = $totalMaximumMarks > 0 ? ($totalMarks2 / $totalMaximumMarks) * 100 : 0;
                                                            $formattedPercentage = number_format($totalPercentage, 2);
                                                            $totalGrade = getGrade($totalPercentage);
                                                            @endphp
                                                            <tr height="30">
                                                                <td width="55" height="20">&nbsp;</td>
                                                                <td align="center" colspan="2" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid;">TOTAL</td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalMarksObtained }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalInternalMarks }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalMarks2 }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $secondTotalMinimumMarks ?? 'Not Available' }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $secondTotalMaximumMarks }}</strong>
                                                                </td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; border-right:2px #000000 solid; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid;">
                                                                    <strong>{{ $totalGrade }}</strong>
                                                                </td>
                                                                <td width="55">&nbsp;</td>
                                                            </tr>






                                                            <tr height="30">
                                                                <td width="55" height="20">&nbsp;</td>
                                                                <td align="center" colspan="3" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid; border-bottom:2px #000000 solid;">Result</td>
                                                                <td align="center" colspan="2" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid; border-bottom:2px #000000 solid;">Pass</td>
                                                                <td align="center" colspan="2" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:2px #000000 solid; border-bottom:2px #000000 solid;">Percentage</td>
                                                                <td align="center" style="font-size:17px; border-right:2px #000000 solid; font-family:calibri; font-weight:bold; padding:2px; border-top:2px #000000 solid; border-left:1px #000000 solid; border-bottom:2px #000000 solid;"><strong>{{$formattedPercentage}}%</strong></td>
                                                                <td width="55">&nbsp;</td>
                                                            </tr>


                                                          


                                                          

                                                        </div>

                                                        @if(isset($firstMarksheet) && isset($firstCourseDetails))
                                                        <!-- Display First Year Data -->

                                                        
                                                            @php
                                                            // Initialize totals for all subjects
                                                            $totalMarksObtained = $totalInternalMarks = $totalMarks2 = $totalMaximumMarks = 0;

                                                            // Helper function for determining grade
                                                            function getGradeA($percentage) {
                                                            if ($percentage >= 90) return 'A+';
                                                            if ($percentage >= 75) return 'A';
                                                            if ($percentage >= 70) return 'B+';
                                                            if ($percentage >= 60) return 'B';
                                                            if ($percentage >= 50) return 'C+';
                                                            if ($percentage >= 40) return 'C';
                                                            if ($percentage >= 32) return 'D+';
                                                            if ($percentage >= 20) return 'D';
                                                            return 'E';
                                                            }
                                                            @endphp
                                                            
                                                            @php                                                                    
                                                                $totalMarksObtained = 0;
                                                                $totalInternalMarks = 0;
                                                                $totalMarks1 = 0;  // Initialize $totalMarks1
                                                                $totalMaximumMarks = 0;
                                                             @endphp

                                                            @foreach($firstCourseDetails as $course)
                                                            @foreach ($course->subjects as $index => $subject)
                                                            @php
                                                            // Retrieve subject data dynamically
                                                            $subjectData = $firstSubjectsData[$index] ?? [];
                                                            $marksObtained = $subjectData['marks_obtained'] ?? 0;
                                                            $internalMarks = $subjectData['internal_marks'] ?? 0;
                                                            $maximumMarks = $subject->maximum_marks ?? 0;
                                                            $totalMarks = $marksObtained + $internalMarks;

                                                            // Sum up total marks for calculations
                                                            $totalMarksObtained += $marksObtained;
                                                            $totalInternalMarks += $internalMarks;
                                                            $totalMarks1 += $totalMarks;
                                                            $totalMaximumMarks += $maximumMarks;

                                                           

                                                           
                                                            @endforeach
                                                            @endforeach


                                                     

                                                        @endif


                                                        <tr height="30">
                                                                <td width="65" height="20">&nbsp;</td>
                                                                <td colspan="10" align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; text-align:center;">AGGREGATE MARKS</td>
                                                                <td style="font-size:20px; font-family:calibri; font-weight:bold;;"></td>
                                                                <td width="66">&nbsp;</td>
                                                            </tr>
                                                        <tr height="30">
                                                                <td width="65" height="20">&nbsp;</td>
                                                                <td width="30" align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:2px #000000 solid;"><strong>Year/Semester</strong></td>
                                                                <td width="300" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>First</strong></td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Second</strong></td>


                                                                <td align="center" colspan="3" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Grand Total</strong></td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>Result</strong></td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; border-right:2px #000000 solid; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>D/G</strong></td>
                                                                <td width="55">&nbsp;</td>
                                                            </tr>

                                                            <tr height="30">
                                                                <td width="65" height="27">&nbsp;</td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:2px #000000 solid;"><strong>Max. Marks</strong></td>
                                                                <td style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>00</strong></td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;"><strong>{{ $totalMaximumMarks }}</strong></td>

                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid;" colspan="3"><strong>1400</strong></td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid; border-bottom:1px #000000 solid;" rowspan="2"><strong>Pass</strong></td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; border-right:2px #000000 solid; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid; border-bottom:1px #000000 solid;" rowspan="2"><strong>
                                                                        1st/
                                                                        B+ </strong></td>
                                                            </tr>

                                                            <tr height="20" style="border-bottom:1px solid #000">
                                                                <td width="65" height="27">&nbsp;</td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:2px #000000 solid; border-bottom:1px #000000 solid;"><strong>Marks</strong></td>
                                                                <td style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid; border-bottom:1px #000000 solid;"><strong>{{ $totalMaximumMarks }}</strong></td>
                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid; border-bottom:1px #000000 solid;"><strong>{{ $totalMarks2 }}</strong></td>

                                                                <td align="center" style="font-size:17px; font-family:calibri; font-weight:bold; padding:2px; border-top:1px #000000 solid; border-left:1px #000000 solid; border-bottom:1px #000000 solid; width:200px" colspan="3"><strong>1015</strong></td>

                                                            </tr>


                                                        @endif
                                                        

                                                    </table>
                                                </td>
                                            </tr>

                                        </table>



                        </div>
                    </div>
                </td>
            </tr>

        </table>
        <div style="position: absolute;
  left: 0;
  right: 0;
  top:1165px;">
            <table>

                <body>
                    <tr>&nbsp;<td style=" margin-top:10px; padding-top:60px; padding-left:80px;" align="left; height:10px;" colspan="3"><img src="barcode.gif" style="height:65px;"></td>
                    </tr>

                    <tr>

                        <td style="font-size:22px; font-family:calibri; padding-top:1px; padding-right:5px; padding-left: 45px;" align="left" colspan="3"><strong>Dated : <u>24-03-2017</u></strong></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td style="font-size:22px; font-family:calibri; padding-top:1px;" align="left" colspan="3"><strong>Examination Controller</strong></td>
                        <td style="font-size:22px; font-family:calibri; padding-top:1px;" align="right" colspan="3"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Director</strong></td>

                    </tr>
        </div>
</body>
</table>
</div>
</body>

</html>