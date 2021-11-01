@extends('Layouts.loginReg')
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form action="{{route('employee.registration.submit')}}" class="login100-form validate-form" method="post">
                {{csrf_field()}}
                <span class="login100-form-title p-b-49">
                    Add Empolyee
                </span>

                <div class="wrap-input100 validate-input m-b-23">
                    <span class="label-input100">Employee</span>
                    <input class="input100" type="text" id="eName" name="eName" value="{{old('eName')}}"
                        placeholder="Type employee name">
                    <span class="focus-input100"></span>
                    @error('eName')
                		<span class="text-danger">{{$message}}</span>
           			@enderror
                </div>

                <div class="wrap-input100 validate-input m-b-23">
                    <span class="label-input100">Choose employee type:</span>
                    <select id="empType" name="empType">
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="salesman">Salesman</option>
                    </select>
                    <span class="focus-input100"></span>
                    @error('empType')
                		<span class="text-danger">{{$message}}</span>
           		    @enderror
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" id="pass" name="pass" placeholder="Type  password">
                    <span class="focus-input100"></span>
                    @error('pass')
                		<span class="text-danger">{{$message}}</span>
           		    @enderror
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100" type="password" id="confirmPass" name="confirmPass" placeholder="Retype  password">
                    <span class="focus-input100"></span>
                    @error('confirmPass')
                		<span class="text-danger">{{$message}}</span>
           		    @enderror
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Phone number</span>
                    <input class="input100" type="text" id="pNumber" name="pNumber" value="{{old('pNumber')}}"
                        placeholder="Type phone number">
                    <span class="focus-input100"></span>
                    @error('pNumber')
                		<span class="text-danger">{{$message}}</span>
           		    @enderror
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" id="email" name="email" value="{{old('email')}}"
                        placeholder="Type email">
                    <span class="focus-input100"></span>
                    @error('email')
                		<span class="text-danger">{{$message}}</span>
           		    @enderror
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Address</span>
                    <input class="input100" type="text" id="address" name="address" value="{{old('address')}}"
                        placeholder="Address">
                    <span class="focus-input100"></span>
                    @error('address')
                		<span class="text-danger">{{$message}}</span>
           		    @enderror
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Salary</span>
                    <input class="input100" type="text" id="eSalary" name="eSalary" value="{{old('eSalary')}}"
                        placeholder="Type salary">
                    <span class="focus-input100"></span>
                    @error('eSalary')
                		<span class="text-danger">{{$message}}</span>
           		    @enderror
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Date of birth</span>
                    <input class="input100" type="date" id="dob"  name="dob" value="{{old('dob')}}"
                        placeholder="Type date of birth">
                    <span class="focus-input100"></span>
                    @error('dob')
                		<span class="text-danger">{{$message}}</span>
           		    @enderror
                </div>

                <br>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Add Employee
                        </button>
                    </div>
                </div>

                <div class="txt1 text-center p-t-54 p-b-20">
                    <a href="{{route('login')}}" class="txt2">
                        <b>Sign in<b>
                    </a>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection