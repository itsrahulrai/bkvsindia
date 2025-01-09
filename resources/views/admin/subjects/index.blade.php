@extends('admin.layouts.master')
@section('title')
Subjects
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
                    <h3 class="card-title">Subjects</h3>
                    <a href="{{route('admin.subject.create')}}" class="btn btn-rounded btn-danger"><span
                            class="btn-icon-start text-info"><i class="fa fa-plus color-danger"></i>
                        </span>Add</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>SI.NO</th>
                                    <th>Course Name</th>
                                    <th>Semester/Year</th>
                                    <th>Subject Code</th>
                                    <th>Subject Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courseDetails as $key => $courseDetail)
                                @foreach ($courseDetail->subjects as $subject)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $courseDetail->course->name ?? 'No Course' }}</td>
                                    <td>{{ $courseDetail->semester }}</td>
                                    <td>{{ $subject->subject_code }}</td>
                                    <td>{{ $subject->subject_name }}</td>
                                   
                                    <td>
                                        <div class="d-flex">
                                            <!-- Edit Button -->
                                            <a href="{{ route('admin.subject.edit', $courseDetail->id) }}" class="btn btn-primary shadow btn-sm me-2" title="Edit Subject">
                                                <i class="fas fa-edit fs-7"></i>
                                            </a>
                                            <!-- Delete Button -->
                                            <a href="{{ route('admin.subject.destroy', $courseDetail->id) }}" class="btn btn-danger shadow btn-sm delete-item" title="Delete Subject">
                                                <i class="fas fa-trash-alt fs-7"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
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

@endpush