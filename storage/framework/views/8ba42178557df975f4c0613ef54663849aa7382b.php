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
                <h3><?php echo e($teacher->name); ?> / students</h3>

            </div>
            <div class="create-coures">
                <a href="<?php echo e(route('get.student.register')); ?>" class="mc-btn btn-style-1">New student +</a>
            </div>
            <div class="row">
                <?php if(Session::has('course_design__step1_success_flash_message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success_flash_message')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::has('student_not_found_flash_message')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('student_not_found_flash_message')); ?>

                    </div>
                <?php endif; ?>
                <div class="col-md-12">

                    <table class="table table-responsive" id="myTable">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($teacher_students as $teacher_student): ?>
                            <?php
                            $student = \App\Models\Admin\Student::
                                where(['id' => $teacher_student->student_id, 'status' => 'active'])->first();
                            ?>

                            <?php if(isset($student)): ?>
                            <tr>
                                <td><img src="<?php echo asset('students/'.$student->profile_pic); ?>" width="70" height="70"></td>
                                <td>S-<?php echo $student->code; ?></td>
                                <td><?php echo $student->name; ?></td>
                                <td><?php echo isset($student) ? $student->student_class_func->title : "Not Available"; ?></td>
                                <td><?php echo $student->phone; ?></td>
                                <td><?php echo $student->password2; ?></td>
                                <td><?php echo $student->email; ?></td>

                                <td>
                                    <?php if($student->status == "active"): ?>
                                        <span class="label label-primary">Active</span>
                                    <?php else: ?>
                                        <span class="label label-warning">In Active</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php /*<?php echo Form::open(['route' => ['get.student.register', $student->id], 'method' => 'delete']); ?>*/ ?>
                                    <div class='btn-group'>
                                        <a href="<?php echo route('teacher.student.show', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo route('teacher.student.edit', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo route('teacher.student.course.registration', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-book"></i></a>
                                        <a href="<?php echo route('teacher.student.registered_courses', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-th-list"></i></a>

                                        <?php /*<?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>*/ ?>
                                    </div>
                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                    <a href="<?php echo e(route('teaching.account.dashboard')); ?>" class="mc-btn btn-style-1">Back</a>

                </div>


            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>