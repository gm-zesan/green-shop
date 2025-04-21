@extends('website.master')

@section('title')
    Checkout Page
@endsection

@section('body')

    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card card-body">
                    <h3 class="text-success">{{ Session('message') }}</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
