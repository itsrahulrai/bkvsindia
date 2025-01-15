@extends('admin.layouts.master')
@section('title')
Certificates
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
          <h4 class="card-title">Certificates</h4>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table id="example3" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>SI.NO</th>
                  <th>Center Code</th>
                  <th>Name</th>
                  <th>EnrollNo</th>
                  <th>RollNumber</th>
                  <th>Course</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($certificates as $key => $certificate)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $certificate->center->center_code ?? 'N/A'}}</td> <!-- Display center_code from admission -->
                  <td>{{ $certificate->admission->student_name ?? 'N/A' }}</td> <!-- Display student name -->
                  <td>{{ $certificate->admission->enroll_no ?? 'N/A' }}</td> <!-- Display enroll number -->
                  <td>{{ $certificate->admission->roll_no ?? 'N/A' }}</td> <!-- Display roll number -->
                  <td>{{ $certificate->course->name ?? 'N/A' }}</td> <!-- Display course name -->
                  <td>
                    <div class="mb-3 col-md-12">
                      <select id="inputState" class="default-select form-control wide change-status" name="status" data-id="{{ $certificate->id }}">
                        <option value="active" {{ old('status', $certificate->status ?? 'inactive') === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status', $certificate->status ?? 'inactive') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                      </select>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex">
                      <!-- Marksheet Button -->
                       @if($certificate->admission->course_program === 'one_year')
                      <a href="{{route('admin.marksheets.firstYear',$certificate->admission->id )}}" class="btn btn-info shadow btn-sm me-2" title="View Marksheet">
                          <i class="fas fa-file-invoice fs-7"></i> 
                      </a>
                      @else
                      <a href="{{route('admin.marksheets.firstYear',$certificate->admission->id )}}" class="btn btn-info shadow btn-sm me-2" title="View Marksheet">
                          <i class="fas fa-file-invoice fs-7"></i> 
                      </a>
                      <!-- Marksheet Button -->
                      <a href="{{route('admin.marksheets.secondYear',$certificate->admission->id )}}" class="btn btn-info shadow btn-sm me-2" title="View Marksheet">
                          <i class="fas fa-file-invoice fs-7"></i> 
                      </a>
                      @endif
                      <!-- Certificate Button -->
                      <a href="{{route('admin.certificates',$certificate->admission->id )}}" class="btn btn-success shadow btn-sm me-3" title="View Certificate">
                          <i class="fas fa-certificate fs-7"></i>
                      </a>
                      <!-- Edit Button -->
                      <a href="{{ route('admin.marksheet.edit', $certificate->id  ) }}" class="btn btn-primary shadow btn-sm me-2" title="Edit Certificates">
                        <i class="fas fa-edit fs-7"></i>
                      </a>
                      <!-- Delete Button -->
                      <a href="{{ route('admin.marksheet.destroy', $certificate->id ) }}" class="btn btn-danger shadow btn-sm delete-item" title="Delete Certificates">
                        <i class="fas fa-trash-alt fs-7"></i>
                      </a>
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
@push('script')
<script>
  $(document).ready(function() {
    $('body').on('change', '.change-status', function() {
      let selectedStatus = $(this).val();
      let id = $(this).data('id');
      $.ajax({
        url: "{{ route('admin.marksheet.change-status') }}",
        method: 'PUT',
        data: {
          status: selectedStatus,
          id: id
        },
        success: () => Swal.fire('Success', 'Status has been updated!', 'success'),
        error: () => Swal.fire('Error', 'Failed to update status.', 'error')
      });
    });
  });
</script>
@endpush