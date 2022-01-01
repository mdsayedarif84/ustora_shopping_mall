@extends('admin.layout')
@section('title')
    ManageBrand
@endsection
@section('body')
    <div class="content-wrapper dark-mode">
        <div class="container">
            <div class="text-center text-success">
                <marquee direction="right"><h1 class="text-primary font-weight-bolder">Welcome Back Manage Product </h1></marquee>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-danger text-weight-bolder">Manage Product
                        <a href="{!! route('add-product') !!}" class="btn btn-danger btn-sm float-right">
                            <i class="far fa-hand-point-left"> </i>Add Product</a>
                    </h4>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-striped" id="example1" >
                    @if($message   =   Session::get('message'))
                        <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                    @endif
                    <thead>
                    <tr class="text-center text-danger font-weight-bolder">
                        <th>ID </th>
                        <th>C.Name</th>
                        <th>B.Name </th>
                        <th>P.Name</th>
                        <th>P.Price</th>
                        <th>P.Quantity</th>
                        <th>Product Image</th>
                        <th>P-Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($products as $product)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->brand_name }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->product_quantity }}</td>
                            <td>
                                <img src="{{ asset($product->product_image) }}" alt="fs" style="height: 80px; width: 200px"/>
                            </td>
                            <td>{{ $product->publication_status == 1 ? 'published' : 'Unpublished' }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="" title="View Details">
                                    <span class=" fa fa-eye fa-sm"></span>
                                </a>
                                @if($product->publication_status == 1)
                                    <a href="{!! route('unpublished-product',['id'=>$product->id]) !!}" class="btn btn-info btn-sm"  title="Published">
                                        <span class=" fas fa-arrow-up fa-sm"></span>
                                    </a>
                                @else
                                    <a href="{!! route('published-product',['id'=>$product->id]) !!}"  class="btn btn-warning btn-sm" title="UnPublished">
                                        <span class=" fas fa-arrow-down fa-sm"></span>
                                    </a>
                                @endif
                                <a href="{!! route('edit-product',['id'=>$product->id]) !!}" class="btn btn-success btn-sm"  title="Edit">
                                    <span class=" fas fa-edit fa-sm"></span>
                                </a>
                                <a href="{!! route('delete-product',['id'=>$product->id]) !!}" onclick="return confirm('Are you sure to delete this Brand ??')" class="btn btn-danger btn-sm" title="Delete">
                                    <span class=" fas fa-trash fa-sm"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <marquee><h3 class="text-success font-weight-bolder">This Site Developed By MD.Sayed Arif. For contact*01634173029 </h3></marquee>
        </div>
    </div>
@endsection
