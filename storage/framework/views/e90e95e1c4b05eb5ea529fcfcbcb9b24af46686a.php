
<!-- Title Field -->
<div class="form-group col-sm-6 col-md-12">
    <?php echo Form::label('description', 'Details:'); ?>

    <?php echo Form::text('description', null, ['class' => 'form-control']); ?>

</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>


<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('button_text', 'Button Text:'); ?>

    <?php echo Form::text('button_text', null, ['class' => 'form-control']); ?>

</div>
<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('button_url', 'Button Url:'); ?>

    <?php echo Form::text('button_url', null, ['class' => 'form-control']); ?>

</div>
<!-- Detail Field -->
<div class="form-group col-sm-12 col-md-6">
    <?php echo Form::label('order_image', 'Image Order:'); ?>

    <?php echo Form::text('order_image', null, ['class' => 'form-control']); ?>

</div>

<!-- Image Field -->
<div class="form-group col-sm-3 col-md-6">
    <?php echo Form::label('background_image', 'Banner Background Image:'); ?>

    <?php echo Form::file('background_image'); ?>

</div>

<!-- Image Field -->
<div class="form-group col-sm-3 col-md-6">
    <?php echo Form::label('image', 'Banner Image:'); ?>

    <?php echo Form::file('image'); ?>

</div>

<div class="form-group col-sm-6 col-md-6">
    <?php echo Form::label('is_active', 'Is Active:'); ?>

    <label class="checkbox-inline">
        <?php echo Form::hidden('is_active', false); ?>

        <?php echo Form::checkbox('is_active', 1, null); ?> yes
    </label>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.banners.index'); ?>" class="btn btn-default">Cancel</a>
</div>

<?php /*<script>*/ ?>
    <?php /*CKEDITOR.replace( 'description', {*/ ?>
        <?php /*filebrowserImageBrowseUrl: '<?php echo e(url('/laravel-filemanager?type=Images')); ?>'*/ ?>
    <?php /*});*/ ?>
    <?php /*CKEDITOR.replace( 'description' );*/ ?>
<?php /*</script>*/ ?>