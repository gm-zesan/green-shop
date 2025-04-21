<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Session;
class CustomerAuthController extends Controller
{

    private $customer;
    public function index(){
        return view('customer.index');
    }

    public function login(Request $request){
        $this->customer = Customer::where('email', $request->email)->first();
        if($this->customer){
            if(password_verify($request->password, $this->customer->password)){
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
                return redirect('/customer-profile')->with('message', 'Login successfully');
            }else{
                return back()->with('message', 'Password not match');
            }
        }else{
            return back()->with('message', 'Email not match');
        }
    }

    public function register(Request $request){
        $this->validate($request,[
                'name' => 'required',
                'email' => 'required|unique:customers,email',
                'password' => 'required',
                'mobile' => 'required|unique:customers,mobile'
            ]);
        $this->customer = Customer::newCustomer($request);
        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);

        return redirect('/customer-profile');
    }


    public function dashboard(){
        return view('customer.dashboard');
    }


    public function profile(){
        $customer = Customer::find(Session::get('customer_id'));
        return view('customer.profile', compact('customer'));
    }
    public function update(Request $request)
    {
        $customer = Customer::find(Session::get('customer_id'));
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'address' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'blood_group' => 'nullable|string|max:3',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $data = $request->except('password', 'current_password', 'password_confirmation', 'image');
        $customer->update($data);

        if ($request->filled('password')) {
            $request->validate([
                'current_password' => 'required|string',
                'password' => 'string|min:8|confirmed',
            ]);
            if (!Hash::check($request->current_password, $customer->password)) {
                throw ValidationException::withMessages([
                    'current_password' => 'The current password is incorrect.',
                ]);
            }
            $customer->password = Hash::make($request->password);
        }
    
        if ($request->hasFile('image')) {
            if ($customer->image && Storage::disk('public')->exists($customer->image)) {
                Storage::disk('public')->delete($customer->image);
            }
            $imagePath = $request->file('image')->store('customer-profile', 'public');
            $customer->image = $imagePath;
        }
        $customer->save();
        
    
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    


    public function logout(){
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/')->with('message', 'Logout successfully');
    }
}
