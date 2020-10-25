<header class="main-header">

<a href="<?php echo e(url('/')); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><?php echo e(app_name()); ?> </span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><?php echo e(app_name()); ?> </span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="user-image" alt="User Image">

                    <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="img-circle" alt="User Avatar"/>

                        <p>
                            <?php echo e(access()->user()->name); ?>

                            - <?php echo e(implode(", ", access()->user()->roles->lists('name')->toArray())); ?>

<?php /*                            <small><?php echo e(trans('strings.backend.general.member_since')); ?> <?php echo e(access()->user()->created_at->format("m/d/Y")); ?></small>*/ ?>
                        </p>
                    </li>
                   
                   <!-- <li class="user-body">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                        
                    </li>-->
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <?php echo e(link_to_route('frontend.index', trans('navs.general.home'), [], ['class' => 'btn btn-default btn-flat'])); ?>

                        </div>
                        <div class="pull-right">
                            <?php echo e(link_to_route('frontend.new.logout', trans('navs.general.logout'), [], ['class' => 'btn btn-default btn-flat'])); ?>

                        </div>
                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
    </div>
</nav>
</header>