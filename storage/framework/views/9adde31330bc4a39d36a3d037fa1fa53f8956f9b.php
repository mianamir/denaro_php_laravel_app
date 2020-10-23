<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Topic Video
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <?php if(Session::has('video_url')): ?>
                   <div class="alert alert-danger">
                       <?php echo e(Session::get('video_url')); ?>

                   </div>
               <?php endif; ?>
               <?php if(Session::has('featured_image')): ?>
                    <div class="alert alert-danger">
                    <?php echo e(Session::get('featured_image')); ?>

                    </div>
               <?php endif; ?>
               <?php if(Session::has('featured_image')): ?>
                    <div class="alert alert-danger">
                      <?php echo e(Session::get('featured_image')); ?>

                       </div>
               <?php endif; ?>

               <div class="row">
                   <?php echo Form::model($topic_video, ['route' => ['admin.topic_videos.update', $topic_video->id], 'method' => 'patch', 'files' => true]); ?>


                        <?php echo $__env->make('admin.topic_videos.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>