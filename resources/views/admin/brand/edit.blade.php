@extends('admin.master')
@section('title')
    Edit Brand
@endsection

@section('module')
    Brand
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Brand Information</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('brand.update', ['id' => $brand->id]) }}"
                        method="Post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Brand Name <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="name"
                                    value="{{ $brand->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Brand Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="" name="description" rows="5">{{ $brand->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Brand Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image" />
                                <img src="{{ asset($brand->image) }}" alt="{{ $brand->name }}" height="100"
                                    width="130">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3">
                                    <input type="radio" name="status" {{ $brand->status == 1 ? 'checked' : '' }}
                                        value="1"> Published
                                </label>
                                <label>
                                    <input type="radio" name="status" value="2"
                                        {{ $brand->status == 2 ? 'checked' : '' }}> Unpublished
                                </label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update
                                    Brand Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
