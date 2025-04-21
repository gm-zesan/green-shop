<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('admin.customer.manage',['customers'=>Customer::all()]);
    }

    public function show($id){
        return view('admin.customer.detail',['customer'=>Customer::find($id)]);
    }

    public function delete($id){
        $customer = Customer::find($id);

        if(file_exists($customer->image)){
            unlink($customer->image);
        }

        $customer->delete();
        return redirect()->route('customers')->with('message','Customer deleted successfully.');
    }

    
}
