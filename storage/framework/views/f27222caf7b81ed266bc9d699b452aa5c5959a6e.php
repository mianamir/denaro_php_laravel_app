<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<?php /*<!-- Url Field -->*/ ?>
<?php /*<div class="form-group col-sm-6">*/ ?>
<?php /*    <?php echo Form::label('url', 'Url:'); ?>*/ ?>
<?php /*    <?php echo Form::text('url', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<?php /*<!-- Title Field -->*/ ?>
<?php /*<div class="form-group col-sm-6">*/ ?>
    <?php /*<?php echo Form::label('title', 'Title:'); ?>*/ ?>
    <?php /*<?php echo Form::text('title', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<?php /*<!-- Meta Keywords Field -->*/ ?>
<?php /*<div class="form-group col-sm-12 col-lg-12">*/ ?>
    <?php /*<?php echo Form::label('details', 'Details:'); ?>*/ ?>
    <?php /*<?php echo Form::textarea('details', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="form-group col-sm-12 col-lg-12">*/ ?>
    <?php /*<?php echo Form::label('meta_keywords', 'Meta Keywords:'); ?>*/ ?>
    <?php /*<?php echo Form::textarea('meta_keywords', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<?php /*<!-- Meta Description Field -->*/ ?>
<?php /*<div class="form-group col-sm-12 col-lg-12">*/ ?>
    <?php /*<?php echo Form::label('meta_description', 'Meta Description:'); ?>*/ ?>
    <?php /*<?php echo Form::textarea('meta_description', null, ['class' => 'form-control']); ?>*/ ?>
<?php /*</div>*/ ?>

<div class="form-group col-sm-12 col-lg-12">

    <?php echo Form::label('image', 'image:'); ?>

    <?php echo Form::file('image'); ?>

</div>

<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('parent_id', 'Project Parent Category:'); ?>



    <?php
    $categories = \App\Models\Admin\Category::where('parent_id', 0)->get();
    ?>
    <?php if(isset($category)): ?>
        <?php
            $categories = \App\Models\Admin\Category::where('id','!=',$category->id)->get();
        ?>
    <?php endif; ?>

    <select class="form-control" name="parent_id">

        <option value="">Project Category Parent</option>
        <?php foreach( $categories as $cat): ?>
            <option value="<?php echo e($cat->id); ?>" <?php echo e(isset($category) && $category->parent_id == $cat->id ?"selected":''); ?>><?php echo e($cat->name); ?></option>
        <?php endforeach; ?>

    </select>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.categories.index'); ?>" class="btn btn-default">Cancel</a>
</div>

<script>
    CKEDITOR.replace( 'details', {
        filebrowserImageBrowseUrl: '<?php echo e(url('/laravel-filemanager?type=Images')); ?>'
    });
</script>