<?php $__env->startSection('title'); ?>
    <?php echo $content->title; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?>
    <?php echo $content->met_keywords; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    <?php echo $content->meta_description; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- HOME SLIDER -->
    <section class="slide" style="background-image: url(<?php echo e(asset('assets/images/homeslider/bg.jpg')); ?>)">
        <div class="container">
            <div class="slide-cn" id="slide-home">
                <?php
                $banners = \App\Models\Admin\Banner::orderby('is_active', 'asc')->get();

                ?>
                <?php foreach($banners as $banner): ?>
                <!-- SLIDE ITEM -->
                <div class="slide-item">
                    <div class="item-inner">
                        <div class="text">
                            <h2><?php echo e($banner->title); ?></h2>
                            <p><?php echo $banner->description; ?></p>
                            <div class="group">
                                <a href="<?php echo e($banner->button_url); ?>" class="mc-btn btn-style-1"><?php echo e($banner->button_text); ?></a>
                            </div>
                        </div>

                        <div class="img">
                            <img src="<?php echo e(asset($banner->image)); ?>" width="436" height="507" alt="">
                        </div>
                    </div>

                </div>
                <!-- SLIDE ITEM -->
                <?php endforeach; ?>


            </div>
        </div>
    </section>
    <!-- END / HOME SLIDER -->

    <!-- AFTER SLIDER -->
    <section id="before-footer" class="before-footer">
        <?php
        $total_subjects = \App\Models\Admin\Subject::all();
        $subjects_count = count($total_subjects);
        $total_teachers = \App\Models\Admin\Teacher::all();
        $teachers_count = count($total_teachers);
        $total_students = \App\Models\Admin\Teacher::all();
        $students_count = count($total_students);
        ?>
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="mc-count-item">
                        <h4>Courses</h4>
                        <p><span class="countup"><?php echo e(isset($subjects_count) ? $subjects_count : 0); ?></span></p>
                    </div>
                    <div class="mc-count-item">
                        <h4>Teachers</h4>
                        <p><span class="countup"><?php echo e(isset($teachers_count) ? $teachers_count : 0); ?></span></p>
                    </div>
                    <div class="mc-count-item">
                        <h4>Students</h4>
                        <p><span class="countup"><?php echo e(isset($students_count) ? $students_count : 0); ?></span></p>
                    </div>
                    <?php /*<div class="mc-count-item">*/ ?>
                        <?php /*<h4>Tuition Paid</h4>*/ ?>
                        <?php /*<p>$ <span class="countup">793,361,890</span></p>*/ ?>
                    <?php /*</div>*/ ?>
                </div>

                <div class="col-lg-4">
                    <div class="before-footer-link">
                        <?php /*<?php if(\Session::get('user_name') == null): ?>*/ ?>
                        <a href="#" class="mc-btn btn-style-2">Become a student</a>
                        <a href="<?php echo e(route('become.teacher.step1')); ?>" class="mc-btn btn-style-custom">Become a teacher</a>

                        <?php /*<?php endif; ?>*/ ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / AFTER SLIDER -->

    <!-- SECTION 1 -->
    <section id="mc-section-1" class="mc-section-1 section">
        <div class="container">
            <div class="row">
                <?php
                $home_content_after_slider = \App\Models\Admin\Page::where('name', 'home')->first();
