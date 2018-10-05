
@extends('layouts.app')

@section('content')			 
		 				
@include('header')	

<main class="main" role="main">
   <section class="main__section">
      <div id="alert-signup-fail" class="alert alert--error hidden" role="alert">
         <div class="wrapper alert__content">
            <div class="alert__text"></div>
            <button class="btn btn--reset alert__btn alert__btn--close" role="button">
            <span class="icon icon-cross2"></span>
            </button>
         </div>
      </div>
      <div class="wrapper">
         <div id="signupWrapper" class="formWrapper">
            <h2 class="head">Sign up</h2>
            <div class="wrapper__flex">
               <div class="wrapper__flexCol wrapper__flexCol--pad-r-small">
                  <div class="wrapper__content">
                     <p>
                        To upload photos to our popular database, you'll need to create a user account.
                        This will allow you to <a href="{{ route('login') }}" id="gotologin" class="link">log in</a> and manage your photos at a later time.
                     </p>
                     <p>
                        As always, registration is absolutely free and safe.
                        Please read our <a href="#" class="link">privacy policy</a> for more details on how the information you provide will be used.
                     </p>
                  </div>
               </div>
               <div class="wrapper__flexCol wrapper__flexCol--pad-l-small">
                  <form name="signupForm" class="form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
                     <div class="form__group">
                        <label class="form__label" for="signupForm_nameField">Displayed name</label>
                        <div class="input-wrapper">
							<input name="name" id="name" placeholder="" class="validate form-control input-wrapper__field " name="name" value="{{ old('name') }}" required  type="text">
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
                          
                        </div>
                     </div>
                     <div class="form__group">
                        <label class="form__label" for="signupForm_emailField">Email</label>
                        <div class="input-wrapper">
							<input name="email" id="email" value="{{ old('email') }}" placeholder="" class="validate form-control input-wrapper__field" required type="email">
						
							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif   
                          
                        </div>
                     </div>
                     <div class="form__group">
                        <label class="form__label" for="signupForm_passwordField">Password</label>
                        <div class="input-wrapper">
							<input name="password" id="password" value="" placeholder="" class="validate form-control input-wrapper__field" required type="password">
							 @if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
                          
                        </div>
                     </div>
                     <div class="form__group">
                        <label class="form__label" for="signupForm_confirmPasswordField">Repeat Password</label>
                        <div class="input-wrapper">
                           <input name="password_confirmation" required  id="password_confirm" type="password" class="input-wrapper__field form-control">
                        </div>
                     </div>
                     <div class="form__group form__group--last">
                        <button type="submit" name="signupForm" class="btn btn--large btn--block btn--picton-blue">
                        <span>Sign up</span>
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         
      </div>
   </section>
</main>
 		 				
@include('footer')       
	
@endsection