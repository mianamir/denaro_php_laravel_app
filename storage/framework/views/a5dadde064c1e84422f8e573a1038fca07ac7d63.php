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
                <h3>Balance </h3>
                <span>$ 29,278</span>
                <div class="create-coures">
                    <a href="<?php echo e(route('student.course.register', [$student->id])); ?>" class="mc-btn btn-style-1">Take New Course + </a>
                    <?php /*<a href="#" class="mc-btn btn-style-5">Request Payment</a>*/ ?>
                </div>

            </div>
            <div class="row">

                <?php if(Session::has('course_design__step1_success_flash_message')): ?>
                    <div class="alert alert-info">
                        <?php echo e(Session::get('course_design__step1_success_flash_message')); ?>

                    </div>
                <?php endif; ?>
                <?php
                 $student_courses = \App\Models\Admin\StudentCourse::
                 where('student_id', $student->id)->get();

                ?>
                <?php if(isset($student_courses)): ?>
                <?php foreach($student_courses as $student_course): ?>
                <?php
                $course = \App\Models\Admin\Subject::
                where('id', $student_course->subject_id)
                ->orderBy('id', 'desc')
                ->first();
                ?>
                <?php if($course): ?>
                <div class="col-xs-6 col-sm-4 col-md-3">

                    <!-- ITEM -->
                    <div class="mc-teaching-item mc-item mc-item-2">
                        <div class="mc-item mc-item-2">
                            <div class="image-heading">
                                <?php if($course->image != null): ?>
                                    <image src="<?php echo e(asset('subjects/'. $course->image)); ?>" alt="<?php echo e($course->title); ?>"/>
                                <?php else: ?>
                                    <image src="<?php echo e(asset('subjects/image_320_240.jpg')); ?>" alt="<?php echo e($course->title); ?>"/>

                                <?php endif; ?>
                            </div>
                            <?php if($course->subject_type_id != null): ?>
                                <div class="meta-categories"><a href="#"><?php echo e($course->subject_type->title); ?></a></div>
                            <?php else: ?>
                                <td>Not Available</td>
                            <?php endif; ?>
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="<?php echo e(asset('assets/images/avatar-1.jpg')); ?>" alt="">
                                </div>
                                <h3 style="font-size: 17px;font-weight: 700;"><a href="<?php echo e(route('frontend.course.intro', ['id'=>$course->id])); ?>"><?php echo $course->title; ?></a></h3>
                                <p style="font-size: 14px;"><?php echo str_limit($course->short_details, 80); ?></p>
                                <div class="name-author">
                                    Price <a href="#"> <?php echo e($course->price); ?></a>
                                </div>
                            </div>

                            <?php
                            $chapters = \App\Models\Admin\Chapter::where('subject_id', $course->id)->get();
                            $chapters_count = count($chapters);
                            ?>
                            <div class="edit-view">
                                <?php /*<a href="#" class="edit">Edit</a>*/ ?>
                                <?php /*<a href="#" class="view">View</a>*/ ?>
                                <a href="<?php echo e(route("get.student.course.chapters", [$course->id])); ?>" class="view">Chapters(<?php echo e(isset($chapters_count) ? $chapters_count : 0); ?>)</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php else: ?>
                  <h3>Not Courses Found</h3>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>