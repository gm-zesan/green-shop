@extends('admin.master')
@section('title')
    Blog Details
@endsection

@section('module')
    Blog
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-striped border">
                            <tr>
                                <th>BLog Title</th>
                                <td>{{ $blog->title }}</td>
                            </tr>
                            <tr>
                                <th>BLog Category</th>
                                <td>{{ $blog->category->name }}</td>
                            </tr>
                            <tr>
                                <th>BLog Subtitle</th>
                                <td>{{ $blog->subtitle }}</td>
                            </tr>
                            <tr>
                                <th style="width: 20%">Blog Description</th>
                                <td>{!! $blog->description !!}</td>
                            </tr> 
                            <tr>
                                <th>BLog Image</th>
                                <td>
                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->name }}" height="100"
                                        width="100">
                                </td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td>{{ $blog->createdBy->name }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <th>Last Updated At</th>
                                <td>{{ $blog->updated_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
