<?php /*<?php $__env->startSection('title'); ?>*/ ?>
    <?php /*<?php echo $content->title; ?>*/ ?>
<?php /*<?php $__env->stopSection(); ?>*/ ?>
<?php /*<?php $__env->startSection('keywords'); ?>*/ ?>
    <?php /*<?php echo $content->met_keywords; ?>*/ ?>
<?php /*<?php $__env->stopSection(); ?>*/ ?>
<?php /*<?php $__env->startSection('description'); ?>*/ ?>
    <?php /*<?php echo $content->meta_description; ?>*/ ?>
<?php /*<?php $__env->stopSection(); ?>*/ ?>
<?php $__env->startSection('content'); ?>
    <!-- SUB BANNER -->
    <section class="sub-banner section">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="big">This is banner for promoted course</h2>
                <p>this is not only an elegant theme but also a course management system for wordpress and drupal</p>
                <a href="#" class="mc-btn btn-style-3">See course</a>
            </div>
        </div>
    </section>
    <!-- END / SUB BANNER -->


    <!-- PAGE CONTROL -->
    <section class="page-control">
        <div class="container">
            <div class="page-info">
                <a href="<?php echo e(route('frontend.index')); ?>"><i class="icon md-arrow-left"></i>Back to home</a>
            </div>
            <div class="page-view">
                View
                <span class="page-view-info view-grid active" title="View grid"><i class="icon md-ico-2"></i></span>
                <span class="page-view-info view-list" title="View list"><i class="icon md-ico-1"></i></span>
                <div class="mc-select">
                    <select class="select" name="" id="all-categories">
                        <option value="">All level</option>
                        <option value="">2</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PAGE CONTROL -->

    <!-- CATEGORIES CONTENT -->
    <section id="categories-content" class="categories-content">
        <div class="container">
            <div class="row">

                <div class="col-md-9 col-md-push-3">
                    <div class="content grid">
                        <div class="row">
                            <?php foreach($courses as $course): ?>
                            <!-- ITEM -->
                            <div class="col-sm-6 col-md-4">
                                <div class="mc-item mc-item-2">
                                    <div class="image-heading">
                                        <?php if($course->image != null): ?>
                                            <a href="<?php echo e(route('frontend.course.intro', ['id'=>$course->id])); ?>">
                                            <image src="<?php echo e(asset('subjects/'. $course->image)); ?>" alt="<?php echo e($course->title); ?>"/>
                                            </a>    
                                        <?php else: ?>
                                            <a href="<?php echo e(route('frontend.course.intro', ['id'=>$course->id])); ?>">
                                            <image src="<?php echo e(asset('subjects/image_320_240.jpg')); ?>" alt="<?php echo e($course->title); ?>"/>
                                            </a>

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
                            </div>
                            <!-- END / ITEM -->
                            <?php endforeach; ?>


                        </div>
                    </div>
                </div>

                <!-- SIDEBAR CATEGORIES -->
                <div class="col-md-3 col-md-pull-9">
                    <aside class="sidebar-categories">
                        <div class="inner">

                            <!-- WIDGET TOP -->
                            <div class="widget">
                                <ul class="list-style-block">
                                    <li class="current"><a href="#">Featured</a></li>
                                    <li><a href="#">Staff pick</a></li>
                                    <li><a href="#">Free</a></li>
                                    <li><a href="#">Top paid</a></li>
                                </ul>
                            </div>
                            <!-- END / WIDGET TOP -->

                            <!-- WIDGET CATEGORIES -->
                            <div class="widget widget_categories">
                                <ul class="list-style-block">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Art and Photography</a></li>
                                    <li><a href="#">Health and Fitness</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Math and Science</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Social Science</a></li>
                                    <li><a href="#">Game</a></li>
                                    <li><a href="#">Crafts and Hobbies</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Sports</a></li>
                                </ul>
                            </div>
                            <!-- END / WIDGET CATEGORIES -->

                            <!-- BANNER ADS -->
                            <div class="mc-banner">
                                <a href="#"><img src="images/banner-ads-1.jpg" alt=""></a>
                            </div>
                            <!-- END / BANNER ADS -->

                            <!-- BANNER ADS -->
                            <div class="mc-banner">
                                <a href="#"><img src="images/banner-ads-2.jpg" alt=""></a>
                            </div>
                            <!-- END / BANNER ADS -->
                        </div>
                    </aside>
                </div>
                <!-- END / SIDEBAR CATEGORIES -->

            </div>
        </div>
    </section>
    <!-- END / CATEGORIES CONTENT -->

<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>