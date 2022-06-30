@extends('front-end.master')

@section('title')
    Shipping
@endsection
@section('body')
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12 well text-center text-success" style="font-size: large">
                                Dear {{ Session::get('customerName') }}. You have to give us product shipping info to complete your valuable order. If your billing info & shipping info are same then just press on save shipping info button.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div id="checkout" class="col-lg-8">
                        <div class="box bg-dark">
                            <h1 class="text-center text-primary">Shipping info goes here</h1>
                            {!! Form::open([ 'route'=>'new-shipping' ,'method'=>'POST' ]) !!}
                            <div class="content py-3 well">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3"></div>
                                    <div class="col-md-6 text-danger">
                                        <div class="form-group">
                                            <label for="fullName">FullName</label>
                                            <input value="{!! $customer->first_name.' '.$customer->last_name !!}" name="full_name" id="fullName" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3"></div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-md-6 text-danger">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input value="{!! $customer->email !!}" name="email" id="email" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-danger">
                                        <div class="form-group">
                                            <label for="phone">Phone Number </label>
                                            <input value="{!! $customer->phone_number !!}" name="phone_number" id="phone" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-md-6 col-lg-2"></div>
                                    <div class="col-md-6 col-lg-8 text-danger">
                                        <div class="form-group">
                                            <label for="country">Address</label>
                                            <input value="{!! $customer->address !!}" name="address" id="country" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2"></div>
                                    <div class="text-center col-md-12">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Save Shipping Info </button>
                                    </div>
                                </div>
                                <!-- /.row-->
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <!-- /.box-->
                    </div>
                    <div class="col-lg-2"></div>
                    <!-- /.col-lg-9-->
                    <!-- /.col-lg-3-->
                </div>
            </div>
        </div>
    </div>
@endsection
