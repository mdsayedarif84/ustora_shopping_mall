<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $totslUsers     =   DB::table('users')->count('id');
        $orderDetails   =   DB::table('order_details')
                                ->join('orders', 'order_details.order_id','=','orders.id')
                                ->join('products', 'order_details.product_id','=','products.id')
                                ->select('order_details.*','orders.order_status','orders.order_total')
                                ->take(7)
                                ->get();
        $recentProducts  =   DB::table('products')->select('products.*')
                                ->orderBy('id','DESC')
                                ->take(2)
                                ->get();
            //return $recentProduct;
                        
        return view('admin.home.home',compact('totslUsers','orderDetails','recentProducts'));
    }
}
