<!-- Name Field -->
<!--<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>-->

<!-- Url Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('url', 'Url:'); ?>

    <?php echo Form::text('url', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.socialIcons.index'); ?>" class="btn btn-default">Cancel</a>
</div>
