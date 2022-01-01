@extends('admin.layout')
@section('title')
    AddCategory
@endsection
@section('body')
    <div class="content-wrapper dark-mode">
        <div class="container">
            <marquee><h3 class="text-danger font-weight-bolder">Welcome Back Our Edit Category Page.</h3></marquee>
            <div class="card">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-danger text-bold"> Edit Category
                                <a href="{!! route('manage-category') !!}" class="btn btn-danger btn-sm float-right">
                                    <i class="far fa-hand-point-right"> </i>Manage Category</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form class="user" action="{!! route('update-category') !!}" method="POST" id="editCategoryForm">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="category_name" class="form-control form-control-user"  value="{!! $category->category_name !!}"
                                               placeholder="Category Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-md-4">Publication Status</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="publication_status">
                                                    <option value="1">Published</option>
                                                    <option value="0">Unpublished</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <input type="hidden" name="category_id" class="form-control form-control-user" value="{!! $category->id !!}">
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="category_description" class="form-control form-control-user"
                                              placeholder="Category Description">{!! $category->category_description !!}</textarea>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-outline-danger btn-user btn-block font-weight-bolder">
                                            <i class="fas fa-save" aria-hidden="true"></i> Update Category Info
                                        </button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editCategoryForm'].elements['publication_status'].value = '{!! $category->publication_status !!}';
    </script>
@endsection
