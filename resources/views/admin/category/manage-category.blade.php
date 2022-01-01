@extends('admin.layout')
@section('title')
    ManageCategory
@endsection
@section('body')
    <div class="content-wrapper dark-mode">
        <div class="container">
            <div class="text-center text-success">
                <marquee direction="right"><h1 class="text-primary font-weight-bolder">Welcome Back Manage Category </h1></marquee>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-danger text-bold">Manage Category
                        <a href="{!! route('add-category') !!}" class="btn btn-danger btn-sm float-right">
                            <i class="far fa-hand-point-left"> </i>Add Category</a>
                    </h4>
                </div>
                <div class="container-fluid">
                    @if($message   =   Session::get('message'))
                        <h1 class="text-center text-success" id="msg">{{ $message }}</h1>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped " id="example1" >
                                <thead>
                                <tr class="text-center text-uppercase text-info">
                                    <th>SL </th>
                                    <th>ID </th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($categories as $category)
                                    <tr class="text-center">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->category_description }}</td>
                                        <td>{{ $category->publication_status == 1 ? 'published' : 'Unpublished' }}</td>
                                        <td>
                                            @if($category->publication_status == 1)
                                                <a class="btn btn-info btn-sm" href="{!! route('unpublished-category', ['id'=>$category->id]) !!}" title="Published">
                                                    <span class=" fas fa-arrow-up fa-sm"></span>
                                                </a>
                                            @else
                                                <a class="btn btn-warning btn-sm" href="{!! route('published-category', ['id'=>$category->id]) !!}" title="UnPublished">
                                                    <span class=" fas fa-arrow-down fa-sm"></span>
                                                </a>
                                            @endif

                                            <a class="btn btn-success btn-sm" href="{!! route('edit-category', ['id'=>$category->id]) !!}" title="Edit">
                                                <span class=" fas fa-edit fa-sm"></span>
                                            </a>
                                            <a href="{!! route('delete-category',['id'=>$category->id]) !!}" onclick="return confirm('Are you sure to delete this ??')" class="btn btn-danger btn-sm" title="Delete">
                                                <span class=" fas fa-trash fa-sm"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <marquee direction="left"><h3 class="text-success font-weight-bolder">This Site Developed By MD. Sayed Arif. For contact 01634173029 </h3></marquee>
        </div>
    </div>
@endsection
