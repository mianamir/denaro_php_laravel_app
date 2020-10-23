<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('type', 'Type:'); ?>

    <?php echo Form::text('type', null, ['class' => 'form-control']); ?>

</div>
<!-- Type Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('account', 'Account:'); ?>

    <?php echo Form::text('account', null, ['class' => 'form-control']); ?>

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

    <a href="<?php echo route('admin.paymentAccounts.index'); ?>" class="btn btn-default">Cancel</a>
</div>
