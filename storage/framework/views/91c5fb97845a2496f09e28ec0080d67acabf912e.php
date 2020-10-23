

<?php $__env->startSection('content'); ?>


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3><?php echo e(strtolower($student->name)); ?> / <?php echo e(strtolower($course_type->title)); ?> / teachers</h3>
                    <?php if(Session::has('student_course_duplicate')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('student_course_duplicate')); ?>

                        </div>
                    <?php endif; ?>

                    <table class="table table-hover table-responsive" id="">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Course Fee</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($teachers as $teacher): ?>


                            <form action="<?php echo e(route('get.student.registration.step4', [$course_type->id, $teacher->id, $student->id])); ?>" method="get" enctype="multipart/form-data">

                                <?php /*<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">*/ ?>
                                <?php /*<input type="hidden" name="student_id" value="<?php echo $student->id; ?>">*/ ?>
                                <?php /*<input type="hidden" name="course_type_id" value="<?php echo $course_type->id; ?>">*/ ?>
                                <?php /*<input type="hidden" name="teacher_id" value="<?php echo $teacher->id; ?>">*/ ?>
                                <tr>
                                    <td><?php echo $teacher->name; ?></td>
                                    <td>
                                        <?php if($teacher->payment_plan_id != null): ?>
                                            <p>Payment Plan: Rs. <?php echo $teacher->payment_plan->price; ?>/<?php echo $teacher->payment_plan->duration; ?></p>
                                        <?php else: ?>
                                            <p>Payment Plan:  Not Available</p>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class='btn-group'>
                                            <?php

                                            $teacher_courses = \App\Models\Admin\TeacherCourse::all();

                                            foreach ($teacher_courses as $teacher_course){
                                                if ($teacher->id == $teacher_course->teacher_id){
                                                    $temp_course = \App\Models\Admin\Subject::
                                                        where(['id' => $teacher_course->course_id, 'class_id' => $student->class_id, 'status' => 'active'])->first();
                                                    $GLOBALS['a'] = 1;
                                                }

                                            }
                                            ?>
                                            <a href="<?php echo e(route('frontend.course.intro', 1)); ?>" class="btn btn-primary" target="_blank"> View Course</a>
                                            <button type="submit" class="btn btn-primary">Buy Course</button>
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