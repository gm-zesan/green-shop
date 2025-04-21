@extends('admin.master')
@section('title')
    Create Banner
@endsection

@section('module')
    Banner
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Banner Form</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('banner.store') }}" method="Post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Key Position <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="key">
                                    <option value="" disabled selected> -- Select Position --</option>
                                    <option value="hero-slider">Hero Slider</option>
                                    <option value="hero-banner">Hero Banner</option>
                                    <option value="special-offer-banner">Special Offer Banner</option>
                                    <option value="banner-section">Banner Section</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Banner Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image" />
                            </div>
                        </div>
                        
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Banner</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
