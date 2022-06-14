@extends('admin.layout')
@section('title')
    AddSlider
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
                        <h4 class="text-danger font-weight-bolder"> Add Slider
                            <a href="{{ route('manage-slider') }}" class="btn btn-danger btn-sm float-right">
                                <i class="far fa-hand-point-right"> </i>Manage Slider</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route'=>'store-slider','', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        {!! Form::label('heading','Heading ',['class'=>'col-sm-4 col-md-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                        {!! Form::text('heading', '',['class'=>'form-control form-control-user','placeholder'=>'Heading']) !!}
                                            <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                    {!! Form::label('link','Link ',['class'=>'col-sm-4 col-md-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                        {!! Form::text('link', '',['class'=>'form-control form-control-user','placeholder'=>'Link']) !!}
                                            <span class="text-danger">{{ $errors->has('link') ? $errors->first('link') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="form-group row">
                                        {!! Form::label('link_name','Link Name',[ 'class'=>'col-sm-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                            {!! Form::text('link_name', '',['class'=>'form-control form-control-user']) !!}
                                            <span class="text-danger">{{ $errors->has('link_name') ? $errors->first('link_name') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="form-group row">
                                    {!! Form::label('status',' Status',['class'=>'col-sm-4 col-md-4 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-8">
                                            {!! Form::select('status',[
                                                    'select' => 'Select Option',
                                                    '1' => 'Published',
                                                    '0' => 'Unpublished'
                                                    ],null,
                                                    ['class'=>'form-control text-success font-weight-bolder']);
                                            !!}
                                            <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('description','',['class'=>'form-control text-success font-weight-bolder','placeholder'=>'Description','rows'=>'2']); !!}
                                <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : ' ' }}</span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <div class="form-group row"></div>
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <div class="form-group row">
                                    {!! Form::label('image','Image',['class'=>'col-sm-3 text-primary font-weight-bolder']) !!}
                                        <div class="col-sm-9">
                                            {!! Form::file('image',['accept'=>'image/*','class'=>'form-control']) !!}
                                            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <div class="form-group row"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-outline-danger btn-block font-weight-bolder">
                                        <i class="fas fa-save" aria-hidden="true"></i> Save Slider Image
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
