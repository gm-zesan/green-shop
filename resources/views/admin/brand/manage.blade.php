@extends('admin.master')
@section('title')
    Manage Brand
@endsection

@section('module')
    Brand
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Brand Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Brand Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>{{ $brand->description }}</td>
                                        <td><img src="{{ asset($brand->image) }}" alt="{{ $brand->name }}"
                                                height="50" width="80"></td>
                                        <td>{{ $brand->status == 1 ? 'Published' : 'UnPublished' }}</td>
                                        <td>
                                            <a href="{{ route('brand.edit', ['id' => $brand->id]) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('brand.delete', ['id' => $brand->id]) }}"
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
