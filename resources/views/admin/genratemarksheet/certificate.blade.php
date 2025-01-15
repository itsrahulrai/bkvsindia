@extends('admin.layouts.master')
@section('title','Certificate - BKVS INDIA')

@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12 order-lg-1">
                            <h3 class="mb-3">Certificate</h3>
                            <form action="{{ route('admin.certificate.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Hidden Fields for Admission ID and Course ID -->
                                <input type="hidden" name="admission_id" value="{{ $certificate->id }}">
                                <input type="hidden" name="course_id" value="{{ $certificate->course_id }}">
                                <input type="hidden" name="center_id" value="{{ $certificate->center_id }}">


                                <div class="row">
                                    <h4 style="color: #EC6923;" class="mb-3 mt-3">
                                        <i class="bi bi-journal-text" style="color: #EC6923;"></i> Certificate
                                    </h4>
                                    <hr>


                                    <div class="col-md-4 mb-3">
                                        <label for="enroll_no" class="form-label">Enrollment Number</label>
                                        <input type="text" class="form-control" name="enroll_no" id="enroll_no"
                                            value="{{ old('enroll_no', $certificate->enroll_no ?? '') }}" readonly>
                                        @error('enroll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Course Name -->
                                    <div class="col-md-4 mb-3">
                                        <label for="roll_no" class="form-label">Roll Number</label>
                                        <input type="text" class="form-control" name="roll_no" id="roll_no"
                                            value="{{ old('roll_no', $certificate->roll_no ?? '') }}" readonly>
                                        @error('roll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="roll_no" class="form-label">Course Name</label>
                                        <input type="text" class="form-control" name="course_id " id="course_id "
                                            value="{{ old('course_id ', $certificate->course->name  ?? '') }}" readonly>
                                        @error('roll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="enroll_no" class="form-label">Student Name</label>
                                        <input type="text" class="form-control" name="student_name" id="student_name"
                                            value="{{ old('student_name', $certificate->student_name ?? '') }}" readonly>
                                        @error('enroll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Course Name -->
                                    <div class="col-md-4 mb-3">
                                        <label for="roll_no" class="form-label">Father's Name</label>
                                        <input type="text" class="form-control" name="father_name" id="father_name"
                                            value="{{ old('father_name', $certificate->father_name ?? '') }}" readonly>
                                        @error('roll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="roll_no" class="form-label">Mother's Name</label>
                                        <input type="text" class="form-control" name="mother_name" id="mother_name"
                                            value="{{ old('roll_no', $certificate->mother_name ?? '') }}" readonly>
                                        @error('roll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="enroll_no" class="form-label">DOB</label>
                                        <input type="text" class="form-control" name="enroll_no" id="enroll_no"
                                            value="{{ old('enroll_no', $certificate->dob ?? '') }}" readonly>
                                        @error('enroll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Course Name -->
                                    <div class="col-md-4 mb-3">
                                        <label for="roll_no" class="form-label">Session</label>
                                        <input type="text" class="form-control" name="roll_no" id="roll_no"
                                            value="{{ old('roll_no',
                                                        $certificate->course_program == 'one_year'
                                                            ? ($certificate->start_session ?? '') . '-' . ($certificate->end_session ?? '')
                                                            : ($certificate->start_session_first ?? '') . '-' . ($certificate->end_session_second ?? '')
                                                    ) }}"
                                            readonly>
                                        @error('roll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-4 mb-3">
                                        <label for="roll_no" class="form-label">Date</label>
                                        <input type="text" class="form-control" name="registration_date" id="registration_date"
                                            value="{{ old('registration_date', $certificate->registration_date ?? '') }}" readonly>
                                        @error('roll_no')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>



                                </div>

                                <div class="row">
                                    <div class="col text-start">
                                        <h4 style="color: #EC6923;" class="mb-3 mt-3">
                                            <i class="bi bi-book-fill" style="color: #EC6923;"></i> Subject Details
                                        </h4>
</div>


{{-- certificate.blade.php --}}
<h1>Certificate for {{ $certificate->student_name }}</h1>
<p>Course Program: {{ $certificate->course_program }}</p>

<!-- Semester One Table -->
<h2>First Semester Subjects</h2>
<table class="table" id="semester-one-table">
    <thead>
        <tr>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Marks Obtained</th>
            <th>Internal Marks</th>
            <th>Minimum Marks</th>
            <th>Maximum Marks</th>
        </tr>
    </thead>
    <!-- <tbody>
        @foreach($semesterOne as $course)
            @foreach ($course->subjects as $index => $subject)
                <input type="hidden" name="subjects[{{ $index }}][course_subject_id]" value="{{ $subject->id }}">
                <tr>
                    <td>
                        <input type="text" class="form-control" name="subjects[{{ $index }}][subject_code]"
                            value="{{ old('subjects.' . $index . '.subject_code', $subject->subject_code) }}" placeholder="Subject Code" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="subjects[{{ $index }}][name]"
                            value="{{ old('subjects.' . $index . '.name', $subject->subject_name) }}" placeholder="Subject Name" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="subjects[{{ $index }}][marks_obtained]"
                            placeholder="Marks Obtained" value="{{ old('subjects.' . $index . '.marks_obtained') }}">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="subjects[{{ $index }}][internal_marks]"
                            placeholder="Internal Marks" value="{{ old('subjects.' . $index . '.internal_marks') }}">
                    </td>
                    <td>
                        <input type="number" class="form-control" name="subjects[{{ $index }}][min_marks]"
                            value="{{ old('subjects.' . $index . '.min_marks', $subject->minimum_marks) }}" placeholder="Minimum Marks" readonly>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="subjects[{{ $index }}][max_marks]"
                            value="{{ old('subjects.' . $index . '.max_marks', $subject->maximum_marks) }}" placeholder="Maximum Marks" readonly>
                    </td>
                </tr>
            @endforeach
        @endforeach
    </tbody> -->
</table>

<!-- Semester Two Table -->
<h2>Second Semester Subjects</h2>
<table class="table" id="semester-two-table">
    <thead>
        <tr>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Marks Obtained</th>
            <th>Internal Marks</th>
            <th>Minimum Marks</th>
            <th>Maximum Marks</th>
        </tr>
    </thead>
    <tbody>
        @foreach($semesterTwo as $course)
            @foreach ($course->subjects as $index => $subject)
                <input type="hidden" name="subjects[{{ $index }}][course_subject_id]" value="{{ $subject->id }}">
                <tr>
                    <td>
                        <input type="text" class="form-control" name="subjects[{{ $index }}][subject_code]"
                            value="{{ old('subjects.' . $index . '.subject_code', $subject->subject_code) }}" placeholder="Subject Code" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="subjects[{{ $index }}][name]"
                            value="{{ old('subjects.' . $index . '.name', $subject->subject_name) }}" placeholder="Subject Name" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="subjects[{{ $index }}][marks_obtained]"
                            placeholder="Marks Obtained" value="{{ old('subjects.' . $index . '.marks_obtained') }}">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="subjects[{{ $index }}][internal_marks]"
                            placeholder="Internal Marks" value="{{ old('subjects.' . $index . '.internal_marks') }}">
                    </td>
                    <td>
                        <input type="number" class="form-control" name="subjects[{{ $index }}][min_marks]"
                            value="{{ old('subjects.' . $index . '.min_marks', $subject->minimum_marks) }}" placeholder="Minimum Marks" readonly>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="subjects[{{ $index }}][max_marks]"
                            value="{{ old('subjects.' . $index . '.max_marks', $subject->maximum_marks) }}" placeholder="Maximum Marks" readonly>
                    </td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>


                                </div>

                                <!-- Submit Button -->
                                <div class="text-end mt-4">
                                    <button type="button" class="btn btn-secondary mx-2">
                                        <i class="fas fa-times-circle"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-save"></i> Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection