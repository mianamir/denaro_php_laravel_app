<?php $__env->startSection('content'); ?>

    <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="<?php echo e(asset('teachers/'.$teacher->profile_pic)); ?>" alt="">
                </div>
                <div class="name-author">
                    <h2 class="big"><?php echo e($teacher->name); ?></h2>
                </div>
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3><?php echo e($teacher->city); ?>, <?php echo e($teacher->country); ?></h3>
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
    <?php echo $__env->make('frontend.site.includes.teacher-content-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- END / CONTENT BAR -->



    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="price-course">
                <i class="icon md-database"></i>
                <h3><?php echo e($teacher->name); ?> / student registered courses</h3>

            </div>

            <div class="row">
                <?php if(Session::has('course_design__step1_success_flash_message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success_flash_message')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::has('student_not_found_flash_message')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('student_not_found_flash_message')); ?>

                    </div>
                <?php endif; ?>
                <div class="col-md-12">

                    <table class="table table-responsive" id="myTable">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>#Code</th>
                            <th>Study Group</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($student_courses as $student_course): ?>
                            <?php
                            $course = \App\Models\Admin\Subject::find($student_course->subject_id);
                            ?>
                            <?php if($course): ?>
                                <tr>
                                    <td><?php echo $course->title; ?></td>
                                    <td>C-<?php echo $course->code; ?></td>
                                    <td><?php echo isset($course->course_to_teach->title) ? $course->course_to_teach->title : "Not Available"; ?></td>
                                    <td><?php echo $course->price; ?></td>

                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>


                    <a href="<?php echo e(route('teacher.students')); ?>" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>