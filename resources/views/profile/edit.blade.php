@extends('admin.master')
@section('title')
    Edit Profile
@endsection

@section('module')
    Profile
@endsection
@push('styles')
    <style>
        .avatar-label{
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            border: 2px solid #fb9678;
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
            height: 86px;
            width: 74px;
        }
    </style>
@endpush
@section('body')

    <div class="row mt-4">
        <div class="col-md-6 col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <input type="file" id="avatar" name="avatar" class="d-none" onchange="previewAvatar(this)">
                            
                            <label for="avatar" class="form-label avatar-label cursor-pointer">
                                @if(isset($user->avatar))
                                    <img id="currentAvatar" src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->name }}" class="rounded-full">
                                @else
                                    <img id="currentAvatar" src="{{ asset('admin/assets/images/default-avatar.png') }}" alt="{{ $user->name }}" class="rounded-full">
                                @endif
                                
                                <img id="avatarPreview" alt="{{ $user->name }}" class="d-none rounded-full">
                                
                                <i class="ti-pencil-alt"></i>
                            </label>
                        </div>
                        <p class="text-center">{{ $user->email }}</p>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        </div> --}}

                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <input type="password" id="current_password" name="current_password" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                    
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" id="password_confirmation"  name="password_confirmation" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

<script>
    function previewAvatar(input) {
        const reader = new FileReader();
        reader.onload = function() {
            const previewImage = document.getElementById('avatarPreview');
            const currentAvatar = document.getElementById('currentAvatar');
            
            // Hide the current avatar and show the new preview
            currentAvatar.classList.add('d-none');
            previewImage.classList.remove('d-none');
            previewImage.src = reader.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
    
@endpush
