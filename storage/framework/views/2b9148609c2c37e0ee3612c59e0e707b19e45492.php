<!-- Heading Field -->
<!--<div class="form-group col-sm-6">
    <?php echo Form::label('heading', 'Heading:'); ?>

    <?php echo Form::text('heading', null, ['class' => 'form-control']); ?>

</div>-->
<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>
<!-- Detail Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('detail', 'Detail:'); ?>

    <?php echo Form::textarea('detail', null, ['class' => 'form-control']); ?>

</div>



<!-- Meta Description Field -->
<!--<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('meta_description', 'Meta Description:'); ?>

    <?php echo Form::textarea('meta_description', null, ['class' => 'form-control']); ?>

</div>-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('admin.news.index'); ?>" class="btn btn-default">Cancel</a>
</div>

<script>
    CKEDITOR.replace('detail', {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images'
    });
</script>