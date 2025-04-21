@extends('website.master')

@section('title')
    Customer Dashboard Page
@endsection

@push('styles')
    <style>
        .form-title{
            padding: 1.2rem 2rem;
        }
        .form-title h4{
            color: #439322;
            font-weight: 900;
            text-align: center;
        }

    </style>
    
@endpush

@section('body')
    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header form-title">
                            <h4>Login Form</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-danger text-center">{{ Session('message') }}</p>
                            <form action="{{ route('customer.login') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-12 mb-2">Email Address</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-12 mb-2">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class=""></label>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success w-100" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header form-title">
                            <h4>Registration Form</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('customer.register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <label for="" class="col-md-12 mb-2">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="name">
                                        <span
                                            class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-12 mb-2">Email Address</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="email">
                                        <span
                                            class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-12 mb-2">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="password">
                                        <span
                                            class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-12 mb-2">Mobile</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="mobile">
                                        <span
                                            class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class=""></label>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success w-100" value="Registration">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
