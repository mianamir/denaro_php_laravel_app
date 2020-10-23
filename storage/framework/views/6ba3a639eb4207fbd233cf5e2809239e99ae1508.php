<?php $__env->startSection('content'); ?>


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">
        <div class="awe-parallax bg-featured-request-teacher"></div>
        <div class="awe-overlay overlay-color-1"></div>
        <div class="container">
            <div class="row">
                <h1 class="big">To activate your account?</h1>

                <div class="row">
                    <!-- FEATURED ITEM -->
                    <div class="col-md-6">
                        <div class="featured-item">
                            <i class=""></i>
                            <h4 class="title-box text-uppercase">Your Teaching Account Details</h4>
                            <p><label>Name:</label> <?php echo $teacher->name; ?> (Code: <?php echo $teacher->teacher_code; ?>)</p>
                            <p><label>Username:</label>  <?php echo $teacher->username; ?></p>
                            <p><label>Password:</label>  <?php echo $teacher->password2; ?></p>
                            <p><label>Status:</label>  <?php echo $teacher->status; ?></p>
                            <?php if($teacher->payment_plan_id != null): ?>
                                <p><label>Payment Plan:</label> Rs. <?php echo $teacher->payment_plan->price; ?>/<?php echo $teacher->payment_plan->duration; ?></p>
                            <?php else: ?>
                                <p><label>Payment Plan:</label>  Not Available</p>
                            <?php endif; ?>


                        </div>
                    </div>
                    <!-- END / FEATURED ITEM -->
                    <!-- FEATURED ITEM -->
                    <div class="col-md-6">
                        <div class="featured-item">
                            <i class=""></i>

                            <h4 class="title-box text-uppercase">Our Account Details</h4>
                            <p>Please pay selected amount and confirm your payment at Whats app: (0333 1458883)</p>
                            <?php
                            $payment_accounts = \App\Models\Admin\PaymentAccount::all();
                            ?>
                            <?php foreach($payment_accounts as $payment_account): ?>
                                <p><?php echo e($payment_account->name); ?>  <?php echo e($payment_account->type); ?> | <?php echo e($payment_account->account); ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- END / FEATURED ITEM -->

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?php /*<div class="before-footer-link">*/ ?>
                        <?php /*<?php if(\Session::get('user_name') == null): ?>*/ ?>
                        <?php /*<a href="<?php echo e(route('become.teacher.step1')); ?>" class="mc-btn btn-style-2">Become a student</a>*/ ?>
                        <a href="<?php echo e(route('get.teacher.login')); ?>" class="mc-btn btn-style-custom">Login Here</a>

                        <?php /*<?php endif; ?>*/ ?>
                        <?php /*</div>*/ ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>