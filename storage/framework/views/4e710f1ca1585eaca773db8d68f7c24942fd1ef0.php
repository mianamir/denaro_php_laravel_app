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
               <div class="row">
                   <?php echo Form::model($topic, ['route' => ['admin.topics.update', $topic->id], 'method' => 'patch', 'files' => true]); ?>


                        <?php echo $__env->make('admin.topics.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>