<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ShoppingCart;
class OrderDetail extends Model
{
    use HasFactory;
    private static $OrderDetail;
    public static function newOrderDetail($orderId){
        foreach(ShoppingCart::all() as $item){
            self::$OrderDetail = new OrderDetail();
            self::$OrderDetail->order_id = $orderId;
            self::$OrderDetail->product_id = $item->id;
            self::$OrderDetail->product_name = $item->name;
            self::$OrderDetail->product_price = $item->price;
            self::$OrderDetail->product_qty = $item->qty;
            self::$OrderDetail->save();

            $product = Product::find($item->id);
            if ($product) {
                $product->stock_amount = $product->stock_amount - $item->qty;
                $product->sales_count += $item->qty;
                $product->save();
            }

            ShoppingCart::remove($item->__raw_id);
        }
    }
}
