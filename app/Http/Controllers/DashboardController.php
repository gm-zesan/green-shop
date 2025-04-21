<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $blogCount = Blog::count();
        $productCount = Product::count();
        $productCategoryCount = Category::count();
        $orderCount = Order::count();

        return view('admin.home.index', compact('blogCount', 'productCount', 'productCategoryCount', 'orderCount'));
    }
}
