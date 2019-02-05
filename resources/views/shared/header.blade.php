<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a style="background-color: #000;" href="{{Request::url()}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><i class="fa fa-user-secret"></i> </b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><i class="fa fa-user-secret"></i> LuCorner</span>
    </a>

    <!-- Header Navbar -->
    <nav style="background-color: #000;" class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <div class="nav navbar-nav navex">
                <div class="btn-group">
                    <!--<button  style="font-size: 17px;" class="btn btn-primary btn-social btn-flat" type="button">
                        <i class="fa fa-pagelines"></i>
                        @yield('page')
                    </button>
                    <button  style="font-size: 17px;" class="btn btn-warning btn-social btn-flat" type="button">
                        <i class="fa fa-calendar"></i>
                        <span id="dates_show">Saturday, January 01 2000</span>
                    </button>
                    <button  style="font-size: 17px;" class="btn btn-info btn-social btn-flat" type="button">
                        <i class="fa fa-clock-o"></i>
                        <span id="time_show">00:00:00 AM</span>
                    </button>-->
                    <a style="font-size: 17px;" title="Click Here For Page Refresh" href="{{Request::url()}}" class="btn btn-danger btn-flat" type="button">
                        <i class="fa fa-refresh fa-fw"></i>
                    </a>
                </div>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{url('admin')}}" ><i class="fa fa-user"></i> {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a></li>

                <li><a href="{{url('logout')}}" ><i class="fa fa-sign-out"></i> Logout</a></li>
                <!--<li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
            </ul>
        </div>
    </nav>
</header>