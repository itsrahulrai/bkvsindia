@extends('admin.layouts.master')
@section('title')
Admission Create - BKVS INDIA
@endsection
@push('style')
@endpush
@section('content')
<!-- row -->
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-lg-12 order-lg-1">
                     <h3 class="mb-3">Admission Create</h3>
                     <form action="{{ isset($admissions) ? route('admin.admission.update', $admissions->id) : route('admin.admission.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($admissions))
                        @method('PUT')
                        @endif
                        <div class="row">
                           <!-- Center and Course -->
                           <h4 style="color: #EC6923;" class="mb-3 mt-3">
                              <i class="bi bi-person-fill" style="color: #EC6923;"></i> Student Details
                           </h4>
                           <hr>
                           <div class="col-md-4 mb-3">
                              <label for="center_id" class="form-label">Center</label>
                              <select class="form-control" name="center_id" id="center_id">
                                 <option value="" selected disabled>Choose a center</option>
                                 @foreach($centers as $center)
                                 <option value="{{ $center->id }}"
                                    {{ old('center_id', $admissions->center_id ?? '') == $center->id ? 'selected' : '' }}>
                                    {{ $center->center_code }} - ({{ $center->institute_name }})
                                 </option>
                                 @endforeach
                              </select>
                              @error('center_id')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <!-- Student Details -->
                           <div class="col-md-4 mb-3">
                              <label for="student_name" class="form-label">Student Name</label>
                              <input type="text" class="form-control" name="student_name" id="student_name"
                                 value="{{ old('student_name', $admissions->student_name ?? '') }}">
                              @error('student_name')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>




                           <div class="col-md-4">
                              <div class="form-grp">
                                 <label for="course-category">Course Category *</label>
                                 <select name="course_id" id="course-category" class="form-select form-control" required>
                                    <option value="">Choose Category</option>
                                    @foreach($courses as $course)
                                    <option value="{{ $course->id }}" {{ isset($admissions) && $admissions->course_id == $course->id ? 'selected' : '' }}>
                                       {{ $course->name }}
                                    </option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>

                           <div class="col-md-4">
                              <div class="form-grp">
                                 <label for="subcourse">Select Courses *</label>
                                 <select name="subcourse_id" id="subcourse" class="form-select form-control" required>
                                    <option value="">Choose Courses</option>
                                    @if(isset($subcourses) && $subcourses->isNotEmpty())
                                    @foreach($subcourses as $subcourse)
                                    <option value="{{ $subcourse->id }}" {{ isset($admissions) && $admissions->subcourse_id == $subcourse->id ? 'selected' : '' }}>
                                       {{ $subcourse->name }}
                                    </option>
                                    @endforeach
                                    @endif
                                 </select>
                              </div>
                           </div>


                           <div class="col-md-4 mb-3">
                              <label for="gender" class="form-label">Gender</label>
                              <select class="form-control" name="gender" id="gender">
                                 <option value="" selected disabled>Choose a Gender</option>
                                 <option value="male" {{ old('gender', $admissions->gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                                 <option value="female" {{ old('gender', $admissions->gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                              </select>
                              @error('gender')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <!-- Additional Student Information -->
                           <div class="col-md-4 mb-3">
                              <label for="dob" class="form-label">Date of Birth</label>
                              <input type="date" class="form-control" name="dob" id="dob" value="{{ old('dob', $admissions->dob ?? '') }}">
                              @error('dob')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="registration_date" class="form-label">Registration Date</label>
                              <input type="date" class="form-control" name="registration_date" id="registration_date"
                                 value="{{ old('registration_date', $admissions->registration_date ?? '') }}">
                              @error('registration_date')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <!-- Enrollment and Roll Numbers -->
                           <div class="col-md-4 mb-3">
                              <label for="roll_no" class="form-label">Roll Number</label>
                              <input type="text" class="form-control" name="roll_no" id="roll_no"
                                 value="{{ old('roll_no', $admissions->roll_no ?? '') }}" readonly>
                              @error('roll_no')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                              <small class="form-text text-muted">Roll Number is automatically generated based on session & course program.</small>
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="enroll_no" class="form-label">Enrollment Number</label>
                              <input type="text" class="form-control" name="enroll_no" id="enroll_no"
                                 value="{{ old('enroll_no', $admissions->enroll_no ?? '') }}" readonly>
                              @error('enroll_no')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                              <small class="form-text text-muted">Enrollment Number is automatically generated based on session & course program.</small>
                           </div>

                           <div class="col-md-4 mb-3">
                              <label for="mobile_no" class="form-label">Mobile No</label>
                              <input type="number" class="form-control" name="mobile_no" id="mobile_no"
                                 value="{{ old('mobile_no', $admissions->mobile_no ?? '') }}">
                              @error('mobile_no')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="alternate_contact_no" class="form-label">Alternate Contact No</label>
                              <input type="number" class="form-control" name="alternate_contact_no" id="alternate_contact_no"
                                 value="{{ old('alternate_contact_no', $admissions->alternate_contact_no ?? '') }}">
                              @error('alternate_contact_no')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" id="email"
                                 value="{{ old('email', $admissions->email ?? '') }}">
                              @error('email')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="semester" class="form-label">Semester</label>
                              <input type="text" class="form-control" name="semester" id="semester"
                                 value="{{ old('semester', $admissions->semester ?? '') }}">
                              @error('semester')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="registration_year" class="form-label">Registration Year</label>
                              <select class="form-control" name="registration_year" id="registration_year">
                                 <option value="">Choose Year</option>
                                 @php
                                 $currentYear = date('Y');
                                 @endphp
                                 @for ($year = $currentYear; $year >= 1950; $year--)
                                 <option value="{{ $year }}" {{ old('registration_year', $admissions->registration_year ?? '') == $year ? 'selected' : '' }}>
                                    {{ $year }}
                                 </option>
                                 @endfor
                              </select>
                              @error('registration_year')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <!-- Education Details -->
                           <div class="col-md-4 mb-3">
                              <label for="tenth_passing_year" class="form-label">10th Passing Year</label>
                              <select class="form-control" name="tenth_passing_year" id="tenth_passing_year">
                                 <option value="">Choose Year</option>
                                 @for ($year = $currentYear; $year >= 1950; $year--)
                                 <option value="{{ $year }}" {{ old('tenth_passing_year', $admissions->tenth_passing_year ?? '') == $year ? 'selected' : '' }}>
                                    {{ $year }}
                                 </option>
                                 @endfor
                              </select>
                              @error('tenth_passing_year')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="twelfth_passing_year" class="form-label">12th Passing Year</label>
                              <select class="form-control" name="twelfth_passing_year" id="twelfth_passing_year">
                                 <option value="">Choose Year</option>
                                 @for ($year = $currentYear; $year >= 1950; $year--)
                                 <option value="{{ $year }}" {{ old('twelfth_passing_year', $admissions->twelfth_passing_year ?? '') == $year ? 'selected' : '' }}>
                                    {{ $year }}
                                 </option>
                                 @endfor
                              </select>
                              @error('twelfth_passing_year')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <!-- Contact Information -->
                           <!-- Address -->
                           <div class="col-md-4 mb-3">
                              <label for="state" class="form-label">State</label>
                              <select class="form-control" name="state" id="state">
                                 <option value="">Choose State</option>
                                 @foreach (config('settings.states') as $state)
                                 <option value="{{ $state }}" {{ old('state', $admissions->state ?? '') == $state ? 'selected' : '' }}>
                                    {{ $state }}
                                 </option>
                                 @endforeach
                              </select>
                              @error('state')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="city" class="form-label">City</label>
                              <input type="text" class="form-control" name="city" id="city"
                                 value="{{ old('city', $admissions->city ?? '') }}">
                              @error('city')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-md-4 mb-3">
                              <label for="remarks" class="form-label">Remarks</label>
                              <textarea class="form-control" name="remarks" id="remarks">{{ old('remarks', $admissions->remarks ?? '') }}</textarea>
                              @error('remarks')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>


                           <!-- Course Program Selection -->

                           <div class="col-md-12">
                              <label for="course_program" class="form-label">Course Program</label>
                              <select class="form-control" name="course_program" id="course_program">
                                 <option value="">Choose Program</option>
                                 <option value="one_year" {{ old('course_program', $admissions->course_program ?? '') == 'one_year' ? 'selected' : '' }}>One Year</option>
                                 <option value="two_year" {{ old('course_program', $admissions->course_program ?? '') == 'two_year' ? 'selected' : '' }}>Two Year</option>
                              </select>
                              @error('course_program')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>


                           <!-- Sessions for One Year -->

                           <div class="col-md-12 mt-3" id="oneYearSession" style="display: none;">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>Start Session</th>
                                       <th>End Session</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <select class="form-control" name="start_session" id="start_session">
                                             <option value="">Choose Year</option>
                                             @php $currentYear = date('Y'); @endphp
                                             @for ($year = $currentYear; $year >= 1950; $year--)
                                             <option value="{{ $year }}" {{ old('start_session', $admissions->start_session ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                             @endfor
                                          </select>
                                       </td>
                                       <td>
                                          <select class="form-control" name="end_session" id="end_session">
                                             <option value="">Choose Year</option>
                                             @for ($year = $currentYear; $year >= 1950; $year--)
                                             <option value="{{ $year }}" {{ old('end_session', $admissions->end_session ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                             @endfor
                                          </select>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>


                           <!-- Sessions for Two Years -->

                           <div class="col-md-12  mt-3" id="twoYearSession" style="display: none;">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>1st Year Start</th>
                                       <th>1st Year End</th>
                                       <th>2nd Year Start</th>
                                       <th>2nd Year End</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <select class="form-control" name="start_session_first" id="start_session_first">
                                             <option value="">Choose Year</option>
                                             @for ($year = $currentYear; $year >= 1950; $year--)
                                             <option value="{{ $year }}" {{ old('start_session_first', $admissions->start_session_first ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                             @endfor
                                          </select>
                                       </td>
                                       <td>
                                          <select class="form-control" name="end_session_first" id="end_session_first">
                                             <option value="">Choose Year</option>
                                             @for ($year = $currentYear; $year >= 1950; $year--)
                                             <option value="{{ $year }}" {{ old('end_session_first', $admissions->end_session_first ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                             @endfor
                                          </select>
                                       </td>
                                       <td>
                                          <select class="form-control" name="start_session_second" id="start_session_second">
                                             <option value="">Choose Year</option>
                                             @for ($year = $currentYear; $year >= 1950; $year--)
                                             <option value="{{ $year }}" {{ old('start_session_second', $admissions->start_session_second ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                             @endfor
                                          </select>
                                       </td>
                                       <td>
                                          <select class="form-control" name="end_session_second" id="end_session_second">
                                             <option value="">Choose Year</option>
                                             @for ($year = $currentYear; $year >= 1950; $year--)
                                             <option value="{{ $year }}" {{ old('end_session_second', $admissions->end_session_second ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                             @endfor
                                          </select>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>



                           <h4 style="color: #EC6923;" class="mb-3 mt-3">
                              <i class="bi bi-journal-bookmark" style="color: #EC6923;"></i> Academic Details
                           </h4>
                           <hr>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">10th Year</label>
                              <input type="number" class="form-control" name="year_10th" id="year_10th"
                                 value="{{ old('year_10th', $admissions->year_10th ?? '') }}">
                              @error('year_10th')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Stream</label>
                              <input type="text" class="form-control" name="stream_10th" id="stream_10th"
                                 value="{{ old('stream_10th', $admissions->stream_10th ?? '') }}">
                              @error('stream_10th')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Board / university</label>
                              <input type="text" class="form-control" name="board_university_10th" id="board_university_10th"
                                 value="{{ old('board_university_10th', $admissions->board_university_10th ?? '') }}">
                              @error('board_university_10th')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Result</label>
                              <input type="number" class="form-control" name="result_10th" id="result_10th"
                                 value="{{ old('result_10th', $admissions->result_10th ?? '') }}">
                              @error('result_10th')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">12th Year</label>
                              <input type="number" class="form-control" name="year_12th" id="year_12th"
                                 value="{{ old('year_12th', $admissions->year_12th ?? '') }}">
                              @error('year_12th')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Stream</label>
                              <input type="text" class="form-control" name="stream_12th" id="stream_12th"
                                 value="{{ old('stream_12th', $admissions->stream_12th ?? '') }}">
                              @error('stream_12th')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Board / university</label>
                              <input type="text" class="form-control" name="board_university_12th" id="board_university_12th"
                                 value="{{ old('board_university_12th', $admissions->board_university_12th ?? '') }}">
                              @error('board_university_12th')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Result</label>
                              <input type="number" class="form-control" name="result_12th" id="result_12th"
                                 value="{{ old('result_12th', $admissions->result_12th ?? '') }}">
                              @error('result_12th')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Other</label>
                              <input type="number" class="form-control" name="other_year" id="other_year"
                                 value="{{ old('other_year', $admissions->other_year ?? '') }}">
                              @error('other_year')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Stream</label>
                              <input type="text" class="form-control" name="other_stream" id="other_stream"
                                 value="{{ old('other_stream', $admissions->other_stream ?? '') }}">
                              @error('other_stream')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Board / university</label>
                              <input type="text" class="form-control" name="other_board_university" id="other_board_university"
                                 value="{{ old('other_board_university', $admissions->other_board_university ?? '') }}">
                              @error('other_board_university')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="academic_year" class="form-label">Result</label>
                              <input type="number" class="form-control" name="other_result" id="other_result"
                                 value="{{ old('other_result', $admissions->other_result ?? '') }}">
                              @error('other_result')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <h4 style="color: #EC6923;" class="mb-3 mt-3">
                              <i class="bi bi-person-circle" style="color: #EC6923;"></i> Parents Details
                           </h4>
                           <hr>
                           <div class="col-md-6 mb-3">
                              <label for="father_name" class="form-label">Father's Name</label>
                              <input type="text" class="form-control" name="father_name" id="father_name"
                                 value="{{ old('father_name', $admissions->father_name ?? '') }}">
                              @error('father_name')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="mother_name" class="form-label">Mother's Name</label>
                              <input type="text" class="form-control" name="mother_name" id="mother_name"
                                 value="{{ old('mother_name', $admissions->mother_name ?? '') }}">
                              @error('mother_name')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <!-- Educational Documents -->
                           <h4 style="color: #EC6923;" class="mb-3 mt-3">
                              <i class="bi bi-upload" style="color: #EC6923;"></i> Documents
                           </h4>
                           <hr>
                           <div class="col-md-4 mb-3">
                              <label for="photo" class="form-label">Photo</label>
                              <input type="file" name="photo" multiple id="input-file-max-fs1"
                                 class="dropify dropify-event"
                                 data-allowed-file-extensions="png jpg jpeg" data-max-file-size="2M"
                                 data-default-file="{{ @asset($admissions->photo) }}" />
                              @error('photo')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="col-md-4 mb-3">
                              <label for="signature" class="form-label">10th</label>
                              <input type="file" name="tenth_image" multiple id="input-file-max-fs1"
                                 class="dropify dropify-event"
                                 data-allowed-file-extensions="png jpg jpeg" data-max-file-size="2M"
                                 data-default-file="{{ @asset($admissions->tenth_image) }}" />
                              @error('tenth_image')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="photo" class="form-label">12th</label>
                              <input type="file" name="twelfth_image" multiple id="input-file-max-fs1"
                                 class="dropify dropify-event"
                                 data-allowed-file-extensions="png jpg jpeg" data-max-file-size="2M"
                                 data-default-file="{{ @asset($admissions->twelfth_image) }}" />
                              @error('photo')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="signature" class="form-label">Graduation</label>
                              <input type="file" name="graduation_image" multiple id="input-file-max-fs1"
                                 class="dropify dropify-event"
                                 data-allowed-file-extensions="png jpg jpeg" data-max-file-size="2M"
                                 data-default-file="{{ @asset($admissions->graduation_image) }}" />
                              @error('signature')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="signature" class="form-label">Post Graduation</label>
                              <input type="file" name="post_graduation_image" multiple id="input-file-max-fs1"
                                 class="dropify dropify-event"
                                 data-allowed-file-extensions="png jpg jpeg" data-max-file-size="2M"
                                 data-default-file="{{ @asset($admissions->post_graduation_image) }}" />
                              @error('signature')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="signature" class="form-label">ID Proof</label>
                              <input type="file" name="id_proof" multiple id="input-file-max-fs1"
                                 class="dropify dropify-event"
                                 data-allowed-file-extensions="png jpg jpeg" data-max-file-size="2M"
                                 data-default-file="{{ @asset($admissions->id_proof) }}" />
                              @error('signature')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="col-md-4 mb-3">
                              <label for="signature" class="form-label">Other Document</label>
                              <input type="file" name="other_document" multiple id="input-file-max-fs1"
                                 class="dropify dropify-event"
                                 data-allowed-file-extensions="png jpg jpeg" data-max-file-size="2M"
                                 data-default-file="{{ @asset($admissions->other_document) }}" />
                              @error('other_document')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="text-end">
                              <button type="button" class="btn btn-secondary mx-2">
                                 <i class="fas fa-times-circle"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-danger">
                                 <i class="fas fa-save"></i> {{ isset($admissions) ? 'Update' : 'Submit' }}
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

@push('script')
<!-- JavaScript -->
<script>
   document.addEventListener('DOMContentLoaded', () => {
      const courseProgram = document.getElementById('course_program');
      const oneYearSession = document.getElementById('oneYearSession');
      const twoYearSession = document.getElementById('twoYearSession');

      const toggleSessions = () => {
         const selectedProgram = courseProgram.value;
         oneYearSession.style.display = selectedProgram === 'one_year' ? 'block' : 'none';
         twoYearSession.style.display = selectedProgram === 'two_year' ? 'block' : 'none';
      };

      toggleSessions();
      courseProgram.addEventListener('change', toggleSessions);
   });
</script>

<script>
   $(document).ready(function() {
      // Load subcourses dynamically when course changes
      $('#course-category').on('change', function() {
         var courseId = $(this).val();

         if (courseId) {
            $.ajax({
               url: "{{ route('get.subcourses') }}",
               type: "POST",
               data: {
                  _token: "{{ csrf_token() }}",
                  course_id: courseId
               },
               success: function(response) {
                  $('#subcourse').empty().append('<option value="">Choose Courses</option>');
                  $.each(response, function(key, subcourse) {
                     $('#subcourse').append('<option value="' + subcourse.id + '">' + subcourse.name + '</option>');
                  });

                  // Pre-select the subcourse in edit mode
                  var selectedSubcourse = "{{ isset($admissions) ? $admissions->subcourse_id : '' }}";
                  if (selectedSubcourse) {
                     $('#subcourse').val(selectedSubcourse);
                  }
               },
               error: function(xhr) {
                  console.error(xhr.responseText);
               }
            });
         } else {
            $('#subcourse').empty().append('<option value="">Choose Courses</option>');
         }
      });

      // Automatically trigger subcourse load in edit mode
      var selectedCourse = "{{ isset($admissions) ? $admissions->course_id : '' }}";
      if (selectedCourse) {
         $('#course-category').trigger('change');
      }
   });
</script>


@endpush