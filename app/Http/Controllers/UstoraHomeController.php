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
                        ->select('order_details.product_name','order_details.product_price',DB::raw('count(product_name) as count','product_name','product_price'))
                        ->groupBy('product_name','product_price')
                        ->orderBy('count','desc')
                        ->take(3)
                        ->get();
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
