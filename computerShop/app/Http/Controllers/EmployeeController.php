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
        $var = new Employee();
        $var->eName= $request->eName; 
        $var->empType = $request->empType;
        $var->pass = $request->pass;
        $var->pNumber = $request->pNumber;
        $var->email = $request->email;
        $var->address = $request->address;
        $var->dob = $request->dob;
        $var->save();
        return "ok";         
    }
    public function employeeList(){
        
        $employees = Employee::all();
        return view('pages.employees.empList')->with('employees',$employees);
    }
    public function edit(Request $request){
        $id = $request->id;
        $employee = Employee::where('id',$id)->first();
        return view('pages.employees.empEdit')->with('employee',$employee);
    }

    public function editSubmit(Request $request){
        $var = Employee::where('id',$request->id)->first();
       // $var->id = $request->id;
        $var->eName= $request->eName;
        $var->empType = $request->empType;
        $var->pNumber = $request->pNumber;
        $var->email = $request->email;
        $var->address = $request->address;
        $var->dob = $request->dob;
        $var->save();
        return redirect()->route('employee.list');
    }
    public function deleteEmp(Request $request){
        $id = $request->id;
        $employee = Employee::where('id',$id)->delete();
        return redirect()->route('employee.list');
    }
    
}
