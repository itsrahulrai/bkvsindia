@extends('admin.layouts.master')
@section('title')
Marksheets
@endsection
@push('style')

@endpush
@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Marksheets</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Buttons to Choose Marksheet or Certificate -->
                        <div class="d-flex justify-content-center gap-3 mb-4">
                            <a href="{{ route('admin.marksheets.firstYear') }}" class="btn btn-danger">
                                <i class="fas fa-file-alt me-2"></i>1st Year Marksheet
                            </a>
                            <a href="{{ route('admin.marksheets.secondYear') }}" class="btn btn-danger">
                                <i class="fas fa-file-alt me-2"></i>2nd Year Marksheet
                            </a>
                            <a href="{{ route('admin.certificate.print') }}" class="btn btn-danger">
                                <i class="fas fa-award me-2"></i>Certificate
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
@endsection

@push('script')

@endpush