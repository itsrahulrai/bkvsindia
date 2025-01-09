@extends('admin.layouts.master')
@section('title')
Subject  Edit - BKVS INDIA
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
                            <h3 class="mb-3">Subject Create</h3>
                            <form action="{{ isset($courseDetails) ? route('admin.subject.update', $courseDetails->id) : route('admin.subject.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($courseDetails))
        @method('PUT')
    @endif

    <div class="row">
        <h4 style="color: #EC6923;" class="mb-3 mt-3">
            <i class="bi bi-journal-text" style="color: #EC6923;"></i> Course Details
        </h4>
        <hr>

        <!-- Course Name -->
        <div class="col-md-4 mb-3">
            <label for="course" class="form-label">Course Name</label>
            <select class="form-control" name="course_id" id="course">
                <option value="" selected disabled>Choose a Course</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ old('course_id', $courseDetails->course_id ?? '') == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
            @error('course_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Semester -->
        <div class="col-md-4 mb-3">
            <label for="semester" class="form-label">Semester</label>
            <select class="form-control" name="semester" id="semester">
                <option value="" selected disabled>Choose a Semester</option>
                @for($i = 1; $i <= 8; $i++)
                    <option value="{{ $i }}" {{ old('semester', $courseDetails->semester ?? '') == $i ? 'selected' : '' }}>
                        Semester {{ $i }}
                    </option>
                @endfor
            </select>
            @error('semester')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Statement Mark -->
        <div class="col-md-4 mb-3">
            <label for="statement_mark" class="form-label">Statement Mark</label>
            <input type="text" class="form-control" name="statement_mark" id="statement_mark"
                value="{{ old('statement_mark', $courseDetails->statement_mark ?? '') }}">
            @error('statement_mark')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Subject Details -->
    <div class="row">
        <div class="col text-start">
            <h4 style="color: #EC6923;" class="mb-3 mt-3">
                <i class="bi bi-book-fill" style="color: #EC6923;"></i> Subject Details
            </h4>
        </div>
        <div class="col text-end">
            <button type="button" class="btn btn-success btn-sm" id="add-row">
                <i class="fas fa-plus-circle"></i> Add Subject
            </button>
        </div>

        <hr>
        <table class="table" id="subjects-table">
            <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Minimum Marks</th>
                    <th>Maximum Marks</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($courseDetails->subjects ?? [] as $index => $subject)
                    <tr>
                        <td><input type="text" class="form-control" name="subjects[{{ $index }}][subject_code]" value="{{ old('subjects.' . $index . '.subject_code', $subject->subject_code) }}" placeholder="Subject Code"></td>
                        <td><input type="text" class="form-control" name="subjects[{{ $index }}][name]" value="{{ old('subjects.' . $index . '.name', $subject->subject_name) }}" placeholder="Subject Name"></td>
                        <td><input type="number" class="form-control" name="subjects[{{ $index }}][min_marks]" value="{{ old('subjects.' . $index . '.min_marks', $subject->minimum_marks) }}" placeholder="Minimum Marks"></td>
                        <td><input type="number" class="form-control" name="subjects[{{ $index }}][max_marks]" value="{{ old('subjects.' . $index . '.max_marks', $subject->maximum_marks) }}" placeholder="Maximum Marks"></td>
                        <td><button type="button" class="btn btn-danger btn-sm remove-row"><i class="fas fa-trash"></i></button></td>
                    </tr>
                @empty
                    <tr>
                        <td><input type="text" class="form-control" name="subjects[0][subject_code]" placeholder="Subject Code"></td>
                        <td><input type="text" class="form-control" name="subjects[0][name]" placeholder="Subject Name"></td>
                        <td><input type="number" class="form-control" name="subjects[0][min_marks]" placeholder="Minimum Marks"></td>
                        <td><input type="number" class="form-control" name="subjects[0][max_marks]" placeholder="Maximum Marks"></td>
                        <td><button type="button" class="btn btn-danger btn-sm remove-row"><i class="fas fa-trash"></i></button></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Submit Button -->
    <div class="text-end mt-4">
        <button type="button" class="btn btn-secondary mx-2">
            <i class="fas fa-times-circle"></i> Cancel
        </button>
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-save"></i> {{ isset($courseDetails) ? 'Update' : 'Submit' }}
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
        const subjectsTable = document.querySelector('#subjects-table tbody');
        const addRowButton = document.getElementById('add-row');
        let subjectIndex = 1;

        addRowButton.addEventListener('click', () => {
            const row = document.createElement('tr');
            row.innerHTML = `
            <td><input type="number" class="form-control" name="subjects[${subjectIndex}][subject_code]" placeholder="Subject Code"></td>
            <td><input type="text" class="form-control" name="subjects[${subjectIndex}][name]" placeholder="Subject Name"></td>
            <td><input type="number" class="form-control" name="subjects[${subjectIndex}][min_marks]" placeholder="Minimum Marks"></td>
            <td><input type="number" class="form-control" name="subjects[${subjectIndex}][max_marks]" placeholder="Maximum Marks"></td>
            <td><button type="button" class="btn btn-danger btn-sm remove-row"><i class="fas fa-trash"></i></button></td>
        `;
            subjectsTable.appendChild(row);
            subjectIndex++;
        });

        subjectsTable.addEventListener('click', (e) => {
            if (e.target.closest('.remove-row')) e.target.closest('tr').remove();
        });
    });
</script>
@endpush