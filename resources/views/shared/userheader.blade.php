<!-- Header Starts -->
<header id="header" class="header-fixed">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <h3>Lu-Corner</h3>
                </div><!-- logo ends -->
            </div><!-- logo columns end -->
            <div class="col-md-9">
                <nav>
                    <ul id="menu">
                        <li>
                            <a href="{{action('User\UserHomeController@index')}}">home</a>
                        </li>
                        <li>
                            <a href="{{action('User\ProductController@index')}}">categories</a>
                        </li>
                        <li>
                            <a href="{{action('User\BlogController@index')}}">Blogs</a>
                        </li>
                        @if(isset(Auth::user()->email))
                        <li>
                            <a href="{{action('User\UserProfileController@index')}}">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{url('logout')}}">Log Out</a>
                        </li>
                            @else
                                <li>
                                    <a href="{{route('login')}}">login</a>
                                </li>
                        @endif
                    </ul>
                </nav><!-- nav ends -->
            </div><!-- nav columns end -->
        </div><!-- row ends -->
    </div><!-- container ends -->
</header><!-- Header Ends -->