@extends('website.master')

@section('title')
    Blog
@endsection

@section('body')
    <section class="section blog-section blog-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row g-4">
                        @forelse ($blogs as $blog)
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="{{ route('blog-detail', ['id' => $blog->id]) }}">
                                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <a class="category" href="{{ route('category-wise-blogs',['id'=>$blog->category_id]) }}">{{ $blog->category->name }}</a> |
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
                            <div class="col-12">
                                <div class="alert alert-danger">No blog found!</div>
                            </div>
                        @endforelse
                        <div class="wrap-pagination">
                            {{ $blogs->links() }}
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
        </div>
    </section>
@endsection