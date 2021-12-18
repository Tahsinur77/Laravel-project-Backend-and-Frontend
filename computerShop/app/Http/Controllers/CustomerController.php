<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;

class CustomerController extends Controller
{
    public function registration(){
        return view('pages.customers.reg');
    }
    public function cusDash(){
        return view('pages.customers.customerDash');
    }
    public function registrationSubmit(Request $request){
     
        $this->validate(
            $request,
            [
                'cName'=>'required|min:3|regex:/^[a-zA-Z\s]*$/',
                'pass'=>'required|min:4|same:confirmPass',
                'confirmPass'=>'required|min:4',
                'pNumber'=>'required|regex:/^[0-9]*$/|unique:customers',
                'email'=>'required',
                'address'=>'required',
                'dob'=>'required'
                
            ],
            [
                'cName.required'=>'Please put your name',
                'cName.min'=>'Name must be greater than 2 charcters',
                'pNumber.unique'=>'Phone number already used',
                
                
            ]
        );

        $var = new Customer();
        $var->cName= $request->cName;
        $var->pass = $request->pass;
        $var->pNumber = $request->pNumber;
        $var->email = $request->email;
        $var->address = $request->address;
        $var->dob = $request->dob;
        $var->save();
        return redirect()->route('login');     
    }
    public function customerList(){
        
        $customers = Customer::all();
        return view('pages.customers.customerList')->with('customers',$customers);
    }
    
    public function edit(Request $request){
        $id = $request->id;
        $customer = Customer::where('id',$id)->first();
        return view('pages.customers.updateCustomer')->with('customer',$customer);
    }

    public function editSubmit(Request $request){
        $var = Customer::where('id',$request->id)->first();
        $var->cName= $request->cName;
        $var->pNumber = $request->pNumber;
        $var->email = $request->email;
        $var->address = $request->address;
        $var->dob = $request->dob;
        $var->save();
        return redirect()->route('customer.list');
    }
    public function deleteCustomer(Request $request){
        $id = $request->id;
        $customer = Customer::where('id',$id)->delete();
        return redirect()->route('customer.list');
    }


    public function myOrders(){
        $customerId = session()->get('customerId');
        $orders = Order::where('customerId',$customerId)->get();

      
        return view('pages.customers.orderHistory')
        ->with('orders',$orders);
    }

    // public function orderdetails(Request $request){
    //     $id = $request->id;
    //     $order = Order::where('id',$id)->first();
    //     return $order;
    //     return view('pages.customer.orderdetails')->with('order',$order);
    // }

    
}
