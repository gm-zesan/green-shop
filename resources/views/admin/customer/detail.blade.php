@extends('admin.master')
@section('title')
    Customer Details
@endsection

@section('module')
    Customer
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Customer Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-striped border">
                            <tr>
                                <th>Customer Name</th>
                                <td>{{ $customer->name }}</td>
                            </tr>
                            <tr>
                                <th>Customer Email</th>
                                <td>{{ $customer->email }}</td>
                            </tr>
                            <tr>
                                <th>Customer Phome</th>
                                <td>{{ $customer->mobile }}</td>
                            </tr> 
                            
                            @if(isset($customer->address))
                                <tr>
                                    <th>Customer Address</th>
                                    <td>{{ $customer->address }}</td>
                                </tr>
                            @endif

                            @if(isset($customer->image))
                                <tr>
                                    <th>Customer Image</th>
                                    <td>
                                        <img src="{{ asset($customer->image) }}" alt="{{ $customer->name }}" height="100"
                                            width="100">
                                    </td>
                                </tr>
                            @endif
                            
                            @if(isset($customer->date_of_birth))
                                <tr>
                                    <th>Customer Date of Birth</th>
                                    <td>{{ $customer->date_of_birth }}</td>
                                </tr>
                            @endif

                            @if(isset($customer->nid))
                                <tr>
                                    <th>Customer NID</th>
                                    <td>{{ $customer->nid }}</td>
                                </tr>
                            @endif

                            @if(isset($customer->blood_group))
                                <tr>
                                    <th>Customer Blood Group</th>
                                    <td>{{ $customer->blood_group }}</td>
                                </tr>
                            @endif

                            <tr>
                                <th>Created At</th>
                                <td>{{ $customer->created_at->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <th>Last Updated At</th>
                                <td>{{ $customer->updated_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
