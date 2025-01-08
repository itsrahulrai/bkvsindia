@extends('admin.layouts.master')
@section('title')
Dashboard
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
							<h4 class="mb-3">Course</h4>
							<form class="needs-validation" novalidate="" action="{{ isset($course) ? route('admin.courses.update', $course->id) : route('admin.courses.store') }}" method="POST">
    @csrf
    @if(isset($course))
        @method('PUT') <!-- This method is used for updating the course -->
    @endif

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="courseTitle" class="form-label">Course Title</label>
            <input type="text" class="form-control" name="course_title" id="courseTitle" placeholder="" value="{{ old('course_title', $course->course_title ?? '') }}" required="">
        </div>
        <div class="col-md-6 mb-3">
            <label for="courseName" class="form-label">Course Name</label>
            <input type="text" class="form-control" name="course_name" id="courseName" placeholder="" value="{{ old('course_name', $course->course_name ?? '') }}" required="">
        </div>
        <div class="col-md-6 mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="number" class="form-control" name="duration" id="duration" placeholder="" value="{{ old('duration', $course->duration ?? '') }}" required="">
        </div>
        <div class="col-md-6 mb-3">
            <label for="mode" class="form-label">Mode</label>
            <input type="text" class="form-control" name="mode" id="mode" placeholder="" value="{{ old('mode', $course->mode ?? '') }}" required="">
        </div>
        <div class="col-md-6 mb-3">
            <label for="eligibility" class="form-label">Eligibility</label>
            <input type="text" class="form-control" name="eligibility" id="eligibility" placeholder="" value="{{ old('eligibility', $course->eligibility ?? '') }}" required="">
        </div>
        <div class="col-md-6 mb-3">
            <label for="fees" class="form-label">Fees</label>
            <input type="number" class="form-control" name="course_fees" id="fees" placeholder="" value="{{ old('course_fees', $course->course_fees ?? '') }}" required="">
        </div>
    </div>

    <hr class="mb-4">

    <div class="text-end">
        <button type="button" class="btn btn-secondary mx-2" onclick="window.location.href='{{ route('admin.courses.index') }}'">
            <i class="fas fa-times-circle"></i> Cancel
        </button>
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-save"></i> {{ isset($course) ? 'Update' : 'Submit' }}
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