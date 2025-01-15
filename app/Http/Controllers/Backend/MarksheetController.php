<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admission;
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

    public function firstYear($id)
    {
        try {
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
                'course_program'
            )->with(['course'])->findOrFail($id);

            $courseDetails = CourseDetail::with('subjects')
                ->where('course_id', $marksheet->course_id)
                ->where('semester', 1)
                ->get();

            $totalMaximumMarks = 0;
            $totalMinimumMarks = 0;

            foreach ($courseDetails as $courseDetail) {
                if ($courseDetail->subjects) {
                    $totalMaximumMarks += $courseDetail->subjects->sum('maximum_marks');
                    $totalMinimumMarks += $courseDetail->subjects->sum('minimum_marks');
                }
            }

            $marks = Marksheet::where('admission_id', $marksheet->id)->where('type', 1)->first();
            $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

            return view('admin.marksheets.first_year', [
                'firstMarksheet' => $marksheet,
                'firstCourseDetails' => $courseDetails,
                'firstTotalMaximumMarks' => $totalMaximumMarks,
                'firstTotalMinimumMarks' => $totalMinimumMarks,
                'firstSubjectsData' => $subjectsData
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error generating first-year marksheet: ' . $e->getMessage());
        }
    }


public function secondYear($id)
{
    try {
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
            'registration_date',
            'course_id',
            'course_program'
        )->with(['course'])->findOrFail($id);

        $courseDetails = CourseDetail::with('subjects')
            ->where('course_id', $marksheet->course_id)
            ->where('semester', 2)
            ->get();

        $totalMaximumMarks = $courseDetails->sum(fn($course) => $course->subjects->sum('maximum_marks'));
        $totalMinimumMarks = $courseDetails->sum(fn($course) => $course->subjects->sum('minimum_marks'));

        

        $marks = Marksheet::where('admission_id', $marksheet->id)->where('type', 2)->first();
        $subjectsData = is_string($marks->subjects_data) ? json_decode($marks->subjects_data, true) : $marks->subjects_data;

        return view('admin.marksheets.first_year', [
            'secondMarksheet' => $marksheet,
            'secondCourseDetails' => $courseDetails,
            'secondTotalMaximumMarks' => $totalMaximumMarks,
            'secondTotalMinimumMarks' => $totalMinimumMarks,
            'secondSubjectsData' => $subjectsData
        ]);
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error generating second-year marksheet: ' . $e->getMessage());
    }
}








    public function certificate()
    {
        return view('admin.marksheets.certificate');
    }
}
