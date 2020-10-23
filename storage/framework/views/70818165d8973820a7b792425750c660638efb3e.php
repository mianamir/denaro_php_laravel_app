<?php $__env->startSection('content'); ?>

    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="<?php echo e(asset('students/'.$student->profile_pic)); ?>" alt="">
                </div>
                <div class="name-author">
                    <h2 class="big"><?php echo e($student->name); ?></h2>
                </div>
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3><?php echo e($student->city); ?>, <?php echo e($student->country); ?></h3>
                </div>
            </div>
            <div class="info-follow">
                <?php /*<div class="trophies">*/ ?>
                <?php /*<span>12</span>*/ ?>
                <?php /*<p>Trophies</p>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="trophies">*/ ?>
                <?php /*<span>12</span>*/ ?>
                <?php /*<p>Follower</p>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="trophies">*/ ?>
                <?php /*<span>20</span>*/ ?>
                <?php /*<p>Following</p>*/ ?>
                <?php /*</div>*/ ?>
                <div class="trophies">
                    <span>$ 149,902</span>
                    <p>Balance</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->

    <!-- CONTEN BAR -->
    <?php echo $__env->make('frontend.site.includes.student-content-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- END / CONTENT BAR -->



    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h1><?php echo e(strtolower($student->name)); ?> / course registration</h1>
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
                            <?php
                            $student_course_check = \App\Models\Admin\StudentCourse::
                                    where(['student_id' => $student->id, 'subject_id' => $course->id])->first();
                            ?>
                            <form action="<?php echo e(route('student.course.register.post')); ?>" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" name="course_id" value="<?php echo $course->id; ?>">
                                <input type="hidden" name="student_id" value="<?php echo $student->id; ?>">
                                <tr>
                                    <td><?php echo $course->title; ?></td>
                                    <td>C-<?php echo $course->code; ?></td>
                                    <td><?php echo $course->price; ?></td>
                                    <td>
                                        <?php if(isset($student_course_check)): ?>
                                        <div class='btn-group'>
                                            <a href="<?php echo e(route('get.student.course.chapters', [$course->id])); ?>" class="btn btn-primary">View Course</a>
                                        </div>
                                        <?php else: ?>
                                        <div class='btn-group'>
                                            <button type="submit" class="btn btn-primary">Take Course</button>
                                        </div>
                                        <?php endif; ?>
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
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>