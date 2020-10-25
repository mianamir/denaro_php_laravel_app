<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <?php
    //                    if(\Auth::check()){
    //
    //                    $id = \Auth::id();
    //
    //                    $role = \DB::table('role_user')
    //                            ->where('user_id', $id)->first();
    //
    //                    $userRole = \DB::table('roles')
    //                            ->where('id', $role->role_id)->first();
    //
    //                    $name = \Auth::user()->name;
    //
    //                    $image = \Auth::user()->file;
    //
    //                    }

    ?>
    <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
             <div class="input-group">
                 <input type="text" name="q" class="form-control" placeholder="Search...">
                 <span class="input-group-btn">
                     <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                     </button>
                   </span>
             </div>
         </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <!-- <li class="header">All Modules</li>-->
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>

            </li>




            @permission('view-backend')


            <li class="" style="background-color: #3c8dbc;">
                <a href="#" style="color: #fff !important;">Website Management</a>
            </li>
            <li class="">
                <a href="{{url('/')}}" target="_blank">View Site</a>
            </li>
            <li class="{{ Active::pattern('admin/headers/*') }}">
                {{ link_to_route('admin.headers.index', 'Header Management') }}
            </li>
            <!-- Optionally, you can add icons to the links -->
            {{--<li class="{{ Active::pattern('admin/dashboard') }}">--}}
            {{--{{ link_to_route('admin.dashboard', trans('menus.backend.sidebar.dashboard')) }}--}}
            {{--</li>--}}
            <li class="{{ Active::pattern('admin/banner/*') }}">
            {{ link_to_route('admin.banners.index', 'Banners Management') }}
            </li>

            <li class="{{ Active::pattern('admin/pages/*') }}">
                {{ link_to_route('admin.pages.index', 'Pages Management') }}
            </li>
            <li class="{{ Active::pattern('admin/categories/*') }}">
                {{ link_to_route('admin.categories.index', 'Project Category Management') }}
            </li>
            {{--<li class="{{ Active::pattern('admin/categories/*') }}">--}}
            {{--{{ link_to_route('admin.categories.index', "Category") }}--}}
            {{--</li>--}}
            {{--<li class="{{ Active::pattern('admin/cars/*') }}">--}}
            {{--{{ link_to_route('admin.cars.index', 'Car') }}--}}
            {{--</li>--}}
{{--            <li class="{{ Active::pattern('admin/contacts/*') }}">--}}
{{--            {{ link_to_route('admin.contacts.index', 'Business') }}--}}
{{--            </li>--}}
            <li class="class="{{ Active::pattern('admin/contacts/*') }}">
            <a href="{{route('admin.contacts.index')}}">Contact Management</a>
            </li>
            {{--<li class="">--}}
                {{--<a href="{{route('admin.clientReviews.index')}}">Client Reviews</a>--}}
            {{--</li>--}}


            {{--<li class="{{ Active::pattern('admin/clientReviews/*') }}">--}}
            {{--{{ link_to_route('admin.clientReviews.index', 'Client Review') }}--}}
            {{--</li>--}}


            {{--<li class="{{ Active::pattern('admin/homeGalleries/*') }}">--}}
                {{--{{ link_to_route('admin.homeGalleries.index', 'Image Gallery Category') }}--}}
            {{--</li>--}}
            {{--<li class="{{ Active::pattern('admin/galleries/*') }}">--}}
                {{--{{ link_to_route('admin.galleries.index', 'Image Gallery') }}--}}
            {{--</li>--}}
{{--            <li class="{{ Active::pattern('admin/authors/*') }}">--}}
{{--                {{ link_to_route('admin.authors.index', 'Authors For Vid Gallery') }}--}}
{{--            </li>--}}
        <!--            <li class="{{ Active::pattern('admin/downloads/*') }}">
                {{ link_to_route('admin.downloads.index', "Downloads") }}
                </li>-->
        <!--            <li class="{{ Active::pattern('admin/certifications/*') }}">
                {{ link_to_route('admin.certifications.index', "Certifications") }}
                </li>-->
            <li class="{{ Active::pattern('admin/news/*') }}">
            {{ link_to_route('admin.news.index', 'News Management') }}
            {{--</li>--}}
            {{--<li class="{{ Active::pattern('admin/cEOS/*') }}">--}}
            {{--{{ link_to_route('admin.cEOS.index', 'CEO Message') }}--}}
            {{--</li>--}}
            <li class="{{ Active::pattern('admin/socialIcons/*') }}">
            {{ link_to_route('admin.socialIcons.index', 'Social Icons Management') }}
            </li>
            {{--<li class="{{ Active::pattern('admin/headers/*') }}">--}}
            {{--{{ link_to_route('admin.headers.index.rate', 'Dollar Rate') }}--}}
            {{--</li>--}}
            <li class="{{ Active::pattern('admin/clients/*') }}">
            {{ link_to_route('admin.clients.index', 'Partners/Clients Management') }}
            </li>

