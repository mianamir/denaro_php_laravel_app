<!-- Image Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('image', 'Image:'); ?>

    <?php echo Form::file('image'); ?>

</div>
<div class="clearfix"></div>

<!-- Detail Field -->
<?php /*<div class="form-group col-sm-6">*/ ?>
<?php /*    <?php echo Form::label('detail', 'Name:'); ?>*/ ?>
<?php /*    <?php echo Form::text('detail', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.clients.index'); ?>" class="btn btn-default">Cancel</a>
</div>
