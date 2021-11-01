@extends('Layouts.loginReg')
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form action="{{route('employee.edit.submit')}}" class="login100-form validate-form" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$employee->id}}">
                <span class="login100-form-title p-b-49">
                    Update Empolyee
                </span>

                <div class="wrap-input100 validate-input m-b-23">
                    <span class="label-input100">Employee</span>
                    <input class="input100" type="text" name="eName" value="{{$employee->eName}}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-23">
                    <span class="label-input100">Choose employee type:</span>
                    <select id="empType" name="empType">
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="salesman">Salesman</option>
                    </select>
                    <span class="focus-input100"></span>
                </div>



                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Phone number</span>
                    <input class="input100" type="text" name="pNumber" value="{{$employee->pNumber}}">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" value="{{$employee->email}}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Address</span>
                    <input class="input100" type="text" name="address" value="{{$employee->address}}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Salary</span>
                    <input class="input100" type="text" name="eSalary" value="{{$employee->eSalary}}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Date of birth</span>
                    <input class="input100" type="date" name="dob" value="{{$employee->dob}}">
                    <span class="focus-input100"></span>
                </div>

                <br>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">  
                            Update Employee
                        </button>
                    </div>
                </div>

        </div>
        </form>
    </div>
</div>
</div>

@endsection