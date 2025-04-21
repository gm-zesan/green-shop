@extends('admin.master')
@section('title')
    Edit Order
@endsection

@section('module')
    Order
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Order Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="m-t-40">
                        <form action="{{ route('admin.order-update', ['id' => $order->id]) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Customer Info</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text"
                                        value="{{ $order->customer->name . ' (' . $order->customer->mobile . ')' }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Order Id</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="{{ $order->id }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Order Total</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="{{ $order->order_total }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Order Status</label>
                                <div class="col-md-9">
                                    <select name="order_status" class="form-control">
                                        <option value="pending" {{ $order->order_status == 'pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="confirm" {{ $order->order_status == 'confirm' ? 'selected' : '' }}>
                                                Order Confirm</option>
                                        <option value="processing"
                                            {{ $order->order_status == 'processing' ? 'selected' : '' }}>
                                            Processing</option>
                                        <option value="delivered" {{ $order->order_status == 'delivered' ? 'selected' : '' }}>
                                                Order Delivered</option>
                                        <option value="cancel" {{ $order->order_status == 'cancel' ? 'selected' : '' }}>
                                            Order Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Delivery Address</label>
                                <div class="col-md-9">
                                    <textarea name="delivery_address" class="form-control" rows="2">{{ $order->delivery_address }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success w-100" value="Update Order">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
