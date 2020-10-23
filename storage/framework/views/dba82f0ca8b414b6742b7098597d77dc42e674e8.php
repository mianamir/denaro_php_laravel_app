<!-- Price Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('price', 'Price:'); ?>

    <?php echo Form::text('price', null, ['class' => 'form-control']); ?>

</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('duration', 'Duration:'); ?>

    <?php echo Form::text('duration', null, ['class' => 'form-control']); ?>

</div>

<!-- Status Field -->
<div class="form-group col-sm-6">

    <?php echo Form::label('status', 'Status:'); ?>

    <select name="status" class = "form-control">
        <option value="active">Active</option>
        <option value="inactive">In Active</option>

    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.paymentPlans.index'); ?>" class="btn btn-default">Cancel</a>
</div>
