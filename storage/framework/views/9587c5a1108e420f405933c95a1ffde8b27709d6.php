<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                <span class="sr-only"><?php echo e(trans('labels.general.toggle_navigation')); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <?php echo e(link_to_route('frontend.index', app_name(), [], ['class' => 'navbar-brand'])); ?>

        </div><!--navbar-header-->

        <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><?php echo e(link_to_route('frontend.index', trans('navs.general.home'))); ?></li>
                <li><?php echo e(link_to_route('frontend.macros', trans('navs.frontend.macros'))); ?></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if(config('locale.status') && count(config('locale.languages')) > 1): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(trans('menus.language-picker.language')); ?>

                            <span class="caret"></span>
                        </a>

                        <?php echo $__env->make('includes.partials.lang', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </li>
                <?php endif; ?>

                <?php if(access()->guest()): ?>
                    <li><?php echo e(link_to('login', trans('navs.frontend.login'))); ?></li>
                    <li><?php echo e(link_to('register', trans('navs.frontend.register'))); ?></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(access()->user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><?php echo e(link_to_route('frontend.user.dashboard', trans('navs.frontend.dashboard'))); ?></li>

                            <?php if(access()->user()->canChangePassword()): ?>
                                <li><?php echo e(link_to_route('auth.password.change', trans('navs.frontend.user.change_password'))); ?></li>
                            <?php endif; ?>

                            <?php if (access()->allow('view-backend')): ?>
                            <li><?php echo e(link_to_route('admin.dashboard', trans('navs.frontend.user.administration'))); ?></li>
                            <?php endif; ?>

                            <li><?php echo e(link_to_route('auth.logout', trans('navs.general.logout'))); ?></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div><!--navbar-collapse-->
    </div><!--container-->
</nav>