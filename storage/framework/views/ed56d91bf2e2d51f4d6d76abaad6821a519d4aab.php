<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1><?php echo e(strtolower($student->name)); ?> student new course details </h1>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h4>Course Details</h4>
                <?php if($course): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php if($course->promo_video != ""): ?>
                                    <iframe width="300" height="300" poster="<?php echo e(asset('subjects/' . $course->image)); ?>" src="<?php echo e($course->promo_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <?php else: ?>
                                    <p class="label label-primary">Video Not Available</p>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-9">
                            <p><?php echo $course->title; ?> </p>
                            <p><label>Short Details:</label> <?php echo $course->short_details; ?> </p>
                            <p><label>Code:</label> #C-<?php echo $course->code; ?> </p>
                            <p><label>Study Group:</label>  <?php echo e($course->subject_type_id != null && isset($course->subject_type) ? $course->subject_type->title : 'Not Available'); ?></p>
                            <p><label>Type:</label>  <?php echo e($course->course_type != -1 && isset($course->course_type) ? $course->course_to_teach->title : 'Not Available'); ?></p>
                            <p><label>Class:</label>  <?php echo e($course->class_id != null && isset($course->student_class) ? $course->student_class->title : 'Not Available'); ?></p>
                            <p><label>Created Date:</label>  <?php echo $course->created_at; ?></p>
                            <p><label>Updated Date:</label>  <?php echo $course->updated_at; ?></p>
                            <p><label>Details:</label>  <?php echo $course->details; ?></p>

                        </div>

                    </div>
                    <hr>
                <?php else: ?>
                    <h3>Course details not available</h3>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <h4>Teacher Details</h4>
                <hr>
                <?php if($teacher): ?>
                    <div class="row">
                        <div class="col-md-6">
                            <p><?php echo $teacher->name; ?> <?php echo $teacher->fathername; ?> (Code: <?php echo $teacher->teacher_code; ?>)</p>
                            <p><label>Contacts:</label> <?php echo $teacher->contact1; ?> | <?php echo $teacher->contact2; ?></p>
                            <p><label>Email:</label>  <?php echo $teacher->email; ?></p>
                            <p><label>Qualification:</label>  <?php echo $teacher->qualificatioon; ?></p>
                            <p><label>Teaching Expertise Area:</label>  <?php echo $teacher->course_to_teach->title; ?></p>
                            <p><label>Experience:</label>  <?php echo $teacher->experience; ?></p>
                            <p><label>Country:</label>  <?php echo $teacher->country; ?></p>
                            <p><label>City:</label>  <?php echo $teacher->city; ?></p>
                            <p><label>Joining Date:</label>  <?php echo $teacher->created_at; ?></p>


                        </div>
                    </div>
                <?php else: ?>
                    <h3>Teacher details not available</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <a href="<?php echo e(route('admin.students.index')); ?>" class="btn btn-primary">Back</a>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('admin2.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>