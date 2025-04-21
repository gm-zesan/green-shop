@extends('website.master')

@section('title')
    Blog Details
@endsection

@section('body')
    <section class="section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="single-inner">
                        <div class="post-details">
                            <div class="main-content-head">
                                <div class="post-thumbnils">
                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="meta-information">
                                    <h2 class="post-title">
                                        <a href="javascript:void(0)">{{ $blog->title }}</a>
                                    </h2>

                                    <ul class="meta-info">
                                        <li>
                                            <a href="javascript:void(0)"> <i class="lni lni-user"></i> {{ $blog->createdBy->name }}</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="lni lni-calendar"></i> {{ $blog->created_at->diffForHumans() }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('category-wise-blogs',['id'=>$blog->category_id]) }}"><i class="lni lni-tag"></i> {{ $blog->category->name }}</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="detail-inner">
                                    {!! $blog->description !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 col-md-12 col-12">
                    <div class="sidebar blog-grid-page">

                        <div class="widget categories-widget">
                            <h5 class="widget-title">Blog Categories</h5>
                            <ul class="custom">
                                @foreach ($blogCategories as $category)
                                    <li>
                                        <a href="{{ route('category-wise-blogs',['id'=>$category->id]) }}">{{ $category->name }}</a><span>({{ $category->blogs->count() }})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget popular-feeds">
                            <h5 class="widget-title">Latest Blogs</h5>
                            <div class="popular-feed-loop">
                                @foreach ($latestBlogs as $blog)
                                    <div class="single-popular-feed">
                                        <div class="feed-desc">
                                            <a class="feed-img" href="{{ route('blog-detail', ['id' => $blog->id]) }}">
                                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                            </a>
                                            <h6 class="post-title"><a href="{{ route('blog-detail', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h6>
                                            <span class="time"><i class="lni lni-calendar"></i> {{ $blog->created_at->format('jS M Y') }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection