@extends('admin.master')
@section('title')
    Edit Banner
@endsection

@section('module')
    Banner
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Banner Information</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('banner.update', ['id' => $banner->id]) }}"
                        method="Post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Key Position <span class="text-danger"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="key">
                                    <option value="hero-slider" {{ $banner->key == 'hero-slider' ? 'selected' : '' }}>Hero Slider</option>
                                    <option value="hero-banner" {{ $banner->key == 'hero-banner' ? 'selected' : '' }}>Hero Banner</option>
                                    <option value="special-offer-banner" {{ $banner->key == 'special-offer-banner' ? 'selected' : '' }}>Special Offer Banner</option>
                                    <option value="banner-section" {{ $banner->key == 'banner-section' ? 'selected' : '' }}>Banner Section</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Banner Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image" />
                                <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->name }}" height="100" width="130">
                            </div>
                        </div>
                        
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Banner Info</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