{{--            <li class="{{ Active::pattern('admin/customers/*') }}">--}}
{{--                {{ link_to_route('admin.customers.index', 'Video Management') }}--}}
{{--            </li>--}}
            <li class="{{ Active::pattern('admin/brandTypes/*') }}">
                {{ link_to_route('admin.brandTypes.index', 'Image Gallery Category Management') }}
            </li>
            <li class="{{ Active::pattern('admin/brands/*') }}">
                {{ link_to_route('admin.brands.index', 'Image Gallery Management') }}
            </li>
            <li class="{{ Active::pattern('admin.galleries/*') }}">
                {{ link_to_route('admin.galleries.index', 'Video Gallery Management') }}
            </li>
            <li class="{{ Active::pattern('admin/email/setting/*') }}">
                {{ link_to_route('admin.email.setting', 'Setting Management') }}
            </li>





            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-align-justify"></i>--}}
            {{--<span>Car Features</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.carModels.index')}}"><i class="fa fa-circle-o"></i>Model</a></li>--}}
            {{--<li><a href="{{route('admin.carIntColors.index')}}"><i class="fa fa-circle-o"></i>Int Color</a></li>--}}
            {{--<li><a href="{{route('admin.carExtColors.index')}}"><i class="fa fa-circle-o"></i>Ext Color</a></li>--}}
            {{--<li><a href="{{route('admin.carTransmissions.index')}}"><i class="fa fa-circle-o"></i>Transmission</a></li>--}}
            {{--<li><a href="{{route('admin.carDoors.index')}}"><i class="fa fa-circle-o"></i>Door</a></li>--}}
            {{--<li><a href="{{route('admin.carSeats.index')}}"><i class="fa fa-circle-o"></i>Seat</a></li>--}}
            {{--<li><a href="{{route('admin.carFuelTypes.index')}}"><i class="fa fa-circle-o"></i>Fuel Type</a></li>--}}
            {{--<li><a href="{{route('admin.carFeatures.index')}}"><i class="fa fa-circle-o"></i>Feature</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}


            {{--<li class="{{ Active::pattern('admin/services/*') }}">--}}
            {{--{{ link_to_route('admin.services.index', 'Services') }}--}}
            {{--</li>--}}

            {{--<li class="{{ Active::pattern('admin/galleries/*') }}">--}}
            {{--{{ link_to_route('admin.galleries.index', "Galleries") }}--}}
            {{--</li>--}}
            {{--<li class="" style="background-color: #3c8dbc;">--}}
            {{--<a href="#" style="color: #fff !important;">Database Management</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-user"></i>--}}
            {{--<span>Supplier Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.suppiers.index')}}"><i class="fa fa-circle-o"></i>All Suppliers</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-align-justify"></i>--}}
            {{--<span>Category Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.categories.index')}}"><i class="fa fa-circle-o"></i>All Categories</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-book"></i>--}}
            {{--<span>Inventory Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.products.index')}}"><i class="fa fa-circle-o"></i>All Inventories</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-book"></i>--}}
            {{--<span>Purchase Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.purchases.index')}}"><i class="fa fa-circle-o"></i>All Purchases</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-user"></i>--}}
            {{--<span>Customer Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.customers.index')}}"><i class="fa fa-circle-o"></i>All Customers</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-book"></i>--}}
            {{--<span>Sale Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.sales.index')}}"><i class="fa fa-circle-o"></i>All Sales</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-user"></i>--}}
            {{--<span>Employee Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.employees.index')}}"><i class="fa fa-circle-o"></i>All Employees</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-book"></i>--}}
            {{--<span>Pay Roll Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.payRolls.index')}}"><i class="fa fa-circle-o"></i>All Pay Rolls</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-book"></i>--}}
            {{--<span>Expense Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.expenses.index')}}"><i class="fa fa-circle-o"></i>All Expenses</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}

            {{--<li class="treeview">--}}

            {{--<a href="#">--}}
            {{--<i class="fa fa-bar-chart"></i>--}}
            {{--<span>Reports Management</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="{{route('admin.suppiers.index')}}"><i class="fa fa-circle-o"></i>Inventory Report</a></li>--}}
            {{--<li><a href="{{route('admin.suppiers.index')}}"><i class="fa fa-circle-o"></i>Purchase Report</a></li>--}}
            {{--<li><a href="{{route('admin.suppiers.index')}}"><i class="fa fa-circle-o"></i>Sale Report</a></li>--}}
            {{--<li><a href="{{route('admin.suppiers.index')}}"><i class="fa fa-circle-o"></i>Supplier Report</a></li>--}}
            {{--<li><a href="{{route('admin.suppiers.index')}}"><i class="fa fa-circle-o"></i>Customer Report</a></li>--}}
            {{--<li><a href="{{route('admin.suppiers.index')}}"><i class="fa fa-circle-o"></i>Employee Report</a></li>--}}

            {{--</ul>--}}
            {{--</li>--}}


            @endauth


            {{--<li class="{{ Active::pattern('admin/log-viewer*') }} ">--}}
            {{--<a href="#">--}}
            {{--<span>{{ trans('menus.backend.log-viewer.main') }}</span>--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}"--}}
            {{--style="display: block; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">--}}
            {{--<li class="{{ Active::pattern('admin/log-viewer') }}">--}}
            {{--{{ link_to('admin/log-viewer', trans('menus.backend.log-viewer.dashboard')) }}--}}
            {{--</li>--}}
            {{--<li class="{{ Active::pattern('admin/log-viewer/logs') }}">--}}
            {{--{{ link_to('admin/log-viewer/logs', trans('menus.backend.log-viewer.logs')) }}--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}


        </ul>
    </section>

</aside>