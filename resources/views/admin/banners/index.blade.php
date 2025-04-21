@extends('admin.master')
@section('title')
    Manage Banner
@endsection

@section('module')
    Banner
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Banners Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 8%">SL NO</th>
                                    <th>Position Key</th>
                                    <th>Image</th>
                                    <th>Updated At</th>
                                    <th style="width: 12%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $banner)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $banner->key }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $banner->image) }}" alt="" style="width: 120px; height: 60px;">
                                        </td>
                                        <td>{{ $banner->updated_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('banner.edit', ['id' => $banner->id]) }}" class="btn btn-success"><i class="ti-pencil-alt"></i></a>
                                            <a href="{{ route('banner.delete', ['id' => $banner->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')"><i class="ti-trash"></i></a>
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
