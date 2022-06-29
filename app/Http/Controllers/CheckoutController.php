<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
}
