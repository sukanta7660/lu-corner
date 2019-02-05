@extends('layouts.app')

@section('content')
    <body style="background: #1e293e;" class="hold-transition login-page">


    <div class="login-box">
        <div class="login-logo">
            <a class="text-white" href="{{url('/login')}}"><b>Log</b> in</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Login &amp; Get all of access.</p>
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">

            </div><!-- /.social-auth-links -->

        <!--<a href="{{ route('password.request') }}">I forgot my password</a><br>-->
            <a href="{{ route('register') }}" class="text-center">Register as a new member.</a>

        </div><!-- /.login-box-body -->
    </div>



    <!-- Scripts -->
    <script src="{{asset('public/plugins/jQuery/jquery-3.2.1.min.js')}}"></script>

    <script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('public/plugins/iCheck/icheck.min.js')}}"></script>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

    </body>

@endsection
