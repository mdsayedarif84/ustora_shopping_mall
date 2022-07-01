@extends('front-end.master')

@section('title')
    CHECKOUT
@endsection
@section('body')

    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div id="checkout" class="col-lg-8">
                        <div class="box">
                            <h1 class="text-center text-primary">Register Here !!</h1>
                            {!! Form::open([ ''=>'' ,'method'=>'POST' ]) !!}
                            <div class="content py-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input name="first_name" id="firstname" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input name="last_name" id="lastname" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" id="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company">Password</label>
                                            <input name="password" id="company" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="street">Confirm Password</label>
                                            <input name="confirm_password" id="street" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number </label>
                                            <input name="phone_number" id="phone" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-md-6 col-lg-2"></div>
                                    <div class="col-md-6 col-lg-8">
                                        <div class="form-group">
                                            <label for="country">Address</label>
                                            <input name="address" id="country" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2"></div>
                                    <div class="text-center col-md-12">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                                    </div>
                                </div>
                                <!-- /.row-->
                            </div>
                            {!! Form::close() !!}
                            <div class="box-footer d-flex justify-content-between"><a href="" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Basket</a>
                                <button type="submit" class="btn btn-primary">Continue to Delivery Method<i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <!-- /.box-->
                    </div>
                    <!-- /.col-lg-9-->
                    <div class="col-lg-4">
                        <div id="order-summary" class="card">
                            <div class="card-header">
                                <h3 class="mt-4 mb-4 text-center text-danger">Login Here !!</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    {!! Form::open(['route'=>'customer-login', 'method'=>'POST' ]) !!}
                                    <div class="form-group">
                                        <input id="email-modal" name="email" type="text" placeholder="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input id="password-modal" name="password" type="password" placeholder="password" class="form-control">
                                    </div>
                                    <h4 class="text-center text-danger"> {{ Session::get('message') }}</h4>
                                    <p class="text-center">
                                        <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                    </p>
                                    {!! Form::close() !!}
                                    <p class="text-center text-muted">Not registered yet?</p>
                                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-3-->
                </div>
            </div>
        </div>
    </div>

@endsection

