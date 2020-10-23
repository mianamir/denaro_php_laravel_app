<!-- Image Field -->
<div class="form-group">
    <?php echo Form::label('image', 'Image:'); ?>

    <p><image src="<?php echo e(asset($page->image)); ?>" width="100" height="100"/></p>
</div>

<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Heading:'); ?>

    <p><?php echo $page->heading; ?></p>
</div>


<!-- Title Field -->
<div class="form-group">
    <?php echo Form::label('title', 'Title:'); ?>

    <p><?php echo $page->title; ?></p>
</div>


<!-- Meta Description Field -->
<div class="form-group">
    <?php echo Form::label('meta_keywords', 'Meta Keywords:'); ?>

    <p><?php echo $page->meta_keywords; ?></p>
</div>

<!-- Meta Description Field -->
<div class="form-group">
    <?php echo Form::label('meta_description', 'Meta Description:'); ?>

    <p><?php echo $page->meta_description; ?></p>
</div>


<!-- Details Field -->
<div class="form-group">
    <?php echo Form::label('details', 'Details:'); ?>

    <p><?php echo $page->details; ?></p>
</div>
