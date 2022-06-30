    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers;
   
    //front-end controller
    Route::get('/', [
        'uses'=> 'App\Http\Controllers\UstoraHomeController@index',
        'as'=> '/'
    ]);
    Route::get('/category/product/{id}/{name}',
        [ App\Http\controllers\UstoraHomeController::class,'categoryProduct'] )->name('category-product');
    Route::get('/brand/product/{id}/{name}',
        [ App\Http\controllers\UstoraHomeController::class,'brandProduct'] )->name('brand-product');
    Route::get('/product-details/{id}/{name}', [
        'uses'=> 'App\Http\Controllers\UstoraHomeController@productDetails',
        'as'=> 'product-details']);

    //cart
    Route::post('/cart/add',
        [ App\Http\controllers\CartController::class,'addToCart'] )->name('add-to-cart');
    Route::get('/cart/show',
        [ App\Http\controllers\CartController::class,'showCart'] )->name('show-cart');
    Route::post('/cart/update',
        [ App\Http\controllers\CartController::class,'cartUpdate'] )->name('cart-update');
    Route::get('/cart/delete/{rowId}',
        [ App\Http\controllers\CartController::class,'cartDelete'] )->name('cart-delete');

    //checkout
    Route::get('/checkout',
        [ App\Http\controllers\CheckoutController::class,'index'] )->name('checkout');
    Route::post('/customer/registration',
        [ App\Http\controllers\CheckoutController::class,'customerSignUP'] )->name('customer-sign-up');
    Route::post('/checkout/custmer-login',
        [ App\Http\controllers\CheckoutController::class,'customerLogincheck'] )->name('customer-login');
    Route::get('/checkout/shipping',
        [ App\Http\controllers\CheckoutController::class,'shippingForm'] )->name('shipping-form');
    Route::post('/shipping/save',
        [ App\Http\controllers\CheckoutController::class,'saveShippingInfo'] )->name('new-shipping');
    Route::get('/payment',
        [ App\Http\controllers\CheckoutController::class,'paymentForm'] )->name('payment');
    

    //admin-controller 

    Route::get('add-slider',
        [ App\Http\controllers\SliderController::class,'index'] )->name('add-slider');
    Route::post('store-slider',
        [ App\Http\controllers\SliderController::class,'store'] )->name('store-slider');
    Route::get('manage-slider',
        [ App\Http\controllers\SliderController::class,'manageSlider'] )->name('manage-slider');
    Route::get('/edit-slider/{id}',
        [ App\Http\controllers\SliderController::class,'editSlider'] )->name('edit-slider');
    Route::get('/slider/inactive/{id}',
        [ App\Http\controllers\SliderController::class,'inactiveSlider'] )->name('inactive-slider');
    Route::get('/slider/active/{id}',
        [ App\Http\controllers\SliderController::class,'activeSlider'] )->name('active-slider');
    Route::post('/update-slider',
        [ App\Http\controllers\SliderController::class,'updateSlider'] )->name('update-slider');


    //- Category
    Route::get('/category/add-category',
        [ App\Http\controllers\AdminCategoryController::class,'addCategory'] )->name('add-category');
    Route::post('/save/new-category',
        [ App\Http\controllers\AdminCategoryController::class,'saveCategoryInfo'] )->name('new-category');
    Route::get('/category/manage-category',
        [ App\Http\controllers\AdminCategoryController::class,'manageCategory'] )->name('manage-category');
    Route::get('/category/unpublished/{id}',
        [ App\Http\controllers\AdminCategoryController::class,'unpublishedCategory'] )->name('unpublished-category');
    Route::get('/category/published/{id}',
        [ App\Http\controllers\AdminCategoryController::class,'publishedCategory'] )->name('published-category');
    Route::get('/category/edit-category/{id}',
        [ App\Http\controllers\AdminCategoryController::class,'editCategory'] )->name('edit-category');
    Route::post('/category/update-category',
        [ App\Http\controllers\AdminCategoryController::class,'updateCategory'] )->name('update-category');
    Route::get('/category/delete-category/{id}',
        [ App\Http\controllers\AdminCategoryController::class,'deleteCategory'] )->name('delete-category');

    // Brand Section
    Route::get('/brand/add-brand',
        [ App\Http\controllers\AdminBrandController::class,'addBrand'] )->name('add-brand');
    Route::post('/brand/save-brand',
        [ App\Http\controllers\AdminBrandController::class,'saveBrand'] )->name('save-brand');
    Route::get('/brand/manage-brand',
        [ App\Http\controllers\AdminBrandController::class,'manageBrand'] )->name('manage-brand');
    Route::get('/brand/unpublished/{id}',
        [ App\Http\controllers\AdminBrandController::class,'unpublishedBrand'] )->name('unpublished-brand');
    Route::get('/brand/published/{id}',
        [ App\Http\controllers\AdminBrandController::class,'publishedBrand'] )->name('published-brand');
    Route::get('/brand/edit-brand/{id}',
        [ App\Http\controllers\AdminBrandController::class,'editBrand'] )->name('edit-brand');
    Route::post('/brand/update-brand',
        [ App\Http\controllers\AdminBrandController::class,'updateBrand'] )->name('update-brand');
    Route::get('/brand/delete-brand/{id}',
        [ App\Http\controllers\AdminBrandController::class,'deleteBrand'] )->name('delete-brand');

    //product section
    Route::get('/add/product',
        [ App\Http\controllers\AdminProductController::class,'addProduct'] )->name('add-product');
    Route::post('/save/product',
        [ App\Http\controllers\AdminProductController::class,'saveProduct'] )->name('save-product');
    Route::get('/product/manage',
        [ App\Http\controllers\AdminProductController::class,'manageProduct'] )->name('manage-product');
    Route::get('/product/unpublished/{id}',
        [ App\Http\controllers\AdminProductController::class,'unpublishedProduct'] )->name('unpublished-product');
    Route::get('/product/published/{id}',
        [ App\Http\controllers\AdminProductController::class,'publishedProduct'] )->name('published-product');
    Route::get('/product/edit/{id}',
        [ App\Http\controllers\AdminProductController::class,'editProduct'] )->name('edit-product');
    Route::post('/product/update',
        [ App\Http\controllers\AdminProductController::class,'updateProduct'] )->name('update-product');
    Route::get('/product/delete/{id}',
        [ App\Http\controllers\AdminProductController::class,'deleteProduct'] )->name('delete-product');


    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
