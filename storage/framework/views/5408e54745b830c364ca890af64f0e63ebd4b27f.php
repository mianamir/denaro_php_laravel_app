<?php $__env->startSection('content'); ?>

    <!-- LOGIN -->
    <section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">



                <!-- FORM -->
                <div class="col-lg-4 pull-right">
                    <div class="form-login">
                        <form method="post" action="<?php echo e(route('auth.register')); ?>">
                            <h2 class="text-uppercase">sign up</h2>
                            <div class="form-fullname">
                                <input name="name" class ="first-name"type="text" placeholder="First name" required>
                                <input name="lname" class="last-name" type="text" placeholder="Last name" required>

                                <?php echo e(csrf_field()); ?>

                            </div>

                            <div class="form-datebirth">
                                <input name="mobile" type="text" placeholder="Mobile Number" required>
                            </div>
                            <br/>
                            <div class="form-datebirth">
                                <select name="role" class="form-control" required>

                                    <option value="">
                                        Select Role
                                    </option >
                                    <option value="2">
                                        Student
                                    </option>

                                    <option value="1">
                                       Teacher
                                    </option>

                                </select>
                            </div>
                            <div class="form-email">
                                <input type="text" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-password">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>



                            <div class="form-submit-1">
                                <input type="submit" value="Become a member" class="mc-btn btn-style-1">
                            </div>
                            <div class="link">
                                <a href="<?php echo e(route('auth.login')); ?>">
                                    <i class="icon md-arrow-right"></i>Already have account ? Log in
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

<?php $__env->startSection('after-scripts-end'); ?>
    <?php if(config('access.captcha.registration')): ?>
        <?php echo Captcha::script(); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>