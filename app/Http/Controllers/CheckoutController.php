<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\Payment;
use App\Models\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use Mail;
use Session;

class CheckoutController extends Controller{
    public function index(){
        return view('front-end.checkout.checkout');
    }
    public function customerSignUP(Request $request){
        $this->validate($request, [
            'email'          => 'email|unique:customers,email'
        ]);
        $customer                   =   new Customer();
        $customer->first_name       =   $request->first_name;
        $customer->last_name        =   $request->last_name;
        $customer->email            =   $request->email;
        $customer->password         =   bcrypt($request->password);
        $customer->phone_number     =   $request->phone_number;
        $customer->address          =   $request->address;
        $customer->save();
        $customerId                 =   $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);
        $data                       =   $customer->toArray();

        Mail::send('front-end.mails.confirmation-mails', $data, function ($message) use ($data){
            $message->to($data['email']);
            $message->subject('Confirmation Mails');
        });
        return redirect('/checkout/shipping');
    }
    public function customerLogincheck(Request $request){
        $customer    =    Customer::where('email', $request->email)->first();
        if(password_verify($request->password, $customer->password)){
            //echo "password is valid";
            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);
            return redirect('/checkout/shipping');
        }else{
            //echo 'password is invalid';
            return redirect('/checkout')->with('message', 'Faul Give to valid password');
        }
    }
    public function shippingForm(){
        $customer   =   Customer::find(Session::get('customerId'));
        return view('front-end.checkout.shipping', ['customer'=>$customer]);
    }
    public function saveShippingInfo(Request $request){
        $shipping                   =   new Shipping();
        $shipping->full_name        =   $request->full_name;
        $shipping->email            =   $request->email;
        $shipping->phone_number     =   $request->phone_number;
        $shipping->address          =   $request->address;
        $shipping->save();
        Session::put('shippingId', $shipping->id);
        return redirect('/payment');
    }
    public function paymentForm(){
        return view('front-end.checkout.payment');
    }
    public function newOrder(Request $request){
        $paymentType                = $request->payment_type;
        if ($paymentType            ==  'Cash'){
            $order = new Order();
            $order->customer_id     = Session::get('customerId');
            $order->shipping_id     = Session::get('shippingId');
            $order->order_total     = Session::get('orderTotal');
            $order->save();

            $payment                = new Payment();
            $payment->order_id      = $order->id;
            $payment->payment_type  = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id          = $order->id;
                $orderDetail->product_id        = $cartProduct->id;
                $orderDetail->product_name      = $cartProduct->name;
                $orderDetail->product_price     = $cartProduct->price;
                $orderDetail->product_quantity  = $cartProduct->qty;
                $orderDetail->save();
            }
            Cart::destroy();
            return redirect('/complete/order');
        }else if($paymentType       == 'Paypal'){
        }else if ($paymentType      ==  'Bkash'){
        }
    }
    public function completeOrder() {
        return 'Your order is finally success';
    }
    //this function is headerLogout
    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return redirect('/');
    }
    public function newCustomerLogin(){
        return view('front-end.customer.new-customer-login');
    }
    public function ajaxEmailCheck($email){
        $customer=   Customer::where('email',$email)->first();
        if ($customer){
            echo 'This Email Already exist';
        }else{
            echo 'This Email Available for you ';
        }
    }
}
