@extends('layouts.app')

@section('content')

<section class="login-bg">
	<img src=" {{ asset('images/cir-1.png') }} " class="login-1 login-ab" />
	<img src="{{ asset('images/Subtract.png') }}" class="login-2 login-ab" />
	<img src="{{ asset('images/grp-1.png') }}" class="login-3 login-ab" />
	<div class="ems-logo">
		<a href="{{ route('home') }}"><img  src="{{ asset('images/ems-blue-logo.png') }}" /></a>
	</div>
	<div class="login-form">


		<!-- <form>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
        </form> -->

        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group ">

                                <input id="email" placeholder="Username" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">

                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <div class="form-group ">
                                <button type="submit" class="btn btn-primary mb-2">
                                    {{ __('Login') }}
                                </button>

                                <br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-primary" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
         </form>

        
        


    
    
    
    
    </div>
</section>

@endsection
