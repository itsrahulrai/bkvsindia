@extends('admin.layouts.master')
@section('title')
Profile
@endsection
@push('style')
@endpush
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-12 order-lg-1">
                            <h3 class="mb-3">Profile Update</h3>
                            <h4 style="color: #EC6923;" class="mb-3 mt-3">
                                <i class="bi bi-person" style="color: #EC6923;"></i> Profile Details
                            </h4>

                            <hr>
                            <form action="{{ route('admin.user.profile.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')


                                <div class="row">
                                    <!-- Left side inputs -->


                                    <div class="col-md-4 mb-3">
                                        <label for="institute_name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="institute_name"
                                            value="{{Auth::user()->name}}">
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="phone" class="form-label">Phone No.</label>
                                        <input type="number" class="form-control" name="mobile" id="mobile"
                                            value="{{Auth::user()->mobile}}">
                                        @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{Auth::user()->email}}">
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="button" class="btn btn-secondary mx-2">
                                        <i class="fas fa-times-circle"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-save"></i> Update
                                    </button>
                                </div>
                            </form>


                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 order-lg-1">
                            <h3 class="mb-3">Password Update</h3>
                            <h4 style="color: #EC6923;" class="mb-3 mt-3">
                                <i class="bi bi-lock" style="color: #EC6923;"></i> Password Details
                            </h4>

                            <hr>
                            <form action="{{ route('admin.user.profile.update.password') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Left side inputs -->
                                    <div class="col-md-4 mb-3">
                                        <label for="institute_name" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" name="current_password" id="current_password"
                                            placeholder="Current Password">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="institute_name" class="form-label"> Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="institute_name" class="form-label"> Password Confirmation</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password"
                                            placeholder="Password Confirmation">
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="button" class="btn btn-secondary mx-2">
                                        <i class="fas fa-times-circle"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-save"></i> Update
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
<script>
    $(document).ready(function() {
        $('#content1').richText();

    });
</script>
@endpush