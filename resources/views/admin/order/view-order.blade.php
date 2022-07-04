@extends('admin.layout')
@section('title')
    ViewOrder
@endsection
@section('body')
<div class="content-wrapper dark-mode">
    <div class="container" >
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12">
                <div class="card card-default">
                    <div class="card-body">
                        <h3 class="text-primary text-center">Customer for this  Order </h3>
                        <table class="table table-bordered table-hover table-dark table-striped">
                            <tr>
                                <th>Customer Name</th>
                                <td>{!! $customer->first_name.' '.$customer->last_name !!}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{!! $customer->phone_number !!}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{!! $customer->email !!}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{!! $customer->address !!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12">
                <div class="card card-default">
                    <div class="card-body">
                        <h4 class="text-primary text-center">Order Detail Info for this  Order </h4>
                        <table class="table table-bordered table-hover table-dark table-striped">
                            <tr>
                                <th>Order No</th>
                                <td>{!! $order->id!!}</td>
                            </tr>
                            <tr>
                                <th>Order Total</th>
                                <td>{!! $order->order_total !!}</td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td>{!! $order->order_status !!}</td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td>{!! $order->created_at !!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <h4 class="text-primary text-center">Shipping Info For This Order </h4>
                        <table class="table table-striped table-dark table-hover">
                            <tr>
                                <th>Full Name</th>
                                <td>{!! $shipping->full_name !!}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{!! $shipping->phone_number !!}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{!! $shipping->email !!}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{!! $shipping->address !!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <h4 class="text-primary text-center">Payment Info For This Order  </h4>
                        <table class="table table-dark table-bordered">
                            <tr>
                                <th>Payment Type</th>
                                <td>{!! $payment->payment_type !!}</td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td>{!! $payment->payment_status !!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-dark table-striped">
                    <h4 class="text-center text-primary">Product Info For This Order</h4>
                    <tr class="text-center">
                        <th>ID </th>
                        <th>Product Id </th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantiy</th>
                        <th>Total Price</th>
                    </tr>
                    @php($i=1)
                    @foreach($orderDetails as $orderDetail)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{!! $orderDetail->product_id !!}</td>
                            <td>{!! $orderDetail->product_name !!}</td>
                            <td> Tk. {!! $orderDetail->product_price !!}</td>
                            <td>{!! $orderDetail->product_quantity !!}</td>
                            <td> Tk. {!! $orderDetail->product_price * $orderDetail->product_quantity !!}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
