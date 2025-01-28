<?php

namespace App\Http\Controllers\Frenchies;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Center;
use App\Models\Course;
use Illuminate\Support\Facades\Log;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class FrenchiesStudentController extends Controller
{
    use ImageUploadTrait;
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centerId = auth()->guard('frenchies')->user()->id;
        // dd($centerId);
        $admissions = Admission::with(['center', 'course'])
            ->where('center_id', $centerId)
            ->latest()
            ->get();

        return view('admin.admissions.index', compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        $centerId = auth()->guard('frenchies')->user()->id;
            $centers = Center::select('id', 'center_code', 'institute_name')
                ->where('status', 'active')
                ->where('id', $centerId) 
                ->get();
    
            $courses = Course::select('id', 'name')->whereNull('parent_id')->get();
            $subcourses = Course::select('id', 'name')->whereNotNull('parent_id')->get();

        return view('admin.admissions.create', compact('centers', 'courses', 'subcourses'));
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {

        // dd($request->all());
        
        $request->validate([
            'center_id' => 'required|exists:centers,id',
            'student_name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'gender' => 'required|in:male,female',
            'course_program' => 'required|in:one_year,two_year', 
        ]);

        try {
            $photoPath = $this->uploadImage($request, 'photo', 'uploads/images');
            $tenthPath = $this->uploadImage($request, 'tenth_image', 'uploads/images');
            $twelfthPath = $this->uploadImage($request, 'twelfth_image', 'uploads/images');
            $graduationPath = $this->uploadImage($request, 'graduation_image', 'uploads/images');
            $idproofPath = $this->uploadImage($request, 'id_proof', 'uploads/images');
            $otherPath = $this->uploadImage($request, 'other_document', 'uploads/images');
                
            $session = $request->course_program == 'two_year' ? $request->start_session_first : $request->start_session;
            $enrollNo = generateEnrollNo($session);
            $rollNo = generateRollNo($session);

            Admission::create([
                'center_id' => $request->center_id,
                'student_name' => $request->student_name,
                'course_id' => $request->course_id,
                'subcourse_id' => $request->subcourse_id,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'registration_date' => $request->registration_date,
                'roll_no' => $rollNo, // Use generated Roll No
                'enroll_no' => $enrollNo, // Use generated Enroll No
                'mobile_no' => $request->mobile_no,
                'alternate_contact_no' => $request->alternate_contact_no,
                'email' => $request->email,
                'semester' => $request->semester,
                'registration_year' => $request->registration_year,
                'tenth_passing_year' => $request->tenth_passing_year,
                'twelfth_passing_year' => $request->twelfth_passing_year,
                'state' => $request->state,
                'city' => $request->city,

                'course_program' => $request->course_program,
                'start_session' => $request->start_session,
                'end_session' => $request->end_session,
                'start_session_first' => $request->start_session_first,
                'end_session_first' => $request->end_session_first,
                'start_session_second' => $request->start_session_second,
                'end_session_second' => $request->end_session_second,
                
                'remarks' => $request->remarks,
                'year_10th' => $request->year_10th,
                'stream_10th' => $request->stream_10th,
                'stream_12th' => $request->stream_12th,
                'board_university_10th' => $request->board_university_10th,
                'result_10th' => $request->result_10th,
                'year_12th' => $request->year_12th,
                'board_university_12th' => $request->board_university_12th,
                'result_12th' => $request->result_12th,
                'other_year' => $request->other_year,
                'other_stream' => $request->other_stream,
                'other_board_university' => $request->other_board_university,
                'other_result' => $request->other_result,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'photo' => $photoPath,
                'tenth_image' => $tenthPath,
                'twelfth_image' => $twelfthPath,
                'graduation_image' => $graduationPath,
                'post_graduation_image' => $photoPath,
                'id_proof' => $idproofPath,
                'other_document' => $otherPath,
            ]);

            session()->flash('success', 'Admission created successfully!');
            return redirect()->route('frenchies.admission.index');
        } catch (\Exception $e) {
            Log::error('Error creating Admission: ' . $e->getMessage());
            return redirect()->back();
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admissions = Admission::with(['center', 'course'])->findOrFail($id);
        $centers = Center::select('id', 'center_code', 'institute_name')
            ->where('status', 'active')
            ->latest()
            ->get();
    
        $courses = Course::select('id', 'name')->whereNull('parent_id')->get();
        $subcourses = Course::select('id', 'name')->where('id', $admissions->subcourse_id)->get();
    
        return view('admin.admissions.create', compact('centers', 'courses', 'subcourses', 'admissions'));
    }
    

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, string $id)
    {
        $request->validate([
            'center_id' => 'required|exists:centers,id',
            'student_name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'gender' => 'required|in:male,female',
        ]);

        $session = $request->course_program == 'two_year' ? $request->start_session_first : $request->start_session;
        $enrollNo = generateEnrollNo($session);
        $rollNo = generateRollNo($session);

        try {
            $admission = Admission::findOrFail($id);
            $admissionData = [
                // 'center_id' => $request->center_id,
                'student_name' => $request->student_name,
                'course_id' => $request->course_id,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'registration_date' => $request->registration_date,
                'roll_no' => $rollNo, // Use generated Roll No
                'enroll_no' => $enrollNo, // Use generated Enroll No
                'mobile_no' => $request->mobile_no,
                'alternate_contact_no' => $request->alternate_contact_no,
                'email' => $request->email,
                'semester' => $request->semester,
                'registration_year' => $request->registration_year,
                'tenth_passing_year' => $request->tenth_passing_year,
                'twelfth_passing_year' => $request->twelfth_passing_year,
                'state' => $request->state,
                'city' => $request->city,
                'course_program' => $request->course_program,
                'start_session' => $request->start_session,
                'end_session' => $request->end_session,
                'start_session_first' => $request->start_session_first,
                'end_session_first' => $request->end_session_first,
                'start_session_second' => $request->start_session_second,
                'end_session_second' => $request->end_session_second,
                'remarks' => $request->remarks,
                'year_10th' => $request->year_10th,
                'stream_10th' => $request->stream_10th,
                'stream_12th' => $request->stream_12th,
                'board_university_10th' => $request->board_university_10th,
                'result_10th' => $request->result_10th,
                'year_12th' => $request->year_12th,
                'board_university_12th' => $request->board_university_12th,
                'result_12th' => $request->result_12th,
                'other_year' => $request->other_year,
                'other_stream' => $request->other_stream,
                'other_board_university' => $request->other_board_university,
                'other_result' => $request->other_result,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
            ];
            $fileFields = ['photo', 'tenth_image', 'twelfth_image', 'graduation_image', 'id_proof', 'other_document'];
            foreach ($fileFields as $fileField) {
                if ($request->hasFile($fileField)) {
                    $admissionData[$fileField] = $this->uploadImage($request, $fileField, 'uploads/images');
                }
            }
            $admission->update($admissionData);
            session()->flash('success', 'Admission updated successfully!');
            return redirect()->route('frenchies.admission.index');
        } catch (\Exception $e) {
            // Log the error and redirect back
            Log::error('Error updating Admission: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update admission.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admission = Admission::findOrFail($id);
        $imageFields = ['photo', 'tenth_image', 'twelfth_image', 'graduation_image', 'id_proof', 'other_document'];
    
        foreach ($imageFields as $field) {
            if ($admission->$field) {
                $this->deleteImage($admission->$field);
            }
        }
    
        $admission->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
    

     /**
     * Status Change.
     */
    public function changeStatus(Request $request)
    {
        $admission = Admission::findOrFail($request->id);
        $admission->status = $request->status; 
        $admission->save();
        
        return response(['message' => 'Status has been updated!']);
    }
}
