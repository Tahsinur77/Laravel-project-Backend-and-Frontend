@extends('Layouts.loginReg')
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form action="{{route('customer.edit.submit')}}" class="login100-form validate-form" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$customer->id}}">
                <span class="login100-form-title p-b-49">
                    Update Customer
                </span>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                    <span class="label-input100">Customer</span>
                    <input class="input100" type="text" name="cName" value="{{$customer->cName}}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone number is required">
                    <span class="label-input100">Phone number</span>
                    <input class="input100" type="text" name="pNumber" value="{{$customer->pNumber}}">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" value="{{$customer->email}}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Address is required">
                    <span class="label-input100">Address</span>
                    <input class="input100" type="text" name="address" value="{{$customer->address}}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Date of birth is required">
                    <span class="label-input100">Date of birth</span>
                    <input class="input100" type="date" name="dob" value="{{$customer->dob}}">
                    <span class="focus-input100"></span>
                </div>

                <br>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">  
                            Update Customer
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

@endsection