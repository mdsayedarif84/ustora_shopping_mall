@extends('admin.layout')
@section('title')
    AddProduct
@endsection
@section('body')
<div class="content-wrapper dark-mode">
    <div class="container">
        <marquee><h3 class="text-danger font-weight-bolder">Welcome Back Our Add Product Page.</h3></marquee>
        <div class="card">
            @if($message   =   Session::get('message'))
                <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
            @endif
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-danger font-weight-bolder"> Add Product
                            <a href="" class="btn btn-danger btn-sm float-right">
                                <i class="far fa-hand-point-right"> </i>Manage Product</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route'=>'store-slider','', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        {!! Form::label('category_id','Category Name',['class'=>'col-sm-4 col-md-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                            <select class="form-control text-success font-weight-bolder" name="category_id">
                                                <option value="select">Select Option</option>
                                                @foreach($categories as $category)
                                                    <option value="{!! $category->id !!}">{!! $category->category_name !!}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        {!! Form::label('brand_id','Brand Name',['class'=>'col-sm-4 col-md-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                            <select class="form-control text-success font-weight-bolder" name="brand_id">
                                                <option value="select">Select Option</option>
                                                @foreach($brands as $brand)
                                                    <option value="{!! $brand->id !!}">{!! $brand->brand_name !!}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="form-group row">
                                        {!! Form::label('product_name','Product Name',[ 'class'=>'col-sm-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                            {!! Form::text('product_name', '',['class'=>'form-control form-control-user']) !!}
                                            <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="form-group row">
                                        {!! Form::label('product_price','Product Price',['class'=>'col-sm-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                            {!! Form::number('product_price', '',['class'=>'form-control form-control-user','placeholder'=>'Product Price']) !!}
                                            <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('short_description','',['class'=>'form-control text-success font-weight-bolder','placeholder'=>'ShortDescription','rows'=>'2']); !!}
                                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('long_description','',['id'=>'editor','class'=>'form-control text-success font-weight-bolder','placeholder'=>'LongDescription','rows'=>'2']); !!}
                                <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <div class="form-group row">
                                        {!! Form::label('product_quantity','P.Quantity  ',['class'=>'col-sm-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                            {!! Form::number('product_quantity', '',['class'=>'form-control form-control-user','placeholder'=>'Quantity']) !!}
                                            <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        {!! Form::label('publication_status',' Status',['class'=>'col-sm-3 col-md-3 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-9 col-md-9">
                                            {!! Form::select('publication_status',[
                                                    'select' => 'Select Option',
                                                    '1' => 'Published',
                                                    '0' => 'Unpublished'
                                                    ],null,
                                                    ['class'=>'form-control text-success font-weight-bolder']);
                                            !!}
                                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <div class="form-group row">
                                        {!! Form::label('product_image','Product Image',['class'=>'col-sm-5 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-7">
                                            {!! Form::file('product_image',['accept'=>'image/*','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-outline-danger btn-block font-weight-bolder">
                                        <i class="fas fa-save" aria-hidden="true"></i> Save Product Info
                                    </button>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            </hr>
                        {!! Form::close() !!}
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
