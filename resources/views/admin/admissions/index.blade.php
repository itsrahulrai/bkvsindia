@extends('admin.layouts.master')
@section('title')
Admissions
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
          <h4 class="card-title">Centers</h4>
          <a href="{{route('admin.admission.create')}}"  class="btn btn-rounded btn-danger"><span
                                        class="btn-icon-start text-info"><i class="fa fa-plus color-danger"></i>
                                    </span>Add</a>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table id="example3" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>SI.NO</th>
                  <th>Center Code</th>
                  <th>EnrollNo</th>
                  <th>RollNumber</th>
                  <th>Name</th>
                  <th>Course</th>
                  <th>Mobile No</th>
                  <th>Reg Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($admissions as $key => $admission)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $admission->center->center_code }}</td>
                  <td>{{ $admission->enroll_no }}</td>
                  <td>{{ $admission->roll_no }}</td>
                  <td>{{ $admission->student_name }}</td>
                  <td>{{ $admission->course->name }}</td>
                  <td>{{ $admission->mobile_no }}</td>
                  <td>{{ $admission->registration_date }}</td>
                  <td>
                    <div class="mb-3 col-md-12">
                        <select id="inputState" class="default-select form-control wide change-status" name="status" data-id="{{ $admission->id }}">
                            <option value="active" {{ old('status', $admission->status ?? 'pending') === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $admission->status ?? 'pending') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                  </td>

                  
                  <td>
                    <div class="d-flex">
                      <!-- Edit Button -->
                      <a href="{{ route('admin.admission.edit', $admission->id ) }}" class="btn btn-primary shadow btn-sm me-2" title="Edit Course">
                        <i class="fas fa-edit fs-7"></i>
                      </a>
                      <!-- Delete Button -->
                      <a href="{{ route('admin.admission.destroy', $admission->id ) }}" class="btn btn-danger shadow btn-sm delete-item" title="Delete Course">
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
@push('script')
<script>
    $(document).ready(function(){
        $('body').on('change', '.change-status', function(){
            let selectedStatus = $(this).val();
            let id = $(this).data('id'); 
            $.ajax({
                url: "{{ route('admin.admission.change-status') }}",
                method: 'PUT',
                data: { status: selectedStatus, id: id },
                success: () => Swal.fire('Success', 'Status has been updated!', 'success'),
                error: () => Swal.fire('Error', 'Failed to update status.', 'error')
            });
        });
    });
</script>
@endpush