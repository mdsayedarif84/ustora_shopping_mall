@extends('front-end.master')
@section('title')
    Checkout
@endsection
@section('body')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2> Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <section class="main-container col1-layout bounceInUp animated">
        <div class="main container bg-dark">
            <div class="account-login">
                <div class="page-title">
                    <h1 class="text-center text-danger">Login or Create an Account</h1>
                </div>
                <fieldset class="col2-set bg-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-sm-8 new-users"><strong>New Customers</strong>
                            <div class="content">
                                <div class="box">
                                    {!! Form::open([ 'route'=>'customer-sign-up', 'method'=>'POST' ]) !!}
                                    <div class="content py-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('firstname','Firstname',['class'=>'form-group']) !!}
                                                    {!! Form::text('first_name',null,['class'=>'form-control','id'=>'firstname']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('lastname','Lastname',['class'=>'form-group']) !!}
                                                    {!! Form::text('last_name',null,['class'=>'form-control','id'=>'lastname']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label> ||<span class="text-danger" id="res"></span>
                                                    {!! Form::email('email',null,['class'=>'form-control','id'=>'email']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('password',' Password',['class'=>'form-group']) !!}
                                                    {!! Form::password('password',['class'=>'form-control','id'=>'password']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- {!! Form::label('confirmPassword','Confirm Password',['class'=>'form-group']) !!} -->
                                                    <label for="confirmPassword">Confirm Password -</label> <span class="text-danger" id="match"></span>
                                                    {!! Form::password('confirm_password',['class'=>'form-control','id'=>'confirmPassword']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('phone_number','Phone Number',['class'=>'form-group']) !!}
                                                    {!! Form::number('phone_number',null,['class'=>'form-control','id'=>'phone_number']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row-->
                                        <div class="row">
                                            <div class="col-md-6 col-lg-2"></div>
                                            <div class="col-md-6 col-lg-8">
                                                <div class="form-group">
                                                    {!! Form::text('address',null,['class'=>'form-control','id'=>'address','placeholder'=>'Address']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2"></div>
                                            <div class="text-center col-md-12">
                                                <button type="submit" id="regBtn" class="btn btn-primary">
                                                    <i class="fa fa-user-md"></i> Register
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.row-->
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 registered-users"><strong>LogIn</strong>
                        <div class="content">
                            <p class="text-center">If you have an account with us, please log in.</p>
                            {!! Form::open(['route'=>'customer-login', 'method'=>'POST']) !!}
                                <ul class="form-list">
                                    <li>
                                        {!! Form::label('email','Email',['class'=>'form-group']) !!}
                                        {!! Form::email('email',null,['class'=>'form-control','id'=>'email']) !!}
                                    </li>
                                    <h4 class="text-center text-danger"> {{ Session::get('message') }}</h4>
                                    <li>
                                        {!! Form::label('pass','Password',['class'=>'form-group']) !!}
                                        {!! Form::password('password',['class'=>'form-control','id'=>'pass']) !!}

                                    </li>
                                </ul>
                                <div class="buttons-set">
                                    <button  type="submit" class="button login btn-sm"><span>Login</span></button>
                                    <a class="forgot-word" href="#">Forgot Your Password?</a>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </fieldset>
            </div>
            <br>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function (){
            $('#confirmPassword').keyup(function (){
                var pwd    =   $('#password').val();
                var cpwd   =   $('#confirmPassword').val();
                if(cpwd != pwd ){
                    $('#match').html('Password is not match');
                        $('#match').css('color','red');
                    return false;
                }else if(cpwd == pwd){
                    $('#match').html('Password match');
                    $('#match').css('color','green');
                    return true;
                }
            });
        });
    </script>
    <script>
        var email    =   document.getElementById('email');
        email.onblur =   function (){
            var email    =   document.getElementById('email').value;
            var xmlHttp     =   new XMLHttpRequest();
            var serverPage  =   "http://localhost/choic-online/public/ajax-email-check/"+email;
            xmlHttp.open('GET', serverPage);
            xmlHttp.onreadystatechange  =   function (){
                if (xmlHttp.readyState == 4 && xmlHttp.status  ==  200){
                    document.getElementById('res').innerHTML   =   xmlHttp.responseText;
                    if (xmlHttp.responseText == 'This Email Already exist.Try new email'){
                        document.getElementById('regBtn').disabled  =    true;
                    }else {
                        document.getElementById('regBtn').disabled  =    false;
                    }
                }
            }
            xmlHttp.send(null);
        }
    </script>
    <!-- <script>

        $('#confirmPassword').blur(function (){
            var password    =   $('#password').val();
            var confirmPassword    =   $('#confirmPassword').val();
            $('#fullName').text(password+' '+confirmPassword);
        });
    </script> -->
@endsection
