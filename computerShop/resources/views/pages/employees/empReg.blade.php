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

                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                    <span class="label-input100">Employee</span>
                    <input class="input100" type="text" name="eName" value="{{old('eName')}}"
                        placeholder="Type employee name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Employee type is reauired">
                    <span class="label-input100">Choose employee type:</span>
                    <select id="empType" name="empType">
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="salesman">Salesman</option>
                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="pass" placeholder="Type your password">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100" type="password" name="confirmPass" placeholder="Retype your password">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone number is required">
                    <span class="label-input100">Phone number</span>
                    <input class="input100" type="text" name="pNumber" value="{{old('pNumber')}}"
                        placeholder="Type your phone number">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" value="{{old('email')}}"
                        placeholder="Type your email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Address is required">
                    <span class="label-input100">Address</span>
                    <input class="input100" type="text" name="address" value="{{old('address')}}"
                        placeholder="Type your Address">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Date of birth is required">
                    <span class="label-input100">Date of birth</span>
                    <input class="input100" type="date" name="dob" value="{{old('dob')}}"
                        placeholder="Type your date of birth">
                    <span class="focus-input100"></span>
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
                    <a href="#" class="txt2">
                        <b>Sign in<b>
                    </a>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection