<!-- Left side column. contains the logo and sidebar -->
<aside style="background-color: #111;" class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class=""><a href="{{action('MainController@index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="navigation-divider"></li>

            <li class="treeview {{ (Request::is('product/*', 'product') ? 'active' : '') }}"><a href="#"><i class="fa fa-cubes"></i> <span> Product</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{{ (Request::is('product/lists') ? 'active' : '') }}"><a href="{{action('Product\ProductController@index')}}"><i class="fa fa-circle-o"></i> All Products</a></li>
                    <li class="{{ (Request::is('procat/lists') ? 'active' : '') }}"><a href="{{action('Product\ProductCategoryController@index')}}"><i class="fa fa-circle-o"></i> Product Category</a></li>
                </ul>
            </li>

            <li class="navigation-divider"></li>

            <li class="treeview"><a href="#"><i class="fa fa-book"></i> <span> Blog</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{action('Blog\BlogController@index')}}"><i class="fa fa-circle-o"></i> Blog Posts</a></li>
                    <li class="{{ (Request::is('blogcat/lists') ? 'active' : '') }}"><a href="{{action('Blog\BlogCategoryController@index')}}"><i class="fa fa-circle-o"></i> Blog Category</a></li>
                </ul>
            </li>
            <li class="navigation-divider"></li>

            <li class=""><a href=""><i class="fa fa-comment"></i> <span> Comments</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Product Comments</a></li>
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Blog Comments</a></li>
                </ul>
            </li>
            <li class="navigation-divider"></li>
            <li class=""><a href="{{action('Department\DepartmentController@index')}}"><i class="fa fa-bank"></i> <span>Departments</span></a></li>

            <li class="navigation-divider"></li>

            <li class=""><a href="#"><i class="fa fa-line-chart"></i> <span>Reports</span></a></li>
            <li class=""><a href="#"><i class="fa fa-user"></i> <span>User List</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>