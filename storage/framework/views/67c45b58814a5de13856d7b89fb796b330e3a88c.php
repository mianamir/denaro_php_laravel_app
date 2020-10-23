
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

            <div class="price-course">
                <i class="icon md-database"></i>
                <h3><?php echo e($course->title); ?> / chapters</h3>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <table class="table table-responsive table-hover" id="myTable">
                        <thead>
                        <tr>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach($chapters as $chapter): ?>
                        <tr>
                            <td><?php echo $chapter->title; ?></td>
                            <td><?php echo str_limit($chapter->details, 100); ?></td>
                            <td>
                               <div class='btn-group'>
                                    <a href="<?php echo route('get.student.course.chapter.topics', [$chapter->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-book"></i></a>
                                    <a href="<?php echo route('get.student.course.chapter.topics', [$chapter->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-list"></i></a>
                                    </div>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
            </table>

                    <a href="<?php echo e(route('student.dashboard')); ?>" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>