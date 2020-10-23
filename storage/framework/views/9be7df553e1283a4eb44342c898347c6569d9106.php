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
                            <p><?php echo e($banner->description); ?></p>
                            <div class="group">
                                <a href="<?php echo e($banner->button_url); ?>" class="mc-btn btn-style-1"><?php echo e($banner->button_text); ?></a>
                            </div>
                        </div>

                        <div class="img">
                            <img src="<?php echo e(asset($banner->image)); ?>" alt="">
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
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="mc-count-item">
                        <h4>Courses</h4>
                        <p><span class="countup">2536,556</span></p>
                    </div>
                    <div class="mc-count-item">
                        <h4>Teachers</h4>
                        <p><span class="countup">10,389</span></p>
                    </div>
                    <div class="mc-count-item">
                        <h4>Students</h4>
                        <p><span class="countup">34,177</span></p>
                    </div>
                    <div class="mc-count-item">
                        <h4>Tuition Paid</h4>
                        <p>$ <span class="countup">793,361,890</span></p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="before-footer-link">
                        <a href="#" class="mc-btn btn-style-2">Become a student</a>
                        <a href="#" class="mc-btn btn-style-custom">Become a teacher</a>
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
                            <p class="mc-text"><?php echo e($home_content2->details); ?></p>
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
        <div class="container">
            <!-- FEATURE -->
            <div class="feature-course">
                <h4 class="title-box text-uppercase">FEATURE COURSE</h4>
                <a href="categories.html" class="all-course mc-btn btn-style-1">View all</a>
                <div class="row">
                    <div class="feature-slider">
                        <div class="mc-item mc-item-1">
                            <div class="image-heading">
                                <img src="<?php echo e(asset('aasets/images/feature/img-1.jpg')); ?>" alt="">
                            </div>
                            <div class="meta-categories"><a href="#">Web design</a></div>
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="<?php echo e(asset('assets/images/avatar-1.jpg')); ?>" alt="">
                                </div>
                                <h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>
                                <div class="name-author">
                                    By <a href="#">Name of Mr or Mrs</a>
                                </div>
                            </div>
                            <div class="ft-item">
                                <div class="rating">
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </div>
                                <div class="view-info">
                                    <i class="icon md-users"></i>
                                    2568
                                </div>
                                <div class="comment-info">
                                    <i class="icon md-comment"></i>
                                    25
                                </div>
                                <div class="price">
                                    $190
                                    <span class="price-old">$134</span>
                                </div>
                            </div>
                        </div>
                        <div class="mc-item mc-item-1">
                            <div class="image-heading">
                                <img src="images/feature/img-1.jpg" alt="">
                            </div>
                            <div class="meta-categories"><a href="#">Web design</a></div>
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="images/avatar-1.jpg" alt="">
                                </div>
                                <h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>
                                <div class="name-author">
                                    <span>By <a href="#">Name of Mr or Mrs</a></span>
                                </div>
                            </div>
                            <div class="ft-item">
                                <div class="rating">
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </div>
                                <div class="view-info">
                                    <i class="icon md-users"></i>
                                    2568
                                </div>
                                <div class="comment-info">
                                    <i class="icon md-comment"></i>
                                    25
                                </div>
                                <div class="price">
                                    Free
                                </div>
                            </div>
                        </div>
                        <div class="mc-item mc-item-1">
                            <div class="image-heading">
                                <img src="images/feature/img-1.jpg" alt="">
                            </div>
                            <div class="meta-categories"><a href="#">Web design</a></div>
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="images/avatar-1.jpg" alt="">
                                </div>
                                <h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>
                                <div class="name-author">
                                    <span>By <a href="#">Name of Mr or Mrs</a></span>
                                </div>
                            </div>
                            <div class="ft-item">
                                <div class="rating">
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </div>
                                <div class="view-info">
                                    <i class="icon md-users"></i>
                                    2568
                                </div>
                                <div class="comment-info">
                                    <i class="icon md-comment"></i>
                                    25
                                </div>
                                <div class="price">
                                    $190
                                    <span class="price-old">$134</span>
                                </div>
                            </div>
                        </div>

                        <div class="mc-item mc-item-1">
                            <div class="image-heading">
                                <img src="images/feature/img-1.jpg" alt="">
                            </div>
                            <div class="meta-categories"><a href="#">Web design</a></div>
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="images/avatar-1.jpg" alt="">
                                </div>
                                <h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>
                                <div class="name-author">
                                    <span>By <a href="#">Name of Mr or Mrs</a></span>
                                </div>
                            </div>
                            <div class="ft-item">
                                <div class="rating">
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </div>
                                <div class="view-info">
                                    <i class="icon md-users"></i>
                                    2568
                                </div>
                                <div class="comment-info">
                                    <i class="icon md-comment"></i>
                                    25
                                </div>
                                <div class="price">
                                    $190
                                </div>
                            </div>
                        </div>

                        <div class="mc-item mc-item-1">
                            <div class="image-heading">
                                <img src="images/feature/img-1.jpg" alt="">
                            </div>
                            <div class="meta-categories"><a href="#">Web design</a></div>
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="images/avatar-1.jpg" alt="">
                                </div>
                                <h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>
                                <div class="name-author">
                                    <span>By <a href="#">Name of Mr or Mrs</a></span>
                                </div>
                            </div>
                            <div class="ft-item">
                                <div class="rating">
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </div>
                                <div class="view-info">
                                    <i class="icon md-users"></i>
                                    2568
                                </div>
                                <div class="comment-info">
                                    <i class="icon md-comment"></i>
                                    25
                                </div>
                                <div class="price">
                                    $190
                                </div>
                            </div>
                        </div>
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