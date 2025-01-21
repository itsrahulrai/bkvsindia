<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Center;
use App\Models\Course;
use Illuminate\Support\Facades\Log;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    use ImageUploadTrait;

    public function create()
    {
        $centers = Center::select('id', 'center_code', 'institute_name')
        ->where('status', 'active')
        ->latest()
        ->get();
        $courses = Course::select('id', 'name')->whereNull('parent_id')->get();
        $subcourses = Course::select('id', 'name')->whereNotNull('parent_id')->get();
        return view('front.student-zone.online-admission',compact('centers','courses','subcourses'));
    }

    public function store(Request $request)
    {

        try {
            // Upload files
            $photoPath = $this->uploadImage($request, 'photo', 'uploads/images');
            $tenthPath = $this->uploadImage($request, 'tenth', 'uploads/images');
            $twelvePath = $this->uploadImage($request, 'twelve', 'uploads/images');
            $graduationPath = $this->uploadImage($request, 'graduation', 'uploads/images');
            $idProofPath = $this->uploadImage($request, 'id_proof', 'uploads/images');

            $session = $request->course_program == 'two_year' ? $request->start_session_first : $request->start_session;
            $enrollNo = generateEnrollNo($session);
            $rollNo = generateRollNo($session);

            // Store data in the database
            Admission::create([
                'center_id' => $request->center_id,
                'student_name' => $request->student_name,
                'mobile_no' => $request->mobile_no,
                'roll_no' => $rollNo,
                'enroll_no' => $enrollNo,
                'gender' => $request->gender,
                'email' => $request->email,
                'state' => $request->state,
                'city' => $request->city,
                'address' => $request->address,
                'dob' => $request->dob,
                'registration_date' => $request->registration_date,
                'course_id' => $request->course_id,
                'subcourse_id' => $request->subcourse_id,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'course_program' => $request->course_program,
                'start_session' => $request->start_session,
                'end_session' => $request->end_session,
                'start_session_first' => $request->start_session_first,
                'end_session_first' => $request->end_session_first,
                'start_session_second' => $request->start_session_second,
                'end_session_second' => $request->end_session_second,
                'year_10th' => $request->year_10th,
                'stream_10th' => $request->stream_10th,
                'board_university_10th' => $request->board_university_10th,
                'result_10th' => $request->result_10th,
                'year_12th' => $request->year_12th,
                'stream_12th' => $request->stream_12th,
                'board_university_12th' => $request->board_university_12th,
                'result_12th' => $request->result_12th,
                'other_year' => $request->other_year,
                'other_stream' => $request->other_stream,
                'other_board_university' => $request->other_board_university,
                'other_result' => $request->other_result,
                'photo' => $photoPath,
                'tenth_image' => $tenthPath,
                'twelfth_image' => $twelvePath,
                'graduation_image' => $graduationPath,
                'id_proof' => $idProofPath,
            ]);

            session()->flash('success', 'Admission created successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error storing admission data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while processing your request.');
        }
    }


    public function getSubcourses(Request $request)
    {
        $subcourses = Course::select('id', 'name')
            ->where('parent_id', $request->course_id)
            ->get();

        return response()->json($subcourses);
    }

}
