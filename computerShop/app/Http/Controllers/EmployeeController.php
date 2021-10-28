<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function registration(){
        return view('pages.employees.empReg');
    }
    public function registrationSubmit(Request $request){
          
    }
    public function employeeList(){
        
        
    }
    
}
