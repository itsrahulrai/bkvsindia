@extends('front.layout.master')
@section('title', ' Apply For Admission - Bhartiya Kaushal Vikas Sansthan')
@section('content')

<!-- main-area -->

<main class="main-area fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg"
        data-background="{{ asset('front-assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title"> Apply For Admission </h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ url('/') }}">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem"> Apply For Admission </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('front-assets/img/others/breadcrumb_shape01.svg') }}" alt="img"
                class="alltuchtopdown">
            <img src="{{ asset('front-assets/img/others/breadcrumb_shape02.svg') }}" alt="img"
                data-aos="fade-right" data-aos-delay="300">
            <img src="{{ asset('front-assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('front-assets/img/others/breadcrumb_shape04.svg') }}" alt="img"
                data-aos="fade-down-left" data-aos-delay="400">
            <img src="{{ asset('front-assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->


    <section class="about-area-three section-py-120 bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="contact-form-wrap shadow-lg p-5 rounded bg-white">
                        <h4 class="title text-center text-uppercase font-weight-bold text-dark">Apply For Admission</h4>
                        <p class="text-center text-danger mb-4"> Required fields are marked *</p>
                        <form action="{{ route('admission.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="row">
                                <h4 style="color: #EC6923;" class="mb-1 mt-1 w-100">
                                    <i class="bi bi-person-fill" style="color: #EC6923;"></i> Student Details
                                </h4>
                                <hr class="w-100">

                                <!-- Student Details -->
                                <div class="row">
                                    <!-- Center -->
                                    <div class="col-md-4 mb-3">
                                        <label for="center_id" class="form-label">Center *</label>
                                        <select class="form-select" name="center_id" id="center_id" required>
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

                                    <!-- Student Name -->
                                    <div class="col-md-4 mb-3">
                                        <label for="student_name" class="form-label">Student Name *</label>
                                        <input name="student_name" type="text" class="form-control" placeholder="Student Name *" required>
                                    </div>

                                    <!-- Mobile No -->
                                    <div class="col-md-4 mb-3">
                                        <label for="mobile" class="form-label">Mobile No *</label>
                                        <input name="mobile_no" type="number" class="form-control" placeholder="Mobile No *" required>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-md-4 mb-3">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input name="email" type="email" class="form-control" placeholder="Email Address *" required>
                                    </div>

                                    <!-- State -->
                                    <div class="col-md-4 mb-3">
                                        <label for="state" class="form-label">Select State *</label>
                                        <select name="state" id="state" class="form-select" required>
                                            <option value="">Choose State</option>
                                            @foreach (config("settings.states") as $state)
                                            <option value="{{ $state }}" {{ old('state', $admissions->state ?? '') == $state ? 'selected' : '' }}>
                                                {{ $state }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- City -->
                                    <div class="col-md-4 mb-3">
                                        <label for="city" class="form-label">City *</label>
                                        <input name="city" type="text" class="form-control" placeholder="City" required>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-md-4 mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input name="address" type="text" class="form-control" placeholder="Address">
                                    </div>

                                    <!-- Date of Birth -->
                                    <div class="col-md-4 mb-3">
                                        <label for="dob" class="form-label">Date of Birth *</label>
                                        <input name="dob" type="date" class="form-control" required>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-4 mb-3">
                                        <label for="gender" class="form-label">Gender *</label>
                                        <select name="gender" id="gender" class="form-select" required>
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <!-- Registration Date -->
                                    <div class="col-md-4 mb-3">
                                        <label for="registration_date" class="form-label">Registration Date *</label>
                                        <input name="registration_date" type="date" class="form-control" required>
                                    </div>

                                    <!-- Course Category -->
                                    <div class="col-md-4 mb-3">
                                        <label for="course-category" class="form-label">Course Category *</label>
                                        <select name="course_id" id="course-category" class="form-select" required>
                                            <option value="">Choose Category</option>
                                            @foreach($courses as $course)
                                            <option value="{{ $course->id }}">
                                                {{ $course->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Subcourse -->
                                    <div class="col-md-4 mb-3">
                                        <label for="subcourse" class="form-label">Select Courses *</label>
                                        <select name="subcourse_id" id="subcourse" class="form-select" required>
                                            <option value="">Choose Courses</option>
                                        </select>
                                    </div>
                                </div>


                                <!-- Course Program Selection -->

                                <div class="col-md-12 mb-3">
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

                                <div class="row mt-2">

                                    <div class="col-md-6 mb-3">
                                        <label for="mother_name" class="form-label">Father Name *</label>
                                        <input name="father_name" type="text" class="form-control" placeholder="Father Name *" required>
                                    </div>

                                    <!-- Mobile No -->
                                    <div class="col-md-6 mb-3">
                                        <label for="mother_name" class="form-label">Mother Name *</label>
                                        <input name="mother_name" type="text" class="form-control" placeholder="Mother Name *" required>
                                    </div>

                                </div>

                                <div class="row">
                                    <h4 style="color: #EC6923;" class="mb-3 mt-3">
                                        <i class="bi bi-journal-bookmark" style="color: #EC6923;"></i> Academic Details
                                    </h4>
                                    <hr>
                                    <div class="col-md-3 mb-3">
                                        <label for="year_10th" class="form-label">10th Year</label>
                                        <input type="number" class="form-control" name="year_10th" id="year_10th"
                                            value="{{ old('year_10th', $admissions->year_10th ?? '') }}">
                                        @error('year_10th')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="stream_10th" class="form-label">Stream</label>
                                        <input type="text" class="form-control" name="stream_10th" id="stream_10th"
                                            value="{{ old('stream_10th', $admissions->stream_10th ?? '') }}">
                                        @error('stream_10th')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="board_university_10th" class="form-label">Board / University</label>
                                        <input type="text" class="form-control" name="board_university_10th" id="board_university_10th"
                                            value="{{ old('board_university_10th', $admissions->board_university_10th ?? '') }}">
                                        @error('board_university_10th')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="result_10th" class="form-label">Result</label>
                                        <input type="number" class="form-control" name="result_10th" id="result_10th"
                                            value="{{ old('result_10th', $admissions->result_10th ?? '') }}">
                                        @error('result_10th')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="year_12th" class="form-label">12th Year</label>
                                        <input type="number" class="form-control" name="year_12th" id="year_12th"
                                            value="{{ old('year_12th', $admissions->year_12th ?? '') }}">
                                        @error('year_12th')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="stream_12th" class="form-label">Stream</label>
                                        <input type="text" class="form-control" name="stream_12th" id="stream_12th"
                                            value="{{ old('stream_12th', $admissions->stream_12th ?? '') }}">
                                        @error('stream_12th')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="board_university_12th" class="form-label">Board / University</label>
                                        <input type="text" class="form-control" name="board_university_12th" id="board_university_12th"
                                            value="{{ old('board_university_12th', $admissions->board_university_12th ?? '') }}">
                                        @error('board_university_12th')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="result_12th" class="form-label">Result</label>
                                        <input type="number" class="form-control" name="result_12th" id="result_12th"
                                            value="{{ old('result_12th', $admissions->result_12th ?? '') }}">
                                        @error('result_12th')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="other_year" class="form-label">Other Year</label>
                                        <input type="number" class="form-control" name="other_year" id="other_year"
                                            value="{{ old('other_year', $admissions->other_year ?? '') }}">
                                        @error('other_year')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="other_stream" class="form-label">Other Stream</label>
                                        <input type="text" class="form-control" name="other_stream" id="other_stream"
                                            value="{{ old('other_stream', $admissions->other_stream ?? '') }}">
                                        @error('other_stream')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="other_board_university" class="form-label">Other Board / University</label>
                                        <input type="text" class="form-control" name="other_board_university" id="other_board_university"
                                            value="{{ old('other_board_university', $admissions->other_board_university ?? '') }}">
                                        @error('other_board_university')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="other_result" class="form-label">Other Result</label>
                                        <input type="number" class="form-control" name="other_result" id="other_result"
                                            value="{{ old('other_result', $admissions->other_result ?? '') }}">
                                        @error('other_result')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <h4 style="color: #EC6923;" class="mb-3 mt-3">
                                        <i class="bi bi-upload" style="color: #EC6923;"></i> Documents
                                    </h4>
                                    <hr>
                                    <div class="col-md-6  mb-3">
                                       
                                            <label for="photo" class="form-label">Photo</label>
                                            <input name="photo" type="file" class="form-control">
                                        
                                            </div>
                                    <div class="col-md-6  mb-3">
                                        
                                            <label for="tenth" class="form-label">10th Class Marksheet</label>
                                            <input name="tenth" type="file" class="form-control">
                                       
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        
                                            <label for="twelve" class="form-label">12th Class Marksheet</label>
                                            <input name="twelve" type="file" class="form-control">
                                        
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        
                                            <label for="graduation" class="form-label">Graduation Certificate</label>
                                            <input name="graduation" type="file" class="form-control">
                                        
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        
                                            <label for="id_proof" class="form-label">ID Proof</label>
                                            <input name="id_proof" type="file" class="form-control">
                                      
                                    </div>
                                </div>

                                <div class="form-grp text-center mt-4">
                                <button type="submit" class="btn btn-two arrow-btn">
                                    Submit
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14"
                                        viewBox="0 0 16 14" fill="none"
                                        data-inject-url="{{ asset('front-assets/img/icons/right_arrow.svg') }}"
                                        class="injectable">
                                        <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>







    <!-- about-area-end -->
</main>

<!-- main-area --->
@endsection
@push('script')

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
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            } else {
                $('#subcourse').empty().append('<option value="">Choose Courses</option>');
            }
        });
    });
</script>

@endpush