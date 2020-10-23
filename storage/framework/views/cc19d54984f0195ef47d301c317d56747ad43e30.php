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
                   <?php echo Form::model($chapter, ['route' => ['admin.chapters.update', $chapter->id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('admin.chapters.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>