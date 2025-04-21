@extends('admin.master')
@section('title')
    Create Product
@endsection

@section('module')
    Product
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Product Form</h4>
                    <hr>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <form class="form-horizontal p-t-20" action="{{ route('product.new') }}" method="Post"
                        enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Name <span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="name"
                                    placeholder="Product Name">
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
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                        <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
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
                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
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
                                    placeholder="Product Code">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Model
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="model"
                                    placeholder="Product Model">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Product Stock Amount<span
                                    class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="stock_amount"
                                    placeholder="Product Stock Amount">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Regular Price<span class="text-danger">
                                    *</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="regular_price"
                                    placeholder="Regular Price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Selling Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="selling_price"
                                    placeholder="Selling Price">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="discount" class="col-sm-3 control-label">Discount (%)</label>
                            <div class="col-sm-9">
                                <input type="number" name="discount" class="form-control" step="0.01" min="0" max="100" placeholder="Enter discount percentage">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="" name="short_description" placeholder="Product Short description"
                                    rows="3"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" id="" name="long_description"
                                    placeholder="Product Long description" rows="5"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="">Feature Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="image"
                                    accept="image/*" />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="">Other Image</label>
                            <div class="col-sm-9">
                                <input type="file" id="input-file-now" class="dropify" name="other_image[]"
                                    multiple />
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

                        <div class="form-group row">
                            <label for="special_offer" class="col-sm-3 control-label">Special Offer Status</label>
                            <div class="col-sm-9">
                                <label class="me-3">
                                    <input type="checkbox" name="special_offer"> Special Offer
                                </label>
                            </div>
                        </div>
                        


                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create
                                    New Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
