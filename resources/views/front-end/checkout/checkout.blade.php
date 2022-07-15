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
                <fieldset class="col2-set bg-dark well">
                    <div class="card well">
                        <div class="card-body ">
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
                                                            <label for="email" class="form-group">Email</label> --<span  id="res"></span>
                                                            {!! Form::email('email',null,['class'=>'form-control','id'=>'email']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            {!! Form::label('pwd',' Password',['class'=>'form-group']) !!}
                                                            {!! Form::password('password',['class'=>'form-control','id'=>'pwd']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cpwd" class="form-group">Confirm Password 
                                                                -</label> <span id="message"></span>
                                                            <input onkeyup='check();' name="confirm_password" id="cpwd" type="password" class="form-control">
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
                                                        <button type="submit" id="regBtn" name="btn" class="btn btn-danger">
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
                    <div class="col-sm-4 registered-users"><strong class="text-danger">LogIn</strong>
                        <p class="text-center">If you have an account with us, please log in.</p>
                        <div class="content">
                            {!! Form::open(['route'=>'customer-login', 'method'=>'POST']) !!}
                                <div class="col-md-12">
                                    <div class="form-group">
                                    {!! Form::label('email2','Email',['class'=>'form-group']) !!}
                                    {!! Form::email('email',null,['class'=>'form-control','id'=>'email2']) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    {!! Form::label('pass','Password',['class'=>'form-group']) !!}
                                    {!! Form::password('password',['class'=>'form-control','id'=>'pass']) !!}
                                    </div>
                                </div>
                                
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
        var check = function() {
            var pwd =   $('#pwd').val();
            var cpwd =   $('#cpwd').val();
            if (pwd == cpwd) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password is matching';
            } else{
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password is not matching';
            }
        }
    </script>
    <script>
        var email           =   document.getElementById('email');
        email.onblur        =   function (){
            var email       =   document.getElementById('email').value;
            var xmlHttp     =   new XMLHttpRequest();
            var serverPage  =   "http://localhost/ustora_shopping_mall/public/ajax-email-check/"+email;
            xmlHttp.open('GET', serverPage);
            xmlHttp.onreadystatechange  =   function (){
                if (xmlHttp.readyState == 4 && xmlHttp.status  ==  200){
                    document.getElementById('res').innerHTML   =   xmlHttp.responseText;
                    if(xmlHttp.responseText == 'This Email Already exist'){
                        document.getElementById('res').style.color = 'red';
                        document.getElementById('regBtn').disabled  = true;
                    }else{ 
                        document.getElementById('res').style.color = 'green';
                        document.getElementById('regBtn').disabled  = false;
                       
                    }
                }
            }
            xmlHttp.send(null);
        }
    </script>
@endsection
