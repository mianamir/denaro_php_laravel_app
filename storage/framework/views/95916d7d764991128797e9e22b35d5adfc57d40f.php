

<?php $__env->startSection('content'); ?>


    <!-- FEATURED REQUEST TEACHER -->
    <section id="featured-request-teacher" class="featured-request-teacher">
        <div class="awe-parallax bg-featured-request-teacher"></div>
        <div class="awe-overlay overlay-color-1"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <div class="request-form">
                        <h2>Join as a teacher</h2>
                        <form action="<?php echo e(route('become.teacher.step1')); ?>" method="post" enctype="multipart/form-data">
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
                            <?php if(Session::has('course_to_teach_id')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(Session::get('course_to_teach_id')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Session::has('experience')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(Session::get('experience')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(Session::has('username')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(Session::get('username')); ?>

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
                            <?php if(Session::has('status')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(Session::get('status')); ?>

                                </div>
                            <?php endif; ?>


                            <div class="form-yourname">
                                <input type="text" placeholder="Name" name="name" class="form-control" required>
                            </div>
                            <div class="form-yourname">
                                <input type="text" placeholder="Father Name" name="fathername" class="form-control" required>
                            </div>
                            <div class="form-yourname">

                                <input type="text" placeholder="Contact1" name="contact1" class="form-control" required>
                            </div>
                            <div class="form-yourname">

                                <input type="text" placeholder="Contact2"  name="contact2" class="form-control" required>
                            </div>

                            <div class="form-yourname">

                                <input type="email" placeholder="Email" name="email" class="form-control" required>
                            </div>

                            <div class="form-yourname">

                                <input type="text" placeholder="Qualification" name="qualificatioon" class="form-control" required>
                            </div>

                            <?php
                            $course_to_teaches = \App\Models\Admin\CourseToTeach::all();
                            ?>
                            <div class="form-question mc-select">
                                <select name="course_to_teach_id" class = "select" required>
                                    <option value="-1">Select course to teach</option>
                                    <?php foreach($course_to_teaches as $course_to_teach): ?>
                                        <option value="<?php echo e($course_to_teach->id); ?>" <?php if(isset($teacher) && $course_to_teach->id == $teacher->course_to_teach_id): ?> selected="selected" <?php endif; ?>><?php echo e($course_to_teach->title); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-yourname">

                                <input type="text" placeholder="Experience" name="experience" class="form-control" required>
                            </div>
                            <div class="form-yourname">

                                <input type="text" placeholder="User Name (Type username correctly)" name="username" class="form-control" required>
                            </div>
                            <div class="form-yourname">

                                <input type="password" placeholder="Password" name="password" class="form-control" required>
                            </div>
                            <div class="form-yourname">

                                <input type="text" placeholder="Country" name="country" class="form-control" required>
                            </div>

                            <div class="form-yourname">

                                <input type="text" placeholder="City" name="city" class="form-control" required>
                            </div>

                            <div class="form-submit-1">
                            <input type="submit" value="Submit" class="mc-btn btn-style-1">
                            </div>
                        </form>


                    </div>
                </div>

                <div class="col-md-7">
                    <div class="request-featured">
                        <h1 class="big">Why you should be our teacher ?</h1>

                        <div class="row">
                            <!-- FEATURED ITEM -->
                            <div class="col-md-6">
                                <div class="featured-item">
                                    <i class="icon icon-featured-1"></i>
                                    <h4 class="title-box text-uppercase">CLEAN AND EASY</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam  tincidunt ut laoreet</p>
                                </div>
                            </div>
                            <!-- END / FEATURED ITEM -->

                            <!-- FEATURED ITEM -->
                            <div class="col-md-6">
                                <div class="featured-item">
                                    <i class="icon icon-featured-2"></i>
                                    <h4 class="title-box text-uppercase">TEACH AS YOU CAN</h4>
                                    <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                                </div>
                            </div>
                            <!-- END / FEATURED ITEM -->

                            <!-- FEATURED ITEM -->
                            <div class="col-md-6">
                                <div class="featured-item">
                                    <i class="icon icon-featured-3"></i>
                                    <h4 class="title-box text-uppercase">COMMUNITY SUPPORT</h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                                </div>
                            </div>
                            <!-- END / FEATURED ITEM -->

                            <!-- FEATURED ITEM -->
                            <div class="col-md-6">
                                <div class="featured-item">
                                    <i class="icon icon-featured-4"></i>
                                    <h4 class="title-box text-uppercase">TRACKING PERFORMANCE</h4>
                                    <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                                </div>
                            </div>
                            <!-- END / FEATURED ITEM -->
                        </div>

                        <div class="second-featured">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / FEATURED REQUEST TEACHER -->

    <!-- FRECUENT ASKED QUESTIONS -->
    <section id="questions" class="questions">
        <div class="container">
            <h2 class="md black">Frequent Asked Questions</h2>
            <div id="accordion" class="panel-group">

                <!-- PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#question-1">
                                1 . What is benefit if I become a teacher?
                            </a>
                        </h4>
                    </div>
                    <div id="question-1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h5 class="sm black bold">Goal of course</h5>
                            <ul class="list-disc">
                                <li>
                                    <p>sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                                </li>
                                <li>
                                    <p>ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequa</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END / PANEL -->

                <!-- PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#question-2">
                                2 . How to be a teacher ?
                            </a>
                        </h4>
                    </div>
                    <div id="question-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h5 class="sm black bold">Goal of course</h5>
                            <ul class="list-disc">
                                <li>
                                    <p>sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                                </li>
                                <li>
                                    <p>ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequa</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END / PANEL -->

                <!-- PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#question-3">
                                3. How to deliver my course ?
                            </a>
                        </h4>
                    </div>
                    <div id="question-3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                </div>
                <!-- END / PANEL -->

                <!-- PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#question-4">
                                4. How to keep on my classes and my students ?
                            </a>
                        </h4>
                    </div>
                    <div id="question-4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h5 class="sm black bold">Goal of course</h5>
                            <ul class="list-disc">
                                <li>
                                    <p>sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                                </li>
                                <li>
                                    <p>ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequa</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END / PANEL -->

                <!-- PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#question-5">
                                5. How to  receive my payment ?
                            </a>
                        </h4>
                    </div>
                    <div id="question-5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                </div>
                <!-- END / PANEL -->

            </div>
        </div>
    </section>
    <!-- END / FRECUENT ASKED QUESTIONS -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.virtual_school', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>