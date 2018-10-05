<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Aviation photos - 3 million+ on JetPhotos</title>
        <link rel="shortcut icon" href="/favicon.ico?v=1">
        <!--	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />-->
        <!--       <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- jQuery library -->

        <!--	  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,300,700,500italic,400italic|Lato:400,700,300|Source+Sans+Pro:400,300,700" rel="stylesheet">-->
        <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


         <link href="{{ asset('plugin/bootstrap-fileinput-master/css/fileinput.css') }}" rel="stylesheet">

        <link href="{{ asset('plugin/PgwSlider-master/pgwslider.css') }}" rel="stylesheet">
         <link href="{{ asset('plugin/Minimalist-jQuery-Toast-Notification-Plugin-simpleToastMessage/css/simpleToastMessage.css') }}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <script src="{{ asset('plugin/bootstrap-fileinput-master/js/fileinput.js') }}"></script>
        <script src="{{ asset('plugin/PgwSlider-master/pgwslider.js') }}"></script>
        <script src="{{ asset('plugin/Minimalist-jQuery-Toast-Notification-Plugin-simpleToastMessage/js/simpleToastMessage.js') }}"></script>
          <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



        <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

    </head>
    <body class="" style="background:#ececec;">

        <div class="page page--index page--no-ads container mt-3 pt-5 ">
     

            @yield('content')


     
        </div>


        <div class="jquery-modal blocker current"><div id="login-form" class="modal" style="display: inline-block;">

            <div id="login-form__failed-login" class="login-form__failed-login hidden"></div>

            <h2 class="head">Log in</h2>

            <div class="grid-noBottom">
                <div class="col-6_sm-12">
                    <div class="wrapper__content wrapper__content--small">
                        <p>If you're not yet a member, <br> please <a href="/register" class="link">sign up</a> for an account.</p>
                        <p><a href="{{ route('password.request') }}" class="link">Forgot password?</a></p>
                    </div>
                </div>
                <div class="col-6_sm-12">
                    <form action="{{ route('login') }}" method="post" name="loginForm" class="form">
                        {{ csrf_field() }}
                        <div class="form__group">
                            <div class="input-wrapper">
                                <input class="validate required input-wrapper__field" name="email" id="loginForm_emailField" value="{{ old('email') }}" required autofocus placeholder="Username or Email" type="email">
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                        <div class="form__group">
                            <div class="input-wrapper">
                                <input id="loginForm_passwordField" name="password" class="validate required input-wrapper__field" placeholder="Password" required type="password"><ul class="parsley-errors-list" id="parsley-id-5465"></ul>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif                        
                            </div>
                        </div>
                        <div class="form__group">
                            <div class="checkbox">
                                <input type="checkbox" id="loginForm_rememberMe" name="loginForm_rememberMe" checked="checked" class="checkbox__input">
                                <label for="loginForm_rememberMe" class="checkbox__label">
                                    <span>Remember me</span>
                                </label>
                            </div>
                        </div>
                        <div class="form__group form__group--last">
                            <button type="submit" name="loginForm" class="btn btn--large btn--block btn--picton-blue">
                                <span>Log in</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <a href="#" rel="modal:close" class="close-modal">Close</a></div></div>
        <script  src="{{ asset('js/forum.js') }}" type="text/javascript">    </script>    
        <script  src="{{ asset('js/script.js') }}" type="text/javascript">	</script>	

    </body>
</html>