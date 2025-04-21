@extends('admin.master')
@section('title')
    Manage Product
@endsection

@section('module')
    Product
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Product Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Product Name</th>
                                    <th>Code</th>
                                    <th>Stock Amount</th>
                                    <th>Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->stock_amount }} {{ $product->unit->name }}</td>
                                        <td><img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                                height="50" width="80"></td>
                                        <td>{{ $product->status == 1 ? 'Published' : 'UnPublished' }}</td>
                                        <td>
                                            <a href="{{ route('product.detail', ['id' => $product->id]) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('product.delete', ['id' => $product->id]) }}"
                                                class="btn btn-danger btn-sm"
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
