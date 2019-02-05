<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Lu Corner</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('public/userassets/images/logo/favicon.png')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/userassets/css/all.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/userassets/css/magnific-popup.css')}}" media="all"/>
    <link rel="stylesheet" href="{{asset('public/userassets/css/owl.carousel.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('public/userassets/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/userassets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/userassets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/userassets/css/style.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('public/userassets/css/responsive.css')}}"/>
</head>
<body>
<!-- Start Header Menu Area -->
@include('shared.userheader')
<!-- End Header Menu Area -->

<!--Content area -->
<div class="content">

@yield('content')

<!-- Basic modal -->
@yield('box')
<!-- /basic modal -->

    <!-- Footer -->
@include('shared.userfooter')
<!-- /footer -->
</div>
<!-- /Content area -->
<!-- Jquery -->
<script src="{{asset('public/userassets/js/jquery.min.js')}}"></script>
<!-- others js start -->
<script src="{{asset('public/userassets/js/jquery.magnificpopup.min.js')}}"></script>
<script src="{{asset('public/userassets/js/waypoint.min.js')}}"></script>
<script src="{{asset('public/userassets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/userassets/js/jquery.nav.js')}}"></script>
<script src="{{asset('public/userassets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/userassets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('public/userassets/js/counterup.min.js')}}"></script>
<script src="{{asset('public/userassets/js/wow.min.js')}}"></script>
<!-- Main js -->
@yield('script')
<script src="{{asset('public/userassets/js/main.js')}}"></script>
</body>
</html>