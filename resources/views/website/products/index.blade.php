@extends('website.master')

@section('title')
    Products
@endsection

@section('body')
    
    <section class="product-grids section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="product-sidebar">

                        <div class="single-widget">
                            <h3>All Categories</h3>
                            <ul class="list">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('product-category', ['id' => $category->id]) }}">
                                            {{ $category->name }} 
                                        </a>
                                        <span>({{ $category->products_count }})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-widget">
                            <h3>All Sub Categories</h3>
                            <ul class="list">
                                @foreach ($categories as $category)
                                    @foreach ($category->subCategories as $subCategory)
                                        <li>
                                            <a href="{{ route('product-sub-category', ['id' => $subCategory->id]) }}">
                                                {{ $subCategory->name }} </a>
                                        </li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-12">
                    <div class="product-grids-head">
                        <div class="product-grid-topbar">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="product-sorting">
                                        <form method="GET" action="{{ route('all-products') }}">
                                            <div class="sort-by">
                                                <label for="sortby">Sort-by:</label>
                                                <select class="form-control" name="sortby" id="sortby" onchange="this.form.submit()">
                                                    <option value="latest" {{ request('sortby') == 'latest' ? 'selected' : '' }}>Latest</option>
                                                    <option value="price_low_high" {{ request('sortby') == 'price_low_high' ? 'selected' : '' }}>Price: Low - High</option>
                                                    <option value="price_high_low" {{ request('sortby') == 'price_high_low' ? 'selected' : '' }}>Price: High - Low</option>
                                                </select>
                                            </div>
                                        </form>
                                        <h3 class="total-show-product">Showing: <span>{{ $products->firstItem() }} - {{ $products->lastItem() }} 
                                            of {{ $products->total() }} items</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-12">

                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                            <div class="button">
                                                <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="qty" class="form-control" value="1"
                                                            min="1">
                                                    <button type="submit" class="btn" style="width: 100%;"><i class="lni lni-cart"></i> Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">{{ $product->category->name }}</span>
                                            <h4 class="title">
                                                <a
                                                    href="{{ route('product-detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                            </h4>
                                            <div class="price">
                                                @if(isset($product->discount) && $product->discount > 0)
                                                    <del>৳. {{ $product->selling_price }}</del> &nbsp; &nbsp;
                                                    @php
                                                        $discountedPrice = $product->selling_price - ($product->selling_price * $product->discount / 100);
                                                    @endphp
                                                    <span>৳. {{ $discountedPrice }}</span>
                                                @else
                                                    <span>৳. {{ $product->selling_price }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="wrap-pagination">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
