<?php $__env->startSection('content'); ?>

    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <?php /*<div class="panel-heading"><?php echo e(trans('labels.frontend.auth.login_box_title')); ?></div>*/ ?>
                <h3 style="text-align: center">Virtual School Admin Login</h3>
                <div class="panel-body">

                    <?php echo e(Form::open(['route' => 'auth.login', 'class' => 'form-horizontal'])); ?>


                    <div class="form-group">
                        <?php echo e(Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label'])); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <?php echo e(Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label'])); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <?php if(isset($captcha) && $captcha): ?>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <?php echo Form::captcha(); ?>

                                <?php echo e(Form::hidden('captcha_status', 'true')); ?>

                            </div><!--col-md-6-->
                        </div><!--form-group-->
                    <?php endif; ?>

                    <?php /*<div class="form-group">*/ ?>
                    <?php /*<div class="col-md-6 col-md-offset-4">*/ ?>
                    <?php /*<div class="checkbox">*/ ?>
                    <?php /*<label>*/ ?>
                    <?php /*<?php echo e(Form::checkbox('remember')); ?> <?php echo e(trans('labels.frontend.auth.remember_me')); ?>*/ ?>
                    <?php /*</label>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div><!--col-md-6-->*/ ?>
                    <?php /*</div><!--form-group-->*/ ?>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <?php echo e(Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-primary', 'style' => 'margin-right:15px'])); ?>

                            <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Cancel</a>
                            <?php /*<?php echo e(link_to('password/reset', trans('labels.frontend.passwords.forgot_password'))); ?>*/ ?>
                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <?php echo e(Form::close()); ?>


                    <div class="row text-center">
                        <?php echo $socialite_links; ?>

                    </div>
                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-scripts-end'); ?>
    <?php if(isset($captcha) && $captcha): ?>
        <?php echo Captcha::script(); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>