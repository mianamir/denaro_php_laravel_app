
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
                <h3><?php echo e($chapter->title); ?> / edit topic</h3>
                <?php /*<span>$ 29,278</span>*/ ?>
                <?php /*<div class="create-coures">*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-1">Create new course</a>*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-5">Request Payment</a>*/ ?>
                <?php /*</div>*/ ?>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- MC ITEM -->
                    <form action="<?php echo e(route('post.frontend.topic.edit')); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <strong>Error!</strong> please provide below form fields.<br><br>
                                <ul>
                                    <?php foreach($errors->all() as $error): ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('success_flash_message')): ?>
                            <div class="alert alert-info">
                                <?php echo e(Session::get('success_flash_message')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::has('topic_not_saved_flash_message')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('topic_not_saved_flash_message')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::has('title')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('title')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::has('details')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('details')); ?>

                            </div>
                        <?php endif; ?>


                <div class="row">
                    <input type="hidden" name="topic_id" value="<?php echo e($topic->id); ?>">
                    <div class="col-md-4">
                        <div class="form-yourname">
                            <input type="text"  placeholder="Title" name="title" value="<?php echo e(old('title', $topic->title)); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-yourname">
                            <input type="text"  placeholder="Topic Video URL" name="topic_video" value="<?php echo e(old('topic_video', $topic->topic_video)); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-question mc-select">

                            <select class="select" name="status" id="status" required>
                                <option value="active" <?php echo e(isset($topic) && $topic->status == "active" ?"selected":''); ?>>Active</option>
                                <option value="inactive" <?php echo e(isset($topic) && $topic->status == "inactive" ?"selected":''); ?>>In Active</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="description-editor text-form-editor">
                            <textarea placeholder="Discussion content" name="details" id="details">
                                <?php echo e($topic->details); ?>

                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="form-submit-1">
                            <input type="submit" value="Submit" class="mc-btn btn-style-1">
                        </div>

                </form>


                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>