//
                ?>
                <div class="col-md-5">
                    <div class="mc-section-1-content-1">
                        <h2 class="big"><?php echo e($home_content_after_slider->title); ?></h2>
                        <p class="mc-text"><?php echo $home_content_after_slider->details; ?></p>
                        <a href="<?php echo e(route('frontend.about')); ?>" class="mc-btn btn-style-custom">Learn More About Us</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-offset-1">
                <div class="image">
                <img src="<?php echo e(asset($home_content_after_slider->image)); ?>" alt="">
                </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END / SECTION 1 -->

    <!-- SECTION 2 -->
    <section id="mc-section-2" class="mc-section-2 section">
        <div class="awe-parallax bg-section1-demo"></div>
        <div class="overlay-color-1"></div>
        <div class="container">
            <div class="section-2-content">
                <div class="row">
                    <?php
                    $home_content2 = \App\Models\Admin\Page::where('name', 'home_content2')->first();

                    ?>
                    <div class="col-md-5">
                        <div class="ct">
                            <h2 class="big"><?php echo e($home_content2->title); ?></h2>
                            <p class="mc-text p_custom"><?php echo $home_content2->details; ?></p>
                            <a href="<?php echo e(route('frontend.about')); ?>" class="mc-btn btn-style-3">See how it work</a>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="image">
                            <img src="<?php echo e(asset($home_content2->image)); ?>" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END / SECTION 2 -->

    <!-- SECTION 3 -->
    <section id="mc-section-3" class="mc-section-3 section">
        <?php
        $featured_courses = \App\Models\Admin\Subject::where(['is_featured'=> 1, 'status' => 'active'])->orderBy('id', 'desc')->get();
        ?>
        <div class="container">
            <!-- FEATURE -->
            <div class="feature-course">
                <h4 class="title-box text-uppercase">FEATURE COURSE</h4>
                <a href="categories.html" class="all-course mc-btn btn-style-1">View all</a>
                <div class="row">
                    <div class="feature-slider">
                        <?php foreach($featured_courses as $featured_course): ?>
                        <div class="mc-item mc-item-1">
                            <div class="image-heading">
                                <?php if($featured_course->image != null): ?>
                                    <image src="<?php echo e(asset('subjects/'. $featured_course->image)); ?>" alt="<?php echo e($featured_course->title); ?>"/>
                                <?php else: ?>
                                    <image src="<?php echo e(asset('subjects/image_320_240.jpg')); ?>" alt="<?php echo e($featured_course->title); ?>"/>

                                <?php endif; ?>
                            </div>
                            <?php if($featured_course->subject_type_id != null): ?>
                                <div class="meta-categories"><a href="#"><?php echo e($featured_course->subject_type->title); ?></a></div>
                            <?php else: ?>
                                <td>Not Available</td>
                            <?php endif; ?>
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="<?php echo e(asset('assets/images/avatar-1.jpg')); ?>" alt="">
                                </div>
                                <h3 style="font-size: 17px;font-weight: 700;"><a href="<?php echo e(route('frontend.course.intro', ['id'=>$featured_course->id])); ?>"><?php echo $featured_course->title; ?></a></h3>
                                <p style="font-size: 14px;"><?php echo str_limit($featured_course->short_details, 80); ?></p>
                                <div class="name-author">
                                    Price <a href="#"> <?php echo e($featured_course->price); ?></a>
                                </div>
                            </div>
                            <?php /*<div class="ft-item">*/ ?>
                                <?php /*<div class="rating">*/ ?>
                                    <?php /*<a href="#" class="active"></a>*/ ?>
                                    <?php /*<a href="#" class="active"></a>*/ ?>
                                    <?php /*<a href="#" class="active"></a>*/ ?>
                                    <?php /*<a href="#"></a>*/ ?>
                                    <?php /*<a href="#"></a>*/ ?>
                                <?php /*</div>*/ ?>
                                <?php /*<div class="view-info">*/ ?>
                                    <?php /*<i class="icon md-users"></i>*/ ?>
                                    <?php /*2568*/ ?>
                                <?php /*</div>*/ ?>
                                <?php /*<div class="comment-info">*/ ?>
                                    <?php /*<i class="icon md-comment"></i>*/ ?>
                                    <?php /*25*/ ?>
                                <?php /*</div>*/ ?>
                                <?php /*<div class="price">*/ ?>
                                    <?php /*<?php echo e($featured_course->price); ?>*/ ?>
                                    <?php /*<span class="price-old"><?php echo e($featured_course->price); ?></span>*/ ?>
                                <?php /*</div>*/ ?>
                            <?php /*</div>*/ ?>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <!-- END / FEATURE -->
        </div>
    </section>
    <!-- END / SECTION 3 -->

    <!-- BEFORE FOOTER -->
    <!-- END / BEFORE FOOTER -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>