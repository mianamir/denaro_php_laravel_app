

<?php $__env->startSection('content'); ?>
    <img src="<?php echo e($content->image); ?>"/>
    <div class="container">
        <br/><br/>
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center"><?php echo e($content->title); ?></h2>
                <p><?php echo $content->details; ?></p>
            </div>
        </div>

        <br/><br/>

    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.denaro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>