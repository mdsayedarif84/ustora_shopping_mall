@extends('front-end.master')
@section('title')
    CategoryProduct
@endsection
@section('body')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Category Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @foreach($categoryProducts as $categoryProduct)
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <a href="{!! route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) !!}">
                                    <img src="{!! asset($categoryProduct->product_image) !!}" alt="">
                                </a>
                            </div>
                            <h2><a href="">{!! $categoryProduct->product_name !!}</a></h2>
                            <div class="product-carousel-price">
                                <ins>Tk. {!! $categoryProduct->product_price !!}</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{!! route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) !!}">Add to cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
