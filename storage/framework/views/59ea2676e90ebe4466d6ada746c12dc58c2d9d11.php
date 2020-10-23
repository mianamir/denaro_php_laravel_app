
<!-- Title Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Details Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('details', 'Details:'); ?>

    <?php echo Form::textarea('details', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.chapters.index', isset($course) ? $course->id : ""); ?>" class="btn btn-default">Cancel</a>
</div>


