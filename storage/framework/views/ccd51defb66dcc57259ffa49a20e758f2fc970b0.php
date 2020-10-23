<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Course
            </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($subject, ['route' => ['admin.subjects.update', $subject->id], 'method' => 'patch', 'files' => true]); ?>


                        <?php echo $__env->make('admin.subjects.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('course_scripts'); ?>
    <script>
        jQuery(document).ready(function() {

            <?php /*// Get teachers by expertise for course*/ ?>
            jQuery("#course_teacher_id").attr("disabled", true);
            jQuery( "#course_type_id" ).change(function() {
                var id=$("#course_type_id").val();
                jQuery("#course_teacher_id").attr("disabled", false);
                $.get("<?php echo e(route('admin.teachers.by.expertise')); ?>?id="+id, function( data ) {
                    $("#course_teacher_id").html( data );
                }).done(function() {
//                    alert( "second success" );
                }).fail(function() {
                    alert('teacher not found error');

                });

            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>