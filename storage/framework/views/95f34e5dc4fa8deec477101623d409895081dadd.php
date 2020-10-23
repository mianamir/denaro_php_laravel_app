
<!-- Title Field -->
<?php /*<div class="form-group col-sm-6 col-md-12">*/ ?>
<?php /*    <?php echo Form::label('description', 'Details:'); ?>*/ ?>
<?php /*    <?php echo Form::text('description', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>
<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>


<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('button_text', 'Sub Title:'); ?>

    <?php echo Form::text('button_text', null, ['class' => 'form-control']); ?>

</div>
<?php /*<!-- Title Field -->*/ ?>
<?php /*<div class="form-group col-sm-6">*/ ?>
<?php /*    <?php echo Form::label('button_url', 'Button Url:'); ?>*/ ?>
<?php /*    <?php echo Form::text('button_url', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>
<!-- Detail Field -->
<?php /*<div class="form-group col-sm-12 col-md-6">*/ ?>
<?php /*    <?php echo Form::label('order_image', 'Image Order:'); ?>*/ ?>
<?php /*    <?php echo Form::text('order_image', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<!-- Image Field -->
<?php /*<div class="form-group col-sm-3 col-md-6">*/ ?>
<?php /*    <?php echo Form::label('background_image', 'Banner Background Image:'); ?>*/ ?>
<?php /*    <?php echo Form::file('background_image'); ?>*/ ?>
<?php /*</div>*/ ?>

<!-- Image Field -->
<div class="form-group col-sm-3 col-md-6">
    <?php echo Form::label('image', 'Banner Image:'); ?>

    <?php echo Form::file('image'); ?>

</div>

<?php /*<div class="form-group col-sm-6 col-md-6">*/ ?>
<?php /*    <?php echo Form::label('is_active', 'Is Active:'); ?>*/ ?>
<?php /*    <label class="checkbox-inline">*/ ?>
<?php /*        <?php echo Form::hidden('is_active', false); ?>*/ ?>
<?php /*        <?php echo Form::checkbox('is_active', 1, null); ?> yes*/ ?>
<?php /*    </label>*/ ?>
<?php /*</div>*/ ?>
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