<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\OtherImage;

class ProductApiController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::newProduct($request);
        OtherImage::newOtherImage($request->other_image, $product->id);

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product,
        ], 201);
    }
}
