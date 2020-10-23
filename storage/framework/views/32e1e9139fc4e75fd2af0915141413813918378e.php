
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
                    <form action="<?php echo e(route('post.student.profile.edit')); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                        <?php if(Session::has('success_flash_message')): ?>
                            <div class="alert alert-info">
                                <?php echo e(Session::get('success_flash_message')); ?>

                            </div>
                        <?php endif; ?>


                        <?php if(Session::has('class_id')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('class_id')); ?>

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
                        <?php if(Session::has('email')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('email')); ?>

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

                        <?php if(Session::has('gender')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('gender')); ?>

                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-lg-6">
                                <?php
//                                $studentclasses = \App\Models\Admin\StudentClass::all();
                                ?>
                                <?php /*<div class="form-question mc-select">*/ ?>
                                    <?php /*<select name="class_id" class = "select" required>*/ ?>
                                        <?php /*<?php foreach($studentclasses as $student_class): ?>*/ ?>
                                            <?php /*<option value="<?php echo e($student_class->id); ?>" <?php if(isset($student)): ?> <?php if($student->class_id == $student_class->id): ?> selected <?php endif; ?> <?php endif; ?>>*/ ?>
                                                <?php /*<?php echo e($student_class->title); ?>*/ ?>
                                            <?php /*</option>*/ ?>
                                        <?php /*<?php endforeach; ?>*/ ?>
                                    <?php /*</select>*/ ?>
                                <?php /*</div>*/ ?>

                                <div class="form-yourname">
                                    <input type="text" value="<?php echo e(old('name', $student->name)); ?>" placeholder="Name" name="name" class="form-control" required>
                                </div>
                                <div class="form-yourname">
                                    <input type="text"  placeholder="Father Name" name="fathername" value="<?php echo e(old('fathername', $student->father_name)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="email" placeholder="Email" name="email" value="<?php echo e(old('email', $student->email)); ?>" class="form-control" required>
                                </div>

                                <div class="form-question mc-select">
                                    <select name="gender" class = "select" required>
                                        <option value="male" <?php if(isset($student)): ?> <?php if($student->gender == "male"): ?> selected <?php endif; ?> <?php endif; ?>>Male</option>
                                        <option value="female" <?php if(isset($student)): ?> <?php if($student->gender == "female"): ?> selected <?php endif; ?> <?php endif; ?>>Female</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="form-yourname">

                                    <input type="password" placeholder="Password, should be 6 digits long i.e 123!$#" name="password" value="<?php echo e(old('password2', $student->password2)); ?>" class="form-control" required>
                                </div>
                                <div class="form-yourname">

                                    <input type="text" placeholder="Country" name="country" value="<?php echo e(old('country', $student->country)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">

                                    <input type="text" placeholder="City" name="city" value="<?php echo e(old('city', $student->city)); ?>" class="form-control" required>
                                </div>

                                <div class="form-yourname">
                                    <?php if(isset($student)): ?>
                                        <p><img src="<?php echo e(asset('students/' . $student->profile_pic)); ?>" width="50" height="50"/></p>
                                    <?php endif; ?>
                                    <input type="file" placeholder="" name="profile_pic"  class="form-control">
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