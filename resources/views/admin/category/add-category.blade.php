@extends('admin.layout')
@section('title')
    AddCategory
@endsection
@section('body')
    <div class="content-wrapper dark-mode">
        <div class="container">
            <marquee><h3 class="text-danger font-weight-bolder">Welcome Back Our Add Category Page.</h3></marquee>
            <div class="card">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-danger text-bold"> Add Category
                                <a href="{!! route('manage-category') !!}" class="btn btn-danger btn-sm float-right">
                                    <i class="far fa-hand-point-right"> </i>Manage Category</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['class'=>'user','route'=>'new-category','method'=>'POST']) !!}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        {!! Form::text('category_name','',['class'=>'form-control','placeholder'=>'CategoryName']) !!}
                                        <span class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            {!! Form::label('publication_status','Publication Status',['class'=>'col-sm-2 col-md-4']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::select('publication_status',[
                                                    'Select'=>'Select Option',
                                                    '1'=>'Published',
                                                    '0'=>'Unpublished'],null,
                                                    ['class'=>'form-control'])
                                                !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::textarea('category_description','',['class'=>'form-control','placeholder'=>'CategoryDescription','rows'=>'3']); !!}
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-outline-danger btn-user btn-block font-weight-bolder">
                                            <i class="fas fa-save" aria-hidden="true"></i> Save Category Info
                                        </button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
