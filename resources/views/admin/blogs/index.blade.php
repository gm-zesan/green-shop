@extends('admin.master')
@section('title')
    Create Blog
@endsection

@section('module')
    Blog
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create BLog Form</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('blog.store') }}" method="Post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    <option value="" disabled selected> -- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">
                                Title <span class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="title"
                                    placeholder="Blog Title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Subtitle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="subtitle"
                                    placeholder="Blog Subtitle">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">
                                Description <span class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" id="" name="description"
                                    placeholder="Blog description" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">BLog Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image" />
                            </div>
                        </div>
                        
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Blog</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
