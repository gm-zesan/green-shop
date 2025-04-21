@extends('admin.master')
@section('title')
    Manage Order
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
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Order NO</th>
                                    <th>Order date</th>
                                    <th>Customer Info</th>
                                    <th>Order total</th>
                                    <th>Order status</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->customer->name . ' (' . $order->customer->mobile . ')' }}</td>
                                        <td>{{ $order->order_total }}</td>
                                        <td>{{ $order->order_status }}</td>
                                        <td>{{ $order->payment_status }}</td>
                                        <td>
                                            <a href="{{ route('admin.order-detail', ['id' => $order->id]) }}"
                                                class="btn btn-info btn-sm" title="Order Detail">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.order-edit', ['id' => $order->id]) }}"
                                                class="btn btn-success btn-sm {{ $order->order_status == 'complete' ? 'disabled' : '' }}"
                                                title="Order Edit">
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('admin.order-invoice', ['id' => $order->id]) }}"
                                                class="btn btn-primary btn-sm" title="View Invoice">
                                                <i class="ti-info-alt"></i>
                                            </a>
                                            <a href="{{ route('admin.print-invoice', ['id' => $order->id]) }}"
                                                class="btn btn-success btn-sm" target="_blank" title="Print Invoice">
                                                <i class="ti-save"></i>
                                            </a>
                                            <a href="{{ route('admin.order-delete', ['id' => $order->id]) }}"
                                                class="btn btn-danger btn-sm {{ $order->order_status == 'cancel' ? '' : 'disabled' }}"
                                                onclick="return confirm('Are you sure to delete this?');">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
