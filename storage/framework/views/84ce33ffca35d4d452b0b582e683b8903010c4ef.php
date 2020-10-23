<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            <?php echo isset($course) ? $course->title : "Not Available"; ?> / chapter
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <?php /*<?php echo Form::open(['route' => 'admin.chapters.store', 'id' => $course->subject_id]); ?>*/ ?>
                    <?php /*<input type="hidden" name="subject_id" value="<?php echo e($course->subject_id); ?>">*/ ?>

                        <?php /*<?php echo $__env->make('admin.chapters.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>

                    <?php /*<?php echo Form::close(); ?>*/ ?>

                    <form action="<?php echo e(route('admin.chapters.store', $course->id)); ?>" method="POST" >
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <?php echo $__env->make('admin.chapters.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>