

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Course To Teach
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($courseToTeach, ['route' => ['admin.courseToTeaches.update', $courseToTeach->id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('admin.course_to_teaches.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>