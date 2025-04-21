@extends('website.master')

@section('title')
    Customer Dashboard Page
@endsection

@section('body')


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ route('customer.profile') }}" class="list-group-item list-group-item-action">Profile</a>
                        <a href="{{ route('customer.order') }}" class="list-group-item list-group-item-action">Order</a>
                        <a href="{{ route('customer.logout') }}" class="list-group-item list-group-item-action">Logout</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1>My Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
