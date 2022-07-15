@extends('admin.layout')
@section('title')
    ViewOrderInvoice
@endsection
@section('body')
<div class="content-wrapper ">
<div class="card well">
	<div class="card-body">
	<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="{{ asset('admin/invoice/css/invoice.css') }}">
		<script src=" {{ asset('admin/invoice/js/invoice.js') }}"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<div class="container">
				<div class="col-md-12">
					<div class="col-md-4 float-left"><h4>Shipping Info</h4>
						<address contenteditable>
							<p>{!! $shipping->full_name !!}</p>
                            <p>{!! $shipping->address !!}</p>
                            <p>{!! $shipping->phone_number !!}</p>
						</address>
					</div>
					<div class="col-md-4"></div>
                    <div class="col-md-4 float-right"><h4>Billing Info</h4>
						<address contenteditable>
							<p>{!! $customer->first_name.' '.$customer->last_name !!}</p>
                            <p>{!! $customer->address !!}</p>
                           	<p>{!! $customer->phone_number !!}</p>
						</address>
					</div>
				</div>
			</div>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<address contenteditable>
				<p>My Company<br>U-stor Shop</p>
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable>0000{!! $order->id !!}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable>{!! $order->created_at !!}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Due</span></th>
					<td><span contenteditable>TK {!! $order->order_total !!}</td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Item</span></th>
						<th><span contenteditable>Description</span></th>
						<th><span contenteditable>Rate</span></th>
						<th><span contenteditable>Quantity</span></th>
						<th><span contenteditable>Price</span></th>
					</tr>
				</thead>
				<tbody>
					@php($sum=0)
					@foreach($orderDetails as $orderDetail)
                        <tr>
							<td><a class="cut">-</a><span >{!! $orderDetail->product_name !!}</span></td>
							<td><span >Experience Review</span></td>
							<td>Tk <span >{!! $orderDetail->product_price !!}</span></td>
							<td><span >{!! $orderDetail->product_quantity !!}</span></td>
							<td><span>Tk </span><span>{!! $total = $orderDetail->product_price*$orderDetail->product_quantity !!}</span></td>
                         </tr>
                    @php($sum = $sum+$total)
                    @endforeach
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span >Tk</span><span>{!! $sum !!}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span >$</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Balance Due</span></th>
					<td><span >$</span><span></span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span contenteditable>Additional Notes</span></h1>
			<div contenteditable>
				<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
			</div>
		</aside>
	</body>
</html>
	</div>
</div>

</div>
@endsection
