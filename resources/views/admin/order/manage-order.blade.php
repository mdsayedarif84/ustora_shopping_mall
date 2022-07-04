@extends('admin.layout')
@section('title')
    ManageCategory
@endsection
@section('body')
    <div class="content-wrapper dark-mode">
        <div class="container">
            <div class="text-center text-success">
                <marquee direction="right"><h1 class="text-primary font-weight-bolder">Welcome Back Manage Order </h1></marquee>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-danger text-bold">Manage Order
                        <a href="" class="btn btn-danger btn-sm float-right">
                            <i class="far fa-hand-point-left"> </i>Back</a>
                    </h4>
                </div>
                <div class="container-fluid">
                    @if($message   =   Session::get('message'))
                        <h1 class="text-center text-success" id="msg">{{ $message }}</h1>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped " id="example1" >
                                <thead>
                                    <tr class="text-center text-uppercase text-info">
                                        <th>ID </th>
                                        <th>C.Name</th>
                                        <th>Order Total</th>
                                        <th>Order Date</th>
                                        <th>Order Status</th>
                                        <th>Payment Type</th>
                                        <th>P.Status</th>
                                        <th style="width:150px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach($orders as $order)
                                        <tr class="text-center">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $order->first_name.' '.$order->last_name }}</td>
                                            <td>{{ $order->order_total }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->order_status }}</td>
                                            <td>{{ $order->payment_type }}</td>
                                            <td>{{ $order->payment_status }}</td>
                                            <td>
                                                <a href="{{ route('view-order', ['id'=>$order->id]) }}" class="btn btn-warning btn-sm" title="View Order Details">
                                                    <span class=" fas fa-search-plus fa-sm"></span>
                                                </a>
                                                <a href="{{ route('view-order-invoice', ['id'=>$order->id]) }}" class="btn btn-secondary btn-sm"  title="View Order Invoice">
                                                    <span class=" fas fa-search-minus fa-sm"></span>
                                                </a>
                                                <a  href="{{ route('download-order-invoice', ['id'=>$order->id]) }}" class="btn btn-primary btn-sm" title="Download Order Invoice">
                                                    <span class=" fas fa-download fa-sm"></span>
                                                </a>
                                                <a href="" onclick="return confirm('Are you sure to delete this ??')" class="btn btn-danger btn-sm" title="Delete Order">
                                                    <span class=" fa fa-trash fa-sm"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <marquee direction="left"><h3 class="text-success font-weight-bolder">This Site Developed By MD. Sayed Arif. For contact 01634173029 </h3></marquee>
        </div>
    </div>
@endsection
