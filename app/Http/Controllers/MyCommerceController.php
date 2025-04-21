<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MyCommerceController extends Controller
{
    public function index() {
        return view('website.home.index', [
            'categories' => Category::with('subCategories')->withCount('products')->get(),
            'special_offer_products' => Product::where('special_offer', 1)
                            ->orderBy('id', 'desc')
                            ->take(4)
                            ->get(),
            'products' => Product::with('category')
                            ->where('status', 1)
                            ->orderBy('id', 'desc')
                            ->take(8)
                            ->get(),
            'blogs' => Blog::with(['category', 'createdBy'])
                            ->orderBy('id', 'desc')
                            ->take(3)
                            ->get()
        ]);
    }
    
    public function allProducts(Request $request){
        $sortby = $request->input('sortby', 'latest');
        $query = Product::query();
        if ($sortby === 'price_low_high') {
            $query->orderBy('selling_price', 'asc');
        } elseif ($sortby === 'price_high_low') {
            $query->orderBy('selling_price', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }
        $products = $query->paginate(9);
        return view('website.products.index',['products'=>$products]);
    }

    public function category($id){
        $products = Product::where('category_id',$id)->where('status',1)->orderBy('id','desc')->paginate(9);
        return view('website.products.index', [
            'products' => $products,
        ]);
    }

    public function subCategory($id){
        $products = Product::where('sub_category_id',$id)->where('status',1)->orderBy('id','desc')->paginate(9);
        return view('website.products.index',['products'=>$products]);
    }

    public function detail($id) {
        $product = Product::find($id);
        $product->hit_count += 1;
        $product->save();

        $relatedProducts = Product::where('category_id', $product->category_id)
                           ->where('id', '!=', $id)
                           ->orderBy('id', 'desc')
                           ->limit(4)
                           ->get();
    
        return view('website.detail.index', [
            'product' => $product,
            'products' => $relatedProducts
        ]);
    }

    public function contact(){
        return view('website.contact.index');
    }

    public function about(){
        return view('website.about.index');
    }

    public function blog(){
        $blogs = Blog::with('category', 'createdBy')->paginate(6);
        $latestBlogs = Blog::with('category', 'createdBy')->orderBy('id', 'desc')->take(3)->get();
        $blogCategories = BlogCategory::all();
        return view('website.blog.index', ['blogs' => $blogs, 'blogCategories' => $blogCategories, 'latestBlogs' => $latestBlogs]);
    }

    public function blogDetail($id){
        $blog = Blog::find($id);
        $latestBlogs = Blog::with('category', 'createdBy')->where('id', '!=', $id)->orderBy('id', 'desc')->take(3)->get();
        $blogCategories = BlogCategory::all();
        return view('website.blog.detail', ['blog' => $blog, 'blogCategories' => $blogCategories, 'latestBlogs' => $latestBlogs]);
    }

    public function categoryWiseBlogs($id){
        $blogs = Blog::where('category_id', $id)->with('category', 'createdBy')->paginate(6);
        $latestBlogs = Blog::with('category', 'createdBy')->orderBy('id', 'desc')->take(3)->get();
        $blogCategories = BlogCategory::all();
        return view('website.blog.index', ['blogs' => $blogs, 'blogCategories' => $blogCategories, 'latestBlogs' => $latestBlogs]);
    }
    
}
