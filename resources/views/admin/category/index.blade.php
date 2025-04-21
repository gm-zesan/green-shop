@extends('admin.master')
@section('title')
    Create Category
@endsection

@section('module')
    Category
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Category Information</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('category.new') }}" method="Post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span
                                    class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="name"
                                    placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="" name="description" placeholder="Category description"
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Category Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3">
                                    <input type="radio" name="status" value="1" checked> Published
                                </label>
                                <label>
                                    <input type="radio" name="status" value="2"> Unpublished
                                </label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create
                                    New Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
