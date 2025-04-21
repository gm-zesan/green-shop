@extends('admin.master')
@section('title')
    Edit Blog
@endsection

@section('module')
    Blog
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit BLog Information</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('blog.update', ['id' => $blog->id]) }}"
                        method="Post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    <option value="" disabled selected> -- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $blog->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">BLog Title <span class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="title" value="{{ $blog->title }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">BLog Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="subtitle" value="{{ $blog->subtitle }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Blog Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" id="" name="description" rows="5">{!! $blog->description !!}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">BLog Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image" />
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->name }}" height="100"
                                    width="130">
                            </div>
                        </div>
                        
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update BLog Info</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
