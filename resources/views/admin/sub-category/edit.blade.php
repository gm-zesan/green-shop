@extends('admin.master')
@section('title')
    Edit Sub Category
@endsection

@section('module')
    Sub Category
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Sub Category Information</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20"
                        action="{{ route('sub-category.update', ['id' => $sub_category->id]) }}" method="Post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    <option value="" disabled selected> -- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $sub_category->category_id ? 'selected' : ' ' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Sub Category Name <span
                                    class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="name"
                                    value="{{ $sub_category->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Sub Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="" name="description" rows="5"> {{ $sub_category->description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Sub Category Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image" />
                                <img src="{{ asset($sub_category->image) }}" alt="{{ $sub_category->name }}" height="100"
                                    width="130">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3">
                                    <input type="radio" name="status" value="1"
                                        {{ $sub_category->status == 1 ? 'checked' : '' }}> Published
                                </label>
                                <label>
                                    <input type="radio" name="status" value="2"
                                        {{ $sub_category->status == 2 ? 'checked' : '' }}> Unpublished
                                </label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update
                                    Sub Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
