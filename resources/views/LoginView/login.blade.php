@extends('LoginView.template')
@section('content')	
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100" data-aos="fade-right" data-aos-duration="1000">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-26">
					Welcome
				</span>
				<span class="login100-form-title p-b-32">
					<i class="zmdi zmdi-sign-in"></i>
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
					<input class="input100" type="text" name="email">
					<span class="focus-input100" data-placeholder="Email"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" name="pass">
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Sign In
						</button>
					</div>
				</div>

				<div class="text-center p-t-100">
					<span class="txt1">
						Don’t have an account?
					</span>

					<a class="txt2" href="{{url('/signup')}}">
						Sign Up
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection