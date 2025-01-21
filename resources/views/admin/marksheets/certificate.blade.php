<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="images/fav-icon.png">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <style>
        .certificate-bg {
            background: url("{{asset('certificate/certificatenew.jpg')}}");
            height: 1380px;
            width: 980px;
        }
    </style>
</head>

<body style="height:px;">
    <div class="certificate-bg">
        <table width="900" border="0" cellspacing="0" cellpadding="0" style="padding-left: 40px;padding-top: 12px;">
            <tr>
                <td>
                    <table width="900" border="0" align="center" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="60">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>

                                        <td width="150" style="font-size: 22px;font-family: calibri;font-weight: bold;padding-top: 0px;padding-left: 2px;" align="right">&nbsp;<br> Serial No.</td>
                                        <td style="font-size:22px; font-family:calibri; font-weight:bold; padding:5px;">&nbsp;<br> 12660852</td>
                                        <td width="200" rowspan="3" valign="top" style="padding:10px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="300">&nbsp;</td>k
                                    </tr>
                                    <div style="margin-top:-25px; ;">
                                        <tr>
                                            <td align="right"><img src="{{ asset($certificate->photo)}}" width="100" /></td>
                                            <td style="font-size:34px; font-family:calibri; font-weight:bold; padding:5px;padding-left: 65px;" align="center" valign="middle">THIS IS CERTIFY THAT MR./MRS.</td>
                                        </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:38px; text-align:center; font-family:calibri; font-weight:bold;">{{$certificate->student_name}}</td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:28px; text-align:center; font-family:calibri; font-weight:bold;">Son / Daughter of</td>
                        </tr>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:34px; text-align:center; font-family:calibri; font-weight:bold;">{{ $certificate->father_name}}</td>
                        </tr>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:28px; text-align:center; font-family:calibri; font-weight:bold;">Enrollment No. : {{ $certificate->enroll_no}}</td>
                        </tr>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:28px; text-align:center; font-family:calibri; font-weight:bold;">{{$centerName->institute_name}}</td>
                        </tr>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:25px; text-align:center; font-family:calibri; font-weight:bold;">has been Completed the Diploma of</td>
                        </tr>

                        <tr>
                            <td height="50" style="font-size:25px; text-align:center; font-family:calibri; font-weight:bold;">{{$certificate->course->name}}</td>
                        </tr>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:34px; text-align:center; font-family:calibri; font-weight:bold;">with B+ Grade </td>
                        </tr>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:25px; text-align:center; font-family:calibri; font-weight:bold;">given under the seal of </td>
                        </tr>
                        <tr>
                            <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="50" style="font-size:50px; text-align:center; font-family:calibri; font-weight:bold;">Bhartiya Kaushal Vikas Sansthan</td>
                        </tr>
                        <tr>
                            <td height="52">&nbsp;</td>
                        </tr>


                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                <tr>
                                    <td width="150" style="font-size:20px; font-family:calibri; font-weight:bold; padding-top:10px;" align="center"><br></td>
                                    <td height="10" style="font-size:20px; text-align:center; font-family:calibri; font-weight:bold; padding-top:0px;"><br>{{$certificate->registration_date}}</td>
                                    <td width="150" style="font-size:20px; font-family:calibri; font-weight:bold; padding-top:5px;" align="center"></td>
                                </tr>
                            </table>
                        </td>
            </tr>
        </table>
        </td>
        </tr>
    </div>
    </table>
    </div>
</body>

</html>