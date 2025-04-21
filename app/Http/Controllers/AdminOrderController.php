<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;
class AdminOrderController extends Controller
{
    private $order;
    public function index(){
        return view('admin.order.index',['orders'=>Order::with('customer')->orderBy('id','desc')->get()]);
    }
    public function detail($id){
        return view('admin.order.detail',['order'=>Order::find($id)]);
    }
    public function edit($id){
        return view('admin.order.edit',['order'=>Order::find($id)]);
    }
    public function update(Request $request, $id){
        $this->order = Order::find($id);
        if($request->order_status == 'pending'){
            $this->order->order_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->save();
        }
        else if($request->order_status == 'confirm'){
            $this->order->order_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->save();
        }
        else if($request->order_status == 'processing'){
            $this->order->order_status = $request->order_status;
            $this->order->delivery_address = $request->delivery_address;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->save();           
        }
        else if($request->order_status == 'delivered'){
            $this->order->order_status = $request->order_status;
            $this->order->delivery_address = $request->delivery_address;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->save();
        }
        else if($request->order_status == 'cancel'){
            $this->order->order_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->save();
        }
        return redirect('/admin/all-order')->with('message','Order info update successfully');
    }
    public function showInvoice($id){
        return view('admin.order.invoice',['order'=>Order::find($id)]);
    }
    
    public function printInvoice($id){
        $pdf = PDF::loadView('admin.order.print-invoice',['order'=>Order::find($id)]);
        return $pdf->stream($id.'-order.pdf');
    }

    public function delete($id){
        Order::deleteOrder($id);
        return $id;
    }
}
