<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Center;
use App\Models\Certificate;
use App\Models\CourseDetail;
use App\Models\Marksheet;

class MarksheetController extends Controller
{

    // public function firstYear($id)
    // {
    //     try {
    //         $marksheet = Admission::select(
    //             'id',
    //             'center_id',
    //             'photo',
    //             'enroll_no',
    //             'roll_no',
    //             'student_name',
    //             'father_name',
    //             'mother_name',
    //             'dob',
    //             'start_session',
    //             'end_session',
    //             'end_session_first',
    //             'start_session_first',
    //             'start_session_second',
    //             'end_session_second',
    //             'registration_date',
    //             'course_id',
    //             'course_program'
    //         )->with(['course'])->findOrFail($id);

    //         if ($marksheet->course_program == 'one_year') {
    //             $courseDetails = CourseDetail::with('subjects')
    //                 ->where('course_id', $marksheet->course_id)
    //                 ->where('semester', 1)
    //                 ->get();
    //         } else {
    //             $courseDetails = CourseDetail::with('subjects')
    //                 ->where('course_id', $marksheet->course_id)
    //                 ->where('semester', 1) 
    //                 ->get();
    //         }
    //         $totalMaximumMarks = 0;
    //         $totalMinimumMarks = 0;

    //         foreach ($courseDetails as $courseDetail) {
    //             // Ensure the course detail has subjects before summing
    //             if ($courseDetail->subjects) {
    //                 $totalMaximumMarks += $courseDetail->subjects->sum('maximum_marks');
    //                 $totalMinimumMarks += $courseDetail->subjects->sum('minimum_marks');
    //             }
    //         }

    //         $marks = Marksheet::where('admission_id', $marksheet->id)->first();

    //         // Check if subjects_data is a string (JSON) or already an array
    //         $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

    //         return view('admin.marksheets.first_year', compact('marksheet', 'courseDetails', 'totalMaximumMarks', 'totalMinimumMarks', 'subjectsData'));
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Error generating certificate: ' . $e->getMessage());
    //     }
    // }
   
   
    // public function secondYear($id)
    // {
    //     $marksheet = Admission::select(
    //         'id',
    //         'center_id',
    //         'photo',
    //         'enroll_no',
    //         'roll_no',
    //         'student_name',
    //         'father_name',
    //         'mother_name',
    //         'dob',
    //         'start_session',
    //         'end_session',
    //         'registration_date',
    //         'course_id',
    //         'course_program'
    //     )->with(['course'])->findOrFail($id);

    //     $courseDetails = CourseDetail::with('subjects')
    //         ->where('course_id', $marksheet->course_id)->where('semester', 2) 
    //         ->first();

    //     $totalMaximumMarks = $courseDetails->subjects->sum('maximum_marks');
    //     $totalMinimumMarks = $courseDetails->subjects->sum('minimum_marks');

    //     $marks = Marksheet::where('admission_id', $marksheet->id)->where('type',2)->first();

    //     $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

    //     return view('admin.marksheets.first_year', compact('marksheet', 'courseDetails', 'totalMaximumMarks', 'totalMinimumMarks', 'subjectsData'));
    // }


    
    // public function firstYear($id)
    // {
    //     try {
    //         $marksheet = Admission::select(
    //             'id',
    //             'center_id',
    //             'photo',
    //             'enroll_no',
    //             'roll_no',
    //             'student_name',
    //             'father_name',
    //             'mother_name',
    //             'dob',
    //             'start_session',
    //             'end_session',
    //             'end_session_first',
    //             'start_session_first',
    //             'start_session_second',
    //             'end_session_second',
    //             'registration_date',
    //             'course_id',
    //             'course_id',
    //             'subcourse_id'
    //         )->with(['course'])->findOrFail($id);
         
    //         $courseDetails = CourseDetail::with('subjects')
    //         ->where('course_id', $marksheet->subcourse_id)
    //         ->where('semester', 1)
    //         ->get();

    //         $totalMaximumMarks = 0;
    //         $totalMinimumMarks = 0;

    //         foreach ($courseDetails as $courseDetail) {
    //             if ($courseDetail->subjects) {
    //                 $totalMaximumMarks += $courseDetail->subjects->sum('maximum_marks');
    //                 $totalMinimumMarks += $courseDetail->subjects->sum('minimum_marks');
    //             }
    //         }

    //         $marks = Marksheet::where('admission_id', $marksheet->id)->where('type', 1)->first();
    //         $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

