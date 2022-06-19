<?php

    namespace App\Http\Controllers;

    use App\Models\Brand;
    use App\Models\Category;
    use App\Models\Slider;
    use App\Models\Product;
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
                                        ->take(4)
                                        ->get();

           return view('front-end.home.home',[
               'newProducts'    =>  $newProducts,
               'sliders'        =>  $sliders]);
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
