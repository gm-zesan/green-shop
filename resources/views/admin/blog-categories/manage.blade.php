@extends('admin.master')
@section('title')
    Manage Blog Category
@endsection

@section('module')
    Blog Category
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Blog Category Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 10%">SL NO</th>
                                    <th style="width: 20%">Category Name</th>
                                    <th>Category Description</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <a href="{{ route('blog-category.edit', ['id' => $category->id]) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('blog-category.delete', ['id' => $category->id]) }}"
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
