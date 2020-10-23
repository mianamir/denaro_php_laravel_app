<!-- Student Class Id Field -->
<div class="form-group col-sm-6">
    <?php
    $student_classes = \App\Models\Admin\StudentClass::all();

    ?>
    <?php echo Form::label('student_class_id', 'Class:'); ?>

    <select name="student_class_id" class = "form-control">
        <option value="-1">Select Class</option>
        <?php foreach($student_classes as $student_class): ?>
            <option value="<?php echo e($student_class->id); ?>">
                <?php echo e($student_class->title); ?>

            </option>
        <?php endforeach; ?>
    </select>
</div>


<!-- Subject Id Field -->
<div class="form-group col-sm-6">
    <?php
    $subjects = \App\Models\Admin\Subject::all();

    ?>
    <?php echo Form::label('subject_id', 'Subject:'); ?>

    <select name="subject_id" class = "form-control">
        <option value="-1">Select Subject</option>
        <?php foreach($subjects as $subject): ?>
            <option value="<?php echo e($subject->id); ?>">
                <?php echo e($subject->title); ?>

            </option>
        <?php endforeach; ?>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.classSubjects.index'); ?>" class="btn btn-default">Cancel</a>
</div>
