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
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">Courses</h4>
          <a href="{{route('admin.courses.create')}}" class="btn btn-primary">
            <i class="fas fa-plus"></i> New
          </a>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table id="example3" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>SI.NO</th>
                  <th>Course Title</th>
                  <th>Course Name</th>
                  <th>Duration</th>
                  <th>Mode</th>
                  <th>Eligibility</th>
                  <th>Fees</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($courses as $key => $course)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $course->course_title }}</td>
                  <td>{{ $course->course_name }}</td>
                  <td>{{ $course->duration }}</td>
                  <td>{{ $course->mode }}</td>
                  <td>{{ $course->eligibility }}</td>
                  <td>{{ $course->course_fees }}</td>
                  <td>
                    <div class="d-flex">
                      <!-- Edit Button -->
                      <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-primary shadow btn-sm me-2" title="Edit Course">
                        <i class="fas fa-edit fs-7"></i> 
                      </a>
                       <!-- Delete Button -->
                      <a href="{{ route('admin.courses.destroy', $course->id) }}" class="btn btn-danger shadow btn-sm delete-item" title="Delete Course">
                      <i class="fas fa-trash-alt fs-7"></i> 
                      </a>
                      </form>
                    </div>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection