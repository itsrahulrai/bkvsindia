@extends('admin.layouts.master')
@section('title')
Centers
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
          <!-- <a href="{{route('admin.courses.create')}}" class="btn btn-primary">
            <i class="fas fa-plus"></i> New
          </a> -->
          <a href="{{route('admin.center.create')}}"  class="btn btn-rounded btn-danger"><span
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
                  <th>Institute Name</th>
                  <th>Director</th>
                  <th>Mobile No</th>
                  <th>Address</th>
                  <th>State</th>
                  <th>Area</th>
                  <th>Password</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($centers as $key => $center)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $center->center_code }}</td>
                  <td>{{ $center->institute_name }}</td>
                  <td>{{ $center->director }}</td>
                  <td>{{ $center->mobile }}</td>
                  <td>{{ $center->address }}</td>
                  <td>{{ $center->state }}</td>
                  <td>{{ $center->centre_area }}</td>
                  <td>{{ $center->password }}</td>
                  <td>{{ $center->date }}</td>
                  <td>{{ $center->status }}</td>
                  <td>
                    <div class="d-flex">
                      <!-- Edit Button -->
                      <a href="{{ route('admin.center.edit', $center->apply_id ) }}" class="btn btn-primary shadow btn-sm me-2" title="Edit Course">
                        <i class="fas fa-edit fs-7"></i>
                      </a>
                      <!-- Delete Button -->
                      <a href="{{ route('admin.center.destroy', $center->apply_id ) }}" class="btn btn-danger shadow btn-sm delete-item" title="Delete Course">
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