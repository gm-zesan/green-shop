@extends('website.master')

@section('title')
    Product Detail Page
@endsection

@section('body')
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-start">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="xzoom-container">
                            <img class="xzoom" id="xzoom-default" src="{{ asset($product->image) }}"
                                xoriginal="{{ asset($product->image) }}" />
                            <div class="xzoom-thumbs">
                                @foreach ($product->otherImages as $otherImages)
                                    <a href="{{ asset($otherImages->image) }}">
                                        <img class="xzoom-gallery" width="80" src="{{ asset($otherImages->image) }}"
                                            xpreview="{{ asset($otherImages->image) }}" title="The description goes here" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{ $product->name }}</h2>
                            <p class="category">
                                <i class="lni lni-tag"></i> Category:
                                <a href="javascript:void(0)">{{ $product->category->name }}</a>
                                </a>
                            </p>
                            <p class="category">
                                <i class="lni lni-tag"></i>Sub-Category:
                                <a href="javascript:void(0)">{{ $product->subCategory->name }}</a>
                                </a>
                            </p>
                            <p class="category">
                                <i class="lni lni-tag"></i>Code: {{ $product->code }}
                            </p>
                            <p class="category">
                                <i class="lni lni-tag"></i>Unit: {{ $product->unit->name }}
                            </p>
                            <p class="category">
                                <i class="lni lni-tag"></i>In Stock: {{ $product->stock_amount }} {{ $product->unit->name }}
                                <input type="hidden" id="stock_amount" value="{{ $product->stock_amount }}">
                            </p>
                            <h5 class="mb-3">
                                @if(isset($product->discount) && $product->discount > 0)
                                    <span class="badge bg-warning">- {{ $product->discount }}%</span>
                                @endif
                            </h5>
                            <h3 class="price">
                                @if(isset($product->discount) && $product->discount > 0)
                                    <span>৳. {{ $product->selling_price }}</span> &nbsp; &nbsp;
                                    @php
                                        $discountedPrice = $product->selling_price - ($product->selling_price * $product->discount / 100);
                                    @endphp
                                    ৳. {{ $discountedPrice }}
                                @else
                                    ৳. {{ $product->selling_price }}
                                @endif
                            </h3>
                            <p class="info-text">{{ $product->short_description }}</p>
                            @if($product->stock_amount > 0)
                                <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="quantity-wrapper">
                                                <button class="btn btn-outline-secondary decrement-btn" type="button">-</button>
                                                <input type="number" name="qty" value="1" class="form-control quantity-input text-center" min="1" readonly>
                                                <button class="btn btn-outline-secondary increment-btn" type="button">+</button> &nbsp; &nbsp;
                                                <span>{{ $product->unit->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <div class="row align-items-end">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="button cart-button">
                                                    <button type="submit" class="btn" style="width: 100%;">Add to
                                                        Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <div class="alert alert-warning" role="alert">
                                    This product is out of stock!
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>



            <div class="product-details-info">
                <div class="single-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="info-body custom-responsive-margin">
                                @if(isset($product->long_description))
                                    <p>{!! $product->long_description !!}</p>
                                @else
                                    <p>No long description found!</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-lg-3 col-md-6 col-12">
    
                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset($product->image) }}" alt="#">
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
                                            ৳. {{ $discountedPrice }}
                                        @else
                                            ৳. {{ $product->selling_price }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-danger">No related product found!</div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.increment-btn').click(function(e) {
                e.preventDefault();
                var quantityInput = $(this).closest('.quantity-wrapper').find('.quantity-input');
                var stockAmount = $('#stock_amount').val();
                var currentVal = parseInt(quantityInput.val());
                if (currentVal < stockAmount) {
                    quantityInput.val(currentVal + 1);
                }
            });

            // Handle decrement
            $('.decrement-btn').click(function(e) {
                e.preventDefault();
                var quantityInput = $(this).closest('.quantity-wrapper').find('.quantity-input');
                var currentVal = parseInt(quantityInput.val());
                if (currentVal > 1) { // Prevent going below 1
                    quantityInput.val(currentVal - 1);
                }
            });
        });
    </script>

    
@endpush
