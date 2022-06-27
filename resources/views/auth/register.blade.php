@extends('layouts.app')

<title>Register</title>

@section('content')



<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
                {{ __('Register') }}
				</span>
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-b-33 p-t-5">
                @csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100 @error('name') is-invalid @enderror"  id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100 @error('email') is-invalid @enderror"  id="email" type="email"name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
						
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter country">
						<input class="input100 @error('country') is-invalid @enderror"   type="text" name="country"  required autocomplete="country" placeholder="Country">
						
                        @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter phone_number">
						<input class="input100 @error('phone_number') is-invalid @enderror"  type="number" name="phone_number"  required autocomplete="number" placeholder="Phone number">
						
                        @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>






					<div class="wrap-input100 validate-input" data-validate="Password">
						<input class="input100 @error('password') is-invalid @enderror"  id="password" type="password"  name="password" required autocomplete="new-password" placeholder="Passwore">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Confirm Password">
						<input  id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Passwore">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                      
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
                        {{ __('Register') }}
						</button>
        
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

@endsection
