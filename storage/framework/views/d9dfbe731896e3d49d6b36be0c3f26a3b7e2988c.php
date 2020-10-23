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
    <section class="content-bar">
        <div class="container">
            <ul>
                <?php /*<li>*/ ?>
                <?php /*<a href="account-learning.html">*/ ?>
                <?php /*<i class="icon md-book-1"></i>*/ ?>
                <?php /*Learning*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <li class="current">
                    <a href="<?php echo e(route('teaching.account.dashboard')); ?>">
                        <i class="icon md-people"></i>
                        Teaching
                    </a>
                </li>
                <?php /*<li>*/ ?>
                <?php /*<a href="account-assignment.html">*/ ?>
                <?php /*<i class="icon md-shopping"></i>*/ ?>
                <?php /*Assignment*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <li>
                    <a href="<?php echo e(route('get.account.teacher.profile')); ?>">
                        <i class="icon md-user-minus"></i>
                        Profile
                    </a>
                </li>
                <?php /*<li>*/ ?>
                <?php /*<a href="account-inbox.html">*/ ?>
                <?php /*<i class="icon md-email"></i>*/ ?>
                <?php /*Inbox*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
            </ul>
        </div>
    </section>
    <!-- END / CONTENT BAR -->



    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">

            <div class="price-course">
                <i class="icon md-database"></i>
                <h3>Design Course Step2 </h3>
                <?php /*<span>$ 29,278</span>*/ ?>
                <?php /*<div class="create-coures">*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-1">Create new course</a>*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-5">Request Payment</a>*/ ?>
                <?php /*</div>*/ ?>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- MC ITEM -->
                    <form action="<?php echo e(route('post.design.course.step2', ['id' => $course->id])); ?>" method="post" enctype="multipart/form-data">
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

                        <?php if(Session::has('course_not_found_flash_message')): ?>
                            <div class="alert alert-info">
                                <?php echo e(Session::get('course_not_found_flash_message')); ?>

                            </div>
                        <?php endif; ?>

                    <?php if(Session::has('name')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('name')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('fathername')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('fathername')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('contact1')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('contact1')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('contact2')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('contact2')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('email')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('email')); ?>

                            </div>
                        <?php endif; ?>


                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        $subject_types = \App\Models\Admin\SubjectType::all()
                        ?>
                        <div class="form-question mc-select">
                            <select name="subject_type_id" class = "select" required>
                                <?php foreach($subject_types as $subject_type): ?>
                                    <option value="<?php echo e($subject_type->id); ?>"><?php echo e($subject_type->title); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-yourname">
                            <input type="text" placeholder="Title" name="title" class="form-control" required>
                        </div>
                        <div class="form-yourname">
                            <input type="text"  placeholder="Short Details" name="short_details" class="form-control" required>
                        </div>
                        <div class="form-yourname">

                            <input type="text" placeholder="Price"  name="price" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-question mc-select">
                            <select name="status" class = "select" required>
                                <option value="active">Active</option>
                                <option value="inactive">In Active</option>
                            </select>
                        </div>
                        <div class="form-yourname">

                            <input type="text" placeholder="Promo Video Youtube URL i.e https://www.youtube.com/embed/pT8H8JuXrqE"  name="promo_video" class="form-control" required>
                        </div>

                        <?php /*<div class="form-question mc-select">*/ ?>
                            <?php /*<select name="is_featured" class = "select" required>*/ ?>
                                <?php /*<option value="1">Is Featured</option>*/ ?>
                                <?php /*<option value="0">Is Not Featured</option>*/ ?>
                            <?php /*</select>*/ ?>
                        <?php /*</div>*/ ?>
                        <br><br>

                        <div class="form-item form-checkbox checkbox-style">
                            <input type="checkbox" id="lifestyle" name="is_featured">
                            <label for="lifestyle">
                                <i class="icon-checkbox icon md-check-1"></i>
                                Is Featured
                            </label>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="description-editor text-form-editor">
                            <textarea placeholder="Discussion content" name="details" id="details"></textarea>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="image-info">
                            <img src="<?php echo e(asset('subjects/img-upload.jpg')); ?>" alt="">
                        </div>
                        <div class="upload-recrop">
                            <div class="upload-image up-file">
                                <a href="#"><i class="icon md-upload"></i>Upload course image</a>
                                <input type="file" name="image" required>
                            </div>
                            <?php /*<div class="recrop">*/ ?>
                            <?php /*<a href="#"><i class="icon md-crop"></i>Recrop</a>*/ ?>
                            <?php /*</div>*/ ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-info">
                            <img src="<?php echo e(asset('subjects/img-upload.jpg')); ?>" alt="">
                        </div>
                        <div class="upload-recrop">
                            <div class="upload-image up-file">
                                <a href="#"><i class="icon md-upload"></i>Upload course promo video feature image</a>
                                <input type="file" name="promo_video_featured_image" required>
                            </div>
                            <?php /*<div class="recrop">*/ ?>
                            <?php /*<a href="#"><i class="icon md-crop"></i>Recrop</a>*/ ?>
                            <?php /*</div>*/ ?>
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