    //         return view('admin.marksheets.first_year', [
    //             'firstMarksheet' => $marksheet,
    //             'firstCourseDetails' => $courseDetails,
    //             'firstTotalMaximumMarks' => $totalMaximumMarks,
    //             'firstTotalMinimumMarks' => $totalMinimumMarks,
    //             'firstSubjectsData' => $subjectsData
    //         ]);
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Error generating first-year marksheet: ' . $e->getMessage());
    //     }
    // }




    // public function firstYear($id)
    // {
    //     try {
    //         // Retrieve the marksheet and course details
    //         $marksheet = Admission::select(
    //             'id',
    //             'center_id',
    //             'photo',
    //             'enroll_no',
    //             'roll_no',
    //             'student_name',
    //             'father_name',
    //             'mother_name',
    //             'dob',
    //             'start_session',
    //             'end_session',
    //             'end_session_first',
    //             'start_session_first',
    //             'start_session_second',
    //             'end_session_second',
    //             'registration_date',
    //             'course_id',
    //             'subcourse_id'
    //         )->with(['course'])->findOrFail($id);

    //         $courseDetails = CourseDetail::with('subjects')
    //             ->where('course_id', $marksheet->subcourse_id)
    //             ->where('semester', 1)
    //             ->get();

    //         // Initialize arrays and totals
    //         $firstSubjectsData = [];
    //         $results = [];

    //         // Load subjects data
    //         $marks = Marksheet::where('admission_id', $marksheet->id)->where('type', 1)->first();
    //         $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

    //         // Helper function for determining grade
    //         $getGradeA = function ($percentage) {
    //             if ($percentage >= 90) return 'A+';
    //             if ($percentage >= 75) return 'A';
    //             if ($percentage >= 70) return 'B+';
    //             if ($percentage >= 60) return 'B';
    //             if ($percentage >= 50) return 'C+';
    //             if ($percentage >= 40) return 'C';
    //             if ($percentage >= 32) return 'D+';
    //             if ($percentage >= 20) return 'D';
    //             return 'E';
    //         };

    //         // Loop through the course details and subjects
    //         foreach ($courseDetails as $course) {
    //             foreach ($course->subjects as $index => $subject) {
    //                 $subjectData = $subjectsData[$index] ?? [];
    //                 $marksObtained = $subjectData['marks_obtained'] ?? 0;
    //                 $internalMarks = $subjectData['internal_marks'] ?? 0;
    //                 $maximumMarks = $subject->maximum_marks ?? 0;

    //                 // Calculate totals
    //                 $totalMarks = $marksObtained + $internalMarks;
    //                 $percentage = $maximumMarks > 0 ? ($totalMarks / $maximumMarks) * 100 : 0;
    //                 $grade = $getGradeA($percentage);

    //                 // Collect the results for each subject
    //                 $results[] = [
    //                     'subject_code' => $subject->subject_code,
    //                     'subject_name' => $subject->subject_name,
    //                     'marks_obtained' => $marksObtained,
    //                     'internal_marks' => $internalMarks,
    //                     'total_marks' => $totalMarks,
    //                     'minimum_marks' => $subject->minimum_marks ?? 'Not Available',
    //                     'maximum_marks' => $maximumMarks,
    //                     'grade' => $grade,
    //                 ];
    //             }
    //         }

    //         // Calculate overall totals
    //         $totalMarksObtained = array_sum(array_column($results, 'marks_obtained'));
    //         $totalInternalMarks = array_sum(array_column($results, 'internal_marks'));

    //         $totalMarks1 = array_sum(array_column($results, 'total_marks'));
    //         $firstTotalMaximumMarks = array_sum(array_column($results, 'maximum_marks'));

    //         $firstTotalMinimumMarks = array_sum(array_column($results, 'minimum_marks'));

    //         dd($firstTotalMaximumMarks,  $firstTotalMinimumMarks );


    //         // Calculate total percentage and grade
    //         $totalPercentage = $firstTotalMaximumMarks > 0 ? ($totalMarks1 / $firstTotalMaximumMarks) * 100 : 0;
    //         $formattedPercentage = number_format($totalPercentage, 2);
    //         $totalGrade = $getGradeA($totalPercentage);

