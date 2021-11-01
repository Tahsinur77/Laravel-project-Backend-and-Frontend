@extends('Layouts.loginReg')
@section('content')
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('images/bg-01.jpg')}}');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="{{route('login.submit')}}" method="post" class="login100-form validate-form">
				{{csrf_field()}}
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" >
						<span class="label-input100">Phone number</span>
						<input class="input100" type="text" id="pNumber" value = "{{old('pNumber')}}" name="pNumber" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
							@error('pNumber')
                		<span class="text-danger">{{$message}}</span>
           		@enderror
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Password</span>
						<input class="input100" type="password" id="pass" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
							@error('pass')
                	<span class="text-danger">{{$message}}</span>
           		@enderror
					</div>
					<br>			
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<a href="{{route('customer.registration')}}" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
@endsection