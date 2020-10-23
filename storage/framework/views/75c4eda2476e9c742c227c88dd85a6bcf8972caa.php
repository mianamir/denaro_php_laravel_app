<?php $__env->startSection('content'); ?>


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1><?php echo e($student->name); ?>/course registration</h1>
                    <?php if(Session::has('student_course_duplicate')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('student_course_duplicate')); ?>

                        </div>
                    <?php endif; ?>

                    <table class="table table-hover table-responsive" id="">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>#Code</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($courses as $course): ?>
                            <form action="<?php echo e(route('student.course.registration.post')); ?>" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" name="course_id" value="<?php echo $course->id; ?>">
                                <input type="hidden" name="student_id" value="<?php echo $student->id; ?>">
                                <tr>
                                    <td><?php echo $course->title; ?></td>
                                    <td>C-<?php echo $course->code; ?></td>
                                    <td><?php echo $course->price; ?></td>
                                    <td>
                                        <div class='btn-group'>
                                            <button type="submit" class="btn btn-primary">Register Course</button>
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