<?php

    namespace App\Http\Controllers;

    use App\Models\Brand;
    use App\Models\Category;
    use App\Models\Slider;
    use App\Models\Product;
    use App\Models\OrderDetail;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    class UstoraHomeController extends Controller
    {
        public function index(){
            $newProducts    =   Product::where('publication_status',1)
                                        ->orderBy('id','DESC')
                                        ->take(9)
                                        ->get();
            $sliders        =   Slider::where('status',1)
                                        ->orderBy('id','DESC')
                                        ->take(3)
                                        ->get();
            
            $totalProductNames = DB::table('order_details')
                        ->join('products', 'order_details.product_id','=','products.id')
                        ->select('products.product_image','order_details.product_name','order_details.product_price',
                                DB::raw('count(order_details.product_name) as count','order_details.product_name','product_price'))
                        ->groupBy('order_details.product_name','product_price','products.product_image')
                        ->orderBy('count','desc')
                        ->take(3)
                        ->get();


            // $productNames = DB::table('order_details')
            // ->select('order_details.product_name',
            //         DB::raw('count(order_details.product_name) as count'))
            // ->groupBy('order_details.product_name')
            // ->orderBy('count','desc')
            // ->take(3)
            // ->get()
            // ->toArray();
            // // dd($myArray);



            // foreach($productNames as $key => $productName){
            //     $myArray = [];
            //     $myArray = DB::table('order_details')
            //     ->join('products', 'order_details.product_id','=','products.id')
            //     ->select('products.product_image','order_details.product_price')
            //     ->get()
            //     ->first()
            //     ->toArray();
            //     $productNames[$key]=$myArray;
            //     // print_r($myArray);
            // }
            // dd($productNames);
           return view('front-end.home.home',compact('newProducts','sliders','totalProductNames'));
        }
        //for header-menu
        public function categoryProduct($id){
            $categoryProducts   =   Product::where('category_id',$id)
                                            ->where('publication_status',1)
                                            ->get();
            return view('front-end.category.category-product',['categoryProducts'=>$categoryProducts]);
        }
        //for footer
        public function brandProduct($id){
            $brandProducts      =   Product::where('brand_id',$id)
                                            ->where('publication_status',1)
                                            ->get();
            return view('front-end.category.brand-product',compact('brandProducts'));
        }
        public function productDetails($id){
            $product        =   Product::find($id);
            return view('front-end.category.product-details',compact('product'));
        }
    }
