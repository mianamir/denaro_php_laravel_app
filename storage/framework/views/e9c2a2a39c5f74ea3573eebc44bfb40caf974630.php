<!-- Name Field -->


<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('details', 'Details:'); ?>

    <?php echo Form::textarea('details', null, ['class' => 'form-control']); ?>

</div>


<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>
<div class="form-group col-sm-6">
    <?php echo Form::label('heading', 'Heading:'); ?>

    <?php echo Form::text('heading', null, ['class' => 'form-control']); ?>

</div>


<div class="form-group col-sm-6">
    <?php echo Form::label('keyword', 'Meta Keywords:'); ?>

    <?php echo Form::text('meta_keywords', null, ['class' => 'form-control']); ?>

</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-6">
    <?php echo Form::label('meta_description', 'Meta Description:'); ?>

    <?php echo Form::text('meta_description', null, ['class' => 'form-control']); ?>

</div>



<!-- Image Field -->
<div class="form-group col-lg-6">
    <?php echo Form::label('image', 'Image:'); ?>

    <?php echo Form::file('image'); ?>

</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.pages.index'); ?>" class="btn btn-default">Cancel</a>
</div>




<script>
    CKEDITOR.replace( 'details', {
        filebrowserImageBrowseUrl: '<?php echo e(url('/laravel-filemanager?type=Images')); ?>'
    });
</script>