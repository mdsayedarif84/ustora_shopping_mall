<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Shipping;
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
        return 'Success';
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
}
