<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Lu Corner</title>


    <link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/dist/css/AdminLTE.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/plugins/iCheck/square/blue.css')}}">
    <link rel="stylesheet" href="{{asset('public/style.css')}}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>



    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

</head>

@yield('content')

<body>
<nav class="navbar navbar-default navbar-fixed-bottom navbar-inverse">
    <div class="container">
        <p class="navbar-text navbar-left"><strong>Copyright &copy; {{date('Y')}} <a href="#">LuCorner</a>.</strong> All rights reserved.</p>
        <p class="navbar-text navbar-right"><strong>Help Line:</strong> +880xxxx XXXXXX</p>
    </div>
</nav>
</body>

</html>
