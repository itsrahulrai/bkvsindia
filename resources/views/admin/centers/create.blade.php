@extends('admin.layouts.master')
@section('title')
Apply For Center
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
              <h4 class="mb-3">Apply For Center</h4>
              <form action="{{ isset($centers) ? route('admin.center.update', $centers->apply_id) : route('admin.center.store') }}" method="POST">
    @csrf
    @if(isset($centers))
    @method('PUT')
    @endif

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="center_code" class="form-label">Center Code</label>
            <input type="text" class="form-control" name="center_code" id="center_code" 
                   value="{{ old('center_code', $centers->center_code ?? '') }}" placeholder="e.g., BKVS0001" {{ isset($centers) ? 'readonly' : '' }}>
            @error('center_code')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-md-6 mb-3">
            <label for="institute_name" class="form-label">Institute Name</label>
            <input type="text" class="form-control" name="institute_name" id="institute_name" 
                   value="{{ old('institute_name', $centers->institute_name ?? '') }}">
            @error('institute_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="director" class="form-label">Director Name</label>
            <input type="text" class="form-control" name="director" id="director" 
                   value="{{ old('director', $centers->director ?? '') }}">
            @error('director')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="mobile" class="form-label">Mobile No.</label>
            <input type="number" class="form-control" name="mobile" id="mobile" 
                   value="{{ old('mobile', $centers->mobile ?? '') }}">
            @error('mobile')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="phone" class="form-label">Phone No.</label>
            <input type="number" class="form-control" name="phone" id="phone" 
                   value="{{ old('phone', $centers->phone ?? '') }}">
            @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" 
                   value="{{ old('email', $centers->email ?? '') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" name="state" id="state" 
                   value="{{ old('state', $centers->state ?? '') }}">
            @error('state')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="city" 
                   value="{{ old('city', $centers->city ?? '') }}">
            @error('city')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="pincode" class="form-label">Pincode</label>
            <input type="number" class="form-control" name="pincode" id="pincode" 
                   value="{{ old('pincode', $centers->pincode ?? '') }}">
            @error('pincode')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="address">{{ old('address', $centers->address ?? '') }}</textarea>
            @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="address1" class="form-label">Address Line 1</label>
            <textarea class="form-control" name="address1" id="address1">{{ old('address1', $centers->address1 ?? '') }}</textarea>
            @error('address1')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="space_available" class="form-label">Space Available</label>
            <input type="number" class="form-control" name="space_available" id="space_available" 
                   value="{{ old('space_available', $centers->space_available ?? '') }}">
            @error('space_available')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="number_of_lab_rooms" class="form-label">Number of Lab Rooms</label>
            <input type="number" class="form-control" name="number_of_lab_rooms" id="number_of_lab_rooms" 
                   value="{{ old('number_of_lab_rooms', $centers->number_of_lab_rooms ?? '') }}">
            @error('number_of_lab_rooms')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" name="status" id="status">
                <option value="pending" {{ old('status', $centers->status ?? 'pending') === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="active" {{ old('status', $centers->status ?? '') === 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $centers->status ?? '') === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" name="date" id="date" 
                   value="{{ old('date', $centers->date ?? '') }}">
            @error('date')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="number_of_lab_rooms" class="form-label">Website</label>
            <input type="text" class="form-control" name="website" id="website" 
                   value="{{ old('website', $centers->website ?? '') }}">
            @error('website')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-12 mb-3">
            <label for="message" class="form-label">Remark</label>
            <textarea class="form-control" name="message" id="message">{{ old('message', $centers->message ?? '') }}</textarea>
            @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="text-end">
        <button type="button" class="btn btn-secondary mx-2">
            <i class="fas fa-times-circle"></i> Cancel
        </button>
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-save"></i> {{ isset($centers) ? 'Update' : 'Submit' }}
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