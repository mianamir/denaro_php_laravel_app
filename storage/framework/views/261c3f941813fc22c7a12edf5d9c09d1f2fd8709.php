

<?php $__env->startSection('content'); ?>


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3><?php echo e(strtolower($student->name)); ?> / course registration</h3>
                    <?php if(Session::has('student_course_duplicate')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('student_course_duplicate')); ?>

                        </div>
                    <?php endif; ?>

                    <table class="table table-hover table-responsive" id="">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($course_types as $course_type): ?>
                            <form action="<?php echo e(route('get.student.registration.step3', [$course_type->id, $student->id])); ?>" method="get" enctype="multipart/form-data">

                                <?php /*<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">*/ ?>
                                <?php /*<input type="hidden" name="student_id" value="<?php echo $student->id; ?>">*/ ?>
                                <?php /*<input type="hidden" name="course_type_id" value="<?php echo $course_type->id; ?>">*/ ?>
                                <tr>
                                    <td><?php echo $course_type->title; ?></td>
                                    <td>
                                        <div class='btn-group'>
                                            <button type="submit" class="btn btn-primary">Select Category</button>
                                        </div>

                                    </td>
                                </tr>

                            </form>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>


            </div>
        </div>

    </section>
    <!-- END / FEATURED REQUEST TEACHER -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>