
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
                <h3>Edit Profile </h3>
                <?php /*<span>$ 29,278</span>*/ ?>
                <?php /*<div class="create-coures">*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-1">Create new course</a>*/ ?>
                    <?php /*<a href="#" class="mc-btn btn-style-5">Request Payment</a>*/ ?>
                <?php /*</div>*/ ?>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- MC ITEM -->
                    <form action="<?php echo e(route('post.account.teacher.profile')); ?>" method="post" enctype="multipart/form-data">
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
                        <?php if(Session::has('qualificatioon')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('qualificatioon')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('subject_to_teach')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('subject_to_teach')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('experience')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('experience')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::has('password')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('password')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('country')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('country')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('city')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('city')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('cnic')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('cnic')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('cnic')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('cnic')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::has('payment_plan_id')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('payment_plan_id')); ?>

                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-yourname">
                                    <input type="text" value="<?php echo e(old('name', $teacher->name)); ?>" placeholder="Name" name="name" class="form-control" required>
                                </div>
                                <div class="form-yourname">
                                    <input type="text"  placeholder="Father Name" name="fathername" value="<?php echo e(old('fathername', $teacher->fathername)); ?>" class="form-control" required>
                                </div>
                                <div class="form-yourname">

                                    <input type="text" placeholder="Contact1" name="contact1" value="<?php echo e(old('contact1', $teacher->contact1)); ?>" class="form-control" required>
                                </div>
                                <div class="form-yourname">

                                    <input type="text" placeholder="Contact2"  name="contact2" value="<?php echo e(old('contact2', $teacher->contact2)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="email" placeholder="Email" name="email" value="<?php echo e(old('email', $teacher->email)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="text" placeholder="Qualification" name="qualificatioon" value="<?php echo e(old('qualificatioon', $teacher->qualificatioon)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="text" placeholder="Subject to Teach" name="subject_to_teach" value="<?php echo e(old('subject_to_teach', $teacher->subject_to_teach)); ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-yourname">

                                    <input type="text" placeholder="Experience" name="experience" value="<?php echo e(old('experience', $teacher->experience)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="password" placeholder="Password" name="password" value="<?php echo e(old('password2', $teacher->password2)); ?>" class="form-control" required>
                                </div>
                                <div class="form-yourname">

                                    <input type="text" placeholder="Country" name="country" value="<?php echo e(old('country', $teacher->country)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="text" placeholder="City" name="city" value="<?php echo e(old('city', $teacher->city)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">
                                    <input type="file" placeholder="" name="profile_pic"  class="form-control">
                                </div>
                                <div class="form-yourname">
                                    <input type="text" placeholder="CNIC" name="cnic" name="cnic" value="<?php echo e(old('cnic', $teacher->cnic)); ?>" class="form-control" required>
                                </div>

                                <?php
                                $payment_plans = \App\Models\Admin\PaymentPlan::all()
                                ?>
                                <div class="form-question mc-select">
                                    <select name="payment_plan_id" class = "select" required>
                                        <?php foreach($payment_plans as $payment_plan): ?>
                                            <option value="<?php echo e($payment_plan->id); ?>"
                                                    <?php if($payment_plan->id == $teacher->payment_plan_id): ?> selected="selected" <?php endif; ?>>Rs. <?php echo e($payment_plan->price); ?>/<?php echo e($payment_plan->duration); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>
                        </div>


                        <div class="form-submit-1">
                            <input type="submit" value="Submit" class="mc-btn btn-style-1">
                        </div>
                    </form>

                    <!-- END / MC ITEM -->
                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>