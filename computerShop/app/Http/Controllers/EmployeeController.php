<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function registration(){
        return view('pages.employees.empReg');
    }
    public function empDash(){
        return view('pages.employees.empDash');
    }
    public function adminDash(){
        return view('pages.employees.adminDash');
    }
    public function registrationSubmit(Request $request){
        $this->validate(
            $request,
            [
                'eName'=>'required|min:3|regex:/^[a-zA-Z\s]*$/',
                'empType'=>'required',
                'pass'=>'required|min:4|same:confirmPass',
                'confirmPass'=>'required|min:4',
                'pNumber'=>'required|regex:/^[0-9]*$/|unique:customers',
                'email'=>'required',
                'eSalary'=>['required','regex:/^\d+(\.\d{1,2})?$/'],
                'address'=>'required',
                'dob'=>'required'
                
            ],
            [
                'eName.required'=>'Please put your name',
                'eName.min'=>'Name must be greater than 2 charcters',
                'pNumber.unique'=>'Phone number already used',
                'eSalary.required'=>'Please enter salary',   
            ]
        );
        $var = new Employee();
        $var->eName= $request->eName; 
        $var->empType = $request->empType;
        $var->pass = $request->pass;
        $var->pNumber = $request->pNumber;
        $var->email = $request->email;
        $var->address = $request->address;
        $var->eSalary = $request->eSalary;
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
        $var->eSalary = $request->eSalary;
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
