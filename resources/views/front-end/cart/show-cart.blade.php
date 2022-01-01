@extends('front-end.master')
@section('title')
    ShoppingCart
@endsection
@section('body')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2> Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="product-content-right table-responsive">
        <div class="woocommerce">
            <table cellspacing="0" class="shop_table cart">
                <thead class="dark-mode">
                <tr>
                    <th class="product-name">SL No</th>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-subtotal">Total</th>
                    <th class="product-remove">Delete</th>
                </tr>
                </thead>
                <tbody>
                @php( $i = 1)
                @php( $sum = 0)
                @foreach( $cartProducts as $cartProduct)
                <tr class="cart_item">
                    <td class="product-name">{!! $i++ !!}</td>
                    <td class="product-thumbnail">
                        <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{!! asset( $cartProduct->options->image) !!}">
                    </td>
                    <td class="product-name">
                        <h4>{!! $cartProduct->name !!}</h4>
                    </td>
                    <td class="product-price">
                        <span class="amount"> {!! $cartProduct->price !!}</span>
                    </td>
                    <td class="product-quantity">
                        <div class="quantity buttons_added">
                            {!! Form::open(['route'=>'cart-update','method'=>'POST']) !!}
                                {!! Form::number('qty',$cartProduct->qty,['min'=>'1','class'=>'input-text qty text','id'=>'qty']) !!}
                                {!! Form::hidden('rowId',$cartProduct->rowId) !!}
                                <button type="submit" title="update" class="btn btn-sm"><i class="fa fa-refresh"></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                    <td class="product-subtotal">
                        <span class="amount">{!! $total =$cartProduct->price* $cartProduct->qty !!}</span>
                    </td>
                    <td class="product-remove">
                        <a title="Remove" onclick="return confirm('Are you sure to delete this Cart Item ??')" class="remove" href="{!! route('cart-delete',['rowId'=>$cartProduct->rowId]) !!}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php $sum  = $sum + $total; ?>
                @endforeach
                <tr>
                    <td class="actions" colspan="8">
                        <div class="coupon">
                            <input type="submit" value="Apply Coupon" name="apply_coupon" class="button button-radius">
                        </div>
                        <button type="submit" name="update_cart" class="button button-radius"><i class="fa fa-hand-o-right" aria-hidden="true">Continue Shopping</i></button>
                        <button type="submit" name="proceed" class="checkout-button button button-radius"><i class="fa fa-refresh" >Update Cart</i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <table  class="table-responsive table table-striped table-bordered">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th class="text-bold"> Subtotal</th>
                            <td><span class="amount">{!! $sum !!}</span></td>
                        </tr>
                        <tr class="shipping">
                            <th>Total Vat (Tk)</th>
                            <td>{!! $vat= 0 !!}</td>
                        </tr>
                        <tr class="order-total">
                            <th>Grand Total (Tk)</th>
                            <td><strong><span class="amount">{!! $orderTotal = $sum+$vat !!}</span></strong> </td>
                            <?php Session::put('orderTotal', $orderTotal); ?>
                        </tr>
                    <tr class="row">
                        <td>
                            <button title="checkout" type="button" class="button button-radius btn-group">
                                <a href="{!! route('checkout') !!}"> Proceed To CheckOut</a>

                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection
