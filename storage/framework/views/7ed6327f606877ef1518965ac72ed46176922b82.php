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




            <?php if (access()->allow('view-backend')): ?>


            <li class="" style="background-color: #3c8dbc;">
                <a href="#" style="color: #fff !important;">Website Management</a>
            </li>
            <li class="">
                <a href="<?php echo e(url('/')); ?>" target="_blank">View Site</a>
            </li>
            <li class="<?php echo e(Active::pattern('admin/headers/*')); ?>">
                <?php echo e(link_to_route('admin.headers.index', 'Header Management')); ?>

            </li>
            <!-- Optionally, you can add icons to the links -->
            <?php /*<li class="<?php echo e(Active::pattern('admin/dashboard')); ?>">*/ ?>
            <?php /*<?php echo e(link_to_route('admin.dashboard', trans('menus.backend.sidebar.dashboard'))); ?>*/ ?>
            <?php /*</li>*/ ?>
            <li class="<?php echo e(Active::pattern('admin/banner/*')); ?>">
            <?php echo e(link_to_route('admin.banners.index', 'Banners Management')); ?>

            </li>

            <li class="<?php echo e(Active::pattern('admin/pages/*')); ?>">
                <?php echo e(link_to_route('admin.pages.index', 'Pages Management')); ?>

            </li>
            <li class="<?php echo e(Active::pattern('admin/categories/*')); ?>">
                <?php echo e(link_to_route('admin.categories.index', 'Project Category Management')); ?>

            </li>
            <?php /*<li class="<?php echo e(Active::pattern('admin/categories/*')); ?>">*/ ?>
            <?php /*<?php echo e(link_to_route('admin.categories.index', "Category")); ?>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="<?php echo e(Active::pattern('admin/cars/*')); ?>">*/ ?>
            <?php /*<?php echo e(link_to_route('admin.cars.index', 'Car')); ?>*/ ?>
            <?php /*</li>*/ ?>
<?php /*            <li class="<?php echo e(Active::pattern('admin/contacts/*')); ?>">*/ ?>
<?php /*            <?php echo e(link_to_route('admin.contacts.index', 'Business')); ?>*/ ?>
<?php /*            </li>*/ ?>
            <li class="class="<?php echo e(Active::pattern('admin/contacts/*')); ?>">
            <a href="<?php echo e(route('admin.contacts.index')); ?>">Contact Management</a>
            </li>
            <?php /*<li class="">*/ ?>
                <?php /*<a href="<?php echo e(route('admin.clientReviews.index')); ?>">Client Reviews</a>*/ ?>
            <?php /*</li>*/ ?>


            <?php /*<li class="<?php echo e(Active::pattern('admin/clientReviews/*')); ?>">*/ ?>
            <?php /*<?php echo e(link_to_route('admin.clientReviews.index', 'Client Review')); ?>*/ ?>
            <?php /*</li>*/ ?>


            <?php /*<li class="<?php echo e(Active::pattern('admin/homeGalleries/*')); ?>">*/ ?>
                <?php /*<?php echo e(link_to_route('admin.homeGalleries.index', 'Image Gallery Category')); ?>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="<?php echo e(Active::pattern('admin/galleries/*')); ?>">*/ ?>
                <?php /*<?php echo e(link_to_route('admin.galleries.index', 'Image Gallery')); ?>*/ ?>
            <?php /*</li>*/ ?>
<?php /*            <li class="<?php echo e(Active::pattern('admin/authors/*')); ?>">*/ ?>
<?php /*                <?php echo e(link_to_route('admin.authors.index', 'Authors For Vid Gallery')); ?>*/ ?>
<?php /*            </li>*/ ?>
        <!--            <li class="<?php echo e(Active::pattern('admin/downloads/*')); ?>">
                <?php echo e(link_to_route('admin.downloads.index', "Downloads")); ?>

                </li>-->
        <!--            <li class="<?php echo e(Active::pattern('admin/certifications/*')); ?>">
                <?php echo e(link_to_route('admin.certifications.index', "Certifications")); ?>

                </li>-->
            <li class="<?php echo e(Active::pattern('admin/news/*')); ?>">
            <?php echo e(link_to_route('admin.news.index', 'News Management')); ?>

            <?php /*</li>*/ ?>
            <?php /*<li class="<?php echo e(Active::pattern('admin/cEOS/*')); ?>">*/ ?>
            <?php /*<?php echo e(link_to_route('admin.cEOS.index', 'CEO Message')); ?>*/ ?>
            <?php /*</li>*/ ?>
            <li class="<?php echo e(Active::pattern('admin/socialIcons/*')); ?>">
            <?php echo e(link_to_route('admin.socialIcons.index', 'Social Icons Management')); ?>

            </li>
            <?php /*<li class="<?php echo e(Active::pattern('admin/headers/*')); ?>">*/ ?>
            <?php /*<?php echo e(link_to_route('admin.headers.index.rate', 'Dollar Rate')); ?>*/ ?>
            <?php /*</li>*/ ?>
            <li class="<?php echo e(Active::pattern('admin/clients/*')); ?>">
            <?php echo e(link_to_route('admin.clients.index', 'Partners/Clients Management')); ?>

            </li>

