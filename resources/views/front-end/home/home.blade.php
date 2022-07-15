@extends('front-end.master')
@section('title')
    Home
@endsection
@section('body')
    <section style="background-size: 100% 100%; background-attachment: fixed;" >
        <div class="slider-area">
            <!-- Slider -->
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">
                    @php $i = 1; @endphp
                    @foreach( $sliders as $slider )
                        <li class="carousel-item {{ $i == '1' ? 'active':'' }} ">
                        @php $i++; @endphp
                            <img src="{!! asset($slider->image) !!}" alt="Slide" style="height: 500px;width: 1100px;">
                            <div class="caption-group">
                                <h2 class="caption title">
                                     <span class="primary">{{$slider->link}} <strong>{{$slider->heading}}</strong></span>
                                </h2>
                                <h4 class="caption subtitle"></h4>
                                <a class="caption button-radius" href="#">
                                    <span class="icon"></span>{{$slider->link_name}}</a>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
            <!-- ./Slider -->
        </div>
    </section> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End promo area -->
    <section style="background: url('{{asset('/front-end/img')}}/slider3.jpg'); background-size: 100% 100%; background-attachment: fixed;">
        <div class="maincontent-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-product">
                            <h2 class="section-title">Latest Products</h2>
                            <div class="product-carousel">
                                {{-- my-edit--}}
                                <div class="row">
                                    @foreach( $newProducts as $newProduct)
                                        <div class="col-md-4">
                                            <div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="{!! asset($newProduct->product_image) !!}" alt="img">
                                                    <div class="product-hover">
                                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="{!! route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) !!}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>
                                                <h2><a href="{!! route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name]) !!}">{!! $newProduct->product_name !!}</a></h2>
                                                <div class="product-carousel-price">
                                                    <ins>TK {!! $newProduct->product_price !!}</ins> <del>$100.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                {{-- my-edit-end--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main content area -->
    <section >
        <div class="product-widget-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Top Sellers</h2>
                            <a href="" class="wid-view-more">View All</a>
                            @foreach($totalProductNames as $totalProductName )
                                <div class="single-wid-product">
                                    <a href="single-product.html"><img src=" " alt="" class="product-thumb"></a>
                                    <h2><a href="single-product.html">{{ $totalProductName->product_name }}</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins> Tk. {{ $totalProductName->product_price }}</ins> <del>$425.00</del>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Recently Viewed</h2>
                            <a href="#" class="wid-view-more">View All</a>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="{!! asset('/') !!}/front-end/img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>
                            </div>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="{!! asset('/') !!}/front-end/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>
                            </div>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="{!! asset('/') !!}/front-end/img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Top New</h2>
                            <a href="#" class="wid-view-more">View All</a>
                            @foreach($sliders as $slider)
                                <div class="single-wid-product">
                                    <a href="single-product.html">
                                        <img src="{!! asset($slider->image) !!}" alt="Slide"" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">{!! $slider->heading !!}</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>{{ $slider->link_name }}</ins> 
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
