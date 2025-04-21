<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use ShoppingCart;

class CartController extends Controller
{
    private $product;
    
    public function index(Request $request,$id){
        $this->product = Product::find($id);
        if($this->product->stock_amount < $request->qty){
            return back()->with('message', 'Product stock is not available');
        }
        if(isset($this->product->discount) && $this->product->discount > 0){
            $this->product->selling_price = $this->product->selling_price - ($this->product->selling_price * $this->product->discount / 100);
        }
        ShoppingCart::add($this->product->id,$this->product->name,$request->qty,$this->product->selling_price,['image'=>$this->product->image, 'category'=>$this->product->category->name, 'code'=>$this->product->code]);
        return redirect('/show-cart');
    }

    
    public function show(){
        return view('website.cart.index',['cart_products'=>ShoppingCart::all()]);
    }


    public function update(Request $request,$id){
        $cartItem = ShoppingCart::get($id);
        $product = Product::find($cartItem->id);
        if ($product->stock_amount < $request->qty) {
            return back()->with('message', 'Product stock is not available');
        }
        ShoppingCart::update($id, $request->qty);
        return redirect('/show-cart')->with('message', 'Cart product quantity updated successfully');
    }


    public function remove($id){
        ShoppingCart::remove($id);
        return back()->with('message', 'Cart product delete successfully');
    }
}