    //         return view('admin.marksheets.first_year', [
    //             'firstMarksheet' => $marksheet,
    //             'firstCourseDetails' => $courseDetails,
    //             'firstSubjectsData' => $results,
    //             'totalMarksObtained' => $totalMarksObtained,
    //             'totalInternalMarks' => $totalInternalMarks,
    //             'totalMarks1' => $totalMarks1,
    //             'firstTotalMaximumMarks' => $firstTotalMaximumMarks,
    //             'firstTotalMinimumMarks' => $firstTotalMinimumMarks,
    //             'totalPercentage' => $formattedPercentage,
    //             'totalGrade' => $totalGrade,
    //         ]);
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Error generating first-year marksheet: ' . $e->getMessage());
    //     }
    // }




    // public function secondYear($id)
    // {
    //     try {
    //         $marksheet = Admission::select(
    //             'id',
    //             'center_id',
    //             'photo',
    //             'enroll_no',
    //             'roll_no',
    //             'student_name',
    //             'father_name',
    //             'mother_name',
    //             'dob',
    //             'start_session',
    //             'end_session',
    //             'end_session_first',
    //             'start_session_first',
    //             'start_session_second',
    //             'end_session_second',
    //             'registration_date',
    //             'course_id',
    //             'course_id',
    //             'subcourse_id'
    //         )->with(['course'])->findOrFail($id);
         
    //         $courseDetails = CourseDetail::with('subjects')
    //         ->where('course_id', $marksheet->subcourse_id)
    //         ->where('semester', 2)
    //         ->get();
    //         $totalMaximumMarks = 0;
    //         $totalMinimumMarks = 0;

    //         foreach ($courseDetails as $courseDetail) {
    //             if ($courseDetail->subjects) {
    //                 $totalMaximumMarks += $courseDetail->subjects->sum('maximum_marks');
    //                 $totalMinimumMarks += $courseDetail->subjects->sum('minimum_marks');
    //             }
    //         }

    //         $marks = Marksheet::where('admission_id', $marksheet->id)->where('type', 2)->first();
    //         $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

    //         return view('admin.marksheets.first_year', [
    //             'secondMarksheet' => $marksheet,
    //             'secondCourseDetails' => $courseDetails,
    //             'secondTotalMaximumMarks' => $totalMaximumMarks,
    //             'secondTotalMinimumMarks' => $totalMinimumMarks,
    //             'secondSubjectsData' => $subjectsData
    //         ]);
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Error generating first-year marksheet: ' . $e->getMessage());
    //     }
    // }



