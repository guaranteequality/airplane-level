
@extends('layouts.main')

@section('content')			 
		 				
@include('header')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
	<section id="content" class="mt-5">
     	<section class="register">
			<div class="container">
				<div class="section-title">
					<h3>Sign in</h3>
				</div>
				<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
					<div class="row">

						<div class="col-md-8 col-md-offset-2">

						 	
							<label for="loginidentity">Username or Email</label>
							<div class="input-field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					 		<input class="validate required form-control" name="email" id="email" value="{{ old('email') }}" required autofocus placeholder="Username or Email" type="email">
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<br>
							<label for="password">Password</label>
							<div class="input-field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						 		<input id="password" name="password" class="validate required  form-control" placeholder="Password" required type="password"><ul class="parsley-errors-list" id="parsley-id-5465"></ul>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="input-field">
								<input name="remember" class="filled-in" id="filled-in-box1" {{ old('remember') ? 'checked' : '' }} type="checkbox">
								<label for="filled-in-box1" class="check">Remember me</label>
							</div><ul class="parsley-errors-list" id="parsley-id-multiple-remember"></ul>
						</div>
					</div>

					<div class="row buttons">
						<div class="col-md-12 col-md-offset-4 col-xs-12">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<button type="submit" class="btn btn-warning bg-warning   ">Sign in</button>
							</div>
						</div>
						<div id="forget-password" class="col-md-12 col-md-offset-6 col-xs-12">
							<a href="{{ route('password.request') }}">
							   <u> Forgot password </u>
							</a>
						</div>
					</div>

				</form>
			</div>
		</section>     	
     </section>
	
@include('footer')       
	
@endsection