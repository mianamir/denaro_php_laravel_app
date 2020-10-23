<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?php if($subject->promo_video != ""): ?>
                    <iframe width="87%" height="500" poster="<?php echo e(asset('subjects/' . $subject->image)); ?>" src="<?php echo e($subject->promo_video); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php else: ?>
                    <p class="label label-primary">Video Not Available</p>
                <?php endif; ?>

            </div>
        </div>



    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?php if($subject->image != null): ?>
                    <image src="<?php echo e(asset('subjects/'. $subject->image)); ?>" width="320" height="240"/>
                <?php else: ?>
                    <p class="label label-primary">Image Not Available</p>
                <?php endif; ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php if($subject->promo_video_featured_image != null): ?>
                    <image src="<?php echo e(asset('subjects/'. $subject->promo_video_featured_image)); ?>" width="320" height="240"/>
                <?php else: ?>
                    <p class="label label-primary">Image Not Available</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h1><?php echo $subject->title; ?> </h1>
            <p><label>Short Details:</label> <?php echo $subject->short_details; ?> </p>
            <p><label>Code:</label> #C-<?php echo $subject->code; ?> </p>
            <p><label>Study Group:</label>  <?php echo e($subject->subject_type_id != null && isset($subject->subject_type) ? $subject->subject_type->title : 'Not Available'); ?></p>
            <p><label>Type:</label>  <?php echo e($subject->course_type != -1 && isset($subject->course_type) ? $subject->course_to_teach->title : 'Not Available'); ?></p>
            <p><label>Class:</label>  <?php echo e($subject->class_id != null && isset($subject->student_class) ? $subject->student_class->title : 'Not Available'); ?></p>
            <p><label>Is Featured:</label>  <?php echo e($subject->is_featured == 1 ? 'Yes' : 'No'); ?></p>
            <p><label>Status:</label>  <?php echo $subject->status; ?></p>
            <p><label>Created Date:</label>  <?php echo $subject->created_at; ?></p>
            <p><label>Updated Date:</label>  <?php echo $subject->updated_at; ?></p>
            <p><label>Details:</label>  <?php echo $subject->details; ?></p>

        </div>

    </div>

</div>