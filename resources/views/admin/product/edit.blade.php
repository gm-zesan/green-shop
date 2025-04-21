@extends('admin.master')
@section('title')
    Edit Product
@endsection

@section('module')
    Product
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Product Form</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('product.update', ['id' => $product->id]) }}"
                        method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Name <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="name"
                                    value="{{ $product->name }}">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Category Name <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" id="categoryId">
                                    <option value="" disabled selected> -- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Sub-Category Name <span
                                    class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="sub_category_id" id="subCategoryId">
                                    <option value="" disabled selected> -- Select Sub-Category --</option>
                                    @foreach ($subCategories as $subCategory)
                                        <option
                                            value="{{ $subCategory->id }}"{{ $subCategory->id == $product->sub_category_id ? 'selected' : '' }}>
                                            {{ $subCategory->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Unit Name <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="unit_id">
                                    <option value="" disabled selected> -- Select Unit --</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}"
                                            {{ $unit->id == $product->unit_id ? 'selected' : '' }}>
                                            {{ $unit->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Code <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="code"
                                    value="{{ $product->code }}">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Model
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="model"
                                    value="{{ $product->model }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Stock Amount<span
                                    class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="stock_amount"
                                    value="{{ $product->stock_amount }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Regular Price<span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="regular_price"
                                    value="{{ $product->regular_price }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Selling Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="selling_price"
                                    value="{{ $product->selling_price }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Discount</label>
                            <div class="col-sm-9">
                                <input type="number" name="discount" class="form-control" step="0.01" min="0" max="100" value="{{ $product->discount }}">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="" name="short_description" rows="3">
                                    {{ $product->short_description }}
                                </textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" id="" name="long_description" rows="5">
                                    {{ $product->long_description }}
                                </textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="">Feature Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image"
                                    accept="image/*" />
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" height="100"
                                    width="130">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="">Other Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="other_image[]"
                                    multiple />
                                @foreach ($product->otherImages as $otherImage)
                                    <img src="{{ asset($otherImage->image) }}" alt="{{ $product->name }}"
                                        height="100" width="130">
                                @endforeach
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3">
                                    <input type="radio" name="status" value="1"
                                        {{ $product->status == 1 ? 'checked' : '' }}> Published
                                </label>
                                <label>
                                    <input type="radio" name="status" value="2"
                                        {{ $product->status == 2 ? 'checked' : '' }}> Unpublished
                                </label>
                            </div>
                        </div>

                        {{-- special_offer --}}
                        <div class="form-group row">
                            <label for="special_offer" class="col-sm-3 control-label">Special Offer Status</label>
                            <div class="col-sm-9">
                                <label class="me-3">
                                    <input type="checkbox" name="special_offer" value="1" {{ isset($product->special_offer) && $product->special_offer ? 'checked' : '' }}> Special Offer
                                </label>
                            </div>
                        </div>
                        


                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update
                                    Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
