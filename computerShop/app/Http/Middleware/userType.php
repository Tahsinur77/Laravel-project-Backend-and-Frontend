<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Employee;

class userType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $customer = Customer::where(['pNumber'=>$request->pNumber,'pass'=>$request->pass])->first();
        $employee = Employee::where(['pNumber'=>$request->pNumber,'pass'=>$request->pass])->first();
        
        if($request->session()->has('type')){
            $request->session()->forget('type');
        }

        if($request->session()->has('customerName')){
            $request->session()->forget('customerName');
        }

        if($request->session()->has('customerId')){
            $request->session()->forget('customerId');
        }

        if($request->session()->has('employeeId')){
            $request->session()->forget('employeeId');
        }

        if($request->session()->has('name')){
            $request->session()->forget('name');
        }
        
        $type ="";

        if($customer!=""){
            $type = "customer"; 
            $request->session()->put('customerName',$customer->cName);
            $request->session()->put('customerId',$customer->id);  
            $request->session()->put('name',$customer->cName);
        }
        else if($employee != ""){
            $type = $employee->empType;
            $request->session()->put('employeeId',$employee->id);  
            $request->session()->put('name',$employee->eName);
        }
        $request->session()->put('type',$type);
        return $next($request);
    }
}
