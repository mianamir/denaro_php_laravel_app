<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Student
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <?php if(Session::has('student_email')): ?>
                   <div class="alert alert-danger">
                       <?php echo e(Session::get('student_email')); ?>

                   </div>
               <?php endif; ?>
               <?php if(Session::has('student_phone')): ?>
                   <div class="alert alert-danger">
                       <?php echo e(Session::get('student_phone')); ?>

                   </div>
               <?php endif; ?>

               <div class="row">
                   <?php echo Form::model($student, ['route' => ['admin.students.update', $student->id], 'files' => true,'method' => 'patch']); ?>


                        <?php echo $__env->make('admin.students.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>