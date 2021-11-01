@extends('Layouts.loginReg')
@section('content')
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('images/bg-01.jpg')}}');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="{{route('customer.registration.submit')}}" class="login100-form validate-form" method="post">
				{{csrf_field()}}
					<span class="login100-form-title p-b-49">
						Registration
					</span>

					<div class="wrap-input100 validate-input m-b-23">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" id="cName" name="cName" value="{{old('cName')}}" placeholder="Type your username">
						<span class="focus-input100"></span>
						@error('cName')
                		<span class="text-danger">{{$message}}</span>
           				 @enderror
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span>
						<input class="input100" type="password"  id="pass" name="pass" placeholder="Type your password">
						<span class="focus-input100"></span>
						@error('pass')
                		<span class="text-danger">{{$message}}</span>
           				 @enderror
					</div>

                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" id="confirmPass" name="confirmPass"  placeholder="Retype your password">
						<span class="focus-input100"></span>
						@error('confirmPass')
                		<span class="text-danger">{{$message}}</span>
           				 @enderror
					</div>
                    
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Phone number</span>
						<input class="input100" type="text" id="pNumber" name="pNumber" value="{{old('pNumber')}}" placeholder="Type your phone number">
						<span class="focus-input100"></span>
						@error('pNumber')
                		<span class="text-danger">{{$message}}</span>
           				 @enderror
					</div>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" id="email" name="email" value="{{old('email')}}" placeholder="Type your email">
						<span class="focus-input100" ></span>
						@error('email')
                		<span class="text-danger">{{$message}}</span>
           				 @enderror
					</div>
					<div class="wrap-input100 validate-input" data-validate="Address is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" id="address" name="address" value="{{old('address')}}" placeholder="Type your Address">
						<span class="focus-input100" ></span>
						@error('address')
                		<span class="text-danger">{{$message}}</span>
           				 @enderror
					</div>
                    <div class="wrap-input100 validate-input">
						<span class="label-input100">Date of birth</span>
						<input class="input100" type="date" id="dob" name="dob" value="{{old('dob')}}" placeholder="Type your date of birth">
						<span class="focus-input100" ></span>
						@error('dob')
                		<span class="text-danger">{{$message}}</span>
           				 @enderror
					</div>
					
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Register
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
	
