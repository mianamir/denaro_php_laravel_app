<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<?php /*<!-- Phone4 Field -->*/ ?>
<?php /*<div class="form-group col-sm-6">*/ ?>
    <?php /*<?php echo Form::label('phone4', 'Sub-Title:'); ?>*/ ?>
    <?php /*<?php echo Form::text('phone4', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>
<!-- Address Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('address', 'Address:'); ?>

    <?php echo Form::text('address', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Phone1 Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('phone1', 'Phone:'); ?>

    <?php echo Form::text('phone1', null, ['class' => 'form-control']); ?>

</div>

<?php /*<!-- Phone2 Field -->*/ ?>
<?php /*<div class="form-group col-sm-6">*/ ?>
    <?php /*<?php echo Form::label('phone2', 'Mob1:'); ?>*/ ?>
    <?php /*<?php echo Form::text('phone2', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<?php /*<!-- Phone3 Field -->*/ ?>
<?php /*<div class="form-group col-sm-6">*/ ?>
    <?php /*<?php echo Form::label('phone3', 'Mob2:'); ?>*/ ?>
    <?php /*<?php echo Form::text('phone3', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>



<?php /*<!-- Fax Field -->*/ ?>
<div class="form-group col-sm-6">
    <?php echo Form::label('fax', 'Map:'); ?>

    <?php echo Form::text('fax', null, ['class' => 'form-control']); ?>

</div>
<!-- Fax Field -->
<?php /*<div class="form-group col-sm-6">*/ ?>
    <?php /*<?php echo Form::label('postal', 'Postal:'); ?>*/ ?>
    <?php /*<?php echo Form::text('postal', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<!-- Website Field -->
<?php /*<div class="form-group col-sm-6">*/ ?>
    <?php /*<?php echo Form::label('image', 'Image:'); ?>*/ ?>
    <?php /*<?php echo Form::file('image', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.contacts.index'); ?>" class="btn btn-default">Cancel</a>
</div>
