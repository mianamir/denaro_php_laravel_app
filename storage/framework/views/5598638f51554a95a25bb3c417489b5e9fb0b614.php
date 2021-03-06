

<?php $__env->startSection('content'); ?>
    <!-- LOGIN -->
    <section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- FORM -->
                <div class="col-xs-12 col-lg-4 pull-right">
                    <div class="form-login">
                        <form action="<?php echo e(route('post.teacher.login')); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                                    <strong>Error!</strong> please provide below form fields.<br><br>
                                    <ul>
                                        <?php foreach($errors->all() as $error): ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>


                            <h2 class="text-uppercase">Sign in</h2>
                            <hr>
                            <?php if(Session::has('not_found_inactive_flash_message')): ?>
                                <div class="alert alert-warning">
                                    <?php echo e(Session::get('not_found_inactive_flash_message')); ?>

                                </div>
                            <?php endif; ?>


                            <?php if(Session::has('username')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(Session::get('username')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Session::has('password')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(Session::get('password')); ?>

                                </div>
                            <?php endif; ?>



                            <div class="form-email">
                                <input type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-password">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="check">
                                <label for="check">
                                    <i class="icon md-check-2"></i>
                                    Remember me</label>
                                <a href="#">Forget password?</a>
                            </div>
                            <div class="form-submit-1">
                                <input type="submit" value="Sign In" class="mc-btn btn-style-1">
                            </div>
                            <div class="link">
                                <a href="<?php echo e(route('become.teacher.step1')); ?>">
                                    <i class="icon md-arrow-right"></i>Don’t have account yet ? Join Us
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END / FORM -->

                <div class="image">
                    <img src="images/homeslider/img-thumb.png" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- END / LOGIN -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>