{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout> --}}

@extends('admin.master')
@section('title')
    View Profile
@endsection

@section('module')
    Profile
@endsection
@push('styles')
    <style>
        .profile-card .avatar {
            height: 130px;
            width: 130px;
            border: 2px solid #fb9678;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        .profile-card img {
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
                    <div class="profile-card text-center">
                        <div class="avatar">
                            @if(isset($user->avatar))
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile Avatar" class="rounded-full w-32 h-32">
                            @else
                                <img src="{{ asset('admin/assets/images/default-avatar.png') }}" alt="Profile Avatar" class="rounded-full w-32 h-32">
                            @endif
                        </div>
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->email }}</p>

                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
