<?php
$subjects = \App\Models\Admin\Subject::all();
?>
<div class="form-group col-sm-6 col-md-6">
    <?php echo Form::label('subject_id', 'Class:'); ?>

    <select class="form-control" name="subject_id" col-sm-6>

        <option value="">Select Subject</option>
        <?php foreach( $subjects as $subject): ?>

            <option value="<?php echo e($subject->id); ?>">
                <?php echo e($subject->title); ?>

            </option>
        <?php endforeach; ?>

    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Details Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('details', 'Details:'); ?>

    <?php echo Form::text('details', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.chapters.index'); ?>" class="btn btn-default">Cancel</a>
</div>
