@extends('customer.layout')

@section('title')
    Edit Profile
@endsection

@push('styles')
    <style>
        .avatar-label{
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            border: 2px solid #4b8b3b;
            border-radius: 50%;
            height: 130px;
            width: 130px;
            margin: 0 auto;
        }
        .avatar-label i{
            position: absolute;
            bottom: 20px;
            right: 7px;
        }
        .avatar-label img{
            height: 94px;
            width: 94px;
        }
    </style>
@endpush

@section('content')
    <form action="{{ route('customer.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Avatar -->
        <div class="text-center">
            <label for="avatar" class="form-label avatar-label">
                @if($customer->image)
                    <img src="{{ asset('storage/' . $customer->image) }}" alt="Avatar" class="rounded-full mb-2">
                @else
                    <img src="{{ asset('website/assets/images/default-avatar.png') }}" alt="Default Avatar" class="rounded-full mb-2">
                @endif
            </label>
            <input type="file" id="avatar" name="image" class="form-control d-none">
        </div>
        <p class="mb-3 text-center">{{ $customer->email }}</p>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}" class="form-control">
                </div>
            </div>

            <!-- Mobile -->
            <div class="col-lg-4 col-md-6">
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" id="mobile" name="mobile" value="{{ old('mobile', $customer->mobile) }}" class="form-control">
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $customer->date_of_birth) }}" class="form-control">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" id="address" name="address" value="{{ old('address', $customer->address) }}" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="blood_group" class="form-label">Blood Group</label>
                    <select id="blood_group" name="blood_group" class="form-select">
                        <option value="">Select Blood Group</option>
                        <option value="A+" {{ $customer->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                        <option value="A-" {{ $customer->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                        <option value="B+" {{ $customer->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                        <option value="B-" {{ $customer->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                        <option value="O+" {{ $customer->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                        <option value="O-" {{ $customer->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                        <option value="AB+" {{ $customer->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                        <option value="AB-" {{ $customer->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                    </select>
                </div>
            </div>

            
            <hr class="my-5">


            <div class="col-lg-4 col-md-6">
                <div class="mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" id="current_password" name="current_password" class="form-control">
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="mb-5">
                    <label for="password_confirmation" class="form-label">Confirm New Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                </div>
            </div>
        </div>

        <div class="mb-3 button text-end">
            <button type="submit" class="btn">Update Profile</button>
        </div>
    </form>
@endsection
