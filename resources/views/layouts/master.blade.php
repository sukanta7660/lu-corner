<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">

  <link rel="stylesheet" href="{{asset('public/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('public/dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{asset('public/dist/css/skins/all-skins.min.css')}}">

  <link rel="stylesheet" href="{{asset('public/plugins/datatables/dataTables.bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('public/plugins/iCheck/square/blue.css')}}">

  <link rel="stylesheet" href="{{asset('public/custom.css')}}">

  @yield('style')

  <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

@include('shared.header')
@include('shared.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="row btn_mod">
        <div class="col-md-4">@yield('upper')</div>
        <div class="col-md-6">@yield('msg')</div>
        <div class="col-md-2 text-right">@yield('upper2')</div>
      </div>

      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="row">
    <div class="col-md-12">@yield('box')</div>
  </div>


@include('shared.footer')
@include('shared.csidebar')

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="{{asset('public/plugins/jQuery/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/plugins/daterangepicker/moment.min.js')}}"></script>

<script src="{{asset('public/plugins/iCheck/icheck.min.js')}}"></script>

<script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('public/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

<script src="{{asset('public/plugins/fastclick/fastclick.min.js')}}"></script>

<script src="{{asset('public/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('public/dist/js/app.min.js')}}"></script>

@yield('script')

<script src="{{asset('public/custom.js')}}"></script>



</body>
</html>
