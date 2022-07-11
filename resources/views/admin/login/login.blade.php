<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{!! asset('/') !!}/admin/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('/') !!}/admin/login/css/main.css">
    <!--===============================================================================================-->
</head>
<style>
        .showPassword {
            position: relative;
        }
        .showPassword i{
            position: absolute;
            margin-left: 450px;
            bottom: 43px;
            cursor: pointer;
        }
    </style>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top">
    <div class="container">
        <a href="" class="navbar-brand">{{ config('app.name') }}</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{!! route('register') !!}" class="nav-link" >Register</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="limiter">
    <div class="container-login100 " style="background-image: url('{!! asset('/admin/login/images/bg-01.jpg') !!}');">
        <div class="wrap-login100 p-t-40 p-b-50 dark-mode" style="width: 595px; ">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
            <form class="login100-form validate-form p-b-33 p-t-8" method="POST" action="{{ route('login') }}" >
                @csrf
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="User_Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>
                <div class="wrap-input100 validate-input showPassword" data-validate="Enter password">
                    <input id="password" class="input100  @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                    <i class="fas fa-eye-slash text-danger " id="togglePassword">ShowPass</i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <div class="form-group row">
                            <input type="checkbox" name="remember" class="col-sm-4 form-control m-t-15" {{ old('remember') ? 'checked' : ''}} >
                            <div class="col-sm-8">
                                <label class="m-t-10">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group row">
                            <div class="col-sm-12 m-t-5">
                                <button class="login100-form-btn">Login</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 m-t-5">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{!! asset('/') !!}/admin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('/') !!}/admin/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('/') !!}/admin/login/vendor/bootstrap/js/popper.js"></script>
<script src="{!! asset('/') !!}/admin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('/') !!}/admin/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('/') !!}/admin/login/vendor/daterangepicker/moment.min.js"></script>
<script src="{!! asset('/') !!}/admin/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('/') !!}/admin/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('/') !!}/admin/login/js/main.js"></script>
<script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        $("#togglePassword").toggleClass("fa-eye");
        });
    </script>

</body>
</html>
