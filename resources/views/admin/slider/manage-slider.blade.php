@extends('admin.layout')
@section('title')
    ManageSlider
@endsection
@section('body')
    <div class="content-wrapper dark-mode">
        <div class="container">
            <div class="text-center text-success">
                <marquee direction="right"><h1 class="text-primary font-weight-bolder">Welcome Back Manage Slider </h1></marquee>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-danger text-weight-bolder">Manage Slider
                        <a href="{!! route('add-slider') !!}" class="btn btn-danger btn-sm float-right">
                            <i class="far fa-hand-point-left"> </i>Add Slider</a>
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
                        <th>SL </th>
                        <th>ID </th>
                        <th>Headding</th>
                        <th>Description </th>
                        <th>Link</th>
                        <th>Slider Image</th>
                        <th>Link Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach( $sliderImages as $sliderImage)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{{ $sliderImage->id }}</td>
                            <td>{{ $sliderImage->heading }}</td>
                            <td>{{ $sliderImage->description }}</td>
                            <td>{{ $sliderImage->link }}</td>
                            <td>
                                <img src="{{ asset($sliderImage->image) }}" alt="fs" style="height: 50px; width: 100px"/>
                            </td>
                            <td>{{ $sliderImage->link_name }}</td>
                            <td>{{ $sliderImage->status == 1 ? 'published' : 'Unpublished' }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="" title="View Details">
                                    <span class=" fa fa-eye fa-sm"></span>
                                </a>
                                @if($sliderImage->status == 1)
                                    <a href="{{ route('inactive-slider',['id'=>$sliderImage->id]) }}" class="btn btn-info btn-sm"  title="Published">
                                        <span class=" fas fa-arrow-up fa-sm"></span>
                                    </a>
                                @else
                                    <a href="{{ route('active-slider',['id'=>$sliderImage->id]) }}"  class="btn btn-warning btn-sm" title="UnPublished">
                                        <span class=" fas fa-arrow-down fa-sm"></span>
                                    </a>
                                @endif
                                <a href="{{ route('edit-slider',['id'=>$sliderImage->id]) }}" class="btn btn-success btn-sm"  title="Edit">
                                    <span class=" fas fa-edit fa-sm"></span>
                                </a>
                                <a href="" onclick="return confirm('Are you sure to delete this Brand ??')" class="btn btn-danger btn-sm" title="Delete">
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