<?php /*            <li class="<?php echo e(Active::pattern('admin/customers/*')); ?>">*/ ?>
<?php /*                <?php echo e(link_to_route('admin.customers.index', 'Video Management')); ?>*/ ?>
<?php /*            </li>*/ ?>
            <li class="<?php echo e(Active::pattern('admin/brandTypes/*')); ?>">
                <?php echo e(link_to_route('admin.brandTypes.index', 'Image Gallery Category Management')); ?>

            </li>
            <li class="<?php echo e(Active::pattern('admin/brands/*')); ?>">
                <?php echo e(link_to_route('admin.brands.index', 'Image Gallery Management')); ?>

            </li>
            <li class="<?php echo e(Active::pattern('admin.galleries/*')); ?>">
                <?php echo e(link_to_route('admin.galleries.index', 'Video Gallery Management')); ?>

            </li>
            <li class="<?php echo e(Active::pattern('admin/email/setting/*')); ?>">
                <?php echo e(link_to_route('admin.email.setting', 'Setting Management')); ?>

            </li>





            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-align-justify"></i>*/ ?>
            <?php /*<span>Car Features</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.carModels.index')); ?>"><i class="fa fa-circle-o"></i>Model</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.carIntColors.index')); ?>"><i class="fa fa-circle-o"></i>Int Color</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.carExtColors.index')); ?>"><i class="fa fa-circle-o"></i>Ext Color</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.carTransmissions.index')); ?>"><i class="fa fa-circle-o"></i>Transmission</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.carDoors.index')); ?>"><i class="fa fa-circle-o"></i>Door</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.carSeats.index')); ?>"><i class="fa fa-circle-o"></i>Seat</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.carFuelTypes.index')); ?>"><i class="fa fa-circle-o"></i>Fuel Type</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.carFeatures.index')); ?>"><i class="fa fa-circle-o"></i>Feature</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>


            <?php /*<li class="<?php echo e(Active::pattern('admin/services/*')); ?>">*/ ?>
            <?php /*<?php echo e(link_to_route('admin.services.index', 'Services')); ?>*/ ?>
            <?php /*</li>*/ ?>

            <?php /*<li class="<?php echo e(Active::pattern('admin/galleries/*')); ?>">*/ ?>
            <?php /*<?php echo e(link_to_route('admin.galleries.index', "Galleries")); ?>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="" style="background-color: #3c8dbc;">*/ ?>
            <?php /*<a href="#" style="color: #fff !important;">Database Management</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-user"></i>*/ ?>
            <?php /*<span>Supplier Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.suppiers.index')); ?>"><i class="fa fa-circle-o"></i>All Suppliers</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-align-justify"></i>*/ ?>
            <?php /*<span>Category Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.categories.index')); ?>"><i class="fa fa-circle-o"></i>All Categories</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-book"></i>*/ ?>
            <?php /*<span>Inventory Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.products.index')); ?>"><i class="fa fa-circle-o"></i>All Inventories</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-book"></i>*/ ?>
            <?php /*<span>Purchase Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.purchases.index')); ?>"><i class="fa fa-circle-o"></i>All Purchases</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-user"></i>*/ ?>
            <?php /*<span>Customer Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.customers.index')); ?>"><i class="fa fa-circle-o"></i>All Customers</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-book"></i>*/ ?>
            <?php /*<span>Sale Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.sales.index')); ?>"><i class="fa fa-circle-o"></i>All Sales</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-user"></i>*/ ?>
            <?php /*<span>Employee Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.employees.index')); ?>"><i class="fa fa-circle-o"></i>All Employees</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-book"></i>*/ ?>
            <?php /*<span>Pay Roll Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.payRolls.index')); ?>"><i class="fa fa-circle-o"></i>All Pay Rolls</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-book"></i>*/ ?>
            <?php /*<span>Expense Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.expenses.index')); ?>"><i class="fa fa-circle-o"></i>All Expenses</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>

            <?php /*<li class="treeview">*/ ?>

            <?php /*<a href="#">*/ ?>
            <?php /*<i class="fa fa-bar-chart"></i>*/ ?>
            <?php /*<span>Reports Management</span>*/ ?>
            <?php /*<span class="pull-right-container">*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu">*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.suppiers.index')); ?>"><i class="fa fa-circle-o"></i>Inventory Report</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.suppiers.index')); ?>"><i class="fa fa-circle-o"></i>Purchase Report</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.suppiers.index')); ?>"><i class="fa fa-circle-o"></i>Sale Report</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.suppiers.index')); ?>"><i class="fa fa-circle-o"></i>Supplier Report</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.suppiers.index')); ?>"><i class="fa fa-circle-o"></i>Customer Report</a></li>*/ ?>
            <?php /*<li><a href="<?php echo e(route('admin.suppiers.index')); ?>"><i class="fa fa-circle-o"></i>Employee Report</a></li>*/ ?>

            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>


            <?php endif; ?>


            <?php /*<li class="<?php echo e(Active::pattern('admin/log-viewer*')); ?> ">*/ ?>
            <?php /*<a href="#">*/ ?>
            <?php /*<span><?php echo e(trans('menus.backend.log-viewer.main')); ?></span>*/ ?>
            <?php /*<i class="fa fa-angle-left pull-right"></i>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*<ul class="treeview-menu <?php echo e(Active::pattern('admin/log-viewer*', 'menu-open')); ?>"*/ ?>
            <?php /*style="display: block; <?php echo e(Active::pattern('admin/log-viewer*', 'display: block;')); ?>">*/ ?>
            <?php /*<li class="<?php echo e(Active::pattern('admin/log-viewer')); ?>">*/ ?>
            <?php /*<?php echo e(link_to('admin/log-viewer', trans('menus.backend.log-viewer.dashboard'))); ?>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="<?php echo e(Active::pattern('admin/log-viewer/logs')); ?>">*/ ?>
            <?php /*<?php echo e(link_to('admin/log-viewer/logs', trans('menus.backend.log-viewer.logs'))); ?>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*</ul>*/ ?>
            <?php /*</li>*/ ?>


        </ul>
    </section>

</aside>