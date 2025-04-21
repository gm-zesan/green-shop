@extends('website.master')

@section('title')
    Home
@endsection

@section('body')
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">

                        <div class="hero-slider">
                            @foreach (getBannerList('hero-slider') as $slider)
                                <div class="single-slider" style="background-image: url({{ asset('storage/'.$slider->image) }});">
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">

                            <div class="hero-small-banner" style="background-image: url({{ asset('storage/' . getBanner('hero-banner')) }});">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>Weekly Sale!</h2>
                                    <p>Saving up to 50% off all online store items this week.</p>
                                    <div class="button">
                                        <a href="{{ route('all-products') }}" class="btn" href="product-grids.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-categories section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Featured Categories</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6 col-12 mt-4">
                        <div class="single-category">
                            <h3 class="heading">{{ $category->name }}</h3>
                            <ul>
                                @foreach ($category->subCategories as $subCategory)
                                    <li><a href="{{ route('product-sub-category', ['id' => $subCategory->id]) }}">{{ $subCategory->name }}</a></li>
                                @endforeach
                            </ul>
                            <div class="images">
                                <img src="{{ asset($category->image) }}"
                                    alt="{{ $category->name }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Latest Products</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have uffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                @if(isset($product->discount) && $product->discount > 0)
                                    <span class="sale-tag">-{{ $product->discount }}%</span>
                                @endif
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
        </div>
    </section>


    <section class="banner section">
        <div class="container">
            <div class="row">
                @foreach (getBannerList('banner-section') as $banner)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-banner" style="background-image: url({{ asset('storage/'.$banner->image) }});">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <h2 class="title">Popular Brands</h2>
                </div>
            </div>
            <div class="brands-logo-wrapper">
                <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="brand-logo">
                        <img src="{{ asset('/website') }}/assets/images/brands/01.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/website') }}/assets/images/brands/02.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/website') }}/assets/images/brands/03.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/website') }}/assets/images/brands/04.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/website') }}/assets/images/brands/05.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/website') }}/assets/images/brands/06.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/website') }}/assets/images/brands/03.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/website') }}/assets/images/brands/04.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="special-offer section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Special Offer</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if($special_offer_products->count() > 0)
                        <div class="row">
                            @foreach ($special_offer_products as $product)
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="single-product">
                                        <div class="product-image">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                            @if(isset($product->discount) && $product->discount > 0)
                                                <span class="sale-tag">-{{ $product->discount }}%</span>
                                            @endif
                                            <div class="button">
                                                <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="qty" class="form-control" value="1"
                                                            min="1">
                                                    <button type="submit" class="btn"><i class="lni lni-cart"></i> Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <span class="category">{{ $product->category->name }}</span>
                                            <h4 class="title">
                                                <a
                                                    href="{{ route('product-detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                            </h4>
                                            <ul class="review">
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star-filled"></i></li>
                                                <li><i class="lni lni-star"></i></li>
                                                <li><span>4.0 Review(s)</span></li>
                                            </ul>
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
                    @else
                        <div class="alert alert-danger" style="padding: 50px 80px; margin-top: 30px">
                            <h3>Sorry, No Special Offer Available !</h3>
                        </div>
                    @endif

                    <div class="single-banner right" style="background-image:url({{ asset('storage/' . getBanner('special-offer-banner')) }});margin-top: 55px;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest BLogs</h2>
                        <p>There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="{{ route('blog-detail', ['id' => $blog->id]) }}">
                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->name }}">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a class="category" href="javascript:void(0)">{{ $blog->category->name }}</a> |
                                        <span>{{ $blog->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div>
                                        <span><i class="lni lni-user"></i> {{ $blog->createdBy->name }}</span>
                                    </div>
                                </div>
                                
                                <h4>
                                    <a href="{{ route('blog-detail', ['id' => $blog->id]) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h4>
                                <p>{!! Str::limit($blog->description, 20) !!}</p>
                                <div class="button">
                                    <a href="{{ route('blog-detail', ['id' => $blog->id]) }}" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger" style="padding: 50px 80px; margin-top: 30px">
                        <h5>Sorry, No Blog Available !</h5>
                    </div>
                @endforelse
            </div>
        </div>
    </section>


    <section class="shipping-info">
        <div class="container">
            <ul>

                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over $99</span>
                    </div>
                </li>

                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 Support.</h5>
                        <span>Live Chat Or Call.</span>
                    </div>
                </li>

                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>Cash on Delivery.</h5>
                        <span>Secure Payment Services.</span>
                    </div>
                </li>

                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>Easy Return.</h5>
                        <span>Hassle Free Shopping.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
