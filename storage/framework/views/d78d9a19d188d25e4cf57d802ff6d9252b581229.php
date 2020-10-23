<div class="row" style="">
    <!-- Image Field -->
    <div class="col-md-4">
        <?php if(isset($subject)): ?>
            <img class="img-responsive" width="100" height="100" src="<?php echo e(asset('subjects/'. $subject->image)); ?>"/>
        <?php endif; ?>
        <?php echo Form::label('image', 'Subject Image:'); ?>

        <?php /*<?php echo Form::file('image'); ?>*/ ?>
        <input type="file" class="form-control" name="image">
    </div>
    <!-- Image Field -->
    <div class="col-md-4">
        <?php if(isset($subject)): ?>
            <img class="img-responsive" width="100" height="100" src="<?php echo e(asset('subjects/'. $subject->promo_video_featured_image)); ?>"/>

        <?php endif; ?>
        <?php echo Form::label('promo_video_featured_image', 'Video Featured Image:'); ?>

        <?php /*<?php echo Form::file('promo_video_featured_image'); ?>*/ ?>
            <input type="file" class="form-control" name="promo_video_featured_image">
    </div>
    <!-- Image Field -->
    <div class="col-md-4">

        <?php if(isset($subject) && $subject->promo_video != null): ?>
            <iframe width="100" height="100" poster="<?php echo e(asset('subjects/' . $subject->featured_image)); ?>" src="<?php echo e($subject->promo_video); ?>" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php /*<image src="<?php echo e(asset($subject->promo_video)); ?>" width="100" height="100"/>*/ ?>
        <?php else: ?>
            <p class="label label-primary">Video Not Available</p>
        <?php endif; ?>



        <?php echo Form::label('promo_video', 'Promo Video Youtube URL:'); ?>

        <?php /*<?php echo Form::file('promo_video'); ?>*/ ?>
        <?php echo Form::text('promo_video', null, ['class' => 'form-control']); ?>

    </div>
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Short Details:'); ?>

    <?php echo Form::text('short_details', null, ['class' => 'form-control']); ?>

</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php
    $subject_types = \App\Models\Admin\SubjectType::all();

    ?>
    <?php echo Form::label('subject_type_id', 'Subject Type:'); ?>

    <select name="subject_type_id" class = "form-control">
        <option value="-1">Select Subject Type</option>
        <?php foreach($subject_types as $subject_type): ?>
        <option value="<?php echo e($subject_type->id); ?>" <?php if(isset($subject)): ?> <?php if($subject->subject_type_id==$subject_type->id): ?> selected <?php endif; ?> <?php endif; ?> >
            <?php echo e($subject_type->title); ?>

        </option>
        <?php endforeach; ?>
    </select>
</div>


<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php
    $studentclasses = \App\Models\Admin\StudentClass::all();

    ?>
    <?php echo Form::label('calss', 'Subject Class:'); ?>

    <select name="class_id" class = "form-control" required>
        <option value="">Select Class</option>
        <?php foreach($studentclasses as $subject_class): ?>
            <option value="<?php echo e($subject_class->id); ?>" <?php if(isset($subject)): ?> <?php if($subject->class_id == $subject_class->id): ?> selected <?php endif; ?> <?php endif; ?>>
                <?php echo e($subject_class->title); ?>

            </option>
        <?php endforeach; ?>
    </select>
</div>



<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <select name="status" class = "form-control" required>
        <?php /*<option value="-1">Select Status</option>*/ ?>
        <option value="active" <?php echo e(isset($subject) && $subject->status == "active" ?"selected":''); ?>>Active</option>
        <option value="inactive" <?php echo e(isset($subject) && $subject->status == "inactive" ?"selected":''); ?>>In Active</option>

    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('price', 'Price:'); ?>

    <?php echo Form::text('price', null, ['class' => 'form-control']); ?>

</div>
<!-- course_to_teach_id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('course_type_id', 'Course Type:'); ?>

    <?php
    $course_types = \App\Models\Admin\CourseToTeach::all()
    ?>
    <select name="course_type_id" id="course_type_id" class = "form-control" required>
        <option value="-1">Select Course Study Group</option>
        <?php foreach($course_types as $course_type): ?>
            <option value="<?php echo e($course_type->id); ?>" <?php if(isset($teacher) && $course_type->id == $subject->course_type): ?> selected="selected" <?php endif; ?>><?php echo e($course_type->title); ?></option>
        <?php endforeach; ?>
    </select>
</div>
<!-- teacher Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('teacher', 'Teacher:'); ?>


    <select name="course_teacher_id" id="course_teacher_id" class = "form-control" required>
    <?php if(isset($teacher)): ?>
        <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->name); ?></option>
    <?php endif; ?>
    </select>
</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('is_featured', 'Is Featured:'); ?>

    <?php echo Form::checkbox('is_featured', null,(isset($subject) && $subject->is_featured == 1 ? true : null) ,[]); ?>

    <?php /*<input name="is_featured" type="checkbox" id="is_featured" <?php if(isset($subject)): ?> <?php if($subject->is_featured == 1): ?> checked <?php endif; ?> <?php endif; ?>>*/ ?>
</div>

<!-- Title Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('details', 'Details:'); ?>

    <?php /*<?php echo Form::text('details', null, ['class' => 'form-control']); ?>*/ ?>
    <textarea name="details" id="details" rows="10" cols="60"
              class="form-control"  placeholder="Subject Details Goes Here" name="details">
        <?php echo e(isset($subject) ? $subject->details : ''); ?>

    </textarea>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.subjects.index'); ?>" class="btn btn-default">Cancel</a>
</div>
