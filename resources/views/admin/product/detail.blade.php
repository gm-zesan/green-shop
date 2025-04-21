@extends('admin.master')
@section('title')
    Product Details
@endsection

@section('module')
    Product
@endsection
@section('body')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Information</h4>
                    <h5 class="text-center text-success">{{ session('message') }}</h5>
                    <div class="table-responsive m-t-40">
                        <table class="table table-striped border">
                            <tr>
                                <th>Product Id</th>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th>Product Category</th>
                                <td>{{ $product->category->name }}</td>
                            </tr>
                            <tr>
                                <th>Product Sub Category</th>
                                <td>{{ $product->subCategory->name }}</td>
                            </tr>
                            <tr>
                                <th>Product Unit</th>
                                <td>{{ $product->unit->name }}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>{{ $product->code }}</td>
                            </tr>
                            <tr>
                                <th>Product Model</th>
                                <td>{{ $product->model }}</td>
                            </tr>
                            <tr>
                                <th>Product Stock Amount</th>
                                <td>{{ $product->stock_amount }}</td>
                            </tr>
                            <tr>
                                <th>Product Regular Price</th>
                                <td>{{ $product->regular_price }}</td>
                            </tr>
                            <tr>
                                <th>Product Selling Price</th>
                                <td>{{ $product->selling_price }}</td>
                            </tr>
                            <tr>
                                <th>Product Discount</th>
                                <td>{{ $product->discount }} % </td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{ $product->short_description }}</td>
                            </tr>
                            <tr>
                                <th style="width: 25%">Long Description</th>
                                <td>{!! $product->long_description !!}</td>
                            </tr>

                            <tr>
                                <th>Product Feture Image</th>
                                <td>
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" height="100" width="100">
                                </td>
                            </tr>
                            <tr>
                                <th>Product Other Images</th>
                                <td>
                                    @foreach ($product->otherImages as $otherImage)
                                        <img src="{{ asset($otherImage->image) }}" alt="{{ $product->name }}"
                                            height="100" width="100">
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Product Hit Count</th>
                                <td>{{ $product->hit_count }} (views)</td>
                            </tr>
                            <tr>
                                <th>Product Sales Count</th>
                                <td>{{ $product->sales_count }}</td>
                            </tr>
                            <tr>
                                <th>Product Feture Status</th>
                                <td>{{ $product->feature_status == 1 ? 'Feature' : 'Not Feature' }}</td>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            </tr>
                            <tr>
                                <th>Special Offer Product</th>
                                <td>{{ $product->special_offer == 1 ? 'Yes' : 'No' }}</td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
