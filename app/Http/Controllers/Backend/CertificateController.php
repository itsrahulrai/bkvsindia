<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Certificate;
use App\Models\CourseDetail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $certificates = Certificate::with(['admission', 'center', 'course'])->latest()->get();
        return view('admin.certificates.index', compact('certificates'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // dd($request->all());

    //     try {
    //         $request->validate([
    //             'admission_id' => 'required|exists:admissions,id',
    //             'course_id' => 'required|exists:courses,id',
    //             'center_id' => 'required|exists:centers,id',
    //             'subjects' => 'required|array',
    //             'subjects.*.course_subject_id' => 'required|exists:course_subjects,id',
    //             'subjects.*.marks_obtained' => 'required|numeric',
    //             'subjects.*.internal_marks' => 'required|numeric',
    //         ]);
    //         // Prepare the subjects data in JSON format
    //         $subjectsData = collect($request->input('subjects'))->map(function ($subject) {
    //             return [
    //                 'course_subject_id' => $subject['course_subject_id'],
    //                 'marks_obtained' => $subject['marks_obtained'],
    //                 'internal_marks' => $subject['internal_marks'],
    //             ];
    //         })->toArray();
    //         Certificate::create([
    //             'admission_id' => $request->admission_id,
    //             'center_id' => $request->center_id,
    //             'course_id' => $request->course_id,
    //             'subjects_data' => $subjectsData,
    //         ]);

    //         session()->flash('success', 'Certificate created successfully!');
    //         return redirect()->back();
    //     } catch (\Exception $e) {
    //         Log::error('Error creating Certificate: ' . $e->getMessage());
    //         return redirect()->back()->withErrors('Error creating Certificate: ' . $e->getMessage());
    //     }
    // }


    public function store(Request $request)
    {
        // dd($request->all());

        try {
            $request->validate([
                'admission_id' => 'required|exists:admissions,id',
                'course_id' => 'required|exists:courses,id',
                'center_id' => 'required|exists:centers,id',
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
            Certificate::create([
                'admission_id' => $request->admission_id,
                'center_id' => $request->center_id,
                'course_id' => $request->course_id,
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

    public function showCertificate(string $id)
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

    public function edit(string $id)
    {
        try {
            $certificate = Certificate::with(['admission', 'center', 'course'])->findOrFail($id);
            $subjectsData = is_string($certificate->subjects_data)
                ? json_decode($certificate->subjects_data, true)
                : $certificate->subjects_data;
            // Extract marks_obtained and internal_marks
            $marksData = collect($subjectsData)->mapWithKeys(function ($subject) {
                return [
                    $subject['course_subject_id'] => [
                        'marks_obtained' => $subject['marks_obtained'],
                        'internal_marks' => $subject['internal_marks']
                    ]
                ];
            });
            $courseDetails = CourseDetail::with('subjects')
                ->where('course_id', $certificate->course_id)
                ->first();

            return view('admin.certificates.edit', compact('certificate', 'courseDetails', 'marksData'));
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
        try {
            $certificate = Certificate::findOrFail($id);
            $request->validate([
                'admission_id' => 'required|exists:admissions,id',
                'course_id' => 'required|exists:courses,id',
                'center_id' => 'required|exists:centers,id',
                'subjects' => 'required|array',
                'subjects.*.course_subject_id' => 'required|exists:course_subjects,id',
                'subjects.*.marks_obtained' => 'required|numeric',
                'subjects.*.internal_marks' => 'required|numeric',
            ]);
            $subjectsData = collect($request->input('subjects'))->map(function ($subject) {
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
                'subjects_data' => $subjectsData,
            ]);

            session()->flash('success', 'Certificate updated successfully!');
            return redirect()->route('admin.certificate.index');
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
        $certificate = Certificate::findOrFail($id);
        $certificate->delete();
        return response()->json(['status' => 'success', 'message' => 'Course deleted successfully!']);
    }

    public function generateMarksheetOneYear($id)
    {
        try {
            $certificate = Admission::select(
                'id',
                'center_id',
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

            $semesterOne = CourseDetail::with('subjects')
                ->where('course_id', $certificate->course_id)
                ->where('semester', 1) // Filter for semester 1
                ->get();

            return view('admin.certificates.one_certificate', compact('certificate', 'semesterOne'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error generating certificate: ' . $e->getMessage());
        }
    }

    public function generateMarksheetTwoYear($id)
    {
        try {
            $certificate = Admission::select(
                'id',
                'center_id',
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
            $semesterTwo = CourseDetail::with('subjects')
                ->where('course_id', $certificate->course_id)
                ->where('semester', 2) // Filter for semester 2
                ->get();

            return view('admin.certificates.two_certificate', compact('certificate', 'semesterTwo'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error generating certificate: ' . $e->getMessage());
        }
    }







    /**
     * Status Change.
     */
    public function changeStatus(Request $request)
    {
        $certificate = Certificate::findOrFail($request->id);
        $certificate->status = $request->status;
        $certificate->save();
        return response(['message' => 'Status has been updated!']);
    }
}
