<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            <?php echo isset($chapter) ? $chapter->title : "Not Available"; ?> / topic
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

            <div class="box-body">
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
                <?php if(Session::has('chapter_id')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('chapter_id')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::has('title')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('title')); ?>

                        </div>
                <?php endif; ?>
                <?php if(Session::has('video_urls')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('video_urls')); ?>

                        </div>
                <?php endif; ?>
                <div class="row">
                    <form action="<?php echo e(route('admin.topics.store', $chapter->id)); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <?php echo $__env->make('admin.topics.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>