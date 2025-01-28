<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Admission;
use App\Models\CourseDetail;
use App\Models\Marksheet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserDashboardController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $profiles = User::where('role', '!=', 'student')->get();
        return view('front.user.dashboard', compact('profiles'));
    }


    /**
     * Edit User Profile
     */
    public function setting()
    {
        // $user = Auth::user();
        return view('front.user.setting');
    }


    public function myProfile()
    {
          // Retrieve the currently authenticated student
    // $student = Auth::guard('student')->user();
    $student = Auth::guard('student')->user()->load(['center', 'course']); 
        // dd($student);
    // Pass the student data to the view
    return view('front.user.my-profile', compact('student'));
        // return view('front.user.my-profile');
    }

    public function idCard()
    {
        $student = Auth::guard('student')->user()->load(['center', 'course']); 
        // dd( $student);
        return view('front.user.id-card',compact('student'));
    }

    public function result()
    {
        $student = Auth::guard('student')->user(); // Get authenticated student
        $courseProgram = $student->course_program; // Extract course program
    
        return view('front.user.result', compact('student', 'courseProgram'));
    }
    







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


    
    /**
     * Update Profile.
     */
    public function updateProfile(Request $request, string $id)
    {

        try {
            $user = User::findOrFail($id);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
            ]);
            session()->flash('success', 'Profile updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Exception occurred while updating User: ' . $e->getMessage());
            alert()->error('An error occurred while updating the user.');
            return redirect()->back();
        }
    }



     /* Update User Profile Password */
     public function updatePassword(Request $request)
     {
         $request->validate([
             'current_password' => ['required', 'current_password'],
             'password' => ['required', 'confirmed', 'min:8'],
         ]);
 
         $request->user()->update([
             'password' => bcrypt($request->password)
         ]);
         
         session()->flash('success', 'Password updated successfully!');
         return redirect()->back();
 
     }



    /**
     * New Match.
     */
    // public function newMatches()
    // {
    //     $user = auth()->user();
    //     // Fetch recently joined profiles based on the seeking gender
    //     $profiles = User::where('gender', $user->seeking;)
    //         ->where('id', '!=', $user->id) // Exclude the logged-in user
    //         ->orderBy('created_at', 'desc') // Order by the newest profiles
    //         ->limit(10) // Limit to 10 profiles
    //         ->get();

    //     return view('new_matches', compact('profiles'));
    // }
}
