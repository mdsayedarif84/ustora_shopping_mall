@extends('admin.layout')
@section('title')
    EditBrand
@endsection
@section('body')
    <div class="content-wrapper dark-mode">
        <div class="container">
            <marquee><h3 class="text-success font-weight-bolder">Welcome Back Our Edit Brand Page.</h3></marquee>
            <div class="card">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="font-weight-bolder text-danger"> Edit Brand
                                <a href="{!! route('manage-brand') !!}" class="btn btn-danger btn-sm float-right">
                                    <i class="far fa-hand-point-right"> </i>Manage Brand</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['class'=>'user','route'=>'update-brand','method'=>'POST','id'=>'editFormBrand']) !!}
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    {!! Form::text('brand_name',$brand->brand_name,['class'=>'form-control']) !!}
                                    <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        {!! Form::label('publication_status','Publication Status',['class'=>'col-sm-4 col-md-4']) !!}
                                        <div class="col-sm-6">
                                            {!! Form::select('publication_status',[
                                                'select' => 'Select Option',
                                                '1' => 'Published',
                                                '0' => 'Unpublished'
                                                ],null,
                                                ['class'=>'form-control']);
                                            !!}
                                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    {!! Form::hidden('brand_id',$brand->id,['class'=>'form-control']) !!}
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('brand_description',$brand->brand_description,['class'=>'form-control','rows'=>'2']); !!}
                                <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    {{--  {!! Form::submit('Save Brand Info',['class'=>'btn btn-outline-danger btn-block font-weight-bolder']);!!}--}}
                                    <button type="submit" class="btn btn-outline-danger btn-user btn-block font-weight-bolder">
                                        <i class="fas fa-save" aria-hidden="true"></i> Update Brand Info
                                    </button>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            {!! Form::close() !!}
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editFormBrand'].elements['publication_status'].value='{!! $brand->publication_status !!}';
    </script>
@endsection
