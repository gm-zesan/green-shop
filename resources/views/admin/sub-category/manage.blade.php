@extends('admin.master')
@section('title')
    Manage Sub Category
@endsection

@section('module')
    Sub Category
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Sub Category Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sub_categories as $sub_category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sub_category->category->name }}</td>
                                        <td>{{ $sub_category->name }}</td>
                                        <td>{{ $sub_category->description }}</td>
                                        <td><img src="{{ asset($sub_category->image) }}" alt="{{ $sub_category->name }}"
                                                height="50" width="80"></td>
                                        <td>{{ $sub_category->status == 1 ? 'Published' : 'UnPublished' }}</td>
                                        <td>
                                            <a href="{{ route('sub-category.edit', ['id' => $sub_category->id]) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('sub-category.delete', ['id' => $sub_category->id]) }}"
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
