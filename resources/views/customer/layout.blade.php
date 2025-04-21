@extends('website.master')

@push('styles')
    <style>
        .list-group .active{
            background-color: #439322;
            border-color: #439322;
        }
        
    </style>
@endpush

@section('body')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ route('customer.profile') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'customer.profile' ? 'active' : '' }}">Profile</a>
                        <a href="{{ route('customer.order') }}" class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'customer.order' ? 'active' : '' }}">Order</a>
                        <a href="{{ route('customer.logout') }}" class="list-group-item list-group-item-action">Logout</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
