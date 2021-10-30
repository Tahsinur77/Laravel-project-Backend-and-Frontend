<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function registration(){
        return view('pages.customers.reg');
    }
    public function registrationSubmit(Request $request){
     
        $this->validate(
            $request,
            [
                'cName'=>'required',
                'pass'=>'required|',
                'pNumber'=>'required|regex:/^[0-9]*$/'
                
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
        return "ok";     
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

    
}
