
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{!! asset('front-end/css/bootstrap.min.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('front-end/css/font-awesome.min.css') !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('front-end/css/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! asset('front-end/css/style.css') !!}">
    <link rel="stylesheet" href="{{ asset('front-end/css/responsive.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @include('front-end.includes.top-header')
 <!-- End site branding area -->
    @include('front-end.includes.header-menu')
    <!-- End mainmenu area -->

    @yield('body')
<!-- End product widget area -->

<div class="footer-top-area">
    @include('front-end.includes.footer')
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="{!! asset('front-end/js/jquery.min.js') !!}"></script>
<!-- Bootstrap JS form CDN -->
<script src="{!! asset('front-end/js/bootstrap.js') !!}"></script>

<!-- jQuery sticky menu -->
<script src="{!! asset('front-end/js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('/') !!}front-end/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<!-- Main Script -->
<!-- Slider -->
<script src="{!! asset('front-end/js/bxslider.min.js') !!}"></script>
<script  src="{!! asset('front-end/js/script.slider.js') !!}"></script>
</body>
</html>
