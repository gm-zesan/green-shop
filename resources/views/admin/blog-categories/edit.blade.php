@extends('admin.master')
@section('title')
    Edit Blog Category
@endsection

@section('module')
    Blog Category
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Blog Category Information</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('blog-category.update', ['id' => $category->id]) }}" method="Post">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="name"
                                    value="{{ $category->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="" name="description" rows="5">{{ $category->description }}</textarea>
                            </div>
                        </div>

                        
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update
                                    Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
