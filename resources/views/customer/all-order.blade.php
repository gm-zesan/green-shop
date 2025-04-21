@extends('customer.layout')

@section('title')
    My Orders
@endsection

@section('content')
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>SL. No.</td>
                <td>Order No.</td>
                <td>Order Date</td>
                <td>Order Total</td>
                <td>Delevary Address</td>
                <td>Order Status</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->order_total }}</td>
                    <td>{{ $order->delivery_address }}</td>
                    <td>{{ $order->order_status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No Order Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
