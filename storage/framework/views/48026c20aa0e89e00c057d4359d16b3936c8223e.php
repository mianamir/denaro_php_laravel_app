
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
                <h3><?php echo e($chapter->title); ?> / topic details</h3>
                <?php /*<span>$ 29,278</span>*/ ?>
                <?php /*<div class="create-coures">*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-1">Create new course</a>*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-5">Request Payment</a>*/ ?>
                <?php /*</div>*/ ?>

            </div>
            <div class="row">
                <div class="col-md-12">

                <div class="row" id="topic_detail_video">
                    <div class="col-md-12">
                        <div id="overlay" style="width:100%;height:43%;z-index: 1;position: absolute; top: 20;left: 0;">
                        </div>
                        <br>
                        <div id="overlay" style="width:100%;height:43%;z-index: 1;position: absolute; top: 20;left: 0;">
                        </div>
                        <div class="form-group">
                            <?php if($topic->topic_video != ""): ?>
                                <iframe width="100%" height="500" poster="" src="<?php echo e($topic->topic_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php else: ?>
                                <p class="label label-primary">Video Not Available</p>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h1><?php echo $topic->title; ?> </h1>
                        <p><label>Class:</label>  <?php echo isset($topic->topic_class) ? $topic->topic_class->title : 'Not Available'; ?></p>
                        <p><label>Class:</label>  <?php echo isset($topic->subject) ? $topic->subject->title : 'Not Available'; ?></p>
                        <p><label>Class:</label>  <?php echo isset($topic->chapter) ? $topic->chapter->title : 'Not Available'; ?></p>
                        <p><label>Status:</label>  <?php echo $topic->status; ?></p>
                        <p><label>Created Date:</label>  <?php echo $topic->created_at; ?></p>
                        <p><label>Updated Date:</label>  <?php echo $topic->updated_at; ?></p>
                        <p><label>Details:</label>  <?php echo $topic->details; ?></p>

                    </div>

                </div>


                 <a href="<?php echo e(route('get.frontend.topics', ['id' => $topic->chapter->id])); ?>" class="mc-btn btn-style-1">Back</a>


                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>