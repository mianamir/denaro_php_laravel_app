
<!-- Title Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('topic_video', 'Topic Video:'); ?>

    <?php echo Form::text('topic_video', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <select name="status" class = "form-control" required>
        <option value="active" <?php echo e(isset($topic) && $topic->status == "active" ?"selected":''); ?>>Active</option>
        <option value="inactive" <?php echo e(isset($topic) && $topic->status == "inactive" ?"selected":''); ?>>In Active</option>

    </select>
</div>

<!-- Details Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('details', 'Details:'); ?>

    <?php echo Form::textarea('details', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.topics.index', isset($chapter) ? $chapter->id : ""); ?>" class="btn btn-default">Cancel</a>
</div>
