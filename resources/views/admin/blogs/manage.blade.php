@extends('admin.master')
@section('title')
    Manage Blog
@endsection

@section('module')
    Blog
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Blogs Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 8%">SL NO</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Subtitle</th>
                                    <th>Image</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th style="width: 12%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name }}</td>
                                        <td>{{ $blog->subtitle }}</td>
                                        <td><img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" height="50" width="80"></td>
                                        <td>{{ $blog->createdBy->name }}</td>
                                        <td>{{ $blog->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('blog.show', ['id' => $blog->id]) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="{{ route('blog.edit', ['id' => $blog->id]) }}" class="btn btn-success btn-sm">
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('blog.delete', ['id' => $blog->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?');">
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