    public function firstYear($id)
    {
        try {
            // Retrieve the marksheet and course details
            $marksheet = Admission::select(
                'id',
                'center_id',
                'photo',
                'enroll_no',
                'roll_no',
                'student_name',
                'father_name',
                'mother_name',
                'dob',
                'start_session',
                'end_session',
                'end_session_first',
                'start_session_first',
                'start_session_second',
                'end_session_second',
                'registration_date',
                'course_id',
                'subcourse_id'
            )->with(['course'])->findOrFail($id);

            $courseDetails = CourseDetail::with('subjects')
                ->where('course_id', $marksheet->subcourse_id)
                ->where('semester', 1)
                ->get();

            // Initialize arrays and totals
            $results = [];

            // Load subjects data
            $marks = Marksheet::where('admission_id', $marksheet->id)->where('type', 1)->first();
            $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

            // Helper function for determining grade
            $getGradeA = function ($percentage) {
                if ($percentage >= 90) return 'A+';
                if ($percentage >= 75) return 'A';
                if ($percentage >= 70) return 'B+';
                if ($percentage >= 60) return 'B';
                if ($percentage >= 50) return 'C+';
                if ($percentage >= 40) return 'C';
                if ($percentage >= 32) return 'D+';
                if ($percentage >= 20) return 'D';
                return 'E';
            };

            // Loop through the course details and subjects
            foreach ($courseDetails as $course) {
                foreach ($course->subjects as $index => $subject) {
                    $subjectData = $subjectsData[$index] ?? [];
                    $marksObtained = $subjectData['marks_obtained'] ?? 0;
                    $internalMarks = $subjectData['internal_marks'] ?? 0;
                    $maximumMarks = $subject->maximum_marks ?? 0;

                    // Calculate totals
                    $totalMarks = $marksObtained + $internalMarks;
                    $percentage = $maximumMarks > 0 ? ($totalMarks / $maximumMarks) * 100 : 0;
                    $grade = $getGradeA($percentage);

                    // Collect the results for each subject
                    $results[] = [
                        'subject_code' => $subject->subject_code,
                        'subject_name' => $subject->subject_name,
                        'marks_obtained' => $marksObtained,
                        'internal_marks' => $internalMarks,
                        'total_marks' => $totalMarks,
                        'minimum_marks' => $subject->minimum_marks ?? 'Not Available',
                        'maximum_marks' => $maximumMarks,
                        'grade' => $grade,
                    ];
                }
            }

            // Calculate overall totals
            $totalMarksObtained = array_sum(array_column($results, 'marks_obtained'));
            $totalInternalMarks = array_sum(array_column($results, 'internal_marks'));
            $totalMarks1 = array_sum(array_column($results, 'total_marks'));
            $firstTotalMaximumMarks = array_sum(array_column($results, 'maximum_marks'));
            $firstTotalMinimumMarks = array_sum(array_column($results, 'minimum_marks'));

            // Calculate total percentage and grade
            $totalPercentage = $firstTotalMaximumMarks > 0 ? ($totalMarks1 / $firstTotalMaximumMarks) * 100 : 0;
            $formattedPercentage = number_format($totalPercentage, 2);
            $totalGrade = $getGradeA($totalPercentage);

            // Store values in session
            session([
                'totalMarks1' => $totalMarks1,
                'firstTotalMaximumMarks' => $firstTotalMaximumMarks,
                'firstTotalMinimumMarks' => $firstTotalMinimumMarks,
            ]);

            return view('admin.marksheets.first_year', [
                'firstMarksheet' => $marksheet,
                'firstCourseDetails' => $courseDetails,
                'firstSubjectsData' => $results,
                'totalMarksObtained' => $totalMarksObtained,
                'totalInternalMarks' => $totalInternalMarks,
                'totalMarks1' => $totalMarks1,
                'firstTotalMaximumMarks' => $firstTotalMaximumMarks,
                'firstTotalMinimumMarks' => $firstTotalMinimumMarks,
                'totalPercentage' => $formattedPercentage,
                'totalGrade' => $totalGrade,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error generating first-year marksheet: ' . $e->getMessage());
        }
    }

public function secondYear($id)
    {
        try {
            // Retrieve the second-year marksheet
            $marksheet = Admission::select(
                'id',
                'center_id',
                'photo',
                'enroll_no',
                'roll_no',
                'student_name',
                'father_name',
                'mother_name',
                'dob',
                'start_session',
                'end_session',
                'end_session_first',
                'start_session_first',
                'start_session_second',
                'end_session_second',
                'registration_date',
                'course_id',
                'subcourse_id'
            )->with(['course'])->findOrFail($id);
            
            $courseDetails = CourseDetail::with('subjects')
                ->where('course_id', $marksheet->subcourse_id)
                ->where('semester', 2)
                ->get();

            // Initialize total marks variables
            $totalMaximumMarks = 0;
            $totalMinimumMarks = 0;

            foreach ($courseDetails as $courseDetail) {
                if ($courseDetail->subjects) {
                    $totalMaximumMarks += $courseDetail->subjects->sum('maximum_marks');
                    $totalMinimumMarks += $courseDetail->subjects->sum('minimum_marks');
                }
            }

            // Load subjects data for the second year
            $marks = Marksheet::where('admission_id', $marksheet->id)->where('type', 2)->first();
            $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

            // Retrieve values from session set in firstYear
            $totalMarks1 = session('totalMarks1', 0);
            $firstTotalMaximumMarks = session('firstTotalMaximumMarks', 0);
            $firstTotalMinimumMarks = session('firstTotalMinimumMarks', 0);

            return view('admin.marksheets.first_year', [
                'secondMarksheet' => $marksheet,
                'secondCourseDetails' => $courseDetails,
                'secondTotalMaximumMarks' => $totalMaximumMarks,
                'secondTotalMinimumMarks' => $totalMinimumMarks,
                'secondSubjectsData' => $subjectsData,
                'totalMarks1' => $totalMarks1,
                'firstTotalMaximumMarks' => $firstTotalMaximumMarks,
                'firstTotalMinimumMarks' => $firstTotalMinimumMarks,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error generating second-year marksheet: ' . $e->getMessage());
        }
    }



public function certificate($id)
{
    try {
        $certificate = Admission::select(
            'id',
            'center_id',
            'photo',
            'enroll_no',
            'roll_no',
            'student_name',
            'father_name',
            'mother_name',
            'dob',
            'start_session',
            'end_session',
            'registration_date',
            'course_id',
            'course_program'
        )->with(['course'])->findOrFail($id);
      
        // dd($certificate);


        $centerName = Center::where('id', $certificate->center_id)
        ->select('institute_name')
        ->first();
        
    

        return view('admin.marksheets.certificate', compact('certificate','centerName'));
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error generating certificate: ' . $e->getMessage());
    }
}

}
