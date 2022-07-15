<?php

namespace App\Providers;
use App\Models\Brand;
use App\Models\Product;
use View;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        // this function is use for UstoraHomeController header-menu
        View::composer('front-end.includes.header-menu',function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
        // this function is use for UstoraHomeController in footer.blade
        View::composer('front-end.includes.footer',function ($view){
            $view->with('brands', Brand::where('publication_status',1)
                ->orderBy('id','DESC')
                ->take(5)
                ->get());
        });
    }
}
