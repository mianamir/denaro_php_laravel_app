<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1><?php echo isset($student) ? strtolower($student->student_class_func->title) : "Not Available"; ?> / courses / for <?php echo e(strtolower($student->name)); ?> </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <?php if(Session::has('student_course_duplicate')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('student_course_duplicate')); ?>

                        </div>
                    <?php endif; ?>

                    <table class="table table-responsive" id="myTable1_datata_error_on_this_table">
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
                            <form action="<?php echo e(route('admin.student.course.registration.post')); ?>" method="post" enctype="multipart/form-data">

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

                    <hr>
                    <a href="<?php echo e(route('admin.students.index')); ?>" class="btn btn-primary">Back</a>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>