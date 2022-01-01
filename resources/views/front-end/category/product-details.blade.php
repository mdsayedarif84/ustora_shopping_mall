    @extends('front-end.master')
    @section('title')
        ProductDetails
    @endsection
    @section('body')
        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>E-Shop</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section style=" background-size: 100% 100%; background-attachment: fixed;">
        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Search Products</h2>
                            <form action="">
                                <input type="text" placeholder="Search products...">
                                <input type="submit" value="Search">
                            </form>
                        </div>

                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Short Description</h2>
                            <p>{!! $product->short_description !!}</p>
                        </div>

                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Recent Posts</h2>
                            <ul>
                                <li><a href="">Sony Smart TV - 2015</a></li>
                                <li><a href="">Sony Smart TV - 2015</a></li>
                                <li><a href="">Sony Smart TV - 2015</a></li>
                                <li><a href="">Sony Smart TV - 2015</a></li>
                                <li><a href="">Sony Smart TV - 2015</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="product-content-right">
                            <div class="product-breadcroumb">
                                <a href="">Home</a>
                                <a href="">{!! $product->category_id !!}</a>
                                <a href="">Sony Smart TV - 2015</a>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <img src="{!! asset($product->product_image) !!}" alt="">
                                        </div>
                                        <div class="product-gallery">
                                            <img src="{!! asset($product->product_image) !!}" alt="">
                                            <img src="{!! asset($product->product_image) !!}" alt="">
                                            <img src="{!! asset($product->product_image) !!}" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product-inner">
                                        <h2 class="product-name">{!! $product->product_name !!}</h2>
                                        <div class="product-inner-price">
                                            <ins>{!! $product->product_price !!}</ins> <del>$100.00</del>
                                        </div>
                                        {!! Form::open(['route'=>'add-to-cart', 'method'=>'POST','class'=>'cart']) !!}
                                            <div class="quantity">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                {!! Form::number('qty','1',['class'=>'input-text qty text','min'=>'1','id'=>'qty']) !!}
                                                {!! Form::hidden('id',$product->id,['class'=>'input-text qty text', 'id'=>'name']) !!}
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                            </div>
                                            <button name="btn" class="add_to_cart_button btn-sm" type="submit">Add to cart</button>
                                        {!! Form::close() !!}

                                        <div role="tabpanel">
                                            <ul class="product-tab" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                    <h2>Product Description</h2>
                                                    <p class="text-warning">{!! $product->long_description !!}</p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                                    <h2>Reviews</h2>
                                                    <div class="submit-review">
                                                        <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                        <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                        <div class="rating-chooser">
                                                            <p>Your rating</p>

                                                            <div class="rating-wrap-post">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                        <p><input type="submit" value="Submit"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    @endsection
