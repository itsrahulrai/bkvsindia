<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Marksheet;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class GenrateMarksheetController extends Controller
{

    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $certificates = Marksheet::with(['admission', 'center', 'course'])->latest()->get();

        //  dd($certificates);
         return view('admin.genratemarksheet.index', compact('certificates'));
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    

    public function store(Request $request)
    {    
        // dd($request->all());


        try {
            $request->validate([
                'admission_id' => 'required|exists:admissions,id',
                'course_id' => 'required|exists:courses,id',
                'center_id' => 'required|exists:centers,id',
                'type' => 'required',
                'subjects' => 'required|array',
                'subjects.*.course_subject_id' => 'required|exists:course_subjects,id',
                'subjects.*.marks_obtained' => 'required|numeric',
                'subjects.*.internal_marks' => 'required|numeric',
            ]);
            
    
            // Prepare the subjects data in JSON format
            $subjectsData = collect($request->input('subjects'))->map(function ($subject) {
                return [
                    'course_subject_id' => $subject['course_subject_id'],
                    'marks_obtained' => $subject['marks_obtained'],
                    'internal_marks' => $subject['internal_marks'],
                ];
            })->toArray();
    
            // Store the data in the database
            Marksheet::create([
                'admission_id' => $request->admission_id,
                'center_id' => $request->center_id,
                'course_id' => $request->course_id,
                'type' => $request->type,
                'subjects_data' => $subjectsData,
            ]);
    
            session()->flash('success', 'Certificate created successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error creating Certificate: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error creating Certificate: ' . $e->getMessage());
        }
    }




    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

  


    /**
     * Display the specified resource.
     */
    public function showMarksheet(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    // public function edit(string $id)
    // {

    //     // dd($id);
        
    //     try {
    //         $certificate = Marksheet::with(['admission', 'center', 'course'])->findOrFail($id);

    //         // dd($certificate);
    //         $subjectsData = is_string($certificate->subjects_data)
    //             ? json_decode($certificate->subjects_data, true)
    //             : $certificate->subjects_data;

    //             // dd($subjectsData);

    //         // Extract marks_obtained and internal_marks
    //         $marksData = collect($subjectsData)->mapWithKeys(function ($subject) {
    //             return [
    //                 $subject['course_subject_id'] => [
    //                     'marks_obtained' => $subject['marks_obtained'],
    //                     'internal_marks' => $subject['internal_marks']
    //                 ]
    //             ];
    //         });

    

    //         $courseDetails = Marksheet::with(['subjects'])
    //         ->where('course_id', $certificate->course_id)
    //         ->first();
            

    //         return view('admin.genratemarksheet.edit', compact('certificate', 'courseDetails', 'marksData'));
    //     } catch (\Exception $e) {
    //         Log::error("Error editing Certificate: {$e->getMessage()}");
    //         return redirect()->back()->with('error', 'Error fetching certificate: ' . $e->getMessage());
    //     }
    // }



    public function edit(string $id)
    {

        // dd($id);
        
        try {
            $certificate = Marksheet::with(['admission', 'center', 'course'])->findOrFail($id);

            // dd($certificate);
            $subjectsData = is_string($certificate->subjects_data)
                ? json_decode($certificate->subjects_data, true)
                : $certificate->subjects_data;

                // dd($subjectsData);

            // Extract marks_obtained and internal_marks
            $marksData = collect($subjectsData)->mapWithKeys(function ($subject) {
                return [
                    $subject['course_subject_id'] => [
                        'marks_obtained' => $subject['marks_obtained'],
                        'internal_marks' => $subject['internal_marks']
                    ]
                ];
            });

    

            $courseDetails = Marksheet::with(['subjects'])
            ->where('course_id', $certificate->course_id)
            ->first();

            // dd($courseDetails);
            

            return view('admin.genratemarksheet.edit', compact('certificate', 'courseDetails', 'marksData'));
        } catch (\Exception $e) {
            Log::error("Error editing Certificate: {$e->getMessage()}");
            return redirect()->back()->with('error', 'Error fetching certificate: ' . $e->getMessage());
        }
    }
  
   





    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
        // dd($request->all());

         try {
             $certificate = Marksheet::findOrFail($id);
     
             $request->validate([
                 'admission_id' => 'required|exists:admissions,id',
                 'course_id' => 'required|exists:courses,id',
                 'center_id' => 'required|exists:centers,id',
                 'type' => 'required',
                 'subjects' => 'required|array',
                 'subjects.*.course_subject_id' => 'nullable|exists:course_subjects,id',
                 'subjects.*.marks_obtained' => 'nullable|numeric',
                 'subjects.*.internal_marks' => 'nullable|numeric',
             ]);
     
             $subjectsData = collect($request->input('subjects'))
                 ->filter(function ($subject) {
                     return isset(
                         $subject['course_subject_id'],
                         $subject['marks_obtained'],
                         $subject['internal_marks']
                     );
                 })
                 ->map(function ($subject) {
                     return [
                         'course_subject_id' => $subject['course_subject_id'],
                         'marks_obtained' => $subject['marks_obtained'],
                         'internal_marks' => $subject['internal_marks'],
                     ];
                 })->toArray();
     
             $certificate->update([
                 'admission_id' => $request->admission_id,
                 'center_id' => $request->center_id,
                 'course_id' => $request->course_id,
                 'type' => $request->type,
                 'subjects_data' => $subjectsData,
             ]);
     
             session()->flash('success', 'Certificate updated successfully!');
             return redirect()->back();
         } catch (\Exception $e) {
             Log::error('Error updating Certificate: ' . $e->getMessage());
             return redirect()->back()->withErrors('Error updating Certificate: ' . $e->getMessage());
         }
     }
     

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $certificate = Marksheet::findOrFail($id);
        $certificate->delete();
        return response()->json(['status' => 'success', 'message' => 'Course deleted successfully!']);
    }

    // public function generateMarksheetOneYear($id)
    // {
       
    //     try {
    //         $marksheet = Admission::select(
    //             'id',
    //             'center_id',
    //             'enroll_no',
    //             'roll_no',
    //             'student_name',
    //             'father_name',
    //             'mother_name',
    //             'dob',
    //             'start_session',
    //             'end_session',
    //             'registration_date',
    //             'course_id',
    //             'subcourse_id',
    //             'course_program'
    //         )->with(['course'])->findOrFail($id);

    //         $subcourse = Course::where('id',$marksheet->subcourse_id)->first();
          
    //         $semesterOne = CourseDetail::with('subjects')
    //         ->where('course_id', $marksheet->subcourse_id)
    //         ->where('semester', 1) // Filter for semester 1
    //         ->get();
    //         return view('admin.genratemarksheet.one_marksheet', compact('marksheet', 'semesterOne','subcourse'));
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Error generating marksheet: ' . $e->getMessage());
    //     }
    // }

    public function generateMarksheetOneYear($id)
    {
        try {
            $marksheet = Admission::with('course:id,name')
                ->select([
                    'id', 'center_id','enroll_no', 'roll_no', 'student_name',
                    'father_name', 'mother_name', 'dob', 'start_session', 
                    'end_session', 'registration_date', 'course_id', 
                    'subcourse_id', 'course_program'
                ])
                ->findOrFail($id);


            $courseCat = Course::find($marksheet->course_id);
            $subcourse = Course::find($marksheet->subcourse_id);
            $semesterOne = CourseDetail::with('subjects')
                ->where(['course_id' => $marksheet->subcourse_id, 'semester' => 1])
                ->get();

            return view('admin.genratemarksheet.one_marksheet', compact('marksheet', 'semesterOne', 'subcourse','courseCat'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error generating marksheet: ' . $e->getMessage());
        }
    }


    public function generateMarksheetTwoYear($id)
    {
        try {
            $marksheet = Admission::with('course:id,name')
            ->select([
                'id', 'center_id','enroll_no', 'roll_no', 'student_name',
                'father_name', 'mother_name', 'dob', 'start_session', 
                'end_session', 'registration_date', 'course_id', 
                'subcourse_id', 'course_program'
            ])
            ->findOrFail($id);
            
            $courseCat = Course::find($marksheet->course_id);
            $subcourse = Course::find($marksheet->subcourse_id);

            $semesterTwo = CourseDetail::with('subjects')
                ->where('course_id', $marksheet->subcourse_id)
                ->where('semester', 2) // Filter for semester 2
                ->get();



            return view('admin.genratemarksheet.two_marksheet', compact('marksheet', 'semesterTwo','courseCat','subcourse'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error generating certificate: ' . $e->getMessage());
        }
    }


    /**
     * Status Change.
     */
    public function changeStatus(Request $request)
    {
        $marksheet = Marksheet::findOrFail($request->id);
        $marksheet->status = $request->status;
        $marksheet->save();
        return response(['message' => 'Status has been updated!']);
    }
}
