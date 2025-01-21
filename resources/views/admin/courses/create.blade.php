@extends('admin.layouts.master')
@section('title')
Courses
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
                            <h3 class="mb-3">Course</h3>
                            <form class="needs-validation" novalidate="" enctype="multipart/form-data"
                                action="{{ isset($course) ? route('admin.courses.update', $course->id) : route('admin.courses.store') }}" method="POST">
                                @csrf
                                @if(isset($course))
                                @method('PUT')
                                @endif
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="parent_id" class="form-label fs-5">Category</label>
                                        <select class="form-control" name="parent_id" id="parent_id">
                                            <option value="" selected disabled>Choose a Category</option>
                                            @foreach($courses as $parentCourse)
                                            <option value="{{ $parentCourse->id }}" {{ old('parent_id', $course->parent_id ?? '') == $parentCourse->id ? 'selected' : '' }}>
                                                {{ $parentCourse->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('parent_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label fs-5">Course Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $course->name ?? '') }}" required="">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="duration" class="form-label fs-5">Duration</label>
                                        <input type="text" class="form-control" name="duration" id="duration" value="{{ old('duration', $course->duration ?? '') }}" required="">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="mode" class="form-label fs-5">Mode</label>
                                        <input type="text" class="form-control" name="mode" id="mode" value="{{ old('mode', $course->mode ?? '') }}" required="">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="eligibility" class="form-label fs-5">Eligibility</label>
                                        <input type="text" class="form-control" name="eligibility" id="eligibility" value="{{ old('eligibility', $course->eligibility ?? '') }}" required="">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="fees" class="form-label fs-5">Fees</label>
                                        <input type="number" class="form-control" name="fees" id="fees" value="{{ old('fees', $course->fees ?? '') }}" required="">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="content" class="form-label fs-5">Course Content</label>
                                        <textarea class="form-control" name="content" id="content">{{ old('content', $course->content ?? '') }}</textarea>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="sidecontent" class="form-label fs-5">Side Content</label>
                                        <textarea class="form-control" name="sidecontent" id="sidecontent">{{ old('sidecontent', $course->sidecontent ?? '') }}</textarea>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="skill_level" class="form-label fs-5">Skill Level</label>

                                        <select class="form-control" name="skill_level" id="skill_level">
                                            <option value="" selected disabled>Choose a Skill Level</option>
                                            <option value="beginner" {{ old('skill_level', $course->skill_level ?? '') == 'beginner' ? 'selected' : '' }}>Beginner</option>
                                            <option value="intermediate" {{ old('skill_level', $course->skill_level ?? '') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                                            <option value="high" {{ old('skill_level', $course->skill_level ?? '') == 'high' ? 'selected' : '' }}>High</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="price" class="form-label fs-5">Price</label>
                                        <select class="form-control" name="price" id="price">
                                            <option value="" selected disabled>Choose a Price</option>
                                            <option value="free" {{ old('price', $course->price ?? '') == 'free' ? 'selected' : '' }}>Free</option>
                                            <option value="paid" {{ old('price', $course->price ?? '') == 'paid' ? 'selected' : '' }}>Paid</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="form-label fs-5">Course Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="image" id="image" accept="image/*">
                                        </div>

                                        @if(isset($course) && $course->image)
                                        <div class="mt-3">

                                            <img src="{{ asset($course->image) }}" alt="Course Image" class="img-fluid rounded" width="150">
                                        </div>
                                        @endif
                                    </div>

                                </div>

                                <hr class="mb-4">

                                <div class="text-end">
                                    <button type="button" class="btn btn-secondary mx-2">
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