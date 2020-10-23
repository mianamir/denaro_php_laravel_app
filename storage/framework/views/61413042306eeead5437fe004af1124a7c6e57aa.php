
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
                <i class="icon md-user-minus"></i>
                <h3>Student Details</h3>
                <?php /*<span>$ 29,278</span>*/ ?>
                <?php /*<div class="create-coures">*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-1">Create new course</a>*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-5">Request Payment</a>*/ ?>
                <?php /*</div>*/ ?>

            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>Class: <?php echo isset($student) ? $student->student_class_func->title : "Not Available"; ?></p>
                    <p>Code: S-<?php echo e($student->code); ?></p>
                    <p>Name: <?php echo e($student->name); ?></p>
                    <p>Father Name: <?php echo e($student->father_name); ?></p>
                    <p>Email: <?php echo e($student->email); ?></p>
                    <p>Phone: <?php echo e($student->phone); ?></p>
                    <p>Password: <?php echo e($student->password2); ?></p>
                    <p>Gender: <?php echo e($student->gender); ?></p>
                    <p>Type: <?php echo e($student->type); ?></p>
                    <p>City: <?php echo e($student->city); ?></p>
                    <p>Country: <?php echo e($student->country); ?></p>
                    <p>Status: <?php echo e($student->status); ?></p>

                </div>
                <div class="col-md-4">
                    <p><img src="<?php echo e(asset('students/' . $student->profile_pic)); ?>" width="200" height="200"/></p>
                </div>

            </div>
            <br>
            <a href="<?php echo e(route('teacher.students')); ?>" class="mc-btn btn-style-1">Back</a>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>