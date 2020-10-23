
<!-- Image Field -->
<div class="form-group col-sm-3 col-md-4">
    <?php echo Form::label('image', 'Image:'); ?>

    <?php echo Form::file('image'); ?>

</div>
<!-- Image Field -->
<div class="form-group col-sm-3 col-md-4">
    <?php echo Form::label('promo_video_featured_image', 'Video Image:'); ?>

    <?php echo Form::file('promo_video_featured_image'); ?>

</div>
<!-- Image Field -->
<div class="form-group col-sm-3 col-md-4">
    <?php echo Form::label('promo_video', 'Promo Video:'); ?>

    <?php echo Form::file('promo_video'); ?>

</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('details', 'Details:'); ?>

    <?php echo Form::text('details', null, ['class' => 'form-control']); ?>

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
        <option value="<?php echo e($subject_type->id); ?>">
            <?php echo e($subject_type->title); ?>

        </option>
        <?php endforeach; ?>
    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <select name="status" class = "form-control">
        <option value="-1">Select Status</option>
        <option value="active">Active</option>
        <option value="inactive">In Active</option>

    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('price', 'Price:'); ?>

    <?php echo Form::text('price', null, ['class' => 'form-control']); ?>

</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('is_featured', 'Is Featured:'); ?>

    <?php echo Form::checkbox('is_featured', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.subjects.index'); ?>" class="btn btn-default">Cancel</a>
</div>
