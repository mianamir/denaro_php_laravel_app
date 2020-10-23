<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(app_name()); ?>

        <small><?php echo e(trans('strings.backend.dashboard.title')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>