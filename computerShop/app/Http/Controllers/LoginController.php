<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Employee;

class LoginController extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function loginSubmit(Request $request){
        $this->validate(
            $request,
            [
                'pNumber'=>'required|regex:/^[0-9]*$/',
                'pass'=>'required|min:4',
            ],
            [
                'pNumber.required'=>'Please put your phone number',
                'pass.required'=>'Please put your password',
            ]
        );
        $customer = Customer::where('pNumber',$request->pNumber)->first();
        $employee = Employee::where('pNumber',$request->pNumber)->first();
        if($customer!=""){
            $type = "customer";
        }
        else{
            $type = $employee->empType;
        }
        return $type;
    }
    
}
