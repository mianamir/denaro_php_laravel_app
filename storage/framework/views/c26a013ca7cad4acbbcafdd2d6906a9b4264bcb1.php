
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
    <section class="sub-banner sub-banner-course">
        <div class="awe-static bg-sub-banner-course"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="text-center"><?php echo e($course->title); ?></h2>
            </div>
        </div>
    </section>
    <!-- END / SUB BANNER -->


    <!-- COURSE -->
    <section class="course-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="sidebar-course-intro">
                        <div class="breadcrumb">
                            <a href="<?php echo e(route('frontend.index')); ?>">Home</a> /
                            <a href="<?php echo e(route('frontend.courses')); ?>">Courses</a> /
                            <?php echo e($course->title); ?>

                        </div>
                        <div class="video-course-intro">
                            <div class="inner">
                                <?php /*<div class="video-place">*/ ?>
                                    <?php /*<div class="img-thumb">*/ ?>

                                        <?php /*<?php if($course->image != null): ?>*/ ?>
                                            <?php /*<image class="promo_image" src="<?php echo e(asset('subjects/'. $course->promo_video_featured_image)); ?>" alt="<?php echo e($course->title); ?>"/>*/ ?>
                                        <?php /*<?php else: ?>*/ ?>
                                            <?php /*<image class="promo_image" src="<?php echo e(asset('subjects/image_320_240.jpg')); ?>" alt="<?php echo e($course->title); ?>"/>*/ ?>

                                        <?php /*<?php endif; ?>*/ ?>
                                    <?php /*</div>*/ ?>
                                    <?php /*<div class="awe-overlay"></div>*/ ?>
                                    <?php /*<a href="#" class="play-icon">*/ ?>
                                        <?php /*<i class="fa fa-play"></i>*/ ?>
                                    <?php /*</a>*/ ?>
                                <?php /*</div>*/ ?>
                                <div class="video embed-responsive embed-responsive-16by9" >
                                    <iframe id="video_play" src="<?php echo e($course->promo_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="embed-responsive-item">
                                    </iframe>
                                </div>
                            </div>
                            <div class="price">
                                Rs. <?php echo e($course->price); ?>

                            </div>
                            <?php if(\Session::get('student_id') == null): ?>
                            <a href="<?php echo e(route('become.student')); ?>" class="mc-btn btn-style-1">Take this course</a>
                            <?php endif; ?>
                        </div>

                        <div class="new-course">
                            <div class="item course-code">
                                <i class="icon md-barcode"></i>
                                <h4><a href="#">Course Type</a></h4>
                                <p class="detail-course"><?php echo e($course->subject_type_id != null && isset($course->subject_type) ? $course->subject_type->title : 'Not Available'); ?></p>
                            </div>
                            <div class="item course-code">
                                <i class="icon md-barcode"></i>
                                <h4><a href="#">For Class</a></h4>
                                <p class="detail-course"><?php echo e($course->class_id != null && isset($course->student_class) ? $course->student_class->title : 'Not Available'); ?></p>
                            </div>
                            <div class="item course-code">
                                <i class="icon md-barcode"></i>
                                <h4><a href="#">Course Code</a></h4>
                                <p class="detail-course">#C-<?php echo e($course->code); ?></p>
                            </div>
                        </div>
                        <hr class="line">
                        <?php /*<div class="about-instructor">*/ ?>
                            <?php /*<h4 class="xsm black bold">About Instructor</h4>*/ ?>
                            <?php /*<ul>*/ ?>
                                <?php /*<li>*/ ?>
                                    <?php /*<div class="image-instructor text-center">*/ ?>
                                        <?php /*<img src="images/team-13.jpg" alt="">*/ ?>
                                    <?php /*</div>*/ ?>
                                    <?php /*<div class="info-instructor">*/ ?>
                                        <?php /*<cite class="sm black"><a href="#">John Doe</a></cite>*/ ?>
                                        <?php /*<a href="#"><i class="fa fa-star"></i></a>*/ ?>
                                        <?php /*<a href="#"><i class="fa fa-envelope"></i></a>*/ ?>
                                        <?php /*<a href="#"><i class="fa fa-check-square"></i></a>*/ ?>
                                        <?php /*<p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero</p>*/ ?>
                                    <?php /*</div>*/ ?>
                                <?php /*</li>*/ ?>
                                <?php /*<li>*/ ?>
                                    <?php /*<div class="image-instructor">*/ ?>
                                        <?php /*<img src="images/team-13.jpg" alt="">*/ ?>
                                    <?php /*</div>*/ ?>
                                    <?php /*<div class="info-instructor">*/ ?>
                                        <?php /*<cite class="sm black"><a href="#">John Doe</a></cite>*/ ?>
                                        <?php /*<a href="#"><i class="fa fa-envelope"></i></a>*/ ?>
                                        <?php /*<a href="#"><i class="icon md-user-plus"></i></a>*/ ?>
                                        <?php /*<p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero</p>*/ ?>
                                    <?php /*</div>*/ ?>
                                <?php /*</li>*/ ?>
                            <?php /*</ul>*/ ?>
                        <?php /*</div>*/ ?>
                        <?php /*<hr class="line">*/ ?>
                        <?php /*<div class="widget widget_equipment">*/ ?>
                            <?php /*<i class="icon md-config"></i>*/ ?>
                            <?php /*<h4 class="xsm black bold">Equipment</h4>*/ ?>
                            <?php /*<div class="equipment-body">*/ ?>
                                <?php /*<a href="#">Photoshop CC</a>,*/ ?>
                                <?php /*<a href="#">Illustrator CC</a>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
                        <?php /*<div class="widget widget_tags">*/ ?>
                            <?php /*<i class="icon md-download-2"></i>*/ ?>
                            <?php /*<h4 class="xsm black bold">Tag</h4>*/ ?>
                            <?php /*<div class="tagCould">*/ ?>
                                <?php /*<a href="#">Design</a>,*/ ?>
                                <?php /*<a href="#">Photoshop</a>,*/ ?>
                                <?php /*<a href="#">Illustrator</a>,*/ ?>
                                <?php /*<a href="">Art</a>,*/ ?>
                                <?php /*<a href="">Graphic Design</a>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
                        <?php /*<div class="widget widget_share">*/ ?>
                            <?php /*<i class="icon md-forward"></i>*/ ?>
                            <?php /*<h4 class="xsm black bold">Share course</h4>*/ ?>
                            <?php /*<div class="share-body">*/ ?>
                                <?php /*<a href="#" class="twitter" title="twitter">*/ ?>
                                    <?php /*<i class="icon md-twitter"></i>*/ ?>
                                <?php /*</a>*/ ?>
                                <?php /*<a href="#" class="pinterest" title="pinterest">*/ ?>
                                    <?php /*<i class="icon md-pinterest-1"></i>*/ ?>
                                <?php /*</a>*/ ?>
                                <?php /*<a href="#" class="facebook" title="facebook">*/ ?>
                                    <?php /*<i class="icon md-facebook-1"></i>*/ ?>
                                <?php /*</a>*/ ?>
                                <?php /*<a href="#" class="google-plus" title="google plus">*/ ?>
                                    <?php /*<i class="icon md-google-plus"></i>*/ ?>
                                <?php /*</a>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="tabs-page">
                        <ul class="nav-tabs" role="tablist">
                            <li class="active"><a href="#introduction" role="tab" data-toggle="tab">Introduction</a></li>
                            <li><a href="#outline" role="tab" data-toggle="tab">Outline</a></li>
                            <?php /*<li><a href="#review" role="tab" data-toggle="tab">Review</a></li>*/ ?>
                            <?php /*<li><a href="#student" role="tab" data-toggle="tab">Student</a></li>*/ ?>
                            <?php /*<li><a href="#conment" role="tab" data-toggle="tab">Conment</a></li>*/ ?>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- INTRODUCTION -->
                            <div class="tab-pane fade in active" id="introduction">
                                <?php echo $course->details; ?>

                            </div>
                            <!-- END / INTRODUCTION -->

                            <!-- OUTLINE -->
                            <div class="tab-pane fade" id="outline">

                                <?php foreach($course->chapters->all() as $chapter): ?>
                                <!-- SECTION OUTLINE -->
                                <div class="section-outline">
                                    <h4 class="tit-section xsm"><?php echo e($chapter->title); ?></h4>
                                    <ul class="section-list">
                                        <?php $count = 1 ?>

                                        <?php foreach($chapter->topics->all() as $topic): ?>
                                        <li>
                                            <div class="count"><span><?php echo e($count); ?></span></div>
                                            <div class="list-body">
                                                <i class="icon md-camera"></i>
                                                <p><a href="#"><?php echo e($topic->title); ?></a></p>
                                                <p><a href="#"><?php echo str_limit($topic->details, 90); ?></a></p>
                                                <?php /*<div class="data-lessons">*/ ?>
                                                    <?php /*<span>36:56</span>*/ ?>
                                                <?php /*</div>*/ ?>
                                            </div>
                                            <?php if(\Session::get('student_id') != null): ?>)
                                            <a href="#" id="course_intro_preview" class="mc-btn-2 btn-style-2 course_intro_preview">

                                                Preview
                                            </a>
                                            <?php endif; ?>

                                            <!-- Modal -->
                                            <div class="modal fade" id="course_intro_preview_video<?php echo e($count); ?>" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="padding:35px 50px;">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4> <?php echo e($topic->title); ?></h4>
                                                        </div>
                                                        <div class="modal-body" style="padding:40px 50px;">
                                                            <iframe id="video_play" width="100%" height="450px" src="<?php echo e($topic->topic_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="embed-responsive-item">
                                                            </iframe>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <p style="color:#fff;"><?php echo $topic->details; ?></p>
                                                            <br>
                                                            <button type="submit" class="btn btn-info btn-default pull-right" data-dismiss="modal"><span class=""></span> Cancel</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </li>
                                                <?php $count += 1 ?>
                                        <?php endforeach; ?>


                                    </ul>
                                </div>
                                <!-- END / SECTION OUTLINE -->
                                <?php endforeach; ?>


                            </div>
                            <!-- END / OUTLINE -->

                            <!-- REVIEW -->
                            <div class="tab-pane fade" id="review">
                                <div class="total-review">
                                    <h3 class="md black">4 Reviews</h3>
                                    <div class="rating">
                                        <a href="#" class="active"></a>
                                        <a href="#" class="active"></a>
                                        <a href="#" class="active"></a>
                                        <a href="#"></a>
                                        <a href="#"></a>
                                    </div>
                                </div>
                                <ul class="list-review">
                                    <li class="review">
                                        <div class="body-review">
                                            <div class="review-author">
                                                <a href="#">
                                                    <img src="images/team-13.jpg" alt="">
                                                    <i class="icon md-email"></i>
                                                    <i class="icon md-user-plus"></i>
                                                </a>
                                            </div>
                                            <div class="content-review">
                                                <h4 class="sm black">
                                                    <a href="#">John Doe</a>
                                                </h4>
                                                <div class="rating">
                                                    <a href="#" class="active"></a>
                                                    <a href="#" class="active"></a>
                                                    <a href="#" class="active"></a>
                                                    <a href="#"></a>
                                                    <a href="#"></a>
                                                </div>

                                                <em>5 days ago</em>
                                                <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="review">
                                        <div class="body-review">
                                            <div class="review-author">
                                                <a href="#">
                                                    <img src="images/team-13.jpg" alt="">
                                                    <i class="icon md-email"></i>
                                                    <i class="icon md-user-plus"></i>
                                                </a>
                                                <i class="icon"></i>
                                                <i class="icon"></i>
                                            </div>
                                            <div class="content-review">
                                                <h4 class="sm black">
                                                    <a href="#">John Doe</a>
                                                </h4>
                                                <div class="rating">
                                                    <a href="#" class="active"></a>
                                                    <a href="#" class="active"></a>
                                                    <a href="#" class="active"></a>
                                                    <a href="#"></a>
                                                    <a href="#"></a>
                                                </div>
                                                <em>5 days ago</em>
                                                <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="review">
                                        <div class="body-review">
                                            <div class="review-author">
                                                <a href="#">
                                                    <img src="images/team-13.jpg" alt="">
                                                    <i class="icon md-email"></i>
                                                    <i class="icon md-user-plus"></i>
                                                </a>
                                                <i class="icon"></i>
                                                <i class="icon"></i>
                                            </div>
                                            <div class="content-review">
                                                <h4 class="sm black">
                                                    <a href="#">John Doe</a>
                                                </h4>
                                                <div class="rating">
                                                    <a href="#" class="active"></a>
                                                    <a href="#" class="active"></a>
                                                    <a href="#" class="active"></a>
                                                    <a href="#"></a>
                                                    <a href="#"></a>
                                                </div>
                                                <em>5 days ago</em>
                                                <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="load-more">
                                    <a href="">
                                        <i class="icon md-time"></i>
                                        Load more previous update</a>
                                </div>
                            </div>
                            <!-- END / REVIEW -->

                            <!-- STUDENT -->
                            <div class="tab-pane fade" id="student">
                                <h3 class="md black">53618 Students applied</h3>
                                <div class="tab-list-student">
                                    <ul class="list-student">
                                        <!-- LIST STUDENT -->
                                        <li>
                                            <div class="image">
                                                <img src="images/team-13.jpg" alt="">
                                            </div>
                                            <div class="list-body">
                                                <cite class="xsm"><a href="#">Neo Khuat</a></cite>
                                                <span class="address">Hanoi, Vietnam</span>
                                                <div class="icon-wrap">
                                                    <a href="#"><i class="icon md-email"></i></a>
                                                    <a href="#"><i class="icon md-user-plus"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END / LIST STUDENT -->

                                        <!-- LIST STUDENT -->
                                        <li>
                                            <div class="image">
                                                <img src="images/team-13.jpg" alt="">
                                            </div>
                                            <div class="list-body">
                                                <cite class="xsm"><a href="#">Neo Khuat</a></cite>
                                                <span class="address">Hanoi, Vietnam</span>
                                                <div class="icon-wrap">
                                                    <a href="#"><i class="icon md-email"></i></a>
                                                    <a href="#"><i class="icon md-user-plus"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END / LIST STUDENT -->

                                        <!-- LIST STUDENT -->
                                        <li>
                                            <div class="image">
                                                <img src="images/team-13.jpg" alt="">
                                            </div>
                                            <div class="list-body">
                                                <cite class="xsm"><a href="#">Neo Khuat</a></cite>
                                                <span class="address">Hanoi, Vietnam</span>
                                                <div class="icon-wrap">
                                                    <a href="#"><i class="icon md-email"></i></a>
                                                    <a href="#"><i class="icon md-user-plus"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END / LIST STUDENT -->

                                        <!-- LIST STUDENT -->
                                        <li>
                                            <div class="image">
                                                <img src="images/team-13.jpg" alt="">
                                            </div>
                                            <div class="list-body">
                                                <cite class="xsm"><a href="#">Neo Khuat</a></cite>
                                                <span class="address">Hanoi, Vietnam</span>
                                                <div class="icon-wrap">
                                                    <a href="#"><i class="icon md-email"></i></a>
                                                    <a href="#"><i class="icon md-user-plus"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END / LIST STUDENT -->

                                        <!-- LIST STUDENT -->
                                        <li>
                                            <div class="image">
                                                <img src="images/team-13.jpg" alt="">
                                            </div>
                                            <div class="list-body">
                                                <cite class="xsm"><a href="#">Neo Khuat</a></cite>
                                                <span class="address">Hanoi, Vietnam</span>
                                                <div class="icon-wrap">
                                                    <a href="#"><i class="icon md-email"></i></a>
                                                    <a href="#"><i class="icon md-user-plus"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END / LIST STUDENT -->

                                        <!-- LIST STUDENT -->
                                        <li>
                                            <div class="image">
                                                <img src="images/team-13.jpg" alt="">
                                            </div>
                                            <div class="list-body">
                                                <cite class="xsm"><a href="#">Neo Khuat</a></cite>
                                                <span class="address">Hanoi, Vietnam</span>
                                                <div class="icon-wrap">
                                                    <a href="#"><i class="icon md-email"></i></a>
                                                    <a href="#"><i class="icon md-user-plus"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- END / LIST STUDENT -->

                                    </ul>
                                </div>
                                <div class="load-more">
                                    <a href="">
                                        <i class="icon md-time"></i>
                                        Load more previous update</a>
                                </div>
                            </div>
                            <!-- END / STUDENT -->

                            <!-- COMMENT -->
                            <div class="tab-pane fade" id="conment">
                                <div id="respond">
                                    <h3 class="md black">100 Comments</h3>
                                    <form>
                                        <div class="comment-form-comment">
                                            <textarea placeholder="You have comment or question, write it here"></textarea>
                                        </div>
                                        <div class="form-submit">
                                            <input type="submit" value="Post" class="mc-btn-2 btn-style-2">
                                        </div>
                                    </form>
                                </div>
                                <ul class="commentlist">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <a href="#">
                                                    <img src="images/team-13.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="comment-content">
                                                <cite class="fn sm black bold"><a href="">John Doe</a></cite>
                                                <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>

                                                <div class="comment-meta">
                                                    <a href="#">5 days ago</a>
                                                    <a href="#">Hide 2 replies</a>
                                                    <a href="#"><i class="icon md-arrow-up"></i>13</a>
                                                    <a href="#"><i class="icon md-arrow-down"></i>25</a>
                                                </div>

                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author">
                                                        <a href="#">
                                                            <img src="images/team-13.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <cite class="fn sm black bold"><a href="">John Doe</a></cite>
                                                        <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>

                                                        <div class="comment-meta">
                                                            <a href="#">5 days ago</a>
                                                            <a href="#"><i class="icon md-arrow-up"></i>13</a>
                                                            <a href="#"><i class="icon md-arrow-down"></i>25</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author">
                                                        <a href="#">
                                                            <img src="images/team-13.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <cite class="fn sm black bold"><a href="">John Doe</a></cite>
                                                        <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>

                                                        <div class="comment-meta">
                                                            <a href="#">5 days ago</a>
                                                            <a href="#"><i class="icon md-arrow-up"></i>13</a>
                                                            <a href="#"><i class="icon md-arrow-down"></i>25</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <a href="#">
                                                    <img src="images/team-13.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="comment-content">
                                                <cite class="fn sm black bold"><a href="">John Doe</a></cite>
                                                <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>

                                                <div class="comment-meta">
                                                    <a href="#">5 days ago</a>
                                                    <a href="#">Hide 2 replies</a>
                                                    <a href="#"><i class="icon md-arrow-up"></i>13</a>
                                                    <a href="#"><i class="icon md-arrow-down"></i>25</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <a href="#">
                                                    <img src="images/team-13.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="comment-content">
                                                <cite class="fn sm black bold"><a href="">John Doe</a></cite>
                                                <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>

                                                <div class="comment-meta">
                                                    <a href="#">5 days ago</a>
                                                    <a href="#">Hide 2 replies</a>
                                                    <a href="#"><i class="icon md-arrow-up"></i>13</a>
                                                    <a href="#"><i class="icon md-arrow-down"></i>25</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <a href="#">
                                                    <img src="images/team-13.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="comment-content">
                                                <cite class="fn sm black bold"><a href="">John Doe</a></cite>
                                                <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet</p>

                                                <div class="comment-meta">
                                                    <a href="#">5 days ago</a>
                                                    <a href="#">Hide 2 replies</a>
                                                    <a href="#"><i class="icon md-arrow-up"></i>13</a>
                                                    <a href="#"><i class="icon md-arrow-down"></i>25</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="load-more">
                                    <a href="">
                                        <i class="icon md-time"></i>
                                        Load more previous update</a>
                                </div>
                            </div>
                            <!-- END / COMMENT -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / COURSE TOP -->

    <!-- FORM CHECKOUT -->
    <?php /*<div class="form-checkout">*/ ?>
        <?php /*<div class="container">*/ ?>
            <?php /*<div class="row">*/ ?>
                <?php /*<div class="col-md-10 col-md-offset-1">*/ ?>
                    <?php /*<form>*/ ?>
                        <?php /*<ul id="bar">*/ ?>
                            <?php /*<li class="active"><span class="count">1</span>Register</li>*/ ?>
                            <?php /*<li><span class="count">2</span>Order and payment</li>*/ ?>
                            <?php /*<li><span class="count">3</span>Finish checkout</li>*/ ?>
                        <?php /*</ul>*/ ?>
                        <?php /*<span class="closeForm"><i class="icon md-close-1"></i></span>*/ ?>
                        <?php /*<div class="form-body">*/ ?>
                            <?php /*<!-- fieldsets -->*/ ?>
                            <?php /*<fieldset>*/ ?>
                                <?php /*<form action="<?php echo e(route('post.student.login')); ?>" method="post" enctype="multipart/form-data">*/ ?>
                                <?php /*<div class="row">*/ ?>
                                    <?php /*<div class="col-md-5">*/ ?>
                                        <?php /*<div class="form-1">*/ ?>
                                            <?php /*<h3 class="fs-title text-capitalize">sign in</h3>*/ ?>
                                            <?php /*<div class="form-email">*/ ?>
                                                <?php /*<input type="text" placeholder="Phone, 00000000000">*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<div class="form-password">*/ ?>
                                                <?php /*<input type="password" placeholder="Password">*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<div class="form-check">*/ ?>
                                                <?php /*<input type="checkbox" id="check">*/ ?>
                                                <?php /*<label for="check">*/ ?>
                                                    <?php /*<i class="icon md-check-2"></i>*/ ?>
                                                    <?php /*Remember me</label>*/ ?>
                                                <?php /*<a href="#">Forget password?</a>*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<div class="form-submit-1">*/ ?>
                                                <?php /*<input type="button" value="Sign In and Continue" class="next mc-btn btn-style-1">*/ ?>
                                            <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                    <?php /*</div>*/ ?>

                                    <?php /*<div class="col-md-6">*/ ?>
                                        <?php /*<div class="form-2">*/ ?>
                                            <?php /*<h3 class="fs-title text-capitalize">New Member</h3>*/ ?>
                                            <?php /*<div class="form-firstname">*/ ?>
                                                <?php /*<input type="text" placeholder="First name" />*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<div class="form-lastname">*/ ?>
                                                <?php /*<input type="text" placeholder="Last name" />*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<div class="form-datebirth">*/ ?>
                                                <?php /*<input type="text" placeholder="Date of Birth">*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<div class="form-email">*/ ?>
                                                <?php /*<input type="text" name="pass" placeholder="Annamolly@outlook.com" class="error">*/ ?>
                                                <?php /*<span class="text-error">this email has been already taken</span>*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<div class="form-password">*/ ?>
                                                <?php /*<input type="password" name="pass" placeholder="Password" class="valid">*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<div class="form-submit-1">*/ ?>
                                                <?php /*<input type="button" value="Sign Up and Continue" class="next mc-btn btn-style-1">*/ ?>
                                            <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                    <?php /*</div>*/ ?>
                                <?php /*</div>*/ ?>
                                <?php /*</form>*/ ?>
                            <?php /*</fieldset>*/ ?>

                            <?php /*<fieldset>*/ ?>
                                <?php /*<div class="row">*/ ?>
                                    <?php /*<div class="col-md-5">*/ ?>
                                        <?php /*<div class="form-1">*/ ?>
                                            <?php /*<div class="mc-item mc-item-2">*/ ?>
                                                <?php /*<div class="image-heading">*/ ?>
                                                    <?php /*<img src="images/feature/img-1.jpg" alt="">*/ ?>
                                                <?php /*</div>*/ ?>
                                                <?php /*<div class="meta-categories"><a href="#">Web design</a></div>*/ ?>
                                                <?php /*<div class="content-item">*/ ?>
                                                    <?php /*<div class="image-author">*/ ?>
                                                        <?php /*<img src="images/avatar-1.jpg" alt="">*/ ?>
                                                    <?php /*</div>*/ ?>
                                                    <?php /*<h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>*/ ?>
                                                    <?php /*<div class="name-author">*/ ?>
                                                        <?php /*By <a href="#">Name of Mr or Mrs</a>*/ ?>
                                                    <?php /*</div>*/ ?>
                                                <?php /*</div>*/ ?>
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
                                                        <?php /*$190*/ ?>
                                                        <?php /*<span class="price-old">$134</span>*/ ?>
                                                    <?php /*</div>*/ ?>
                                                <?php /*</div>*/ ?>
                                            <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                    <?php /*</div>*/ ?>
                                    <?php /*<div class="col-md-6">*/ ?>
                                        <?php /*<div class="form-2">*/ ?>
                                            <?php /*<h3 class="fs-title">Choose your payment method</h3>*/ ?>
                                            <?php /*<ul class="pay">*/ ?>
                                                <?php /*<li>*/ ?>
                                                    <?php /*<input type="radio" name="pay" id="visa">*/ ?>
                                                    <?php /*<label for="visa">*/ ?>
                                                        <?php /*<i class="icon-radio"></i>*/ ?>
                                                        <?php /*Visa / Master Card*/ ?>
                                                    <?php /*</label>*/ ?>
                                                <?php /*</li>*/ ?>
                                                <?php /*<li>*/ ?>
                                                    <?php /*<input type="radio" name="pay" id="paypal">*/ ?>
                                                    <?php /*<label for="paypal">*/ ?>
                                                        <?php /*<i class="icon-radio"></i>*/ ?>
                                                        <?php /*Paypal*/ ?>
                                                    <?php /*</label>*/ ?>
                                                <?php /*</li>*/ ?>
                                                <?php /*<li>*/ ?>
                                                    <?php /*<input type="radio" name="pay" id="cash">*/ ?>
                                                    <?php /*<label for="cash">*/ ?>
                                                        <?php /*<i class="icon-radio"></i>*/ ?>
                                                        <?php /*Cash*/ ?>
                                                    <?php /*</label>*/ ?>
                                                <?php /*</li>*/ ?>
                                            <?php /*</ul>*/ ?>

                                            <?php /*<div class="form-cardnumber">*/ ?>
                                                <?php /*<label for="cardnumber">Card number</label>*/ ?>
                                                <?php /*<input type="text" id="cardnumber">*/ ?>
                                            <?php /*</div>*/ ?>

                                            <?php /*<div class="form-expirydate">*/ ?>
                                                <?php /*<label for="expirydate">Expiry date</label>*/ ?>
                                                <?php /*<input type="text" id="expirydate">*/ ?>
                                                <?php /*<input type="text">*/ ?>
                                            <?php /*</div>*/ ?>

                                            <?php /*<div class="form-code">*/ ?>
                                                <?php /*<label for="code">Code</label>*/ ?>
                                                <?php /*<input type="text" id="code">*/ ?>
                                            <?php /*</div>*/ ?>

                                            <?php /*<div class="clearfix"></div>*/ ?>

                                            <?php /*<div class="form-couponcode">*/ ?>
                                                <?php /*<label for="couponcode">Coupon code</label>*/ ?>
                                                <?php /*<input type="text" id="couponcode">*/ ?>
                                            <?php /*</div>*/ ?>

                                            <?php /*<div class="form-total">*/ ?>
                                                <?php /*<h4>Total Payment</h4>*/ ?>
                                                <?php /*<span class="price">$89</span>*/ ?>
                                            <?php /*</div>*/ ?>

                                            <?php /*<div class="clearfix"></div>*/ ?>

                                            <?php /*<div class="form-submit-1">*/ ?>
                                                <?php /*<input type="button" value="Confirm and Finish" class="next mc-btn btn-style-1">*/ ?>
                                            <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                    <?php /*</div>*/ ?>
                                <?php /*</div>*/ ?>
                            <?php /*</fieldset>*/ ?>

                            <?php /*<fieldset>*/ ?>
                                <?php /*<div class="row">*/ ?>
                                    <?php /*<div class="col-md-5">*/ ?>
                                        <?php /*<div class="form-1">*/ ?>
                                            <?php /*<div class="mc-item mc-item-2">*/ ?>
                                                <?php /*<div class="image-heading">*/ ?>
                                                    <?php /*<img src="images/feature/img-1.jpg" alt="">*/ ?>
                                                <?php /*</div>*/ ?>
                                                <?php /*<div class="meta-categories"><a href="#">Web design</a></div>*/ ?>
                                                <?php /*<div class="content-item">*/ ?>
                                                    <?php /*<div class="image-author">*/ ?>
                                                        <?php /*<img src="images/avatar-1.jpg" alt="">*/ ?>
                                                    <?php /*</div>*/ ?>
                                                    <?php /*<h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>*/ ?>
                                                    <?php /*<div class="name-author">*/ ?>
                                                        <?php /*By <a href="#">Name of Mr or Mrs</a>*/ ?>
                                                    <?php /*</div>*/ ?>
                                                <?php /*</div>*/ ?>
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
                                                        <?php /*$190*/ ?>
                                                        <?php /*<span class="price-old">$134</span>*/ ?>
                                                    <?php /*</div>*/ ?>
                                                <?php /*</div>*/ ?>
                                            <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                    <?php /*</div>*/ ?>
                                    <?php /*<div class="col-md-6">*/ ?>
                                        <?php /*<div class="form-2">*/ ?>
                                            <?php /*<h3 class="fs-title">Thank You For Your Purchase</3>*/ ?>
                                            <?php /*<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>*/ ?>

                                            <?php /*<div class="widget widget_share">*/ ?>
                                                <?php /*<h4>Share</h4>*/ ?>
                                                <?php /*<div class="share-body">*/ ?>
                                                    <?php /*<a href="#" class="twitter" title="twitter">*/ ?>
                                                        <?php /*<i class="icon md-twitter"></i>*/ ?>
                                                    <?php /*</a>*/ ?>
                                                    <?php /*<a href="#" class="pinterest" title="pinterest">*/ ?>
                                                        <?php /*<i class="icon md-pinterest-1"></i>*/ ?>
                                                    <?php /*</a>*/ ?>
                                                    <?php /*<a href="#" class="facebook" title="facebook">*/ ?>
                                                        <?php /*<i class="icon md-facebook-1"></i>*/ ?>
                                                    <?php /*</a>*/ ?>
                                                    <?php /*<a href="#" class="google-plus" title="google plus">*/ ?>
                                                        <?php /*<i class="icon md-google-plus"></i>*/ ?>
                                                    <?php /*</a>*/ ?>
                                                <?php /*</div>*/ ?>
                                            <?php /*</div>*/ ?>

                                            <?php /*<div class="form-submit-1">*/ ?>
                                                <?php /*<input type="submit" value="Start Learning" class="next mc-btn btn-style-1">*/ ?>
                                            <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                    <?php /*</div>*/ ?>
                                <?php /*</div>*/ ?>
                            <?php /*</fieldset>*/ ?>
                        <?php /*</div>*/ ?>
                    <?php /*</form>*/ ?>
                <?php /*</div>*/ ?>
            <?php /*</div>*/ ?>
        <?php /*</div>*/ ?>
    <?php /*</div>*/ ?>
    <!-- END / FORM CHECKOUT -->

    <!-- COURSE CONCERN -->
    <?php /*<section id="course-concern" class="course-concern">*/ ?>
        <?php /*<div class="container">*/ ?>
            <?php /*<h3 class="md black">Courses you may concern</h3>*/ ?>
            <?php /*<div class="row">*/ ?>
                <?php /*<div class="col-xs-6 col-sm-4 col-md-3">*/ ?>
                    <?php /*<!-- MC ITEM -->*/ ?>
                    <?php /*<div class="mc-item mc-item-2">*/ ?>
                        <?php /*<div class="image-heading">*/ ?>
                            <?php /*<img src="images/feature/img-1.jpg" alt="">*/ ?>
                        <?php /*</div>*/ ?>
                        <?php /*<div class="meta-categories"><a href="#">Web design</a></div>*/ ?>
                        <?php /*<div class="content-item">*/ ?>
                            <?php /*<div class="image-author">*/ ?>
                                <?php /*<img src="images/avatar-1.jpg" alt="">*/ ?>
                            <?php /*</div>*/ ?>
                            <?php /*<h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>*/ ?>
                            <?php /*<div class="name-author">*/ ?>
                                <?php /*By <a href="#">Name of Mr or Mrs</a>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
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
                                <?php /*$190*/ ?>
                                <?php /*<span class="price-old">$134</span>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<!-- END / MC ITEM -->*/ ?>
                <?php /*</div>*/ ?>

                <?php /*<div class="col-xs-6 col-sm-4 col-md-3">*/ ?>
                    <?php /*<!-- MC ITEM -->*/ ?>
                    <?php /*<div class="mc-item mc-item-2">*/ ?>
                        <?php /*<div class="image-heading">*/ ?>
                            <?php /*<img src="images/feature/img-1.jpg" alt="">*/ ?>
                        <?php /*</div>*/ ?>
                        <?php /*<div class="meta-categories"><a href="#">Web design</a></div>*/ ?>
                        <?php /*<div class="content-item">*/ ?>
                            <?php /*<div class="image-author">*/ ?>
                                <?php /*<img src="images/avatar-1.jpg" alt="">*/ ?>
                            <?php /*</div>*/ ?>
                            <?php /*<h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>*/ ?>
                            <?php /*<div class="name-author">*/ ?>
                                <?php /*By <a href="#">Name of Mr or Mrs</a>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
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
                                <?php /*$190*/ ?>
                                <?php /*<span class="price-old">$134</span>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<!-- END / MC ITEM -->*/ ?>
                <?php /*</div>*/ ?>

                <?php /*<div class="col-xs-6 col-sm-4 col-md-3">*/ ?>
                    <?php /*<!-- MC ITEM -->*/ ?>
                    <?php /*<div class="mc-item mc-item-2">*/ ?>
                        <?php /*<div class="image-heading">*/ ?>
                            <?php /*<img src="images/feature/img-1.jpg" alt="">*/ ?>
                        <?php /*</div>*/ ?>
                        <?php /*<div class="meta-categories"><a href="#">Web design</a></div>*/ ?>
                        <?php /*<div class="content-item">*/ ?>
                            <?php /*<div class="image-author">*/ ?>
                                <?php /*<img src="images/avatar-1.jpg" alt="">*/ ?>
                            <?php /*</div>*/ ?>
                            <?php /*<h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>*/ ?>
                            <?php /*<div class="name-author">*/ ?>
                                <?php /*By <a href="#">Name of Mr or Mrs</a>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
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
                                <?php /*$190*/ ?>
                                <?php /*<span class="price-old">$134</span>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<!-- END / MC ITEM -->*/ ?>
                <?php /*</div>*/ ?>

                <?php /*<div class="col-xs-6 col-sm-4 col-md-3">*/ ?>
                    <?php /*<!-- MC ITEM -->*/ ?>
                    <?php /*<div class="mc-item mc-item-2">*/ ?>
                        <?php /*<div class="image-heading">*/ ?>
                            <?php /*<img src="images/feature/img-1.jpg" alt="">*/ ?>
                        <?php /*</div>*/ ?>
                        <?php /*<div class="meta-categories"><a href="#">Web design</a></div>*/ ?>
                        <?php /*<div class="content-item">*/ ?>
                            <?php /*<div class="image-author">*/ ?>
                                <?php /*<img src="images/avatar-1.jpg" alt="">*/ ?>
                            <?php /*</div>*/ ?>
                            <?php /*<h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>*/ ?>
                            <?php /*<div class="name-author">*/ ?>
                                <?php /*By <a href="#">Name of Mr or Mrs</a>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
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
                                <?php /*$190*/ ?>
                                <?php /*<span class="price-old">$134</span>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<!-- END / MC ITEM -->*/ ?>
                <?php /*</div>*/ ?>
            <?php /*</div>*/ ?>
        <?php /*</div>*/ ?>
    <?php /*</section>*/ ?>
    <!-- END / COURSE CONCERN -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>