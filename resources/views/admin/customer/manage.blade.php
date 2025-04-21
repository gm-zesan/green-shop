@extends('admin.master')
@section('title')
    Manage Customer
@endsection

@section('module')
    Customer
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Customer Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 8%">SL NO</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th style="width: 12%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->mobile }}</td>
                                        <td>
                                            @if(isset($customer->image))
                                                <img src="{{ asset('storage/' . $customer->image) }}" class="rounded-full mb-2" alt="{{ $customer->name }}" height="50" width="50">
                                            @else
                                                image unavailable
                                            @endif
                                    </td>
                                        <td>{{ $customer->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('customer.show', ['id' => $customer->id]) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="{{ route('customer.delete', ['id' => $customer->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?');">
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
