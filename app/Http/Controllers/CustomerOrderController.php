<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Session;

class CustomerOrderController extends Controller
{
    private $orders;
    public function allOrder(){
        $this->orders = Order::where('customer_id', Session::get('customer_id'))->get();
        return view('customer.all-order', ['orders' => $this->orders]);
    }
}
